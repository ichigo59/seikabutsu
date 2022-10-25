<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/chat.css')); ?>" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekatabi</title>
        
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/chat.css">
</head>

<body class = "chat">
    

    <?php $__env->startSection('content'); ?>
    <div class = "chat_all_body">
    <h1 class="chat_h1">・ ・ ・チャット・ ・ ・</h1>
    <div class="chat_body">
        <form method="POST" action="<?php echo e(route('add')); ?>">
            <?php echo csrf_field(); ?>
                
    <div class="chat-container row justify-content-center"> 
        <div class="chat-area">
            <div class="card">
                <div class="card-body chat-card">
                    <div class="card-body chat-card">
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('User/Components/comment', ['comments' => $comments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="comment-container row justify-content-center">　
        <div class="input-group comment-area">
            <form method="POST" action="<?php echo e(route('add')); ?>">
                <?php echo csrf_field(); ?>
                <textarea class="form-control" id="comment" name="message" placeholder="メッセージを入力してください (Shift + Enterでも可)"
                    aria-label="With textarea"
                    onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};">
                </textarea>
                <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">送信する</button>
            </form>
        </div>
    </div>
    </div>

    <div class="back"><a href="/">〖ホームへ戻る〗</a></div>
</html>
<?php $__env->stopSection(); ?>
</body>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/User/Components/chat.blade.php ENDPATH**/ ?>