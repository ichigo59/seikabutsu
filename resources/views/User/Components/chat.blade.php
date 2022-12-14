    @extends('layouts.app')
    @section('content')
    <div class= "chat_body">

    <div class ="chat">     
        <div class= "chat_all_body">
            <h1 class="chat_h1">・ チャット ・</h1>
            {{--<div class-="chat_body">--}}
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
            </div>
        </div>
            <div class="comment-container row justify-content-center">　{{--入力ボックス--}}
                <div class="input-group comment-area">
                    <form method="POST" id="submit" action="{{route('add')}}">
                        @csrf
                        <textarea class="chat_form-control" id="comment" name="message" placeholder="メッセージを入力してください (Shift + Enterでも可)"
                            aria-label="With textarea"
                            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').submit();return false};">
                        </textarea>
                        <div class="soushinbotan">
                            <button type="submit" class="btn btn-outline-primary comment-btn">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
        
        <div class="chat_back"><a href="/"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />ホームへ戻る</a></div>
        
    </body>
    @endsection
