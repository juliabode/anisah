<?php
/*
Template Name: News
*/
?>

<div class="row">
    <div class="white-bg">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php query_posts( 'post_type=post&orderby=date' ); ?>
        <?php get_template_part('templates/content', 'single'); ?>
    </div>
</div>
