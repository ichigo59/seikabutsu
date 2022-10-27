<!DOCTYPE html>


<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <title>Sekatabi</title>
    </head>
    <body>
        <small><?php echo e($post->user->name); ?></small>
        <h1 class="title"> 投稿完了</h1>
            <h2>Category</h2>
                <p><?php echo e($post->category); ?></p>
            <h2>Title</h2>
                <p><?php echo e($post->title); ?></p>
            <h2>Comment</h2>
                <p><?php echo e($post->body); ?></p>
            <h2>Photo</h2>
    
        <div class="content">
            <div class=" content_post">
                <img src=" <?php echo e(asset($post->imgpath)); ?>">
            </div>  
        </div>
        </div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/show.blade.php ENDPATH**/ ?>