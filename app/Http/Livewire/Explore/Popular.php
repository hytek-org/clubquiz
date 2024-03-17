<?php

namespace App\Http\Livewire\Explore;

use Livewire\Component;
use App\Models\Quiz;
use Livewire\WithPagination;
class Popular extends Component
{
    use WithPagination;

    // Define quizzes as a protected property
    protected $quizzes;
    public function render()
    {   $this->quizzes = Quiz::withCount('questions')
        ->has('questions')
        ->oldest()
        ->paginate(30);
        return view('livewire.explore.popular', [
            'quizzes' => $this->quizzes,
        ]);
    }
}
