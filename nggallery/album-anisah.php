<?php
/**
Template Page for the album overview

Follow variables are useable :

    $album       : Contain information about the first album
    $albums      : Contain information about all albums
    $galleries   : Contain all galleries inside this album
    $pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>

<div class="white-bg vines">

    <?php $thisPost = get_post(); ?>

    <div class="page-header">
        <h1><?php echo $thisPost->post_title; ?></h1>
    </div>

    <?php if (!empty ($galleries)) : ?>

        <ul class="ngg-albumoverview small-block-grid-1 medium-block-grid-2 large-block-grid-4">

            <!-- List of galleries -->
            <?php foreach ($galleries as $gallery) : ?>

            <li class="ngg-album-compact">
                <div class="ngg-album-compactbox">
                    <div class="ngg-album-link">
                        <a class="Link" href="<?php echo nextgen_esc_url($gallery->pagelink) ?>">
                            <img class="Thumb" alt="<?php echo esc_attr($gallery->title) ?>" src="<?php echo nextgen_esc_url($gallery->previewurl) ?>"/>
                        </a>
                    </div>
                </div>
                <?php if (!empty($image_gen_params)) {
                    $max_width = 'style="max-width: ' . ($image_gen_params['width'] + 20) . 'px"';
                } else {
                    $max_width = '';
                } ?>
                <h4>
                    <a class="ngg-album-desc"
                       title="<?php echo esc_attr($gallery->title) ?>"
                       href="<?php echo nextgen_esc_url($gallery->pagelink) ?>"
                       <?php echo $max_width; ?>>
                        <?php echo $gallery->title ?>
                    </a>
                </h4>
            </li>

            <?php endforeach; ?>

            <!-- Pagination -->
            <br class="ngg-clear"/>
            <?php echo $pagination ?>
        </ul>
    <?php endif; ?>
</div>
