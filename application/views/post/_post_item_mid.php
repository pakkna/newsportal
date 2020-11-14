<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--Post item small-->
<div class="post-item-mid<?php echo check_post_img($post, 'class'); ?>">
    <?php if (check_post_img($post)): ?>
        <div class="post-item-image">
            <a href="<?php echo permalink($post->id); ?>">
                <?php $this->load->view("post/_post_image", ["post_item" => $post, "type" => "medium"]); ?>
            </a>
        </div>
    <?php endif; ?>
    <h3 class="title">
        <a href="<?php echo permalink($post->id); ?>">
            <?php echo html_escape(character_limiter($post->title, 55, '...')); ?>
        </a>
    </h3>
   
</div>
