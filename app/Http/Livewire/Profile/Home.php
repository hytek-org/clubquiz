<?php

namespace App\Http\Livewire\Profile;

use App\Models\Quiz;
use App\Models\User;
use App\Notifications\NewFollowerNotification;
use Livewire\Component;

class Home extends Component
{
    public $user;
    function toggleFollow()
    {
        abort_unless(auth()->check(), 401);
        auth()->user()->toggleFollow($this->user);

        #send notication if is following
        if(auth()->user()->isFollowing($this->user)){

            $this->user->notify(new NewFollowerNotification(auth()->user()));

        }
    }
    function mount($user)
    {
     

         $this->user = User::whereUsername($user->username)->withCount(['followers', 'followings', 'quizs'])->firstOrFail();
    }
 
    public function render()
    {
        
        $this->user = User::whereUsername($this->user->username)->withCount(['followers', 'followings', 'quizs'])->firstOrFail();
       
        $posts=   $this->user->quizs()->get();
        return view('livewire.profile.home',['clubquizs'=>$posts]);
    }
}
