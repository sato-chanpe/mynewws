@extends('layouts.app')
@section('title', 'スレッド詳細')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $thread->title }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">投稿者名が入ります</h6>
                <p class="card-text">
                  {{ $thread->body }}
                </p>
            </div>
        </div>
    </div>
@endsection