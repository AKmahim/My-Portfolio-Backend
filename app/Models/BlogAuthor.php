<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class BlogAuthor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'profile_pic',
        'bio',
        'fb_link',
        'linkedin_link',
        'twitter_link',
        'instagram_link',
        'youtube_link',
    ];


    public function blogs(){
        return $this->hasMany(Blog::class, 'author_id');
    }
}
