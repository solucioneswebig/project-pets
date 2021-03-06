<?php
ob_start();
?>
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
  <a class="navbar-brand js-scroll-trigger" href="<?php echo get_site_url(); ?>">
  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" id="logo_header_blanco" alt="" width="150px">
  <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" id="logo_header_azul" style="display:none;" alt="" width="150px">
  </a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav text-uppercase ml-auto">

      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/sobre-nosotros/">Nosotros</a>
      </li>
      <div class="nav-item dropdown">
          <a class="nav-link js-scroll-trigger dropdown-toggle" data-parent="#accordion" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Servicios <i class="fas fa-angle-down"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php 

            $terms = get_terms( array(
              'taxonomy' => 'categoria_servicios',
              'hide_empty' => false,
            ) );

            foreach($terms as $key => $value):
            ?>
            <a class="dropdown-item" href="<?php echo esc_url( get_term_link( $value->term_id,"categoria_servicios" ) ); ?>"><?php echo $value->name; ?></a>
            <?php 
            endforeach;
            ?>
          </div>
    </div>
    <!--
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/blog/">Blog</a>
      </li>
    -->
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/ayuda/">Ayuda</a>
      </li>
      <?php 
        if(is_user_logged_in()):
      ?>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/mi-cuenta/"><i class="fa fa-user-edit"></i> Mi cuenta</a>
      </li>
      <li class="nav-item">
      
      <?php 
      
        $buscar_mensajes = $wpdb->get_results("SELECT * FROM ".TABLA_DATOS_CHAT." WHERE id_cliente = ".get_current_user_id()." order by id_chat DESC LIMIT 5");


        $contar_mensajes = $wpdb->get_results("SELECT * FROM ".TABLA_DATOS_CHAT." WHERE id_cliente = ".get_current_user_id()." GROUP BY id_user");
        
        // var_dump($buscar_mensajes);
      ?>
      <div class="dropdown dropleft">
          <a class="nav-link js-scroll-trigger dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-bell notificar" id-cliente="<?php echo get_current_user_id() ?>"> <?php echo COUNT($contar_mensajes) ?></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <?php
            foreach($buscar_mensajes as $value):
            
          ?>
            <a class="dropdown-item h6 messenger" href="#" id-user="<?php echo $value->id_user; ?>" id-post="<?php echo $value->id_post; ?>" id-cliente="<?php echo $value->id_cliente; ?>" id_enviado="<?php echo get_current_user_id() ?>"><i class="far fa-sticky-note"></i> <?php echo substr($value->mensaje, 0, 14) ."..."; ?></a>
            <div class="dropdown-divider"></div>
          <?php 
          
              endforeach;
          ?>
          </div>
        </div>
        
      </li>
      <?php 
        else:
      ?>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="<?php echo get_site_url(); ?>/acceder/"><i class="fa fa-sign-in-alt"></i> Acceder / <i class="fa fa-user-plus"></i> Registrate</a>
      </li>
      <?php 
      endif;
      ?>

    </ul>
  </div>
</div>
</nav>
