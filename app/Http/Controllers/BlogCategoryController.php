<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
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
            $image->move(public_path('uploads/blogs'), $path);


            $category = new BlogCategory();
            $category->title = $title;
            $category->meta_title = $meta_title;
            $category->description = $description;
            $category->meta_description = $meta_description;
            $category->slug = str_replace(' ', '-', Str::lower($slug));
            $category->user_id = $user_id;
            $category->image = $path;
            $category->save();

            return redirect()->back()->with('success', 'Category created successfully');
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
