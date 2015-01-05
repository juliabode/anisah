<?php
/*
Template Name: Kalender
*/
?>

<div class="large-6 medium-6 small-12 column">
    <div class="white-bg vines">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile ?>
    </div>
</div>
<div class="large-6 medium-6 small-12 column">
    <?php the_field('calendar-field'); ?>
</div>
