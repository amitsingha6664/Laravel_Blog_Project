<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
        'slug',
        'description',
        'created_at',
        'updated_at '
    ];
}
