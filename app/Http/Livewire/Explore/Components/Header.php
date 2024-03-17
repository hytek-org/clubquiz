<?php

namespace App\Http\Livewire\Explore\Components;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{

    public $categories;

    public function mount()
    {
        // Fetch categories from the database
        $this->categories = Category::take(5)->get();
    }


    public function render()
    {
        return view('livewire.explore.components.header');
    }
}
