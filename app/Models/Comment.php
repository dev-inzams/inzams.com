<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'comment',
        'post_id',
    ];

    public function post() {
        return $this->belongsTo( Blog::class );
    }
}
