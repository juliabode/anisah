<div class="row">
    <div class="large-8 medium-8 small-12 column">

        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class('white-bg vines'); ?>>
            <header>
              <h1 class="entry-title"><?php the_title(); ?></h1>
              <?php get_template_part('templates/entry-meta'); ?>
            </header>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
            <footer>
              <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
            </footer>
            <?php comments_template('/templates/comments.php'); ?>
          </article>
        <?php endwhile; ?>
    </div>

    <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar large-4 medium-4 small-12 column white-bg" role="complementary">
        <?php dynamic_sidebar('sidebar-news'); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>
</div>
