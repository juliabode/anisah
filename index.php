<div class="row">
    <div class="large-8 medium-8 small-12 column">

        <?php if (!have_posts()) : ?>
          <div class="alert alert-warning white-bg vines">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
          </div>
          <?php get_search_form(); ?>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', get_post_format()); ?>
        <?php endwhile; ?>

        <?php if ($wp_query->max_num_pages > 1) : ?>
          <nav class="post-nav">
            <ul class="pager">
              <?php 
                $nextLink = get_next_posts_link(__('Older posts', 'roots'));
                $prevLink = get_previous_posts_link(__('Older posts', 'roots'));

                if (!is_null($nextLink)) { ?>
                  <li class="previous left"><i class="fa fa-angle-left"></i> <?php next_posts_link(__('Older posts', 'roots')); ?></li>
                <?php }

                if (!is_null($prevLink)) { ?>
                  <li class="next right"><?php previous_posts_link(__('Newer posts', 'roots')); ?> <i class=" fa fa-angle-right"></i></li>
                <?php } ?>
            </ul>
          </nav>
        <?php endif; ?>
    </div>

    <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar large-4 medium-4 small-12 column white-bg" role="complementary">
        <?php dynamic_sidebar('sidebar-news'); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
</div>