<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommentController extends Controller {

    public function store(Request $request) {
        try {
            $request->validate([
                'email' => 'required|email',
                'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, \Closure $fail) {
                    $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => config('services.recaptcha.secret_key'),
                        'response' => $value,
                        'remoteip' => \request()->ip(),
                    ]);
                    if(!$g_response->json('success')) {
                        $fail('foo is not allowed');
                    }
                }],
            ]);

            $name = $request->input('name');
            $email = $request->input('email');
            $comments = $request->input('comment');
            $blog_id = $request->input('blog_id');

            $comment = new Comment();
            $comment->name = $name;
            $comment->email = $email;
            $comment->comment = $comments;
            $comment->blog_id = $blog_id;
            $comment->save();

            // update blog comment count
            $blog = Blog::find($blog_id);
            $blog->increment('comments');

            return redirect()->back()->with('success', 'Comment added successfully');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


}
