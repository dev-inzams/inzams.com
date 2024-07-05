<?php

namespace App\Http\Controllers;

use App\Models\Reach;
use Illuminate\Http\Request;

class ReachController extends Controller {

    public function likePost($id)
    {
        $user_id = auth()->id();
        if($user_id == null){
            return redirect()->route('login');
        }
        $like = Reach::updateOrCreate(
            ['address' => $user_id, 'blog_id' => $id],
            ['reach' => true]
        );

        return response()->json(['message' => 'Liked successfully']);
    }

}
