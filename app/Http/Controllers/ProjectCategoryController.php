<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{

    public function store(Request $request){
        try{
            $title = $request->input('title');
            $meta_title = $request->input('meta_title');
            $description = $request->input('description');
            $meta_des = $request->input('meta_description');
            $meta_description = Str::limit($meta_des, 250);
            $slug  = $request->input('slug');
            $image = $request->file('image');
            $user_id = auth()->user()->id;


            $path = time().'.'.$image->getClientOriginalName();
            $image->move(public_path('uploads/projects'), $path);

            $category = new ProjectCategory();
            $category->title = $title;
            $category->meta_title = $meta_title;
            $category->description = $description;
            $category->meta_description = $meta_description;
            $category->slug = $slug;
            $category->image = $path;
            $category->user_id = $user_id;
            $category->save();
            return redirect()->back()->with('success', 'Project Category Added Successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
