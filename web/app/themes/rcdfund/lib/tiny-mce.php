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
