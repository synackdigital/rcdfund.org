<article class="<?php post_class(); ?>">
  <header class="text-center">
    <h1 class="h2 entry-title mb-1"><?php the_title(); ?></h1>
    <p class="mt-1"><?php get_template_part('templates/entry-meta'); ?></p>
    <figure class="mt-1 mb-2"><?php the_post_thumbnail('large', array( 'class' => 'thumbnail' ) ); ?></figure>
    <img src="/assets/img/squiggle-brown.png" class="squiggle mt-2 mb-2">
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</article>
