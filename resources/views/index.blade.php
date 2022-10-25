<!DOCTYPE html>
{{Auth::user()->name}}
<link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
    </head>
    
    <body class="index">
        @extends('layouts.app')

        @section('content')
    <div class="index_all_body">
        <div class='index_title_name'>
            <index_h1>・ ・ ・ ・ ・ ・　セカタビ　・ ・ ・ ・ ・ ・<h1>
            <index_h2>～世界を旅しよう！～</h2>
        </div>
                <p class='mypage'><a href='/mypage'></a></p>
                <p class='create'><a href='/create'></a></p>
                <p class='chat'><a href='/chat'></a></p>
                <p class='home'><a href='/home'></a></p>
                
        <div class='index_body'>
            <div class='index_image'>
                <p>
                    <img src="https://thumb.ac-illust.com/87/87672fcb5d85e045a489702c92b67a20_t.jpeg" alt="世界地図背景" />
                </p>
            </div>
        
            <div class='posts'>
                <div class='post'>
                </div>
            </div>
        
            <div class='index_button'>
                <a href="/posts/mypage">〖マイページ〗</a>
                <a href="/posts/create">〖投稿〗</a>
                <a href="/posts/ichiran">〖投稿一覧〗</a>
                <a href="/posts/chat">〖チャット〗</a>
                <a href="/posts/explanation">〖サイト説明〗</a>
            </div>  
        </div>
    </div>
        @endsection
    </body>