<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/show.css')); ?>" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <title>Sekatabi</title>
</head>
<body class ="show">
    

    <?php $__env->startSection('content'); ?>
<div class = "show_all_body">
    <h1 class="show_title"> ・ ・ ・ 投稿完了 ・ ・ ・</h1>
    <div class="show_contents">
    <small><?php echo e($post->user->name); ?></small>
    <p>Category</p>
    <h2><?php echo e($post->category); ?></h2>
    <p>Title</p>
    <h2><?php echo e($post->title); ?></h2>
    <p>Comment</p>
    <h2 class="h2_show_comment"><?php echo e($post->body); ?></h2>
    <p>Photo</p>
    
    <div class="content">
        <div class=" content_post">
            <img src=" <?php echo e(asset($post->imgpath)); ?>">
        </div>  
    </div>
    <div class="show_back">
        <a href="/">〖ホームへ戻る〗</a>
    </div>
    </div>
</div>
    <?php $__env->stopSection(); ?>
</body>
</html>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/show.blade.php ENDPATH**/ ?>