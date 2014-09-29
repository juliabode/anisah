<?php
/*
Template Name: News
*/
?>

<div class="row">
    <div class="white-bg">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/page', 'header'); ?>
          <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile; ?>

        Test Test

        <?php query_posts( 'post_type=post&orderby=date' ); ?>
        <?php get_template_part('templates/content', 'single'); ?>
    </div>
</div>
