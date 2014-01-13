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
  <div class="absolute pin-all bg-cover hidden-xs" style="right:50%; background-image:url(<?php echo get_thumbnail_url_by_content_slug('our-mission'); ?>);"></div>
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 col-sm-offset-7 keyline-right">
        <?php echo do_shortcode("[insert page='our-mission' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="fill-darkblue relative">
  <div class="absolute pin-all bg-cover hidden-xs" style="left:50%; background-image:url(<?php echo get_thumbnail_url_by_content_slug('what-is-an-ependymoma'); ?>);"></div>
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 keyline-left">
        <?php echo do_shortcode("[insert page='what-is-an-ependymoma' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="fill-sand">
  <div class="container">
    <div class="row text-center pt-4 pb-4">
      <img src="/assets/img/squiggle-darkblue.png" class="center-block mb-4" style="width:340px;height:auto;">
      <div class="col-xs-12 col-md-4 keyline-vertical">
        <?php echo do_shortcode("[insert page='research' display='insert-content.php']"); ?>
      </div>
      <div class="col-xs-12 col-md-4 keyline-right">
        <?php echo do_shortcode("[insert page='care' display='insert-content.php']"); ?>
      </div>
      <div class="col-xs-12 col-md-4 keyline-right">
        <?php echo do_shortcode("[insert page='develop' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>
