@extends('layouts.app')
@section('title', '登録済みスレッドの一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>スレッド一覧{{$hoge}}</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('ThreadController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($threads as $thread)
                                <tr>
                                    <th>{{ $thread->id }}</th>
                                    <td>{{ \Str::limit($thread->title, 100) }}</td>
                                    <td>{{ \Str::limit($thread->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('ThreadController@show', $thread) }}">投稿を見る</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection