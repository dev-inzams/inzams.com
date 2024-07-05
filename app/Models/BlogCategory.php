<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'meta_title',
        'description',
        'meta_description',
        'slug',
        'image',
        'user_id'
    ];
}
