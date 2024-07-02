<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller {

    public function index() {
        $projects = Project::with('ProjectCategory','user')->get();
        $projectsCategories = ProjectCategory::get();
        return view( 'profile.project' , [
            'projects' => $projects,
            'projectsCategories' => $projectsCategories
        ]);
    }

    public function store(Request $request) {
        try {

            $title = $request->input('title');
            $meta_title = $request->input('meta_title');
            $slug  = $request->input('slug');
            $image  = $request->file('image');
            $full_image  = $request->file('full_image');
            $clients  = $request->input('clients');
            $budget  = $request->input('budget');
            $duration  = $request->input('duration');
            $delivery_date  = $request->input('delivery_date');
            $description  = $request->input('description');
            $meta_description  = $request->input('meta_description');
            $keywords  = $request->input('keywords');
            $project_category_id  = $request->input('project_category_id');
            $user_id   = auth()->user()->id;

            $project = new Project();
            $project->title = $title;
            $project->meta_title = $meta_title;
            $project->slug = str_replace(' ', '-', Str::lower($slug));
            $project->description = $description;
            $project->meta_description = $meta_description;
            $project->keywords = $keywords;
            $project->project_category_id = $project_category_id ;
            $project->user_id = $user_id;
            $project->clients = $clients;
            $project->budget = $budget;
            $project->duration = $duration;
            $project->delivery_date = $delivery_date;

            $filename = time() . '.' . $image->getClientOriginalName();
            $path = public_path('/uploads/projects');
            $image->move($path, $filename);
            $project->image = $filename;

            $filename = time() . '.' . $full_image->getClientOriginalName();
            $path = public_path('/uploads/projects');
            $full_image->move($path, $filename);
            $project->full_image = $filename;

            $project->save();
            return redirect()->back()->with('success', 'Project created successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function delete($id) {
        $project = Project::find($id);

        // delete image from folder
        if ($project->image) {
            $old_image = public_path('uploads/projects/' . $project->image);
            if (file_exists($old_image)) {
                unlink($old_image);
            }
        }
        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }

    public function show($slug) {
        $project = Project::where('slug', $slug)->first();
        return view('public.project-details', [
            'project' => $project
        ]);
    }

    public function allIndex() {
        $projects = Project::with('ProjectCategory','user')->get();
        $projectsCategories = ProjectCategory::get();
        return view( 'public.projects' , [
            'projects' => $projects,
            'projectsCategories' => $projectsCategories
        ]);
    }
}
