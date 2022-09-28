<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>Name</h2>
                <input type="text" name="post[category]" placeholder="名前"/>
            </div>
            <div class="title">
                <h2>Email</h2>
                <input type="text" name="post[category]" placeholder="メールアドレス"/>
            </div>
            <div class="title">
                <h2>Age</h2>
                <input type="text" name="post[category]" placeholder="年齢"/>
           <div class="title">
                <h2>Sex</h2>
                <input type="text" name="post[category]" placeholder="性別"/>
            <div class="title">
                <h2>Password</h2>
                <input type="text" name="post[category]" placeholder="パスワード"/>
        </form>
        <div class='go'>[<a href="/">登録する</a>]</div>
    </body>
</html>
