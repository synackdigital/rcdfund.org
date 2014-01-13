<?php while (have_posts()) : the_post(); ?>
<article class="article fill-dust" id="main" role="main">
  <div class="container">
    <div class="row text-center pt-1 pb-4">
      <div class="col-lg-6 col-lg-offset-3">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
<?php endwhile; ?>

<section class="fill-yellow relative">
  <div class="absolute pin-all bg-cover hidden-xs" style="right:50%; background-image:url(http://waxwanedotcom.files.wordpress.com/2012/05/dj7.jpg);"></div>
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 col-sm-offset-7 keyline-right">
        <?php echo do_shortcode("[insert page='our-mission' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="fill-darkblue relative">
  <div class="container">
  <div class="absolute pin-all bg-cover hidden-xs" style="left:50%; background-image:url(http://konstpretton.se/wp-content/uploads/2013/12/tenenbaum.jpg);"></div>
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 keyline-left">
        <?php echo do_shortcode("[insert page='what-is-an-ependymoma' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>
