<?php
/**
 * Facebook Open Graph integration
 */

// Add Open Graph Language Attributes
add_filter('language_attributes', 'opengraph_language_attributes');
function opengraph_language_attributes($language_attributes) {
  return 'xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" ' . $language_attributes;
}

// Add Open Graph meta tags
add_action( 'wp_head', 'opengraph_meta', 5 );
function opengraph_meta() {
  global $post;

  $og_type = ( is_singular() ) ? "article" : "website";

  if (has_post_thumbnail( $post->ID )) :
    $post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
    $og_image = esc_attr( $post_thumbnail[0] );
  else :
    $og_image = LOGOTYPE_URL;
  endif;

  echo '<meta property="fb:admins" content="616315737">'; // UserID of Marek Wolski
  echo '<meta property="og:site_name" content="'. get_bloginfo('name') .'">';
  echo '<meta property="og:url" content="'. get_permalink() .'">';
  echo '<meta property="og:type" content="'. $og_type .'">';
  echo '<meta property="og:title" content="'. get_the_title() .'">';
  echo '<meta property="og:image" content="'. $og_image .'">';
}
