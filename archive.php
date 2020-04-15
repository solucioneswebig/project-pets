<?php
/*
Template Name: Pagina blog
*/
get_header();

    $url_image = get_the_post_thumbnail_url();

    $fondo = "background: #000 !important;";

    $categorias = get_term(get_the_ID());

    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

    

?>
   <!-- PAGINA INDEX.PHP -->
  <!-- Header -->
  <header class="fondo-blog" style="<?php echo $fondo; ?>">
    <div class="transparente" style="background-color: #00000080;">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10">
      <div class="intro-text">
        <h1 class="titulo-blog-interna text-center pb-5"><strong>Categoria:</strong> <?php echo $term->name; ?></h1>
      </div>
      </div>
      </div>
    </div>
    </div>
  </header>

  <div class="wrapper-page">
  <!--====SECCION N°1===-->
  <section class="bg-white" id="portfolio">
    <div class="espacio-arriba-p espacio-bottom-p">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div>
      <div class="col-md-9">
         <div class="row">
            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 

                if(get_the_post_thumbnail_url() != ""){
                  $url_image = get_the_post_thumbnail_url();
                }else{
                  $url_image = get_theme_file_uri()."/assets/img/service.jpg";
                }

            ?>
             
                    <div class="col-md-12 col-sm-12 portfolio-item">
                      
                     <div class="card" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-4">
                        <a class="imagen" href="<?php echo get_permalink(); ?>">
                        
                        <img class="img-fluid img-list-service" src="<?php echo $url_image; ?>" alt=""> 
                      </a>
                        </div>
                        <div class="col-md-8">
                              <div class="card-body text-left main">
                                 <a href="<?php echo get_permalink(); ?>"><h5 class="main font-weight-bold text-uppercase"><?php echo the_title(); ?></h5></a>
                                <p class="main"><?php echo the_excerpt(); ?></p>
                                <a class="text-left main" href="<?php echo get_permalink(); ?>">Ver más</a>
                              </div>
                          </div>
                    </div>
                  
                </div>
                    </div>

            <?php
               // the_content();
                endwhile;
            else :
                _e( 'Lamentamos no se encontraron servicios solicitados en esta categoria.', 'textdomain' );
            endif;

            ?>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  </div>
<?php
get_footer();
?>