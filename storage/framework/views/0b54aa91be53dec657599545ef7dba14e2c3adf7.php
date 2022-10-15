<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1 class="title"> 投稿一覧 </h1>
        <div class='posts'>
            <div class='posts'>
                 <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <small><?php echo e($post->user->name); ?></small>
                    <div class='post'>
                        <h2>Category</h2>
                            <p><?php echo e($post->category); ?></p>
                        <h2>Title</h2>
                            <p><?php echo e($post->title); ?></p>
                        <h2>Comment</h2>
                            <p><?php echo e($post->body); ?></p>
                        <h2>Photo</h2>
                            <img src=" <?php echo e(asset('storage/disney.jpg')); ?>">
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div class='paginate'>
            <?php echo e($posts->links()); ?>

        </div>
        </div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>
<small><?php echo e($post->user->name); ?></small>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/ichiran.blade.php ENDPATH**/ ?>