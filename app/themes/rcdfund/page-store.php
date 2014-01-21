<?php while (have_posts()) : the_post(); ?>
<article class="article fill-nearwhite" id="main" role="main">
  <?php the_content(); ?>
</article>
<?php endwhile; ?>
