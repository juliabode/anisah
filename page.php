<div class="row">
    <div class="small-12 column">
        <div class="white-bg vines">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/page', 'header'); ?>
              <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>