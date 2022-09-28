<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1>Site Name</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="category">
                <h2>Category</h2>
                <input type="text" name="post[category]" placeholder="カテゴリー名"/>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="投稿タイトル"/>
            </div>
            <div class="body">
                <h2>Comment</h2>
                <textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea>
            </div>
            <input type="submit" value="投稿する"/>
        </form>
        <div class="back">[<a href="/">ホームへ戻る</a>]</div>
    </body>
</html>
