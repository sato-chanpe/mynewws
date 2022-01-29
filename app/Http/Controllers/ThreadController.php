<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Thread;

class ThreadController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('thread.create');
  }
  
  public function create(Request $request)
  {
      $thread = new Thread;
      $thread->title = $request->title;
      $thread->body = $request->body;
      $thread->save();
      return redirect('thread/new');
  }  
}
