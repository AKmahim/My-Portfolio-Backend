<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user',
        'user_email',
        'comment_text',
        'comment_react_count',
    ];

    // Relationship with Blog model
    public function post()
    {
        return $this->belongsTo(Blog::class, 'post_id');
    }
}
