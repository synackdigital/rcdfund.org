<section class="texture-yellow-paper relative">
  <div class="absolute pin-all bg-cover hidden-xs" style="right:50%; background-image:url(<?php echo get_thumbnail_url_by_content_slug('our-mission'); ?>);"></div>
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 col-sm-offset-7 keyline-right">
        <?php echo do_shortcode("[insert page='our-mission' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="texture-darkblue-paper relative">
  <div class="absolute pin-all bg-cover hidden-xs" style="left:50%; background-image:url(<?php echo get_thumbnail_url_by_content_slug('what-is-an-ependymoma'); ?>);"></div>
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-5 keyline-left">
        <?php echo do_shortcode("[insert page='what-is-an-ependymoma' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="texture-sand-paper">
  <div class="container">
    <div class="row text-center pt-4 pb-4">
      <img src="/assets/img/squiggle-darkblue.png" class="squiggle mb-3">
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

<?php
// Display In The News if available
$mentions = new WP_Query(array(
  'category_name'   => 'in-the-news',
  'posts_per_page'  => 5
));
if ( $mentions ) :
?>
<section class="texture-teal-grid">
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <h1 class="h2 col-xs-12"><small>In</small> the News</h1>
      <img src="/assets/img/squiggle-red.png" class="squiggle mb-1">
      <?php while ( $mentions->have_posts() ) : $mentions->the_post(); ?>
        <div class="col-xs-12 mb-1">
        <?php get_template_part('templates/content', 'quote'); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="team texture-darkblue-paper">
  <div class="container">
    <div class="row text-center pt-2 pb-3">
      <div class="col-xs-12 col-sm-6">
        <h1 class="h3"><small>Our</small> Board &amp; Team</h1>
        <ul class="descriptions relative list-unstyled">
          <li><?php echo do_shortcode("[insert page='liz-dawes' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='scott-dawes' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='jenny-selleck' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='marek-wolski' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='celia-williams' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='debbie-dawes-clark' display='insert-content.php']"); ?></li>
          <li><?php echo do_shortcode("[insert page='jane-abbott' display='insert-content.php']"); ?></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-6 relative">
        <ul class="images relative list-unstyled">
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('liz-dawes'); ?>" alt=""></li>
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('scott-dawes'); ?>" alt=""></li>
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('jenny-selleck'); ?>" alt=""></li>
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('marek-wolski'); ?>" alt=""></li>
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('celia-williams'); ?>" alt=""></li>
          <li><img class="thumbnail" src="<?php echo get_thumbnail_url_by_content_slug('debbie-clarke-dawes'); ?>" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
</section>
