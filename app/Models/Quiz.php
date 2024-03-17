<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Question;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Quiz extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Favoriteable;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category_id',
        'published',
        'public',
        'user_id',
    ];

    protected $casts = [
        'published' => 'boolean',
        'public' => 'boolean',
    ];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'question_quiz', 'quiz_id', 'question_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }

}
