<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'post_categories', 'post_id', 'cat_id')
                    ->withPivot('status')
                    ->withTimestamps();
    }
}
