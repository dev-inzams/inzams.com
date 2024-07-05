<?php

namespace App\Models;

use App\Models\Reach;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model {
    use HasFactory;
    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'image',
        'description',
        'meta_description',
        'keywords',
        'resources',
        'heart',
        'blog_category_id',
        'user_id',
    ];

    // relations
    public function BlogCategory() {
        return $this->belongsTo( BlogCategory::class );
    }

    public function user() {
        return $this->belongsTo( User::class );
    }

    // Post.php
    public function likes() {
        return $this->hasMany( Reach::class );
    }

}
