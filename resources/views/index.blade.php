<!DOCTYPE html>
@extends('layouts.app')

@section('content')
{{Auth::user()->name}}


    <div class='index_body'>
        <div class='index_title_name'>
            <h1> 世界を旅しよう！(タイトル未定)</h1></div>
                <p class='mypage'><a href='/mypage'></a></p>
                <p class='create'><a href='/create'></a></p>
                <p class='chat'><a href='/chat'></a></p>
        
        <div class='index_image'>
            <p>
                <img src="https://thumb.ac-illust.com/87/87672fcb5d85e045a489702c92b67a20_t.jpeg" alt="世界地図背景" />
            </p>
        </div>
        
        <div class='posts'>
            <div class='post'>
            </div>
        </div>
        
        <div class='index_mypage'>
            <a href="/posts/mypage">マイページ</a>
        </div>
        <div class='go'>
            <a href="/posts/create">投稿</a>
        </div>
        <div class='go'>
            <a href="/posts/ichiran">投稿一覧</a>
        </div>
        <div class='go'>
            <a href="/posts/chat">チャット</a>
        </div>
        <div class='go'>
            <a href="/posts/explanation">サイト説明</a>
        </div>  
        
    </div>
        
   
   
@endsection