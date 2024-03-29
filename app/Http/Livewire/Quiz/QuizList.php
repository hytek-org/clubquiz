<?php

namespace App\Http\Livewire\Quiz;

use App\Models\Quiz;
use Livewire\Component;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;

class QuizList extends Component
{
    public function render(): View
    {
        $quizzes = Quiz::where('user_id', auth()->user()->id)
            ->withCount('questions')
            ->latest()
            ->paginate();

        return view('livewire.quiz.quiz-list', compact('quizzes'));
    }

    public function delete(Quiz $quiz)
    {
        abort_if(!auth()->user()->id, Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quiz->delete();
    }
}
