    @extends('layouts.app')
    @section('content')
    <div class= "chat_all_body">
        <h1 class="chat_h1">・ ・ ・チャット・ ・ ・</h1>
        <div class-="chat_body">
<<<<<<< HEAD:resources/views/User/Components/chat.blade.php
=======
            <form method="POST" action="{{route('add')}}">
                @csrf
<<<<<<< HEAD:resources/views/chat.blade.php
                
    <div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
                @include
                
=======
>>>>>>> origin/master:resources/views/chat.blade.php
            <div class="chat-container row justify-content-center"> {{--一覧ボックス--}}
                <div class="chat-area">
                    <div class="card">
                        <div class="card-body chat-card">
                            @foreach ($comments as $comment)
                            @include('User/Components/comment', ['comments' => $comments])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD:resources/views/User/Components/chat.blade.php
=======
>>>>>>> seika_03:resources/views/User/Components/chat.blade.php
            </div>
>>>>>>> origin/master:resources/views/chat.blade.php
        </div>
            
        <div class="comment-container row justify-content-center">　{{--入力ボックス--}}
            <div class="input-group comment-area">
                <form method="POST" id="submit" action="{{route('add')}}">
                    @csrf
                    <textarea class="form-control" id="comment" name="message" placeholder="メッセージを入力してください (Shift + Enterでも可)"
                        aria-label="With textarea"
                        onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').submit();return false};">
                    </textarea>
                    <button type="submit" class="btn btn-outline-primary comment-btn">送信する</button>
                </form>
            </div>
        </div>
    </div>
    <div class="chat_back"><a href="/">〖ホームへ戻る〗</a></div>
    @endsection
