<?php

namespace App\Http\Livewire\Explore;

use App\Models\Category;
use App\Models\Quiz;
use Livewire\Component;

class Home extends Component
{
    public $clubquiz;
    public $sortBy = 'newest'; // Default sorting option
    public $selectedCategories = [];
    public function mount()
    {
        // Find the post by slug
        $this->loadQuizzes();
    }
    public function sortBy($criteria)
    {
        // Update the sorting criteria
        $this->sortBy = $criteria;
        
        // Reload quizzes based on the new sorting criteria
        $this->loadQuizzes();
    }
    public function render()
    { 
        $categories = Category::all();
        $popular = Quiz::select('quizzes.*')
        ->whereIn('quizzes.category_id', function ($query) {
            $query->select('category_id')
                ->from('quizzes')
                ->distinct();
        })
        ->latest()
        ->take(6)
        ->get();
    
        return view('livewire.explore.home',compact('categories','popular'));
    }
    private function loadQuizzes()
    {
        // Query to fetch quizzes based on the sorting criteria
        $query = Quiz::query();

        if (!empty($this->selectedCategories)) {
            $query->whereIn('category_id', $this->selectedCategories);
        }
        switch ($this->sortBy) {
            case 'oldest':
                $query->oldest()->paginate(6);
                break;
            case 'best_rating':
                $query->whereHas('ratings', function ($q) {
                    $q->where('rating', '>=', 4);
                })->withCount('ratings')->orderByDesc('ratings_count');
                break;
            case 'newest':
            default:
                // Sort by the latest quizzes by default
                $query->latest()->paginate(6);
                break;
        }

        // Fetch the quizzes based on the applied sorting criteria
        $this->clubquiz = $query->get();
    }
}
