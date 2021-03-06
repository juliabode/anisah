<?php echo get_avatar($comment, $size = '64'); ?>
<div class="media-body">
  <p class="author"><?php echo get_comment_author_link() . ' ' . __('wrote at ', 'roots'); ?>
  <time datetime="<?php echo get_comment_date('c'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?></a></time>
  <?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>:</p>

  <?php if ($comment->comment_approved == '0') : ?>
    <div class="alert alert-info">
      <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
    </div>
  <?php endif; ?>

  <div class="comment-text">
    <?php comment_text(); ?>
    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
  </div>
