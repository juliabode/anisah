<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">

    <nav class="collapse navbar-collapse" role="navigation">
      <div class="row pos--rel">
        <?php get_template_part('templates/social_media_icons'); ?>
        <div class="left-off-canvas-menu medium-4 columns">
          <?php
            if (has_nav_menu('primary_navigation_left')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation_left', 'menu_class' => 'nav navbar-nav off-canvas-list'));
            endif;
            if (has_nav_menu('primary_navigation_right')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation_right', 'menu_class' => 'nav navbar-nav hide-large hide-med end off-canvas-list'));
            endif;
          ?>
        </div>

        <a class="left-off-canvas-toggle menu-icon"><span></span></a>

        <div class="logo-bg small-offset-1 small-10 medium-4 columns">
          <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <?php
          if (has_nav_menu('primary_navigation_right')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation_right', 'menu_class' => 'nav navbar-nav small-4 columns hide-small end'));
          endif;
        ?>
      </div>
    </nav>
  </div>
</header>
