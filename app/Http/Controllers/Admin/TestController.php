<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function __invoke()
    {
        $userId = Auth::id();

        $tests = Test::with(['user', 'quiz'])
            ->withCount('questions')
            ->whereHas('quiz', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->latest()
            ->paginate();

        return view('admin.tests', compact('tests'));
    }
}
