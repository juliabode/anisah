<?php
/*
Template Name: Kontakt
*/
?>

<div class="row">
    <div class="large-12 medium-12 small-12 column">
        <div class="white-bg vines">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>

            <div class="row">
                <div class="small-12 medium-8 column">
                    <?php get_template_part('templates/content', 'page'); ?>
                    <?php endwhile ?>
                </div>

                <div class="small-12 medium-4 column">
                    <?php the_field('contact_col2'); ?>
                </div>
            </ul>
        </div>
    </div>
</div>