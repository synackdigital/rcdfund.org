<div class="texture-sand-paper" id="main" role="main">
  <div class="container">
  <?php while (have_posts()) : the_post(); ?>
    <div class="row mt-1 mb-2">
      <div class="col-xs-12 col-sm-9 col-sm-offset-3 mt-1 mb-1 keyline-left">
        <?php get_template_part('templates/content', 'single'); ?>
      </div>
    </div>
  <?php endwhile; ?>
  </div>
</div>
