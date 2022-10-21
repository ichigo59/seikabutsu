<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/ichiran.css')); ?>" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
    </head>
    
    <div class="ichiran_all_body">
        <h1 class= "ichiran_h1_title">・ ・ ・投稿一覧・ ・ ・</h1>
        
        <div class="ichiran_body">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <small class="toukousyamei"><?php echo e($post->user->name); ?></small>
                <div class='ichiran_4_body'>
                    <ichiran_h2>Category</ichiran_h2>
                        <ichiran_p><?php echo e($post->category); ?></ichiran_p>
                    <ichiran_h2>Title</ichiran_h2>
                        <ichiran_p><?php echo e($post->title); ?></ichiran_p>
                    <ichiran_h2>Comment</ichiran_h2>
                        <ichiran_p><?php echo e($post->body); ?></ichiran_p>
                    <ichiran_h2>Photo</ichiran_h2>
                        <img src=" <?php echo e(asset('storage/disney.jpg')); ?>">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div class='ichiran_paginate'>
            <?php echo e($posts->links()); ?>

            
        <div class="ichiran_back"><a href="/">〖ホームへ戻る〗</a></div>
    </div>
    
</html>

<small class="jibun"><?php echo e($post->user->name); ?></small>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/ichiran.blade.php ENDPATH**/ ?>