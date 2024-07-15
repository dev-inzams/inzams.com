<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Subscriber;

class dashboardController extends Controller {
    public function index() {
        $totalsubscriber = Subscriber::count();
        $totalblogs = Blog::count();
        $totalComment = Comment::count();
        $comment =  Comment::paginate(4);
        return view('dashboard',[
            'totalsubscriber' => $totalsubscriber,
            'totalblogs' => $totalblogs,
            'totalComment' => $totalComment,
            'comments' => $comment
        ]);
    }
}
