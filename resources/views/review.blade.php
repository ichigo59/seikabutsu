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
        <form action="/posts" method="POST">
            {{ csrf_field() }}
        <div class = "body">
            <h2>Comment</h2>
            <textarea name="post[body]" placeholder="おいしそう！行ってみたい！"></textarea>
        </form>
        </div>
            <div class='footer'>[<a href="/">投稿する</a>]</div>
    </body>
</html>
