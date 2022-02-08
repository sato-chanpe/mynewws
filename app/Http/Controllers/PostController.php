<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    //
    public function create(Request $request)
    {
        $post = new Post;
        $post->body = $request->body;
        $post->thread_id = $request->thread_id;
        $post->user_id = Auth::id();
        $post->save();
      
        return redirect()->back();
    }
}
