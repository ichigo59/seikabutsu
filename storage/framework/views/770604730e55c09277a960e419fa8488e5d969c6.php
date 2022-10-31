    
    <?php $__env->startSection('content'); ?>
    <div class= "chat_body">

    <div class ="chat">     
        <div class= "chat_all_body">
            <h1 class="chat_h1">・ チャット ・</h1>
            
                <div class="chat-container row justify-content-center"> 
                    <div class="chat-area">
                        <div class="card">
                            <div class="card-body chat-card">
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('User/Components/comment', ['comments' => $comments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="comment-container row justify-content-center">　
                <div class="input-group comment-area">
                    <form method="POST" id="submit" action="<?php echo e(route('add')); ?>">
                        <?php echo csrf_field(); ?>
                        <textarea class="chat_form-control" id="comment" name="message" placeholder="メッセージを入力してください (Shift + Enterでも可)"
                            aria-label="With textarea"
                            onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').submit();return false};">
                        </textarea>
                        <div class="soushinbotan">
                            <button type="submit" class="btn btn-outline-primary comment-btn">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
        
        <div class="chat_back"><a href="/"><img class="Hikouki_img" src="https://illustimage.com/photo/dl/5115.png?20171228" alt="飛行機" />ホームへ戻る</a></div>
        
    </body>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/blog/resources/views/User/Components/chat.blade.php ENDPATH**/ ?>