<?php
/*
Template Name: 3 Spalten
*/
?>

<div class="row">
    <div class="large-12 medium-12 small-12 column">
        <div class="white-bg vines">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>

            <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
                <li>
                    <?php get_template_part('templates/content', 'page'); ?>
                    <?php endwhile ?>
                </li>

                <li>
                    <?php the_field('3-col-text_col2'); ?>
                </li>

                <li>
                    <?php the_field('3-col-text_col3'); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
