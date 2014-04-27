<?php
// Get a single post category
$categories = get_the_category();
$category = $categories[0]->slug;

// Switch templates based on category
switch ( $category ) :

  // Category: in-the-news
  // TODO: Create template
  case 'in-the-news' : ?>
  <?php break;

  // All other categories
  default : ?>
  <article <?php post_class('mb-md mt-lg relative'); ?>>
    <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) : ?>
        <figure><?php the_post_thumbnail('large', array( 'class' => 'thumbnail fullwidth' ) ); ?></figure>
      <?php endif; ?>
      <header class="absolute pin">
        <h1 class="entry-title text-center h3 absolute pin-bottom"><?php the_title(); ?></h1>
      </header>
    </a>
  </article>
  <?php break;
endswitch;
