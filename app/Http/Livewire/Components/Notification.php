<?php

namespace App\Http\Livewire\Components;

use App\Models\User;
use App\Notifications\NewFollowerNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public $notifications;
    public function mount()
    {
        $this->notifications();
    }
    public function notifications()
    {
        $this->notifications = Auth::user()->notifications;
    }
    public function render()
    {
        return view('livewire.components.notification', [
            'notifications' => Auth::user()->notifications
        ]);
    }
    public function toggleFollow($userId)
    {
        // Ensure user is authenticated
        abort_unless(Auth::check(), 401);

        // Find the user by ID
        $user = User::findOrFail($userId);

        // Toggle follow status
        Auth::user()->toggleFollow($user);

        // If user is now followed by the authenticated user, notify them
        if (Auth::user()->isFollowing($user)) {
            $user->notify(new NewFollowerNotification(Auth::user()));
        }
    }
}
