<?php if ( get_field('source') ) : ?>
  &mdash;
  <?php
  if (get_field('url'))
    echo '<a href="'.get_field('url').'" target="_blank">';

  the_field('source');

  if (get_field('date'))
    echo ', '.get_field('date');

  if (get_field('url'))
    echo '</a>';
?>
<?php else : ?>
<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>,
<?php the_category(' &bull; '); ?>
<?php endif; ?>
