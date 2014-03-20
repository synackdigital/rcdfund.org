<?php
/**
 * Custom post types
 */

// Content
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

// Connorism
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
