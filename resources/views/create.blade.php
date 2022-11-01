<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="create.css">
        <title>Sekatabi</title>
    </head>
    
    
        @extends('layouts.app')

        @section('content')
    <body class="create">
        <div class="create_all_body">
        <h1 class="create_h1_title">・ 投稿 ・</h1>
        <div class ="create_body">
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
            
        <div class="create_category">
            <h2 class="create_h2">・ ・ Category ・ ・</h2>
                {{--<div class="form-group row">--}}
            <div class="create_category_form">
                <select class="category_form" id="sel01" name="post[category]">
                    <option value="食べ物" selected>食べ物</option>
                    <option value="建造物" >建造物</option>
                    <option value="観光地" >観光地</option>
                    <option value="穴場スポット" >穴場スポット</option>　{{--selected=最初から選択--}}
                </select>
            </div>
        </div>
            
        <div class="create_title">
            <h2 class="create_h2">・ ・ Title ・ ・</h2>
            <h3 class="create_h3">
                <input type="text" name="post[title]" placeholder="投稿タイトル"/>
            </h3>
        </div>
            
        <div class="create_comment">
            <h2 class="create_h2">・ ・ Comment ・ ・</h2>
            <h3 class="create_h3">
                <textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea>
            </h3>
        </div>
            
        <div class="create_photo">
            <h2 class= "create_h2">・ ・ Photograph ・ ・</h2>
            <h3 class ="create_h3">
                <input type="file" name="imgpath" accept=".jpg,.jpeg,.png">
            </h3>
        </div>
                
        <h4 class ="create_h4">
            <input type="submit" value="投稿する"/>
        </h4>
    </form>
            
    <div class="create_back" >
        <a href="/posts/ichiran"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />皆の投稿を参考にする</a>
        <a href="/"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />ホームへ戻る</a>
    </div>
</div>
</html>
        @endsection
    </body>        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    

