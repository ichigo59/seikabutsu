<!DOCTYPE HTML>


<?php $__env->startSection('content'); ?>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/create.css')); ?>" rel="stylesheet">

<div class='create_body'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="create.css">
        <title>Seikabutsu</title>
    </head>
    
        <div class="create_title">
        <h1 class="create_h1_title">・ ・ ・投稿・ ・ ・</h1>
        </div>
        
        <form action="/posts" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="create_category">
                <div class="form-group row">
                    <label for="sel01" class="col-md-4 col-form-label text-md-right"></label>
                        <div class="create_category_form">
                            <create_h2>Categoryーーーー</create_h2>
                            <style>category_form{width: 150px; height: 30px;}
                            </style>
                            <select class="category_form" id="sel01" name="sel01">
                                <option value="1">食べ物</option>
                                <option value="2" selected>建造物</option>
                                <option value="3" selected>観光地</option>
                                <option value="4" selected>穴場スポット</option>
                            </select>
                        </div>
                </div>
            
            <div class="create_title">
                <create_h2>Titleーーーー</h2>
                <create_h3><input type="text" name="post[title]" placeholder="投稿タイトル"/></create_h3>
            </div>
            
            <div class="create_comment">
                <create_h2>Commentーー</h2>
                <create_h3><textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea></create_h3>
            </div>
            
            <div class="create_photo">
                <create_h2>Photographーー</h2>
                <create_h3><input type="file" name="imgpath"></h3>
            </div>
                <create_toukou_h3><input type="submit" value="投稿する"/></h3>
        </form>
        <form action="/store" enctype="multipart/form-data" method="post"> 
            <?php echo csrf_field(); ?>
        </form>
            <div class="create_back"><a href="/">〖ホームへ戻る〗</a></div>
</div>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/create.blade.php ENDPATH**/ ?>