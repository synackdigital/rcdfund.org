<?php
/**
 * Custom functions
 */

function get_page_id_by_slug( $page_slug, $output = OBJECT, $post_type = 'post' ) {
  $page = get_page_by_path($page_slug, $output, $post_type);
  if ($page) {
    return $page->ID;
  }
  else {
    return null;
  }
}

function get_thumbnail_url_by_content_slug( $content_slug ) {
  $attachment_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_page_id_by_slug( $content_slug, OBJECT, 'content') ), 'large');
  return $attachment_image_src[0];
}


// Activate the Styles dropdown in TinyMCE
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );


function my_mce_before_init( $settings ) {
  $style_formats = array(
    array(
      'title' => 'Lead paragraph',
      'selector' => 'p',
      'classes' => 'lead'
    ),
    array(
      'title' => 'Darkblue button',
      'selector' => 'a',
      'classes' => 'btn btn-darkblue'
    ),
    array(
      'title' => 'Teal button',
      'selector' => 'a',
      'classes' => 'btn btn-teal'
    ),
    array(
      'title' => 'Sand button',
      'selector' => 'a',
      'classes' => 'btn btn-sand'
    ),
    array(
      'title' => 'Dust button',
      'selector' => 'a',
      'classes' => 'btn btn-dust'
    ),
    array(
      'title' => 'Nearwhite button',
      'selector' => 'a',
      'classes' => 'btn btn-nearwhite'
    ),
    array(
      'title' => 'Yellow button',
      'selector' => 'a',
      'classes' => 'btn btn-yellow'
    ),
    array(
      'title' => 'Pink button',
      'selector' => 'a',
      'classes' => 'btn btn-pink'
    ),
    array(
      'title' => 'Red button',
      'selector' => 'a',
      'classes' => 'btn btn-red'
    ),
    array(
      'title' => 'Brown button',
      'selector' => 'a',
      'classes' => 'btn btn-brown'
    )
  );
  $settings['style_formats'] = json_encode( $style_formats );

  return $settings;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );
