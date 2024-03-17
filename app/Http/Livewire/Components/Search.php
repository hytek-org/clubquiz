<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\Quiz;
class Search extends Component
{
 
    public $quizs;
    public $query;
    function updatedQuery($query)
    {

        if ($query == '') {

            return $this->quizs = null;
        }
        $this->quizs = Quiz::where('title', 'like', '%' . $query . '%')
            ->orWhere('slug', 'like', '%' . $query . '%')
            ->get();
           
    }
    public function render()
    {
        return view('livewire.components.search');
    }
}

