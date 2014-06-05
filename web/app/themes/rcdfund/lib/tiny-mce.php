<?php
/**
 * Tiny MCE additions
 */

// Activate the Styles dropdown in TinyMCE
function mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'mce_buttons_2' );


function tiny_mce_before_init( $settings ) {
  $style_formats = array(
    array(
      'title' => 'Button, dark blue',
      'selector' => 'a',
      'classes' => 'btn btn-darkblue'
    ),
    array(
      'title' => 'Button, teal',
      'selector' => 'a',
      'classes' => 'btn btn-teal'
    ),
    array(
      'title' => 'Button, sand',
      'selector' => 'a',
      'classes' => 'btn btn-sand'
    ),
    array(
      'title' => 'Button, dust',
      'selector' => 'a',
      'classes' => 'btn btn-dust'
    ),
    array(
      'title' => 'Button, near white',
      'selector' => 'a',
      'classes' => 'btn btn-nearwhite'
    ),
    array(
      'title' => 'Button, yellow',
      'selector' => 'a',
      'classes' => 'btn btn-yellow'
    ),
    array(
      'title' => 'Button, pink',
      'selector' => 'a',
      'classes' => 'btn btn-pink'
    ),
    array(
      'title' => 'Button, red',
      'selector' => 'a',
      'classes' => 'btn btn-red'
    ),
    array(
      'title' => 'Button, brown',
      'selector' => 'a',
      'classes' => 'btn btn-brown'
    ),
    array(
      'title' => 'Lead paragraph',
      'selector' => 'p',
      'classes' => 'lead'
    ),
    array(
      'title' => 'Cursive',
      'selector' => 'p',
      'classes' => 'cursive'
    )
  );
  $settings['style_formats'] = json_encode( $style_formats );

  return $settings;
}
add_filter( 'tiny_mce_before_init', 'tiny_mce_before_init' );
