<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1> 世界を旅しよう！(タイトル未定)</h1>
        <p class='mypage'><a href='/mypage'></a></p>
        <p class='create'><a href='/create'></a></p>
        <p class='chat'><a href='/chat'></a></p>
        <p><img src="https://thumb.ac-illust.com/87/87672fcb5d85e045a489702c92b67a20_t.jpeg" alt="世界地図背景" /></p>
        <div class='posts'>
            <div class='post'>
            </div>
        </div>
        <div class='go'><a href="/posts/mypage">マイページ</a></div>
        <div class='go'><a href="/posts/create">投稿</a></div>
        <div class='go'><a href="/posts/chat">チャット</a></div>
        <div class='go'><a href="/posts/explanation">サイト説明</a></div>  
        
    </body>
</html>