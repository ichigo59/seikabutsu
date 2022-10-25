<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/create.css')); ?>" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="create.css">
        <title>Seikabutsu</title>
    </head>
    
    <body class="create">
        

        <?php $__env->startSection('content'); ?>
        
        <div class="create_all_body">
        <h1 class="create_h1_title">・ ・ ・投稿・ ・ ・</h1>
        <div class ="create_body">
            <form action="/posts" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
            
            <div class="create_category">
                <h2 class="create_h2">
                    ・ ・ Category ・ ・
                </h2>
                
                        <div class="create_category_form">
                            <label for="sel01" class="col-md-4 col-form-label text-md-right"></label>
                                <style class ="create_style">
                                    category_form{width: 200px; height: 30px;}
                                    
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
                <h2 class="create_h2">
                    ・ ・ Title ・ ・
                </h2>
                <h3 class="create_h3">
                    <input type="text" name="post[title]" placeholder="投稿タイトル"/>
                </h3>
            </div>
            
            <div class="create_comment">
                <h2 class="create_h2">
                    ・ ・ Comment ・ ・
                </h2>
                <h3 class="create_h3">
                    <textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea>
                </h3>
            </div>
            
            <div class="create_photo">
                <h2 class= "create_h2">
                    ・ ・ Photograph ・ ・
                </h2>
                <h3 class ="create_h3">
                    <input type="file" name="imgpath">
                </h3>
            </div>
                
            <h4 class ="create_h4">
                <input type="submit" value="投稿する"/>
            </h4>
        
            <form action="/store" enctype="multipart/form-data" method="post"> 
                <?php echo csrf_field(); ?>
            </form>
            
            <div class="create_back">
                <a href="/">〖ホームへ戻る〗</a>
            </div>
            
        </div>
</html>
        <?php $__env->stopSection(); ?>
    </body>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/create.blade.php ENDPATH**/ ?>