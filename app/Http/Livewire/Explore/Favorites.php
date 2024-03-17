<?php

namespace App\Http\Livewire\Explore;

use App\Models\Quiz;
use App\Models\User;
use Livewire\Component;

class Favorites extends Component
{ 
    public  $user;
    public function mount()
    {
        // Get the authenticated user's ID and find the user
        $userId = auth()->user()->id;
        $this->user = User::findOrFail($userId);
    }

    public function render()
    {
      
        $quiz =  $this->user->getFavoriteItems(Quiz::class)->get();
        return view('livewire.explore.favorites', ['clubquizs' => $quiz]);
    }
}
