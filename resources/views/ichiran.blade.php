<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="{{ asset('css/ichiran.css') }}" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
    </head>
    
    <div class="ichiran_all_body">
        <h1 class= "ichiran_h1_title">・ ・ ・投稿一覧・ ・ ・</h1>
        
        <div class="ichiran_body">
            @foreach ($posts as $post)
                <small class="toukousyamei">{{ $post->user->name }}</small>
                <div class='ichiran_4_body'>
                    <ichiran_h2>Category</ichiran_h2>
                        <ichiran_p>{{ $post->category }}</ichiran_p>
                    <ichiran_h2>Title</ichiran_h2>
                        <ichiran_p>{{ $post->title }}</ichiran_p>
                    <ichiran_h2>Comment</ichiran_h2>
                        <ichiran_p>{{ $post->body }}</ichiran_p>
                    <ichiran_h2>Photo</ichiran_h2>
                        <img src=" {{ asset('storage/disney.jpg')}}">
                </div>
            @endforeach
        </div class='ichiran_paginate'>
            {{ $posts->links() }}
            
        <div class="ichiran_back"><a href="/">〖ホームへ戻る〗</a></div>
    </div>
    
</html>

<small class="jibun">{{ $post->user->name }}</small>
@endsection