<?php while (have_posts()) : the_post(); ?>
<article class="article fill-dust" id="main" role="main">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-6 col-lg-offset-3">
        <?php get_template_part('templates/page', 'header'); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>
<?php endwhile; ?>

<section class="fill-nearwhite-yellow">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-sm-5">
        -
      </div>
      <div class="col-xs-12 col-sm-5 col-sm-offset-2">
        <h1 class="h3">
          <small>Our</small><br>
          Mission
        </h1>
        <p>Brain cancer is the most fatal of all childhood cancers. Current clinical treatments only help 50% of children, but leave 90% with lifelong physical and mental impairments.</p>
        <p>This is why brain tumours are so devastating. We're all about changing the odds. To make brain tumours go the way of the dinosaurs. To support the science and in the meantime the patients.</p>
      </div>
    </div>
  </div>
</section>

<section class="fill-darkblue-nearwhite">
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-sm-5">
        <h1 class="h3">
          <small>What is an</small><br>
          Ependymoma?
        </h1>
        <p>Ependymoma is a disease in which malignant (cancer) cells form in the tissues of the brain and spinal cord. The brain controls vital functions such as memory and learning, thesenses (hearing, sight, smell, taste, and touch), and emotion. The spinal cord is made up of bundles of nerve fibers that connect the brain with nerves in most parts of the body.</p>
      </div>
      <div class="col-xs-12 col-sm-5 col-sm-offset-2">
        -
      </div>
    </div>
  </div>
</section>
