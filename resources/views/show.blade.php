<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sekatabi</title>
    </head>
    <body>
        <small>{{ $post->user->name }}</small>
        <h1 class="title"> 投稿完了</h1>
            <h2>Category</h2>
                <p>{{ $post->category }}</p>
            <h2>Title</h2>
                <p>{{ $post->title }}</p>
            <h2>Comment</h2>
                <p>{{ $post->body }}</p>
            <h2>Photo</h2>
    
        <div class="content">
            <div class=" content_post">
                <img src=" {{ asset($post->image_path)}}">
                {{ $post->image_path }}
            </div>  
        </div>
        </div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>

@endsection