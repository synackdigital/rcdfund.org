<div class="texture-paper">
  <div class="container">

  <header class="row text-center mt-4 mb-3">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <h1 class="h2">Brain Matters <small>Updates from the RCD Fund</small></h1>
      <img src="/assets/img/squiggle-darkblue.png" class="mt-1 mb-1" style="width:340px;height:auto;">
      <ul class="list-inline categories">
         <?php wp_list_categories( [
            'hierarchical' => false,
            'title_li' => '',
            'show_option_none' => '',
            'depth' => 1
         ] ); ?>
      </ul>
    </div>
  </header>

  <?php if (!have_posts()) : ?>
  <div class="row mb-1">
    <div class="alert col-xs-12 col-sm-6 col-sm-offset-3">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
  <div class="row mb-1">
    <div class="col-xs-12 col-sm-9 col-sm-offset-3 keyline-left">
    <?php get_template_part('templates/content', 'single-summary'); ?>
    </div>
  </div>
  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?>

  </div>
</div>
