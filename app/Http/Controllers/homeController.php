<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $projects = Project::with('ProjectCategory', 'user')->get();
        return view('public.index', [
            'projects' => $projects,
        ]);
    }
}
