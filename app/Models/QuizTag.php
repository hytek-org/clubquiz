<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizTag extends Model
{
    use HasFactory;
    protected $table = 'quiz_tag';
    protected $fillable = ['quiz_id', 'tag_id'];
    public $timestamps = false;
 
}
