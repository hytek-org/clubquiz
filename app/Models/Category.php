<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'cat_desc',
        'img_path',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function quiz(){
        return $this->hasMany(Quiz::class);
    }
}
