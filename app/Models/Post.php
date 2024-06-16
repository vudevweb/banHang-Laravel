<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'thumbnail',
        'post_category_id',
        'publish',
        'user_id',
    ];



    protected $table = 'posts';

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
