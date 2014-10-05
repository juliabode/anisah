<?php
/*
Template Name: 1 Spalte und Bilder
*/
?>

<div class="row">
    <div class="medium-8 small-12 column">
        <div class="white-bg vines">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>
            <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile ?>
        </div>
    </div>

    <div class="medium-4 small-12 column image-list">
        <?php if( have_rows('2-col-pics_pictures') ) { ?>
        <ul>
            <?php while ( have_rows('2-col-pics_pictures') ) { the_row(); ?>
                <li>
                    <?php $sub = get_sub_field('2-col-pics_picture'); ?>
                    <img src="<?php echo $sub['url']; ?>">
                </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
</div>