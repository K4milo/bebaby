<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<div class="top-menu">
  <div class="container">
    <div class="row">
      <div class="col-7 col-lg-8">
        <div class="row align-items-center">
          <div class="col-4">
          <a class="navbar-brand main-menu__logo" href="<?php echo home_url('/'); ?>">
            <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
          </a>
          </div>
          <div class="col-8">
          <?php
          storefront_product_search();
          ?>

          </div>
        </div>
      </div>
      <div class="col-5 col-lg-4">
        <nav class="menu-account">
          <ul class="menu-account__wrapper">
            <li class="menu-account__item">
              <a href="/mi-cuenta/" class="menu-account__link">
                <i class="fas fa-user menu-account__icon"></i>
              </a>
            </li>
            <li class="menu-account__item">
              <div class="menu-account__cart">
                <i class="fas fa-shopping-cart menu-account__icon"></i>
                <span class="menu-account__cart-count">
                  <?php echo WC()->cart->get_cart_contents_count(); ?>
                </span>
              </div>
              <div class="menu-account__cart-menu"><?php woocommerce_mini_cart(); ?></div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg main-menu">
  <div class="container">
    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse main-menu__wrapper" id="navbarNav">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-main',
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ms-md-auto main-menu__nav',
            'fallback_cb'    => 'wp_bootstrap_navwalker::fallback',
            'walker'         => new wp_bootstrap_navwalker())
        );
      ?>
    </div>
  </div>
</nav>
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
