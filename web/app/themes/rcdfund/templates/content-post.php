<?php
// Get a single post category
$categories = get_the_category();
$category = $categories[0]->slug;

// Switch templates based on category
switch ( $category ) :

  // Category: in-the-news
  case 'in-the-news' : ?>
  <blockquote <?php post_class('mb-md mt-md'); ?>>
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
  <?php break;

  // All other categories
  default : ?>
  <article <?php post_class('mb-md mt-lg text-center'); ?>>
    <header>
      <?php if ( has_post_thumbnail() ) : ?>
        <figure class="mt-1 mb-2"><?php the_post_thumbnail('large', array( 'class' => 'thumbnail center-block' ) ); ?></figure>
      <?php endif; ?>
      <h1 class="entry-title h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </header>
    <div class="entry-summary">
      <div class="lead"><?php the_excerpt(); ?></div>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
  </article>
  <?php break;
endswitch;
