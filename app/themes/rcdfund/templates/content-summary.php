<article class="<?php post_class(); ?>">
  <header>
    <figure class="pull-left" style="margin-right:20px;margin-bottom:20px;"><?php the_post_thumbnail('thumbnail', array( 'class' => 'thumbnail' ) ); ?></figure>
    <h1 class="h2 entry-title">
      <?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?>
      <small class="mt-1"><?php get_template_part('templates/entry-meta'); ?></small>
    </h1>
  </header>
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div>
</article>
