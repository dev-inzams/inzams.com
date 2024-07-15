<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
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
        $comments = Comment::where('blog_id', $blog->id)->get();
        $blogCategories = BlogCategory::get();
        $recentBlogs = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        // when hit this page then update heart count
        $blog->increment( 'heart' );

        return view( 'public.blog-details', [
            'blog' => $blog,
            'blogCategories' => $blogCategories,
            'recentBlogs' => $recentBlogs,
            'comments' => $comments
        ]);
    }

    public function blogs(){
        $blogs = Blog::with( 'user', 'BlogCategory' )->paginate(10);
        // dd($blogs);
        $blogsCategories = BlogCategory::get();
        $recentPost = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        return view( 'public.blogs', [
            'blogs' => $blogs,
            'blogsCategories' => $blogsCategories,
            'recentPosts' => $recentPost
        ]);

    }

    public function blogArchive( $id ) {
        $blogs = Blog::with( 'user', 'BlogCategory', 'comments' )->where( 'blog_category_id', $id )->paginate(10);
        // count the comments
        

        $blogCategory = BlogCategory::find( $id );
        $blogsCategories = BlogCategory::get();
        $recentPost = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        return view( 'public.blog-archive', [
            'blogs' => $blogs,
            'blogsCategories' => $blogsCategories,
            'recentPosts' => $recentPost,
            'blogCategory' => $blogCategory,
        ]);
    }

    // blog search
    public function blogSearch( Request $request ) {
        $search = $request->input('key');
        $blogs = Blog::with( 'user', 'BlogCategory' )->where( 'title', 'like', '%' . $search . '%' )->paginate(10);
        $blogsCategories = BlogCategory::get();
        $recentPost = Blog::orderBy( 'id', 'desc' )->limit( 3 )->get();
        return view( 'public.blog-search', [
            'blogs' => $blogs,
            'blogsCategories' => $blogsCategories,
            'recentPosts' => $recentPost,
            'key' => $search
        ]);
    }

}
