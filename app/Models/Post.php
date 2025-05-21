<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_title',
        'slug',
        'post_catagory',
        'post_content',
        'author_id',
        'status',
        'img',
        'created_at',
        'updated_at '
    ];
}
