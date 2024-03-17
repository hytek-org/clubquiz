<?php

namespace App\Http\Livewire\Explore;

use Livewire\Component;
use App\Models\Quiz;
use Livewire\WithPagination;

class Recent extends Component
{
    use WithPagination;

    // Define quizzes as a protected property
    protected $quizzes;

 

    public function render()
    {
        $this->quizzes = Quiz::withCount('questions')
        ->has('questions')
        ->latest()
        ->paginate(30);
        return view('livewire.explore.recent', [
            'quizzes' => $this->quizzes,
        ]);
    }
}
