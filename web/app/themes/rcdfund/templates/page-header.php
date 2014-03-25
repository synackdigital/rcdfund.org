<header class="page-header">
  <?php $the_title = ( get_field('title_html') ) ? get_field('title_html') : get_the_title(); ?>
  <h1><?php echo $the_title; ?></h1>
  <img src="<?php echo IMAGES_DIRECTORY; ?>/darkblue_divider.png" class="divider">
</header>
