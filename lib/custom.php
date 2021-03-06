<?php
/**
 * Customize Login Screen
 */

function my_login_logo() { ?>
    <style type="text/css">
        body.login {
            background: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/img/bg.jpg) no-repeat fixed;
            background-size: cover;
        }
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/img/logo.png);
            padding-bottom: 30px;
            width: auto;
			background-size: auto;
            height: 130px;
        }
    </style>

    <?php echo my_favicon_url();
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_favicon_url() {
    return '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/img/favicon.png' . '" />';
}

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Anisah';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
* Add Favicon in admin panel
*/

function add_admin_area_favicon() {
    echo my_favicon_url();
}
add_action('admin_head', 'add_admin_area_favicon');

/**
 * Add new image size for homepage service tiles
 */

if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'medium', 568, 9999 ); //250 pixels wide (and unlimited height)
    //add_image_size( 'member-fotos', 450, 350, true );
}

update_option( 'medium_size_w', '568' );
update_option( 'medium_size_h', '9999' );

set_post_thumbnail_size('150', '100', true);

function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
add_filter( 'post_thumbnail_html', 'remove_img_attr' );

/* Insert rel="lightbox" attribute in every image link in posts */

function add_lightbox_rel( $html ) {
    $pattern = '/<a(.*?)href="(.*?).(bmp|gif|jpeg|jpg|png)"(.*?)>/i';
    $replacement = '<a$1href="$2.$3" data-rel=\'lightbox-pp_gal\'$4>';
    $html = preg_replace( $pattern, $replacement, $html );
   return $html;
}
add_filter( 'image_send_to_editor', 'add_lightbox_rel', 10 );

// Use shortcodes in text widgets.
add_filter( 'widget_text', 'do_shortcode' );