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
    <h1 class="show_title">・ 投稿完了 ・</h1>
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
            <img class="show_img" src="{{ $post->imgpath }}">
        </div>  
    </div>
    <div class="show_back">
        <a href="/posts/ichiran"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />皆の投稿を見る</a>
        <a href="/"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />ホームへ戻る</a>
    </div>
    </div>
</div>
    @endsection
</body>
</html>

