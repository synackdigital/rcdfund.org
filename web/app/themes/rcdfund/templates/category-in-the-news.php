<?php
// Special template for "In the news" list
// Include directly in another template, or include in content with [in-the-news] shortcode

$mentions = new WP_Query(array(
  'category_name'   => 'in-the-news',
  'posts_per_page'  => 5
));

if ( $mentions ) : while ( $mentions->have_posts() ) : $mentions->the_post(); ?>
<blockquote>
  <q><?php the_title(); ?></q>
  <?php if ( get_field('source') ) : ?>
  <cite class="mt-xs">&mdash;
  <?php
  if (get_field('date')) echo date('F j, Y', strtotime(get_field('date'))).', ';
  if (get_field('url')) echo '<a href="'.get_field('url').'" target="_blank">';
  the_field('source');
  if (get_field('url')) echo '</a>';
  ?>
  </cite>
  <?php endif; ?>
</blockquote>
<?php endwhile; endif; wp_reset_postdata();
