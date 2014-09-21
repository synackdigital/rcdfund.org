<?php
$recent = new WP_Query("page_id=601");
while($recent->have_posts()) :
	$recent->the_post(); ?>
<?php endwhile; ?>