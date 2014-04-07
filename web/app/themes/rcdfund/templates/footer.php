<footer class="contentinfo mb-lg" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <img src="<?php echo LOGOTYPE_URL; ?>" alt="<?php echo get_bloginfo('name'); ?>">
      </div>
      <div class="col-sm-4">
        <h1 class="h3">The RCD Fund</h1>
        <p>In memory of Robert Connor Dawes. Supporting brain matters in the areas of Research, Care and Development.</p>
      </div>
      <div class="col-sm-5">
        <?php mailchimpSF_signup_form(); ?>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</footer>
