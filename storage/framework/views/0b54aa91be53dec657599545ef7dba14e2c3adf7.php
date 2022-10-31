<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/ichiran.css')); ?>" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sekatabi</title>
    </head>
    
    <body class="ichiran">
        

        <?php $__env->startSection('content'); ?>
        <div class="ichiran_all_body">
            <h1 class= "ichiran_h1_title">・ ・ ・投稿一覧・ ・ ・</h1>
            <div class="ichiran_contents">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small class="toukousyamei"><?php echo e($post->user->name); ?></small>
                    <div class="ichiran_4_body">
                        <p class="ichiran_p">Category</p>
                            <h2 class="ichiran_h2"><?php echo e($post->category); ?></h2>
                        <p class="ichiran_o">Title</p>
                            <h2 class="ichiran_h2"><?php echo e($post->title); ?></h2>
                        <p class="ichiran_p">Comment</p>
                            <h2 class="ichiran_h2_comment"><?php echo e($post->body); ?></h2>
                        <p class="ichiran_p">Photo</p>
                            <img src=" <?php echo e(asset($post->imgpath)); ?>" height="200px" width="300">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div class='ichiran_paginate'>
            <?php echo e($posts->links()); ?>

            <div class="ichiran_back">
                <a href="/">〖ホームへ戻る〗</a>
            </div>
        </div>
</html>
        <?php $__env->stopSection(); ?>
    </body>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/ichiran.blade.php ENDPATH**/ ?>