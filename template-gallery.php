<?php
/*
Template Name: Galerie
*/
?>

<div class="large-12 medium-12 small-12 column">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        <?php endwhile ?>
</div>
