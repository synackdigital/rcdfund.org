<div class="col-xs-12 mt-2 mb-3">
  <h2 class="h3">
    <?php the_title(); ?>
    <small class="mt-1">
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
    </small>
  </h2>
</div>
