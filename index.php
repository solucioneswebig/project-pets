<?php
get_header();

    $url_image = get_the_post_thumbnail_url();

    if(!$url_image){
    $fondo = "background: #000 !important;";
    }else{
      $fondo = "background-image: url(".$url_image.") !important;";
    }
    

?>
   <!-- PAGINA INDEX.PHP -->
  <!-- Header -->
  <header class="fondo-blog" style="<?php echo $fondo; ?>">
    <div class="transparente" style="background-color: #00000080;">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10">
      <div class="intro-text">
        <h1 class="titulo-blog-interna text-center pb-5">Blog</h1>
      </div>
      </div>
      </div>
    </div>
    </div>
  </header>


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
            ?>
             
                    <div class="col-md-12 col-sm-12 portfolio-item">
                      
                     <div class="card" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="imagen" href="<?php echo get_permalink(); ?>">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
                      </a>
                        </div>
                        <div class="col-md-8">
                              <div class="card-body text-left main">
                                 <a href="<?php echo get_permalink(); ?>"><h5 class="main font-weight-bold text-uppercase"><?php echo apply_filters( 'the_title', wp_trim_words( get_the_title(), 4, '&hellip;' ) ); ?></h5></a>
                                <p class="main"><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content(), 10, '&hellip;' ) ); ?></p>
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
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;

            ?>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

<?php
get_footer();
?>