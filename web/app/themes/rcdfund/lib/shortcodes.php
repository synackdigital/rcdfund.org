<?php
/**
 * Shortcodes for use in post/page content
 */

// [posts]
// Returns a list of posts where included
// Accepts the same arguments as get_posts()
function shortcode_posts( $atts ) {

  // Extract attributes from shortcode, or set defaults
  extract( shortcode_atts( array(
    'posts_per_page'    => get_option( 'posts_per_page' ),
    'offset'            => 0,
    'category'          => '',
    'orderby'           => 'post_date',
    'order'             => 'DESC',
    'include'           => '',
    'exclude'           => '',
    'meta_key'          => '',
    'meta_value'        => '',
    'post_type'         => 'post',
    'post_mime_type'    => '',
    'post_parent'       => '',
    'post_status'       => 'publish',
    'suppress_filters'  => true,
    'as_thumbnail'      => false
  ), $atts, 'shortcode_posts' ) );

  // Enable the global $post object on pages
  global $post;

  // TODO: Get category id based on slug
  // $category = get_category_by_slug( $category );
  // $category = $category->term_id;

  // Get posts
  $posts = get_posts( array(
    'posts_per_page'   => $posts_per_page,
    'offset'           => $offset,
    'category'         => $category,
    'orderby'          => $orderby,
    'order'            => $order,
    'include'          => $include,
    'exclude'          => $exclude,
    'meta_key'         => $meta_key,
    'meta_value'       => $meta_value,
    'post_type'        => $post_type,
    'post_mime_type'   => $post_mime_type,
    'post_parent'      => $post_parent,
    'post_status'      => $post_status,
    'suppress_filters' => $suppress_filters
  ) );

  // Loop posts
  foreach ( $posts as $key => $post ) :
    setup_postdata( $post );
    if ( $as_thumbnail ) :
      get_template_part( 'templates/content', $post_type.'-thumbnail' );
    else :
      get_template_part( 'templates/content', $post_type );
    endif;
  endforeach;

  // Clean up
  unset( $key );
  unset( $post );
  wp_reset_postdata();
}
add_shortcode( 'posts', 'shortcode_posts' );


// [template]
// Requires a page template where included
function shortcode_template( $atts ) {

  // Extract attributes from shortcode, or set defaults
  extract( shortcode_atts( array(
    'name'           => ''
  ), $atts, 'shortcode_template' ) );

  get_template_part('templates/'.$name);
}
add_shortcode( 'template', 'shortcode_template' );
