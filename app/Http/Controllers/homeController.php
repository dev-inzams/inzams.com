<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $projects = Project::with('ProjectCategory', 'user')->get();
        $blogs = Blog::with('user', 'BlogCategory')->get();
        return view('public.index', [
            'projects' => $projects,
            'blogs' => $blogs
        ]);
    }
}
