<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <div class="row">
        <?php
          if (has_nav_menu('primary_navigation_left')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation_left', 'menu_class' => 'nav navbar-nav small-4 columns'));
          endif;
        ?>

        <div class="logo-bg small-4 columns">
          <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <?php
          if (has_nav_menu('primary_navigation_right')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation_right', 'menu_class' => 'nav navbar-nav small-4 columns end'));
          endif;
        ?>
      </div>
    </nav>
  </div>
</header>
