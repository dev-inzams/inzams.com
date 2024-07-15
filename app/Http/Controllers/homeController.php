<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Company;
use App\Models\Project;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $user = User::first();
        $projects = Project::with('ProjectCategory', 'user')->get();
        $blogs = Blog::with('user', 'BlogCategory')->paginate(5);
        $companies = Company::all();
        return view('public.index', [
            'projects' => $projects,
            'blogs' => $blogs,
            'user' => $user,
            'companies' => $companies
        ]);
    }

    public function about(){
        $companies = Company::all();
        return view('public.about', ['companies' => $companies]);
    }

    public function services(){
        $companies = Company::all();
        return view('public.services', ['companies' => $companies]);
    }


}
