<?php while (have_posts()) : the_post(); ?>
<div class="texture-paper" id="main" role="main">
  <div class="container">
    <article class="row pt-1 pb-1 mb-1 keyline-bottom <?php post_class(); ?>">
      <header class="col-xs-12 col-sm-8 col-sm-offset-4">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-content col-xs-12 col-sm-8 col-sm-offset-3">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</div>
<?php endwhile; ?>
