<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">

        <div class="col-md-3 choose-language">
          <h6><span>CHOOSE LANGUAGE</span></h6>
          <ul>
            <li class="lang-bg"><a href="">БЪЛГАРСКИ</a></li>
            <li class="lang-ru"><a href="">РУССКИЙ</a></li>
            <li class="lang-en"><a href="">ENGLISH</a></li>
          </ul>
        </div><!-- /.col-md-3 choose-language -->

        <div class="col-md-6 logo-block">
          <a class="logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          </a>
        </div><!-- /logo -->

        <div class="col-md-3 contacts-block">
          <div class="contact-phone">
            <span>ТЕЛЕФОНЫ</span>
            <a href="tel:+359877255229">+359 877 255 229</a>
            <a href="tel:+359877255224">+359 877 255 224 </a>
          </div><!-- /.contact-phone -->
          <a href="mailto:marlin.burgas@gmail.com" class="contact-mail">marlin.burgas@gmail.com</a>
        </div><!-- /.col-md-3 contacts-block -->

        <nav class="col-md-12 nav" role="navigation">
          <?php wpeHeadNav(); ?>
        </nav><!-- /nav -->

      </div><!-- /.row -->
    </div>
  </header><!-- /header -->

  <section role="main">
    <div class="container">
      <div class="row">
