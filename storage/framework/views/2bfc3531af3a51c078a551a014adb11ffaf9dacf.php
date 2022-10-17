<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/chat.css')); ?>" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/chat.css">
    </head>
    <body>
        <h1 class="title">チャット</h1>
        <form method="POST" action="<?php echo e(route('add')); ?>">
    <?php echo csrf_field(); ?>
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="comment" placeholder="push massage (shift + Enter)"
                aria-label="With textarea"
                onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};">
            </textarea>
            <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">投稿する</button>
        </div>
    </div>
</form>
            <div class="chat-container row justify-content-center">
                <div class="chat-area">
                    <div class="card">
                        <div class="card-header">コメント</div>
                    <div class="card-body chat-card">
                        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      
                    </div>
                    </div>
                </div>
            </div>
            <div class="card-body chat-card">
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('comment', ['item' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="comment-container row justify-content-center">
                <div class="input-group comment-area">
                    <textarea class="form-control" placeholder="メッセージを入力してください" aria-label="With textarea"></textarea>
                        <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">投稿する</button>
                </div>
            </div>
            <div class="back"><a href="/">ホームへ戻る</a></div>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/chat.blade.php ENDPATH**/ ?>