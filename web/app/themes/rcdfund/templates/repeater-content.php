<?php
  // ACF Repeater
  if ( have_rows('content_list') ) : while ( have_rows('content_list') ) : the_row();
    $layout               = get_sub_field('layout');
    $background_color     = get_sub_field('background_color');
    $background_texture   = get_sub_field('background_texture');

    $post_object          = get_sub_field('post_object');
    $post_title           = ( get_field('title_html', $post_object->ID) ) ? get_field('title_html', $post_object->ID) : $post_object->post_title;
    $post_title_class     = ( get_field('title_class', $post_object->ID) ) ? get_field('title_class', $post_object->ID) : '';

    $post_thumbnail       = ( has_post_thumbnail($post_object->ID) ) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'large' ) : null;
    $post_thumbnail_url   = ( $post_thumbnail ) ? $post_thumbnail[0] : '';
?>

<div class="wrap <?php echo implode(' ', array($layout, $background_color, $background_texture)); ?>">
<?php
  switch ( $layout ) :

    // Centered
    case 'centered' : ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <article class="type-content text-center">
              <h1 class="<?php echo $post_title_class; ?>"><?php echo apply_filters( 'the_title', $post_title ); ?></h1>
              <?php echo apply_filters( 'the_content', $post_object->post_content ); ?>
            </article>
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Full-width
    case 'full-width' : ?>
      <div class="content">
        <article class="type-content text-center">
          <h1 class="<?php echo $post_title_class; ?>"><?php echo apply_filters( 'the_title', $post_title ); ?></h1>
          <?php echo apply_filters( 'the_content', $post_object->post_content ); ?>
        </article>
      </div><!-- /.content -->
    <?php break;

    // Thumbnail on left
    case 'featured-image-left' : ?>
      <div class="featured-image" style="background-image:url('<?php echo $post_thumbnail_url; ?>');">
        <div class="container">
          <div class="content row">
            <div class="col-xs-12 col-sm-5 col-sm-offset-7">
              <article class="type-content text-center">
                <h1 class="<?php echo $post_title_class; ?>"><?php echo apply_filters( 'the_title', $post_title ); ?></h1>
                <?php echo apply_filters( 'the_content', $post_object->post_content ); ?>
              </article>
            </div>
          </div><!-- /.content -->
        </div>
      </div><!-- /.featured-image -->
    <?php break;

    // Thumbnail on right
    case 'featured-image-right' : ?>
      <div class="featured-image" style="background-image:url('<?php echo $post_thumbnail_url; ?>');">
        <div class="container">
          <div class="content row">
            <div class="col-xs-12 col-sm-5">
              <article class="type-content text-center">
                <h1 class="<?php echo $post_title_class; ?>"><?php echo apply_filters( 'the_title', $post_title ); ?></h1>
                <?php echo apply_filters( 'the_content', $post_object->post_content ); ?>
              </article>
            </div>
          </div><!-- /.content -->
        </div>
      </div><!-- /.featured-image -->
    <?php break;

  endswitch;
?>
</div><!-- /.wrap -->

<?php endwhile; endif;
