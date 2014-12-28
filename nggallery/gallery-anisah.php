<?php 
/**
Template Page for the gallery overview

Follow variables are useable :

    $gallery     : Contain all about the gallery
    $images      : Contain all images, path, title
    $pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>

<div class="column small-12 medium-8">
    <?php if (!empty ($gallery)) : ?>

    <div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>">

    <?php if ($gallery->show_slideshow) { ?>
        <!-- Slideshow link -->
        <div class="slideshowlink">
            <a class="slideshowlink" href="<?php echo nextgen_esc_url($gallery->slideshow_link) ?>">
                <?php echo $gallery->slideshow_link_text ?>
            </a>
        </div>
    <?php } ?>

    <?php if ($gallery->show_piclens) { ?>
        <!-- Piclense link -->
        <div class="piclenselink">
            <a class="piclenselink" href="<?php echo nextgen_esc_url($gallery->piclens_link) ?>">
                <?php _e('[View with PicLens]','nggallery'); ?>
            </a>
        </div>
    <?php } ?>

    <ul class="small-block-grid-2 medium-block-grid-3">
        <!-- Thumbnails -->
        <?php foreach ( $images as $image ) : ?>
        
        <li id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box" <?php echo $image->style ?> >
            <div class="ngg-gallery-thumbnail" >
                <a href="<?php echo nextgen_esc_url($image->imageURL) ?>"
                   title="<?php echo esc_attr($image->description) ?>"
                   rel="lightbox"
                   <?php echo $image->thumbcode ?> >
                    <?php if ( !$image->hidden ) { ?>
                    <img title="<?php echo esc_attr($image->alttext) ?>" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
                    <?php } ?>
                </a>
            </div>
        </li>

        <?php endforeach; ?>
    <ul>
        
        <!-- Pagination -->
        <?php echo $pagination ?>

    </div>

    <?php endif; ?>
</div>

<div class="column small-12 medium-4">
    <div class="white-bg">

        <?php echo do_shortcode('[album id=1 template=anisah]'); ?>
        <?php global $nggdb;
            $galleries = array();

            $album = $nggdb->find_album(1);

            foreach( $album->gallery_ids as $galleryid ){
                $gallery = $nggdb->find_gallery($galleryid);
                $galleries[$galleryid]['title'] = $gallery->title;
                $galleries[$galleryid]['url'] = get_bloginfo('url') . '/portfolio/?album=all&gallery=' . $galleryid;
            }

            echo '<ul class="sidebar-gallery-link">';
            foreach($galleries as $category){
                echo '<li><a href="' . $category['url'] . '">' . $category['title'] . '</a></li>';
            }
            echo '</ul>';
        ?>
    </div>
</div>
