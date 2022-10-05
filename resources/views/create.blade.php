<? php
if(!empty($_FILES)){
            $filename = $_FILES['upload_image']['name'];
            $uploaded_path='images_after/'. $filename;
            $result = move_uploaded_file($_FILES['upload_image']['tmp_name'], $uploaded_path;
        if($result){
            $MSG = 'アップロード成功！ファイル名: '.$filename;
            $img_path = $uploaded_path;
        }else{
            $MSG = 'アップロード失敗！エラーコード: '.$_FILES['upload_image']['error'];
        }
        }else{
            $MSG = '画像を選択してください';
        }
?>

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Seikabutsu</title>
    </head>
    <body>
        <h1 class="title">投稿</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="category">
                <h2>Category</h2>
                <input type="text" name="post[category]" placeholder="カテゴリー名"/>
            </div>
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="投稿タイトル"/>
            </div>
            <div class="body">
                <h2>Comment</h2>
                <textarea name="post[body]" placeholder="今まで食べた中で一番おいしいパフェです。"></textarea>
            </div>
        <section class="form-container">
        <p>
            <?php if(!empty($MSG)) echo $MSG;?></p>
            <?php if(!empty($img_path)){;?>
            <img src="<?php echo $img_path; ?>" alt="">
            <?php };?>
        <form action="" method="post" enctype="multipart/form-data"
            <input type="file" name="upload_image">
            <input type="submit" class="btn_submit" value="画像をアップロードする">
        </form>
        </section>
        
        <section class="image-area">
        <?php
            if(!empty($img_path)){  
        ?>
            <img src="echo <?php $img_path;?>" alt="">
        <?php
            }
        ?>
        </section>
            <input type="submit" value="投稿する"/>
        </form>
            <div class="back">[<a href="/">ホームへ戻る</a>]</div>
    </body>
</html>
