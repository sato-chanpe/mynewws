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
  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Thread::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Thread::all();
      }
      return view('thread.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}
