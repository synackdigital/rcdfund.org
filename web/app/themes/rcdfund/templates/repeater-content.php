<?php
  // ACF Repeater
  if ( have_rows('content_list') ) : while ( have_rows('content_list') ) : the_row();
    $post_object          = get_sub_field('post_object');
    $layout               = get_sub_field('layout');
    $background_color     = get_sub_field('background_color');
    $background_texture   = get_sub_field('background_texture');
?>

<div class="wrap <?php echo implode(' ', array($layout, $background_color, $background_texture)); ?>">
<?php
  switch ( $layout ) :

    // Centered
    case 'centered': ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            centered
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Full-width
    case 'fullwidth': ?>
      <div class="content">
        fullwidth
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php break;

    // Thumbnail on left
    case 'thumbleft': ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
            right
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

    // Thumbnail on right
    case 'thumbright': ?>
      <div class="container">
        <div class="content row">
          <div class="col-xs-12 col-sm-8 col-md-6">
            left
          </div>
        </div><!-- /.content -->
      </div>
    <?php break;

  endswitch;
?>
</div><!-- /.wrap -->

<?php endwhile; endif;
