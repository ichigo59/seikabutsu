<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1 class="title"> 投稿一覧 </h1>
        <div class='posts'>
            <div class='posts'>
                 @foreach ($posts as $post)
                    <small>{{ $post->user->name }}</small>
                    <div class='post'>
                        <h2>Category</h2>
                            <p>{{ $post->category }}</p>
                        <h2>Title</h2>
                            <p>{{ $post->title }}</p>
                        <h2>Comment</h2>
                            <p>{{ $post->body }}</p>
                        <h2>Photo</h2>
                            <img src=" {{ asset('storage/disney.jpg')}}">
                 @endforeach
        </div>
        </div class='paginate'>
            {{ $posts->links() }}
        </div>
        </div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>
<small>{{ $post->user->name }}</small>
@endsection