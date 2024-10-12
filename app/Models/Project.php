<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;
    protected $fillable = [
        'project_title',
        'project_picture',
        'short_description',
        'demo_link',
        'video_link',
        'code_link',
        'project_category',
        'project_serial',
    ];
}
