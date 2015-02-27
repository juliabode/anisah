<?php
/*
Template Name: 1 Spalte und horizontale Bilder
*/
?>

<div class="row">
    <div class="small-12 column">
        <div class="white-bg vines">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/page', 'header'); ?>
            <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile ?>
        </div>
    </div>

    <div class="small-12 column image-list">
        <?php if( have_rows('1-col-pics_pictures') ) { ?>
        <ul class="small-block-grid-2 medium-block-grid-4">
            <?php while ( have_rows('1-col-pics_pictures') ) { the_row(); ?>
                <li>
                    <?php $sub = get_sub_field('1-col-pics_picture');?>
                    <a href="<?php echo $sub['url']; ?>" rel="lightbox[pp_gal]"><img src="<?php echo $sub['url']; ?>"></a>
                </li>
            <?php } ?>
        </ul>
        <?php } ?>
    </div>
</div>