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
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 text-center">
        <h3>A dark blue section</h3>
        <p>This is a text that contains a link.</p>
        <p><a class="btn btn-success">A button</a></p>
      </div>
    </div>
  </div>
</section>

<section class="fill-teal">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>A teal section</h2>
        <p>
          <div class="btn-toolbar">
            <div class="btn-group">
              <button class="btn btn-red">Button 1:1</button>
              <button class="btn btn-red">Button 1:2</button>
            </div>
            <div class="btn-group">
              <button class="btn btn-red">Button 2:1</button>
              <button class="btn btn-red">Button 2:2</button>
              <button class="btn btn-red">Button 2:3</button>
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="fill-sand">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>A sand colored section</h2>
        <p><a class="btn btn-darkblue">A button<br>with two rows</a></p>
      </div>
    </div>
  </div>
</section>

<section class="fill-dust">
  <div class="container">
    <h3>A dust-colored section</h3>
    <p class="h3 cursive">A cursive text using Sacramento from Google Web Fonts.</p>
  </div>
</section>

<section class="fill-nearwhite-yellow">
  <div class="container">
    nearwhite + yellow <a href="#">Link</a>
  </div>
</section>

<section class="fill-nearwhite">
  <div class="container">
    nearwhite <a href="#">Link</a>
    <dl>
      <h3>Squiggles</h3>
      <dt>Darkblue</dt>
      <dd><img src="/assets/img/squiggle-darkblue.png" style="width:340px;height:auto;"></dd>
      <dt>Teal</dt>
      <dd><img src="/assets/img/squiggle-teal.png" style="width:340px;height:auto;"></dd>
      <dt>Sand</dt>
      <dd><img src="/assets/img/squiggle-sand.png" style="width:340px;height:auto;"></dd>
      <dt>Dust</dt>
      <dd><img src="/assets/img/squiggle-dust.png" style="width:340px;height:auto;"></dd>
      <dt>Nearwhite</dt>
      <dd style="background-color:rgba(0,0,0,.2);"><img src="/assets/img/squiggle-nearwhite.png" style="width:340px;height:auto;"></dd>
      <dt>Yellow</dt>
      <dd><img src="/assets/img/squiggle-yellow.png" style="width:340px;height:auto;"></dd>
      <dt>Pink</dt>
      <dd><img src="/assets/img/squiggle-pink.png" style="width:340px;height:auto;"></dd>
      <dt>Red</dt>
      <dd><img src="/assets/img/squiggle-red.png" style="width:340px;height:auto;"></dd>
      <dt>Brown</dt>
      <dd><img src="/assets/img/squiggle-brown.png" style="width:340px;height:auto;"></dd>
    </dl>
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
