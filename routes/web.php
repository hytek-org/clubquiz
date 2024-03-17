<?php

use App\Models\Quiz;
use App\Models\Question;
use App\Http\Livewire\Quiz\QuizForm;
use App\Http\Livewire\Quiz\QuizList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Front\Leaderboard;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Questions\QuestionForm;
use App\Http\Livewire\Questions\QuestionList;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Category\Create as Category;
use App\Http\Livewire\Category\Edit as CategoryEdit;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\Components\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return DB::table('question_quiz')->get();


    $quiz = Quiz::find(1);
    return Question::query()
        ->inRandomOrder()
        ->whereHas('quizzes', function ($q) {
            $q->where('quiz_id', 1);
        })
        ->whereRelation('quizzes', 'quiz_id', $quiz->id)
        ->with('quizzes', 'questionOptions')
        ->get();
    // return view('welcome');
});



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/explore/clubquiz', [HomeController::class, 'explore'])->name('explore');
Route::get('/explore/clubquiz/popular', [HomeController::class, 'popular'])->name('popular.clubquiz');
Route::get('/explore/clubquiz/recent', [HomeController::class, 'recent'])->name('recent.clubquiz');
Route::get('/clubquiz/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/clubquiz/demos', [HomeController::class, 'demos'])->name('demos');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/how-to-get-start-with-clubquiz', [HomeController::class, 'start'])->name('start');
Route::get('/contact/send-your-query', [HomeController::class, 'showForm'])->name('contact.showForm');
Route::post('/contact-sending-data', [HomeController::class, 'sendEmail'])->name('contact.send');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [HomeController::class, 'terms'])->name('terms');
Route::get('/cookie-policy', [HomeController::class, 'cookie'])->name('cookie');
Route::get('/links-of-resources', [HomeController::class, 'links'])->name('links');


Route::get('clubquiz/play/{quiz}/{slug?}', [HomeController::class, 'play'])->name('quiz.play');

Route::get('results', [ResultController::class, 'index'])->name('results.index');
Route::get('results/{test}', [ResultController::class, 'show'])->name('results.show');
Route::get('leaderboard', Leaderboard::class)->name('leaderboard');

Route::resource('/categories', CategoryController::class);
Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');
Route::middleware(['auth'])->group(function () {
   
    Route::get('/account', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/account', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/account', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/notifications-latest-updates', Notification::class)->name('notifications');
    Route::get('/favorites', [HomeController::class, 'favorites'])->name('favorites');
    Route::get('questions', QuestionList::class)->name('questions');
    Route::get('questions/create', QuestionForm::class)->name('questions.create');
    Route::get('questions/{question}', QuestionForm::class)->name('questions.edit');
    Route::get('quizzes', QuizList::class)->name('quizzes');
    Route::get('quizzes/create', QuizForm::class)->name('quiz.create');
    Route::get('quizzes/{quiz}', QuizForm::class)->name('quiz.edit');
    Route::get('clubquiz/{quiz}/{slug?}', [HomeController::class, 'show'])->name('quiz.show');
    Route::get('analytics', TestController::class)->name('tests');
    



});

require __DIR__ . '/auth.php';
