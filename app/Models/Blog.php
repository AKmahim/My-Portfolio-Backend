<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_id',
        'short_description',
        'slug',
        'keyword',
        'content',
        'comment_count',
        'blog_category',
        'blog_thumbnail',
        'blog_short_thumbnail',
    ];

    // Automatically generate slug from title
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    //managing author relation
    public function author(){
        return $this->belongsTo(BlogAuthor::class, 'author_id');
    }

    //managing comments
    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id');
    }


}
