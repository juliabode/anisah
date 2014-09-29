<?php

function merge_option_default_variables() {
  $options = get_option('plugin_options');

  $defaults = array(
    'anisah_facebook_link'          => '',
    'anisah_twitter_link'           => '',
    'anisah_google_link'            => '',
    'anisah_mail_link'              => '',
    'anisah_linkedin_link'          => '',
    'anisah_xing_link'              => '',
    'anisah_skype_link'             => '',
    'anisah_youtube_link'           => '',
    'anisah_vimeo_link'             => '',
    'anisah_flickr_link'            => '',
    'anisah_rss_link'               => '',
    'anisah_imprint_link'           => '',
  );

  return wp_parse_args( $options, $defaults );
}

function create_theme_options_page() {
    // Global variable for Themes' settings page hook
    global $anisah_settings_page;

    $anisah_settings_page = add_menu_page('Anisah Optionen', 'Anisah Optionen', 'read', 'anisah_settings', 'build_options_page', 'dashicons-lightbulb');

    // Add contextual help
    add_action( 'load-' . $anisah_settings_page, 'add_contextual_theme_help' );
}
add_action('admin_menu', 'create_theme_options_page');


function build_options_page() { ?>
    <div id="theme-options-wrap" class="widefat wrap">
        <div class="icon32" id="icon-options-general"><br /></div>
        <h2>Zusätzliche Einstellungen</h2>
        <?php settings_errors(); ?>

        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('plugin_options'); ?>
            <?php do_settings_sections(__FILE__); ?>
            <p class="submit"><input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" /></p>
        </form>
    </div>
<?php }


function add_contextual_theme_help() {
    global $anisah_settings_page;

    // Get the current screen object
    $screen = get_current_screen();

    $tabs = array(
        // The assoc key represents the ID
        // It is NOT allowed to contain spaces
        'anisah-intro' => array(
            'title'   => 'Lies mich',
            'content' => 'Tach auch.<br><h3>Supported Web Browsers</h3><br><h3>Support</h3>'
         ),
        'anisah-menu' => array(
            'title'   => 'Menu',
            'content' => file_get_contents( get_template_directory() . '/help/menu.html' )
        )
    );

    foreach ( $tabs as $id => $data ) {
        $screen->add_help_tab( array(
            'id'       => $id,
            'title'    => __( $data['title'], 'root' ),
            'content'  => $data['content']
            )
        );
    }
}


function register_and_build_fields() {
  register_setting('plugin_options', 'plugin_options', 'validate_setting');

  add_settings_section('social_media_section', 'Social Media Links', 'section_cb', __FILE__);
  add_settings_field('anisah_facebook_link', 'Facebook:', 'anisah_facebook_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_twitter_link', 'Twitter:', 'anisah_twitter_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_google_link', 'Google+:', 'anisah_google_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_mail_link', 'Email:', 'anisah_mail_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_linkedin_link', 'LinkedIn:', 'anisah_linkedin_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_xing_link', 'Xing:', 'anisah_xing_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_skype_link', 'Skype:', 'anisah_skype_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_youtube_link', 'Youtube:', 'anisah_youtube_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_vimeo_link', 'Vimeo:', 'anisah_vimeo_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_flickr_link', 'Flickr:', 'anisah_flickr_link', __FILE__, 'social_media_section');
  add_settings_field('anisah_rss_link', 'RSS:', 'anisah_rss_link', __FILE__, 'social_media_section');

  add_settings_section('main_section', 'Sonstige Einstellungen', 'section_cb', __FILE__);
  add_settings_field('anisah_imprint_link', 'Link zum Impressum:', 'imprint_link_setting', __FILE__, 'main_section');
}
add_action('admin_init', 'register_and_build_fields');

function validate_setting($plugin_options) { return $plugin_options; }

function section_cb() {}

function imprint_link_setting() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_imprint_link]' type='text' value='{$options['anisah_imprint_link']}' class='regular-text'/>";
}

function anisah_facebook_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_facebook_link]' type='text' value='{$options['anisah_facebook_link']}' class='regular-text'/>";
}

function anisah_twitter_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_twitter_link]' type='text' value='{$options['anisah_twitter_link']}' class='regular-text'/>";
}

function anisah_google_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_google_link]' type='text' value='{$options['anisah_google_link']}' class='regular-text'/>";
}

function anisah_mail_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_mail_link]' type='text' value='{$options['anisah_mail_link']}' class='regular-text'/>";
}

function anisah_linkedin_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_linkedin_link]' type='text' value='{$options['anisah_linkedin_link']}' class='regular-text'/>";
}

function anisah_xing_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_xing_link]' type='text' value='{$options['anisah_xing_link']}' class='regular-text'/>";
}

function anisah_skype_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_skype_link]' type='text' value='{$options['anisah_skype_link']}' class='regular-text'/>";
}

function anisah_youtube_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_youtube_link]' type='text' value='{$options['anisah_youtube_link']}' class='regular-text'/>";
}

function anisah_vimeo_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_vimeo_link]' type='text' value='{$options['anisah_vimeo_link']}' class='regular-text'/>";
}

function anisah_flickr_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_flickr_link]' type='text' value='{$options['anisah_flickr_link']}' class='regular-text'/>";
}

function anisah_rss_link() {
  $options = merge_option_default_variables();
  echo "<input name='plugin_options[anisah_rss_link]' type='text' value='{$options['anisah_rss_link']}' class='regular-text'/>";
}