<?php

namespace App\Models;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_title',
        'slug',
        'image',
        'description',
        'meta_description',
        'keywords',
        'project_category_id',
        'user_id'
    ];

    // relations
    public function ProjectCategory() {
        return $this->belongsTo( ProjectCategory::class );
    }

    public function user(){
        return $this->belongsTo( User::class );
    }

}
