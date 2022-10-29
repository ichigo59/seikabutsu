<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/ichiran.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sekatabi</title>
    </head>
    
    <body class="ichiran">
        @extends('layouts.app')

        @section('content')
        <div class="ichiran_all_body">
            <h1 class= "ichiran_h1_title">・ ・ ・投稿一覧・ ・ ・</h1>
            <div class="ichiran_contents">
                @foreach ($posts as $post)
                    <small class="toukousyamei">{{ $post->user->name }}</small>
                    <div class="ichiran_4_body">
                        <p class="ichiran_p">Category</p>
                            <h2 class="ichiran_h2">{{ $post->category }}</h2>
                        <p class="ichiran_o">Title</p>
                            <h2 class="ichiran_h2">{{ $post->title }}</h2>
                        <p class="ichiran_p">Comment</p>
                            <h2 class="ichiran_h2_comment">{{ $post->body }}</h2>
                        <p class="ichiran_p">Photo</p>
                            <img src=" {{ asset($post->imgpath)}}">
                    </div>
                @endforeach
            </div class='ichiran_paginate'>
            {{ $posts->links() }}
            <div class="ichiran_back">
                <a href="/">〖ホームへ戻る〗</a>
            </div>
        </div>
</html>
        @endsection
    </body>