<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link href="<?php echo e(asset('css/explanation.css')); ?>" rel="stylesheet">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Seikabutsu</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
<body class="explanation_body">
    

    <?php $__env->startSection('content'); ?>
    
    <div class="explanation_all_body">
        <h1 class="explanation_h1_title">・ ・ ・サイト説明・ ・ ・</h1>
        <div class = "explanation_body">
            <h2 class="explanation_h2_title">【サイトの特徴】</h2>
             <explanation_h3>
                <h3>「国内にいても海外旅行をした気分になれる！」</h3>
                <h3>「誰かのオススメをリアルタイムで聞けて、現地でも大活躍！」</h3>
            </h3>
            <h2 class="explanation_h2_title">【使い方】</h2>
            <explanation_h3>
                <h3>・オススメの食べ物や建造物、観光地、穴場スポットを投稿しよう！</h3>
                <h3>・他の人の投稿も見てみよう！</h3>
                <h3>↓</h3>
                <h3>自分がいる場所のオススメが見当たらない、、でも早く知りたい！</h3>
                <h3>そんな時は！</h3>
                <h3>チャット機能が便利！</h3>
                <h3>・「〇〇の周辺で、オススメなごはん屋さん知りませんか？」と問いかけてみよう！</h3>
                <h3>・返信しよう！</h3>
            </h3>
        <div class='explanation_back'><a href="/">〖ホームへ戻る〗</a></div>
        </div>
    </div>
    
</html>
    <?php $__env->stopSection(); ?>
</body>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/explanation.blade.php ENDPATH**/ ?>