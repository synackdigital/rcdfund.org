<?php get_template_part('templates/page', 'header'); ?>

<?php while (have_posts()) : the_post(); ?>
<section class="section" id="main" role="main" style="padding-bottom:300px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-4">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>

<section class="fill-darkblue">
  <div class="container">
    darkblue <a href="#">Link</a>
  </div>
</section>

<section class="fill-teal">
  <div class="container">
    teal <a href="#">Link</a>
  </div>
</section>

<section class="fill-sand">
  <div class="container">
    sand <a href="#">Link</a>
  </div>
</section>

<section class="fill-dust">
  <div class="container">
    dust <a href="#">Link</a>
  </div>
</section>

<section class="fill-nearwhite">
  <div class="container">
    nearwhite <a href="#">Link</a>
  </div>
</section>

<section class="fill-yellow">
  <div class="container">
    yellow <a href="#">Link</a>
  </div>
</section>

<section class="fill-pink">
  <div class="container">
    pink <a href="#">Link</a>
  </div>
</section>

<section class="fill-red">
  <div class="container">
    red <a href="#">Link</a>
  </div>
</section>

<section class="fill-brown">
  <div class="container">
    brown <a href="#">Link</a>
  </div>
</section>
