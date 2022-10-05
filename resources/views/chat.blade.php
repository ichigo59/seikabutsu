<!DOCTYPE html>
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
        <h1 class="title">チャット</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
        <div class = "post">
            <textarea name="post[body]" placeholder="バッキンガム宮殿の近くで美味しいお店はありませんか？"></textarea>
        </div>
        </form>
            <div class='footer'>[<a href="/">このコメントに返信する</a>]</div>
            <div class='footer'>[<a href="/">コメントを投稿する</a>]</div>
    </body>
</html>
