<div class="texture-paper">
  <div class="container">

  <?php if (!have_posts()) : ?>
  <div class="row">
    <div class="alert col-xs-12 col-sm-6 col-sm-offset-3">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <?php get_template_part('templates/content', get_post_format()); ?>
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
