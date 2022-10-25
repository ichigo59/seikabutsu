<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/ichiran.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
    </head>
    
    <body class="ichiran_body">
        @extends('layouts.app')

        @section('content')
        <div class="ichiran_all_body">
            <h1 class= "ichiran_h1_title">・ ・ ・投稿一覧・ ・ ・</h1>
            <div class="ichiran_contents">
                @foreach ($posts as $post)
                    <small class="toukousyamei">{{ $post->user->name }}</small>
                    <div class="ichiran_4_body">
                        <h2 class="ichiran_h2">Category</h2>
                            <p class="ichiran_p">{{ $post->category }}</p>
                        <h2 class="ichiran_h2">Title</h2>
                            <p class="ichiran_p">{{ $post->title }}</p>
                        <h2 class="ichiran_h2">Comment</h2>
                            <p class="ichiran_p">{{ $post->body }}</p>
                        <h2 class="ichiran_h2">Photo</h2>
                            <img src=" {{ asset('storage/disney.jpg')}}">
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