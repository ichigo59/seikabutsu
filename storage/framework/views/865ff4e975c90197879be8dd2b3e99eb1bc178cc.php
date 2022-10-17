<!DOCTYPE HTML>


<?php $__env->startSection('content'); ?>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="create.css">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1>投稿</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="category">
                <h2>Category</h2>
                <input type="text" name="post[category]" placeholder="食べ物or建造物or観光地or穴場スポット"/>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="投稿タイトル"/>
            </div>
            <div class="create_body">
                <h2>Comment</h2>
                <textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea>
            </div>
            <input type="file" name="imgpath">
            <input type="submit" value="投稿する"/>
        </form>
        <form action="/store" enctype="multipart/form-data" method="post"> 
            <?php echo csrf_field(); ?>
        </form>
            <div class="back"><a href="/">ホームへ戻る</a></div>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/create.blade.php ENDPATH**/ ?>