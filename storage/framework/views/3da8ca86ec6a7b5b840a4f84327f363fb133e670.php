<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<?php echo e(Auth::user()->name); ?>



    <div class='index_body'>
        <div class='index_title_name'>
            <h1> 世界を旅しよう！(タイトル未定)</h1></div>
                <p class='mypage'><a href='/mypage'></a></p>
                <p class='create'><a href='/create'></a></p>
                <p class='chat'><a href='/chat'></a></p>
        
        <div class='index_image'>
            <p>
                <img src="https://thumb.ac-illust.com/87/87672fcb5d85e045a489702c92b67a20_t.jpeg" alt="世界地図背景" />
            </p>
        </div>
        
        <div class='posts'>
            <div class='post'>
            </div>
        </div>
        
        <div class='index_mypage'>
            <a href="/posts/mypage">マイページ</a>
        </div>
        <div class='go'>
            <a href="/posts/create">投稿</a>
        </div>
        <div class='go'>
            <a href="/posts/ichiran">投稿一覧</a>
        </div>
        <div class='go'>
            <a href="/posts/chat">チャット</a>
        </div>
        <div class='go'>
            <a href="/posts/explanation">サイト説明</a>
        </div>  
        
    </div>
        
   
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/index.blade.php ENDPATH**/ ?>