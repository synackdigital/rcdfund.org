<?php while (have_posts()) : the_post(); ?>
<article class="article texture-dust-paper" id="main" role="main">
  <div class="container">
    <div class="row text-center pt-1 pb-4">
      <div class="col-lg-6 col-lg-offset-3">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
<?php endwhile; ?>

<?php
// Load additional content template if available
if (locate_template('templates/content-' . $post->post_name . '.php') != '') :
  get_template_part('templates/content', $post->post_name);
endif;
?>

<?php
// Display Connorisms if available
if ( post_type_exists('connorism') ) :
  $connorisms = new WP_Query(array(
    'post_type'       => 'connorism',
    'orderby'         => 'rand',
    'posts_per_page'  => 1
  ));
  while ( $connorisms->have_posts() ) : $connorisms->the_post();
    get_template_part('templates/content', 'connorism');
  endwhile;
endif;
?>
