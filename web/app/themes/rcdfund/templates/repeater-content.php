<?php
// ACF repeater for content
if ( have_rows('content_list') ) : while ( have_rows('content_list') ) : the_row();

  // Get field data
  $content_objects        = get_sub_field('content_objects');
  $sort_order             = get_sub_field('sort_order');
  $layout                 = get_sub_field('layout');
  $background_color       = get_sub_field('background_color');
  $background_texture     = get_sub_field('background_texture');
  $background_fit         = get_sub_field('background_fit');

  // Generate a unique ID to identify this row
  $uniqid = uniqid();

  // Count the number of objects
  $content_objects_count  = count($content_objects)
?>
<div class="wrap relative <?php echo implode(' ', array($layout, $background_color, $background_texture)); ?>">

<?php

// Rearrange content objects if sort order is specified
// $sort_order is expected to be a csv of post IDs
if ( $sort_order ) :

  // Convert csv to array, in inverse order
  str_replace(' ', '', $sort_order);
  $sort_order = explode(',', $sort_order);
  $sort_order = array_reverse($sort_order);

  // Loop array of sort values
  foreach ( $sort_order as $sort_order_key => $sort_order_value ) :

    // Find the corresponding content object
    $content_objects_clone = $content_objects;
    foreach ( $content_objects as $content_object_key => $content_object ) :
      if ( $content_object->ID == $sort_order_value ) :

        // Move content object to top
        $matched_content_object = $content_objects_clone[$content_object_key];
        unset( $content_objects_clone[$content_object_key] );
        $content_objects_clone = array_merge( array( $content_object_key => $matched_content_object ), $content_objects_clone );

        unset( $matched_content_object );
      endif;
    endforeach;
    $content_objects = $content_objects_clone;
    unset( $content_objects_clone );

  endforeach;
endif;

// Loop through each content object individually
foreach ( $content_objects as $key => $content_object ) :

  $content_title           = ( get_field('title_html', $content_object->ID) ) ? get_field('title_html', $content_object->ID) : $content_object->post_title;
  $content_title_class     = ( get_field('title_class', $content_object->ID) ) ? get_field('title_class', $content_object->ID) : '';

  $content_thumbnail       = ( has_post_thumbnail($content_object->ID) ) ? wp_get_attachment_image_src( get_post_thumbnail_id( $content_object->ID ), 'large' ) : null;
  $content_thumbnail_url   = ( $content_thumbnail ) ? $content_thumbnail[0] : '';

  // Serve different layouts
  switch ( $layout ) :

    // Centered
    case 'centered' : ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <article class="type-content text-center">
              <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
              <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
            </article>
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Full-width
    case 'full-width' : ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12">
            <article class="type-content text-center">
              <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
              <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
            </article>
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Full-bleed
    case 'full-bleed' : ?>
      <div class="content">
        <article class="type-content text-center">
          <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
          <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
        </article>
      </div><!-- /.content -->
    <?php break;

    // Side-by-side
    case 'side-by-side' : ?>
      <?php if ($key === 0) : ?><div class="container"><div class="content row"><?php endif; ?>
      <?php
      $column_max_count   = 4;
      $column_count       = ( $content_objects_count <= $column_max_count ) ? $content_objects_count : $column_max_count;
      $column_class       = 'col-xs-12 col-sm-'.( 12 / $column_count );
      ?>
      <article class="type-content text-center <?php echo $column_class; ?>">
        <?php if ( $content_thumbnail_url != '' ): ?><img class="center-block" src="<?php echo $content_thumbnail_url; ?>" alt="<?php echo $content_object->post_title; ?>"><?php endif; ?>
        <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
        <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
      </article>
      <?php if ($key === $content_objects_count-1) : ?></div><!-- /.content --></div><?php endif; ?>
    <?php break;

    // Thumbnail on left
    case 'featured-image-left' : ?>
      <div class="featured-image" style="background-image:url('<?php echo $content_thumbnail_url; ?>'); background-size:<?php echo $background_fit; ?>;"></div><!-- /.featured-image -->
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-5 col-sm-offset-7 keyline-right">
            <article class="type-content text-center">
              <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
              <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
            </article>
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Thumbnail on right
    case 'featured-image-right' : ?>
      <div class="featured-image" style="background-image:url('<?php echo $content_thumbnail_url; ?>'); background-size:<?php echo $background_fit; ?>;"></div><!-- /.featured-image -->
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-5 keyline-left">
            <article class="type-content text-center">
              <h1 class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></h1>
              <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
            </article>
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Carousel
    case 'image-carousel' : ?>
      <?php if ($key === 0) : ?>
      <div id="carousel-<?php echo $uniqid; ?>" class="carousel slide">
        <ol class="carousel-indicators">
          <?php for ( $i = 0; $i < $content_objects_count; $i++ ) : ?>
          <li data-target="#carousel-<?php echo $uniqid; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if ($i === 0) echo 'active'; ?>"></li>
          <?php endfor; ?>
        </ol>
        <div class="carousel-inner">
      <?php endif; ?>

      <div class="item <?php if ($key === 0) echo 'active'; ?>">
        <img class="thumbnail center-block" src="<?php echo $content_thumbnail_url; ?>" alt="<?php echo $content_object->post_title; ?>">
        <div class="carousel-caption">
          <div class="<?php echo $content_title_class; ?>"><?php echo apply_filters( 'the_title', $content_title ); ?></div>
          <?php echo apply_filters( 'the_content', $content_object->post_content ); ?>
        </div>
      </div><!-- /.item -->

      <?php if ($key === $content_objects_count-1) : ?>
        </div>
        <a class="left carousel-control" href="#carousel-<?php echo $uniqid; ?>" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-<?php echo $uniqid; ?>" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>
      <?php endif; ?>

    <?php break;
  endswitch;

endforeach;
unset($key, $content_object);
?>
</div><!-- /.wrap -->

<?php endwhile; endif; // Finish up
