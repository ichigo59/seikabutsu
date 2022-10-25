<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/chat.css') }}" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekatabi</title>
        
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chat.css">
</head>

<body class = "chat">
    @extends('layouts.app')

    @section('content')
    <div class = "chat_all_body">
    <h1 class="chat_h1">・ ・ ・チャット・ ・ ・</h1>
    <div class="chat_body">
        <form method="POST" action="{{route('add')}}">
            @csrf
                
    <div class="chat-container row justify-content-center"> {{--一覧ボックス--}}
        <div class="chat-area">
            <div class="card">
                <div class="card-body chat-card">
                    <div class="card-body chat-card">
                        @foreach ($comments as $comment)
                        @include('User/Components/comment', ['comments' => $comments])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="comment-container row justify-content-center">　{{--入力ボックス--}}
        <div class="input-group comment-area">
            <form method="POST" action="{{route('add')}}">
                @csrf
                <textarea class="form-control" id="comment" name="message" placeholder="メッセージを入力してください (Shift + Enterでも可)"
                    aria-label="With textarea"
                    onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};">
                </textarea>
                <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">送信する</button>
            </form>
        </div>
    </div>
    </div>

    <div class="back"><a href="/">〖ホームへ戻る〗</a></div>
</html>
@endsection
</body>
