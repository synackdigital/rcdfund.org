<?php
/**
 * Custom post types
 */

// Register post type "Part"
add_action('init', 'rcdfund_register_cpt_part');
function rcdfund_register_cpt_part() {
  register_post_type('part', array(
    'label' => 'Parts',
    'description' => 'Parts offer a way of organizing content within pages with layout templates.',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'part', 'with_front' => true),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => '20',
    'supports' => array('title','editor','revisions','thumbnail'),
    'labels' => array (
      'name' => 'Parts',
      'singular_name' => 'Part',
      'menu_name' => 'Parts',
      'add_new' => 'Add Part',
      'add_new_item' => 'Add New Part',
      'edit' => 'Edit',
      'edit_item' => 'Edit Part',
      'new_item' => 'New Part',
      'view' => 'View Parts',
      'view_item' => 'View Part',
      'search_items' => 'Search Parts',
      'not_found' => 'No Parts Found',
      'not_found_in_trash' => 'No Parts Found in Trash',
      'parent' => 'Parent Part',
      )
    )
  );
}

// Register post type "Content"
// TO BE REPLACED BY "PART"
add_action('init', 'rcdfund_register_cpt_content');
function rcdfund_register_cpt_content() {
  register_post_type('content', array(
    'label' => 'Content',
    'description' => 'Content for display in pages',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'content', 'with_front' => true),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => '20',
    'supports' => array('title','editor','revisions','thumbnail'),
    'labels' => array (
      'name' => 'Content',
      'singular_name' => 'Content',
      'menu_name' => 'Content',
      'add_new' => 'Add Content',
      'add_new_item' => 'Add New Content',
      'edit' => 'Edit',
      'edit_item' => 'Edit Content',
      'new_item' => 'New Content',
      'view' => 'View Content',
      'view_item' => 'View Content',
      'search_items' => 'Search Content',
      'not_found' => 'No Content Found',
      'not_found_in_trash' => 'No Content Found in Trash',
      'parent' => 'Parent Content',
      )
    )
  );
}

// Register post type "Connorism"
add_action('init', 'rcdfund_register_cpt_connorism');
function rcdfund_register_cpt_connorism() {
  register_post_type('connorism', array(
    'label' => 'Connorisms',
    'description' => 'Random wisdoms',
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'capability_type' => 'page',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'connorism', 'with_front' => true),
    'query_var' => true,
    'exclude_from_search' => true,
    'menu_position' => '21',
    'supports' => array('title'),
    'labels' => array (
      'name' => 'Connorisms',
      'singular_name' => 'Connorism',
      'menu_name' => 'Connorisms',
      'add_new' => 'Add Connorism',
      'add_new_item' => 'Add New Connorism',
      'edit' => 'Edit',
      'edit_item' => 'Edit Connorism',
      'new_item' => 'New Connorism',
      'view' => 'View Connorism',
      'view_item' => 'View Connorism',
      'search_items' => 'Search Connorisms',
      'not_found' => 'No Connorisms Found',
      'not_found_in_trash' => 'No Connorisms Found in Trash',
      'parent' => 'Parent Connorism',
      )
    )
  );
}

// Return a random Connorism
function random_connorism() {
  $connorisms = new WP_Query(array(
    'post_type'       => 'connorism',
    'orderby'         => 'rand',
    'posts_per_page'  => 1
  ));
  while ( $connorisms->have_posts() ) : $connorisms->the_post();
    return get_the_title();
  endwhile;
}

// [connorism]
function shortcode_connorism( $atts ) {
  return random_connorism();
}
add_shortcode( 'connorism', 'shortcode_connorism' );
