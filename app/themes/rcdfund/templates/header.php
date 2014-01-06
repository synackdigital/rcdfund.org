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
        <div class="row">
          <h1 class="h3 col-xs-12 col-sm-9 col-sm-offset-3">Contact us</h1>
          <div class="col-xs-12 col-sm-2 col-sm-offset-3">
            <p>
              <a href="mailto:info@rcdfund.org">info@rcdfund.org</a><br>
              <a href="tel:+61 0000 000">+61 0000 000</a>
            </p>
            <p>
              ABN: 49 126 106 682
            </p>
          </div>
          <div class="col-xs-12 col-sm-2">
            <dl>
              <dt>Director</dt>
              <dd><a href="#mailto:">Liz Dawes</a></dd>
              <dd>+61 123 456 789</dd>
              <dt>Treasurer</dt>
              <dd>Jane Abbott</dd>
              <dt>Research &amp; Giving</dt>
              <dd>Celia Williams</dd>
            </dl>
          </div>
          <div class="col-xs-12 col-sm-2">
            <dl>
              <dt>Marketing</dt>
              <dd>Marek Wolski</dd>
              <dt>Sponsorship</dt>
              <dd>Jenny Selleck</dd>
            </dl>
          </div>
          <div class="col-xs-12 col-sm-3">
            <dl>
              <dt class="uppercase">Facebook</dt>
              <dd>fb.me/RCDFund</dd>
              <dt class="uppercase">Twitter</dt>
              <dd>@RCDFund</dd>
              <dt class="uppercase">Instagram</dt>
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
        <div class="row">
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
        <div class="row">
          <div class="col-sm-9 col-sm-offset-3">
            Donate
          </div>
        </div>
      </div>
    </aside>
  </div>

</div>
