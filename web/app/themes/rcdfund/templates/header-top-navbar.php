<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo LOGOTYPE_URL; ?>" alt="<?php echo get_bloginfo('name'); ?>" data-spy="affix" data-offset-top="160"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;

        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
  </div>
</header>

<div class="modal fade" id="modal-contact-us">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title">Contact the RCD Fund</h4>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <h1 class="h3">General</h1>
            <p>
              <a href="mailto:info@rcdfund.org">info@rcdfund.org</a><br>
              <strong>Facebook</strong>
              <a href="http://fb.me/RCDFund" target="_blank">fb.me/RCDFund</a><br>
              <strong>Twitter</strong>
              <a href="http://twitter.com/RCDFund" target="_blank">@RCDFund</a><br>
              <strong>Instagram</strong>
              @RCDFund
              #AternumFortis<br>
            </p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h2 class="h3">Australia</h2>
            <p>
              <a href="mailto:liz@rcdfund.org">Liz Dawes</a><br>
              Executive Director
            </p>
            <p>
              39 Royal Ave<br>
              Sandringham, 3191<br>
              Vic, Australia
            </p>
            <p>
              ABN 49 126 106 682
            </p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h2 class="h3">USA</h2>
            <p>
              <a href="mailto:debbie@rcdfund.org">Debbie Clark Dawes</a><br>
              Director of Development
            </p>
            <p>
              1135 Lone Tree Road,<br>
              Elm Grove Wi 53122<br>
              United States
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-donate">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title">Make a donation</h4>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <h1 class="h3">Big hearts make for big brain changes</h1>
            <p>Your donation helps in so many ways. Whether it’ll be the contribution that is the tipping point in tomorrow’s research breakthroughs. Whether it’ll provide a heartwarming brain stimulating music or yoga therapy session. Whether it’ll help keep the mind sharp through education support during rehab. You’ll make a difference supporting brain matters. Thank you.</p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h2 class="h3">Australia</h2>
            <p>
              <a href="http://au.rcdfund.org/donate/" target="_blank" class="btn btn-default btn-block mb-xs">Make a donation</a>
              <a href="http://au.rcdfund.org/fundraising/" target="_blank" class="btn btn-default btn-block mb-xs">Start a fundraiser</a>
            </p>
          </div>
          <div class="col-xs-12 col-sm-4">
            <h2 class="h3">USA</h2>
            <p class="text-center">
              <a href="http://usa.rcdfund.org/donate/" target="_blank" class="btn btn-default btn-block mb-xs">Make a donation</a>
              <a href="http://usa.rcdfund.org/fundraising/" target="_blank" class="btn btn-default btn-block mb-xs">Start a fundraiser</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
