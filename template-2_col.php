<?php
/*
Template Name: 2 Spalten
*/
?>

<div class="large-12 medium-12 small-12 column">
    <div class="white-bg vines">
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/page', 'header'); ?>

        <ul class="large-block-grid-2 medium-block-grid-2 small-block-grid-1">
            <li>
                <?php get_template_part('templates/content', 'page'); ?>
                <?php endwhile ?>
            </li>

            <li>
                <?php the_field('2-col-text_col2'); ?>
            </li>
        </ul>
    </div>
</div>
