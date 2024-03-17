<?php

namespace App\Http\Livewire\Front\Quizzes;

use App\Models\Quiz;
use App\Models\Test;
use Livewire\Component;
use App\Models\Question;
use App\Models\TestAnswer;
use App\Models\QuestionOption;
use Illuminate\Database\Eloquent\Collection;

class Show extends Component
{
    public Quiz $quiz;
    
    public Collection $questions;

    public Question $currentQuestion;

    public int $currentQuestionIndex = 0;

    public array $questionsAnswers = [];

    public int $startTimeSeconds = 0;

    public function render()
    {
        return view('livewire.front.quizzes.show');
    }

    public function mount()
    {
        $this->startTimeSeconds = now()->timestamp;
        $this->questions = Question::query()
            ->inRandomOrder()
            ->whereRelation('quizzes','quiz_id', $this->quiz->id)
            ->with('questionOptions')
            ->get();

        $this->currentQuestion = $this->questions[$this->currentQuestionIndex];

        for($i = 0; $i < $this->questionsCount; $i++) {
            $this->questionsAnswers[$i] = null;
        }
    }

    public function getQuestionsCountProperty(): int
    {
        return $this->questions->count();
    }

    public function changeQuestion()
    {
        $this->currentQuestionIndex++;

        if ($this->currentQuestionIndex >= $this->questionsCount) {
            return $this->submit();
        }

        $this->currentQuestion = $this->questions[$this->currentQuestionIndex];
    }

    public function submit()
    {
        $result = 0;
    
        $test = Test::create([
            'user_id'    => auth()->id(),
            'quiz_id'    => $this->quiz->id,
            'result'     => 0,
            'ip_address' => request()->ip(),
            'time_spent' => now()->timestamp - $this->startTimeSeconds
        ]);
    
        foreach ($this->questionsAnswers as $key => $option) {
            $status = 0;
            $optionId = null; // Initialize $optionId variable
    
            // Check if the option is not empty
            if (!is_null($option)) {
                // Check if the selected option is correct
                if (is_array($option)) {
                    // If the option is an array (not selected), set it to null
                    $optionId = null;
                } else {
                    $optionId = $option;
                    if (QuestionOption::find($option)->correct) {
                        $status = 1;
                        $result++;
                    }
                }
            }
    
            TestAnswer::create([
                'user_id'     => auth()->id(),
                'test_id'     => $test->id,
                'question_id' => $this->questions[$key]->id,
                'option_id'   => $optionId, // Use $optionId instead of $option
                'correct'     => $status ? 1 : 0,
            ]);
        }
    
        // Update the test result
        $test->update([
            'result' => $result,
        ]);
    
        // Redirect to results page
        return redirect()->route('results.show', $test);
    }
}
