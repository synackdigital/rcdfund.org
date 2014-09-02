<?php

  // Max number of columns allowed
  $column_max_count   = 4;

  // Actual number of columns
  $column_count       = ( $parts_count <= $column_max_count ) ? $parts_count : $column_max_count;

  // Columns classes
  $column_class       = 'col-xs-12 col-md-'.( 12 / $column_count );
?>

<div class="partblock <?php echo implode(' ', array($layout, $background_color, $background_texture)); ?>">
  <div class="container">
    <div class="row">
      <?php foreach ( $parts as $key => $part ) :

        // Break out if max cols is reached
        if ( $key === $column_max_count ) break;

        // Part title
        $part_title           = ( get_field('title_html', $part->ID) ) ? get_field('title_html', $part->ID) : apply_filters( 'the_title', $part->post_title);
        $part_title_class     = ( get_field('title_class', $part->ID) ) ? get_field('title_class', $part->ID) : 'h2';

        // Part thumbnail
        $part_thumbnail       = ( has_post_thumbnail($part->ID) ) ? wp_get_attachment_image_src( get_post_thumbnail_id( $part->ID ), 'large' ) : null;
        $part_thumbnail_url   = ( $part_thumbnail ) ? $part_thumbnail[0] : '';
      ?>
      <article class="part text-center <?php echo $column_class; ?>">
        <?php if ( $part_thumbnail_url != '' ): ?><img class="center-block" src="<?php echo $part_thumbnail_url; ?>" alt="<?php echo $part->post_title; ?>"><?php endif; ?>
        <h1 class="part-title <?php echo $part_title_class; ?>"><?php echo $part_title; ?></h1>
        <div class="part-content"><?php echo apply_filters( 'the_content', $part->post_content ); ?></div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</div>
