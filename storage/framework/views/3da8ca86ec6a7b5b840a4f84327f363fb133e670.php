<!DOCTYPE html>
<link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sekatabi</title>
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    
    <body class="index">
        

        <?php $__env->startSection('content'); ?>
    <div class="index_all_body">
        <div class='index_title_name'>
            <h1 class="index_h1">・ セカタビ ・<h1>
            <h2 clas="index_h2">～世界を旅しよう！～</h2>
        </div>
                <p class='create'><a href='/create'></a></p>
                <p class='chat'><a href='/chat'></a></p>
                <p class='home'><a href='/home'></a></p>
                
        <div class='index_body'>
            <div class='index_image'>
                <p>
                    <img class="index_img" src="https://thumb.ac-illust.com/87/87672fcb5d85e045a489702c92b67a20_t.jpeg" alt="世界地図背景" />
                </p>
            </div>
        
            <div class='posts'>
                <div class='post'>
                </div>
            </div>
        
            <div class='index_button'>
                <a href="/posts/create"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />投稿　</a>
                <a href="/posts/ichiran"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />投稿一覧　</a>
                <a href="/posts/chat"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />チャット　</a>
                <a href="/posts/explanation"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />サイト説明</a>
            </div>  
        </div>
    </div>
        <?php $__env->stopSection(); ?>
    </body>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/index.blade.php ENDPATH**/ ?>