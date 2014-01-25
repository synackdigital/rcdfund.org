<article class="<?php post_class(); ?>">
  <header class="text-center">
    <h1 class="h3 entry-title mb-1">
      <?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?>
      <small class="mt-1"><?php get_template_part('templates/entry-meta'); ?></small>
    </h1>
    <img src="/assets/img/squiggle-darkblue.png" class="inline" style="width:340px;height:auto;">
    <figure class="mt-1 mb-2"><?php the_post_thumbnail('large', array( 'class' => 'thumbnail' ) ); ?></figure>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
