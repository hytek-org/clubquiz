<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class HomeController extends Controller
{
 
    public function index(): View
    {
        $query = Quiz::withCount('questions')
            ->has('questions')
            ->when(!auth()->user()?->is_admin, function ($query) {
                $query->where('published', true);
            })
            ->orderBy('id')
            ->get();

        $public = $query->where('public', true);
        $registered = $query->where('public', false);

        return view('home', compact('public', 'registered'));
    }
    public function explore()
    {
        return view('explore/explore');
    }
    public function popular()
    {
        return view('explore/popular-clubquiz');
    }  public function recent()
    {
        return view('explore/recent-clubquiz');
    }
    public function guides()
    {
        return view('guide');
    }  public function demos()
    {
        return view('demo');
    }
    public function show(Quiz $quiz, $slug = null)
    {
        return view('front.quizzes.show', compact('quiz'));
    }
    public function play(Quiz $quiz, $slug = null)
    {
        return view('front.quizzes.play', compact('quiz'));
    }
    public function about()
    {
        return view('about');
    }
    public function help()
    {
        return view('help');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function start()
    {
        return view('start');
    }
    public function showForm()
    {
        return view('contact');
    }
    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to('kuldeep@hytek.org.in')->send(new ContactMail($data));

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('fail', 'Failed to send your message. Please try again later.');
        }
    }

    public function privacy()
    {
        return view('policies/privacy');
    }
    public function terms()
    {
        return view('policies/terms');
    }
    public function cookie()
    {
        return view('policies/cookie');
    }
    public function links()
    {
        return view('links');
    }
    public function favorites()
    {
        return view('favorites');
    }

}
