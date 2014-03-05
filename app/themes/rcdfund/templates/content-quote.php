  <article class="<?php post_class(); ?>">
    <blockquote>
      <q class="h3"><?php the_title(); ?></q>
      <?php if ( get_field('source') ) : ?>
      <cite class="mt-1">&mdash;
        <?php
        if (get_field('date'))
          echo date('F j, Y', strtotime(get_field('date'))).', ';

        if (get_field('url'))
          echo '<a href="'.get_field('url').'" target="_blank">';

        the_field('source');

        if (get_field('url'))
          echo '</a>';
      ?>
      </cite>
      <?php endif; ?>
    </h1>
  </article>
