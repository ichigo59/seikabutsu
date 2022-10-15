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
        <h1 class="title">マイページ</h1>
        <div class = "post">
            <h2>ID</h2>
                <h3>12345</h3>
            <h2>Name</h2>
                <h3>Arin</h3>
            <h2>Email</h2>
                <h3>buckinghampalace48@gmail.com</h3>
            <h2>Age</h2>
                <h3>21</h3>
            <h2>Sex</h2>
                <h3>female</h3>
        </div>
            <div class='footer'>[<a href="/">ホームへ戻る</a>]</div>
    </body>
</html>
@endsection