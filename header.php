<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<!--==========================
Header
============================-->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
<div class="container">
  <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" width="150px"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav text-uppercase ml-auto">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/nosotros">Nosotros</a>
      </li>
      <div class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" data-parent="#accordion" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Servicios <i class="fas fa-angle-down"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Personal trainer</a>
            <a class="dropdown-item" href="#">Cuidado de niñ@s</a>
            <a class="dropdown-item" href="#">Cuidado de ancianos</a>
            <a class="dropdown-item" href="#">Paseador de perros</a>
          </div>
    </div>
    <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/blog/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/ayuda/">Ayuda</a>
      </li>
    </ul>
  </div>
</div>
</nav>
