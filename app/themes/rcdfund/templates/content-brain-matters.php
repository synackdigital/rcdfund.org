<section class="texture-gray-grid">
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12">
        <?php echo do_shortcode("[insert page='the-brain-is-where-the-heart-is' display='insert-content.php']"); ?>
      </div>
    </div>
  </div>
</section>

<section class="fill-teal">
  <div class="container">
    <div class="row text-center pt-1 pb-2">
      <div class="col-xs-12 col-sm-6 keyline-left">
        <?php echo do_shortcode("[insert page='on-connor' display='insert-content.php']"); ?>
      </div>
      <div class="col-xs-12 col-sm-6">
        <img class="img-round" src="<?php echo get_thumbnail_url_by_content_slug('on-connor'); ?>" alt="">
      </div>
    </div>
  </div>
</section>

<section class="fill-red aeternumfortis">
  <div class="container">
    <div class="row">
      <h1 class="h2 col-xs-12 text-center mt-2 mb-1">
        #aeternumfortis
        <small>Connors spririt of eternal strength keeps on inspire</small>
      </h1>
    </div>
    <?php echo do_shortcode("[si_feed tag=aeternumfortis limit=4 size=medium wrapper=li link=false]"); ?>
  </div>
</section>
