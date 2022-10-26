<div class="media">
    <div class="media-body comment-body">
        <div class="row">
            <span class="comment-body-user"><?php echo e($comment->name); ?></span>
            <span class="comment-body-time"><?php echo e($comment->created_at); ?></span>
        </div>
        <span class="comment-body-content"><?php echo nl2br(e($comment->comment)); ?></span>
    </div>
</div><?php /**PATH /home/ec2-user/environment/blog/resources/views/User/Components/comment.blade.php ENDPATH**/ ?>