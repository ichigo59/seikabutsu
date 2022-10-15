<!DOCTYPE html>
@extends('layouts.app')

@section('content')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">Login</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
        <div class = "post">
            <input type="text" name="post[category]" placeholder="メールアドレス"/>
            <input type="text" name="post[category]" placeholder="パスワード"/>
        </div>
        </form>
        <div class='footer'>[<a href="/">ログイン</a>]</div>
    </body>
</html>
@endsection