<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
<section class="section" id="main" role="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
