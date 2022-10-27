<div class="media">
    <div class="media-body comment-body">
        <div class="row">
            <span class="comment-body-user">{{$comment->name}}</span>
            <span class="comment-body-time">{{$comment->created_at}}</span>
        </div>
<<<<<<< HEAD
        {{--<span class="comment-body-content">{!! nl2br(e($comment->comment)) !!}</span>--}}
            <span class="comment-body-time">{{$comment->comment}}</span>
=======
        <span class="comment-body-content">{!! nl2br(e($comment->comment)) !!}</span>
            
>>>>>>> seika_03
    </div>
</div>