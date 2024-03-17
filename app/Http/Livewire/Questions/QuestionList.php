<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\Response;

class QuestionList extends Component
{
    public function render(): View
    {
        $questions = Question::where('user_id', auth()->user()->id)->latest()->paginate();
       
        return view('livewire.questions.question-list', compact('questions'));
    }

    public function delete(Question $question): void
    {
        abort_if(! auth()->user()->id, Response::HTTP_FORBIDDEN, '403 Forbidden');

        $question->delete();
    }
}
