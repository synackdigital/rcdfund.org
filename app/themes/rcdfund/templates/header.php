<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header" data-spy="affix" data-offset-top="160">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri() . '/assets/img/rcdfund-blue-sbm.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>" data-spy="affix" data-offset-top="160"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-primary navbar-nav'));
      endif;
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-secondary navbar-nav'));
      endif;
    ?>
    </nav>
  </div>
</header>
