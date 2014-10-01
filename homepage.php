<?php
/*
Template Name: Homepage
*/
?>

<div class="row">
    <?php echo do_shortcode( '[fraction_slider]' ); ?>
</div>


<div class="row">
    <div class="large-7 medium-7 small-12 column">
        <div class="white-bg">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('templates/page', 'header'); ?>
              <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </div>
    </div>

    <div class="large-5 medium-5 small-12 column">
        <div class="white-bg">
            blub! Sidebar-Alarm!
        </div>

    </div>
</div>
