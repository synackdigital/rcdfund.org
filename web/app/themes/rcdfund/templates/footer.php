<footer class="contentinfo mb-lg" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php dynamic_sidebar('sidebar-footer-1') ?>
      </div>
      <div class="col-sm-4 text-center">
        <?php dynamic_sidebar('sidebar-footer-2') ?>
      </div>
      <div class="col-sm-4">
        <?php mailchimpSF_signup_form(); ?>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</footer>
