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

<section class="fill-nearwhite-yellow">
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5">
        -
      </div>
      <div class="col-xs-12 col-sm-5 col-sm-offset-2">
        <?php echo do_shortcode("[insert page='our-mission']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="fill-darkblue-nearwhite">
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5">
        <?php echo do_shortcode("[insert page='what-is-an-ependymoma']"); ?>
      </div>
      <div class="col-xs-12 col-sm-5 col-sm-offset-2">
        -
      </div>
    </div>
  </div>
</section>
