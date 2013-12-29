<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> role="document">

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    // Check whether to use the landing page
    if ( is_page_template('landing.php') ) :
      include roots_template_path();

    // Else use the default Roots setup
    else :

      do_action('get_header');

      get_template_part('templates/header');

      include roots_template_path();

      get_template_part('templates/footer');

    endif;
  ?>

</body>
</html>
