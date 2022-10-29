<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/show.css') }}" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <title>Sekatabi</title>
</head>
<body class ="show">
    @extends('layouts.app')

    @section('content')
<div class = "show_all_body">
    <h1 class="show_title"> ・ ・ ・ 投稿完了 ・ ・ ・</h1>
    <div class="show_contents">
    <small>{{ $post->user->name }}</small>
    <p>Category</p>
    <h2>{{ $post->category }}</h2>
    <p>Title</p>
    <h2>{{ $post->title }}</h2>
    <p>Comment</p>
    <h2 class="h2_show_comment">{{ $post->body }}</h2>
    <p>Photo</p>
    
    <div class="content">
        <div class=" content_post">
            <img src=" {{ asset($post->imgpath)}}">
        </div>  
    </div>
    <div class="show_back">
        <a href="/">〖ホームへ戻る〗</a>
    </div>
    </div>
</div>
    @endsection
</body>
</html>

