<?php

// Check to see if the including page has part_blocks attached to it
if ( have_rows('part_blocks') ) : while ( have_rows('part_blocks') ) : the_row();

  // Get field data
  $parts                  = get_sub_field('parts');
  $sort_order             = get_sub_field('sort_order');
  $layout                 = get_sub_field('layout');
  $background_color       = get_sub_field('background_color');
  $background_texture     = get_sub_field('background_texture');
  $background_size        = get_sub_field('background_size');
  $min_height             = get_sub_field('min_height');

  // Generate a unique ID to identify this block
  $uniqid = uniqid();

  // Store the number of parts for quick access
  $parts_count = count( $parts );

  // Rearrange parts if sort order is specified
  // $sort_order is expected to be a csv of post IDs
  if ( $sort_order ) :

    // Convert csv to array, in inverse order
    str_replace(' ', '', $sort_order);
    $sort_order = explode(',', $sort_order);
    $sort_order = array_reverse($sort_order);

    // Loop array of sort values
    foreach ( $sort_order as $sort_order_key => $sort_order_value ) :

      // Find the corresponding content object for this sort value
      $parts_clone = $parts;
      foreach ( $parts as $part_key => $part ) :
        if ( $part->ID == $sort_order_value ) :

          // Move matched content object to top
          $matched_part = $parts_clone[$part_key];
          unset( $parts_clone[$part_key] );
          $parts_clone = array_merge( array( $part_key => $matched_part ), $parts_clone );
          unset( $matched_part );
        endif;
      endforeach;

      // Save the sorted parts block
      $parts = $parts_clone;
      unset( $parts_clone );

    endforeach;
  endif;

  // Retrieve the template for this block or fall back to default
  $template = locate_template( array(
    'templates/partblock-'.$layout.'.php',
    'templates/partblock.php'
  ) );

  // Load template
  if ( $template ) : include( $template ); endif;

endwhile; endif;
