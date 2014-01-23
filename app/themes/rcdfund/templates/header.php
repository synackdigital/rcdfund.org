<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header" data-spy="affix" data-offset-top="160">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri() . '/assets/img/rcdfund-blue-sbm.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>" data-spy="affix" data-offset-top="160"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-primary navbar-nav'));
      endif;
      ?>
      <ul id="menu-secondary-navigation" class="nav nav-secondary navbar-nav">
        <li class="navicon navicon-contact"><button type="button" data-toggle="collapse" data-target="#contact" data-parent="#dropdown">Contact us</button></li>
        <li class="navicon navicon-follow"><button type="button" data-toggle="collapse" data-target="#follow" data-parent="#dropdown">Follow us on social media</button></li>
        <li class="navicon navicon-donate"><button type="button" data-toggle="collapse" data-target="#donate" data-parent="#dropdown">Make a donation!</button></li>
      </ul>
    </nav>
  </div>
</header>

<div id="dropdown">

  <div class="panel">
    <aside class="fill-sand collapse" id="contact">
      <div class="container">
        <div class="row pt-1 pb-2">
          <div class="col-xs-12 col-sm-2 col-sm-offset-3">
            <h1 class="h3">Contact</h1>
            <p>
              <a href="mailto:info@rcdfund.org">info@rcdfund.org</a><br>
            </p>
          </div>
          <div class="col-xs-12 col-sm-2">
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
          <div class="col-xs-12 col-sm-2">
            <h2 class="h3">USA</h2>
            <p>
              <a href="mailto:debbie@rcdfund.org">Debbie Clarke Dawes, RN MBA</a><br>
              Director of Development
            </p>
            <p>
              1135 Lone Tree Road,<br>
              Elm Grove Wi 53122<br>
              United States
            </p>
          </div>
          <div class="col-xs-12 col-sm-3">
            <h2 class="h3">Social</h2>
            <dl>
              <dt class="h5">Facebook</dt>
              <dd><a href="http://fb.me/RCDFund" target="_blank">fb.me/RCDFund</a></dd>
              <dt class="h5">Twitter</dt>
              <dd><a href="http://twitter.com/RCDFund" target="_blank">@RCDFund</a></dd>
              <dt class="h5">Instagram</dt>
              <dd>@RCDFund</dd>
              <dd>#AternumFortis</dd>
            </dl>
          </div>
        </div>
      </div>
    </aside>
  </div>

  <div class="panel">
    <aside class="fill-sand collapse" id="follow">
      <div class="container">
        <div class="row pt-1 pb-2">
          <h1 class="h3 col-xs-12 col-sm-9 col-sm-offset-3">Follow RCD Fund</h1>
          <div class="col-sm-5 col-sm-offset-3">
            Social links
          </div>
          <div class="col-sm-4">
            <a class="btn btn-darkblue btn-block">Sign up for<br>bi-monthly Brainfood</a>
          </div>
        </div>
      </div>
    </aside>
  </div>

  <div class="panel">
    <aside class="fill-sand collapse" id="donate">
      <div class="container">
        <div class="row pt-1 pb-2">
          <div class="col-sm-9 col-sm-offset-3">
            Donate
          </div>
        </div>
      </div>
    </aside>
  </div>

</div>
