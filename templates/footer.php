<footer class="content-info" role="contentinfo">
  <?php $options = get_option('plugin_options');?>
  <div class="row">
    <p>
         &copy; <?php echo date('Y'); ?> <a class="no-link" href="/wp-admin"><?php bloginfo('name'); ?></a>
        <?php if ($options['anisah_imprint_link']) :
                echo '<a class="imprint" href="' . $options['anisah_imprint_link'] . '">';
                _e('Imprint', 'roots');
                echo '</a>' ;
            endif;?>
    </p>
  </div>
</footer>

