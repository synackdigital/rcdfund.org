<div class="partblock relative <?php echo implode(' ', array($layout, $background_color, $background_texture)); ?>" style="min-height:<?php echo $min_height; ?>px;">
  <?php foreach ( $parts as $key => $part ) :

    // Part title
    $part_title           = ( get_field('title_html', $part->ID) ) ? get_field('title_html', $part->ID) : apply_filters( 'the_title', $part->post_title);
    $part_title_class     = ( get_field('title_class', $part->ID) ) ? get_field('title_class', $part->ID) : 'h2';

    // Part thumbnail
    $part_thumbnail       = ( has_post_thumbnail($part->ID) ) ? wp_get_attachment_image_src( get_post_thumbnail_id( $part->ID ), 'large' ) : null;
    $part_thumbnail_url   = ( $part_thumbnail ) ? $part_thumbnail[0] : '';
  ?>
  <?php if ( $part_thumbnail_url != '' ): ?><div class="featured-image" style="background-image:url('<?php echo $part_thumbnail_url; ?>'); background-size:<?php echo $background_size; ?>; position:absolute; top:0; right:50%; bottom:0; left:0;"></div><?php endif; ?>
  <div class="container">
    <div class="row">
      <article class="part text-center col-sm-5 col-sm-offset-7 keyline-right">
        <h1 class="part-title <?php echo $part_title_class; ?>"><?php echo $part_title; ?></h1>
        <div class="part-content"><?php echo apply_filters( 'the_content', $part->post_content ); ?></div>
      </article>
    </div>
  </div>
  <?php endforeach; ?>
</div>
