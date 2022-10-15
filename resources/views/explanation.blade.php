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
        <h1 class="title">サイト説明</h1>
        <div class = "post">
            <h2>【サイトの特徴】</h2>
                <h3>「国内にいても海外旅行をした気分になれる！」</h3>
                <h3>「誰かのオススメをリアルタイムで聞けて、現地でも大活躍！」</h3>
            <h2>【使い方】</h2>
                <h3>・オススメの食べ物や建造物、観光地、穴場スポットを投稿しよう！</h3>
                <h3>・他の人の投稿にリアクションしよう！</h3>
                <h3>↓</h3>
                <h3>自分がいる場所のオススメが見当たらない、、でも早く知りたい！</h3>
                <h3>そんな時は！</h3>
                <h3>チャット機能が便利！</h3>
                <h3>・「〇〇の周辺で、穴場なごはん屋さん知りませんか？」と問いかけてみよう！</h3>
                <h3>・返信しよう！</h3>
        </div>
            <div class='footer'>[<a href="/">ホームへ戻る</a>]</div>
    </body>
</html>
@endsection
