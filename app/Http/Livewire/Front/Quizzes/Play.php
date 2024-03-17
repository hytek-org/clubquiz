<?php

namespace App\Http\Livewire\Front\Quizzes;

use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Quiz;
use App\Models\QuizTag;
use App\Models\Test;
use App\Models\TestAnswer;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Play extends Component
{
    public Quiz $quiz;
   

    public Collection $questions;

    public Question $currentQuestion;

 
    function toggleFavorite()  {

        abort_unless(auth()->check(),401);
        auth()->user()->toggleFavorite($this->quiz);        
    }
   
    public function render()
    {
        return view('livewire.front.quizzes.play');
    }

    public function mount(): void
    {
        $this->questions = Question::query()
            ->inRandomOrder()
            ->whereRelation('quizzes','quiz_id', $this->quiz->id)
            ->get();
    }

    public function getQuestionsCountProperty(): int
    {
        return $this->questions->count();
    }

 
}


