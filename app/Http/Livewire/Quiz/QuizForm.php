<?php

namespace App\Http\Livewire\Quiz;

use App\Models\Category;
use App\Models\Quiz;
use Livewire\Component;
use App\Models\Question;
use App\Models\QuizTag;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;

class QuizForm extends Component
{
    public Quiz $quiz;
    public Category $categories;
 
    public bool $editing = false;

    public array $questions = [];
    public  $tags = ''; // Change the property type to array

    public array $listsForFields = [];
    public function mount(Quiz $quiz): void
    {
        $this->quiz = $quiz;


        $this->initListsForFields();

        if ($this->quiz->exists) {
            $this->editing = true;

            $this->questions = $this->quiz->questions->pluck('id')->toArray();
        } else {
            $this->quiz->published = false;
            $this->quiz->public = false;
        }
    }

    public function updatedQuizTitle(): void
    {
        $this->quiz->slug = Str::slug($this->quiz->title);
    }

 
 
public function save(): Redirector
{
    $this->validate();
    $this->quiz->user_id = auth()->user()->id;
    $this->quiz->save();

    // Now that the quiz is saved, obtain its ID
    $quizId = $this->quiz->id;

    $tags = explode('#', $this->tags);
    $count = 0;
    foreach ($tags as $tagName) {
        $tag = Tag::firstOrCreate(['name' => trim($tagName)]);
       
        // Associate the tag with the quiz using the obtained $quizId
        QuizTag::create(['quiz_id' => $quizId, 'tag_id' => $tag->id]);
        
        if ($count == 9) {
            break;
        }
        $count++;
    }

    $this->quiz->questions()->sync($this->questions);

    return redirect()->route('quizzes');
}



    public function render(): View
    {
        return view('livewire.quiz.quiz-form');
    }

    protected function rules(): array
    {
        return [
            'quiz.title' => [
                'string',
                'required',
            ],
            'quiz.slug' => [
                'string',
                'nullable',
            ],
            'quiz.description' => [
                'string',
                'nullable',
            ],
            'quiz.published' => [
                'boolean',
            ],
            'quiz.public' => [
                'boolean',
            ],
            'quiz.category_id' => [
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['questions'] = Question::where('user_id', auth()->user()->id)
            ->pluck('question_text', 'id')
            ->toArray();

            $this->listsForFields['categories'] = Category::all()->pluck('name', 'id')->toArray();
    }
}
