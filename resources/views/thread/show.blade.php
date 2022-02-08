@extends('layouts.app')
@section('title', 'スレッド詳細')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $thread->title }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">投稿者名: {{ $thread->user->name }}</h6>
                <p class="card-text">
                  {{ $thread->body }}
                </p>
            </div>
        </div>
        @foreach($thread->posts as $post)
            <div class="card mt-3">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">
                        @if($post->user)
                          {{ $post->user->name }}
                        @else
                          {{ "ゲスト様" }}
                        @endif
                        {{-- スマートな表現：{{ $post->user ? $post->user->name : "ゲスト" }} --}}
                    </h6> 
                    <p class="card-text">
                      {{ $post->body }}
                    </p>
                </div>
            </div>
        @endforeach
        
        <div class="card mt-3">
            <div class="card-body">
                <h4 class="card-title">コメントする</h4>
                <p class="card-text">
                    <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="form-group">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                        <input type="hidden" name="thread_id" value={{ $thread->id }}>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="投稿">
                    </form>
                </p>
            </div>
        </div>
    </div>
@endsection