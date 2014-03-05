<footer class="contentinfo texture-nearwhite-paper keyline-top" role="contentinfo">
  <div class="container">
    <div class="row pt-2 pb-2">
      <div class="col-sm-2">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/rcdfund-blue-sbm.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
      </div>
      <div class="col-sm-6">
        <h1 class="h3">The RCD Fund</h1>
        <p>In memory of Robert Connor Dawes. Supporting brain matters in the areas of Research, Care and Development.</p>
      </div>
      <div class="col-sm-4 keyline-left pt-1 pb-1">
        <?php mailchimpSF_signup_form(); ?>
        <a data-toggle="modal" href="#privacy" class="help-block">Privacy policy</a>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</footer>
