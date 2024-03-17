<?php

namespace App\Http\Livewire\Feedback;

use App\Models\Rating as ModalsRating;
use Livewire\Component;

class Rating extends Component
{
    public $quizId;
    public $rating;
    public $comment;

    protected $rules = [
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'nullable|string',
        'quizId' => 'required',
    ];

    public function render()
    {
        return view('livewire.feedback.rating');
    }

    public function saveRating()
    {
        $this->validate();

        // Check if a record with the provided quizId and user_id already exists
        $rating = ModalsRating::where('quiz_id', $this->quizId)
            ->where('user_id', auth()->id())
            ->first();

        if ($rating) {
            // If the record exists, update it
            $rating->update([
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]);
        } else {
            // If the record doesn't exist, create a new one
            ModalsRating::create([
                'quiz_id' => $this->quizId,
                'user_id' => auth()->id(),
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]);
        }

        // Reset the input fields after submission
        $this->reset(['rating', 'comment']);

        return redirect()->back();
    }
}
