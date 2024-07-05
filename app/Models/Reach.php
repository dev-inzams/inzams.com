<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reach extends Model {
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'reach',
        'address',
    ];

    public function post() {
        return $this->belongsTo( Blog::class );
    }

}
