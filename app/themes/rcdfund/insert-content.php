<?php
the_post();
$the_title = ( get_field('title_html') ) ? get_field('title_html') : get_the_title();
?>
<section>
  <h1 class="h2"><?php echo $the_title; ?></h1>
  <?php echo the_content(); ?>
</section>