<?php $categories = get_the_category(); ?>
  <article class="<?php post_class(); ?>">
    <h1 class="h3 entry-title">
      <?php
      if ( 'in-the-news' == $categories[0]->slug ) :
        echo '&ldquo;' .  get_the_title() . '&rdquo;';
      else :
        echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
      endif;
      ?>
      <small class="mt-1"><?php get_template_part('templates/entry-meta'); ?></small>
    </h1>
  </article>
