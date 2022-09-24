<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1> Site Name</h1>
        <p class='mypage'>[<a href='/mypage'></a>]</p>
        <p class='create'>[<a href='/create'></a>]</p>
        <p class='chat'>[<a href='/chat'></a>]</p>
        <div class='posts'>
            <div class='post'>
            </div>
        </div>
        <div class='go'>[<a href="/">マイページ</a>]</div>
        <div class='go'>[<a href="/">投稿一覧</a>]</div>
        <div class='go'>[<a href="/">チャット</a>]</div>
        <div class='go'>[<a href="/">説明</a>]</div>
    </body>
</html>