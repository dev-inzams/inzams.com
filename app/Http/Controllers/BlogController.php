<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {
        $blogs = Blog::with('user', 'BlogCategory')->get();
        $blogsCategories = BlogCategory::get();
        return view( 'profile.blog' , [
            'blogs' => $blogs,
            'blogsCategories' => $blogsCategories
        ]);
    }

    public function store( Request $request ) {
        try {
            $title = $request->input('title');
            $meta_title = $request->input('meta_title');
            $slug  = $request->input('slug');
            $image  = $request->file('image');
            $description  = $request->input('description');
            $meta_description  = $request->input('meta_description');
            $keywords  = $request->input('keywords');
            $resources  = $request->input('resources');
            $heart  = $request->input('heart');
            $blog_category_id  = $request->input('blog_category_id');
            $user_id   = auth()->user()->id;

            $blog = new Blog();
            $blog->title = $title;
            $blog->meta_title = $meta_title;
            $blog->slug = str_replace(' ', '-', Str::lower($slug));
            $blog->description = $description;
            $blog->meta_description = $meta_description;
            $blog->keywords = $keywords;
            $blog->resources = $resources;
            $blog->heart = $heart;
            $blog->blog_category_id = $blog_category_id ;
            $blog->user_id = $user_id;

            $filename = time() . '.' . $image->getClientOriginalName();
            $path = public_path('/uploads/blogs');
            $image->move($path, $filename);
            $blog->image = $filename;

            $blog->save();
            return redirect()->back()->with('success', 'Blog created successfully');
        } catch ( \Exception $e ) {
            return  $e->getMessage();
        }
    }


    public function delete( $id ) {
        $blog = Blog::find( $id );
        // delete old image
        if ( $blog->image ) {
            $path = public_path('/uploads/blogs/' . $blog->image);
            if ( file_exists( $path ) ) {
                unlink( $path );
            }
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }

    public function show( $slug ) {
        $blog = Blog::where( 'slug', $slug )->with( 'user', 'BlogCategory' )->first();
        $blogCategories = BlogCategory::get();
        $recentBlogs = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        return view( 'public.blog-details', [
            'blog' => $blog,
            'blogCategories' => $blogCategories,
            'recentBlogs' => $recentBlogs
        ]);
    }

    public function allIndex() {
        $blogs = Blog::with( 'user', 'BlogCategory' )->get();
        $blogsCategories = BlogCategory::get();
        $recentPost = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        return view( 'public.blogs', [
            'blogs' => $blogs,
            'blogsCategories' => $blogsCategories,
            'recentPost' => $recentPost
        ]);
    }

}
