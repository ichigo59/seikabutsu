<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1 class="title"> 画像挿入完了</h1>
            <h2>Photo</h2>
        <div class="content">
            <div class=" content_post">
            </div>  
        </div>
        </div class="footer">
            <a href="/posts/create">投稿画面へ戻る</a>
        </div>
    </body>
</html>
@endsection