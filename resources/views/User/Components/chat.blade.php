<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/chat.css">
    </head>
    <body>
        <h1 class="title">・ ・ ・チャット・ ・ ・</h1>
            <form method="POST" action="{{route('add')}}">
                @csrf
                
                <div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                
                
            </div>
        </div>
    </div>
</div>

<div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
        <textarea class="form-control" placeholder="input massage" aria-label="With textarea"></textarea>
        <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>
    </div>
</div>

<form method="POST" action="{{route('add')}}">
    @csrf
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="comment" placeholder="input massage"
                aria-label="With textarea"></textarea>
            <button type="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>




    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="メッセージ" placeholder="メッセージを入力してください (shift + Enter)"
                    aria-label="With textarea"
                    onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
            <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">送信する</button>
        </div>
    </div>
</form>

    <div class="card-body chat-card">
        @foreach ($comment)
        @include('User.components.comment', ['comments' => $comment])
        @endforeach
    </div>
         
    <div class="back"><a href="/">ホームへ戻る</a></div>
    </body>
</html>
@endsection
