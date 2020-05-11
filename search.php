<?php
get_header();
?>
 <header class="fondo-blog-interna" style="<?php echo $fondo; ?>">
    <div class="transparente" style="background-color: #000;">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 m-auto">
      <div class="intro-text">
        <h1 class="titulo-blog-interna text-center pb-5">Resultados para: <?php echo the_search_query(); ?></h1>
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

      <div class="col-md-9">
          
         <div class="row lista-servicios">
             <!--<div class="col-md-12">
             <form id="searchform" method="get" action="<?php echo home_url('/'); ?>"> 
             <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Has una nueva busqueda..." aria-label="Recipient's username" aria-describedby="button-addon2" name="s" value="<?php //the_search_query(); ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
                </div>
                </div>
                </form>   
             </div>-->
            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 

                if(get_the_post_thumbnail_url() != ""){
                  $url_image = get_the_post_thumbnail_url();
                }else{
                  $url_image = get_theme_file_uri()."/assets/img/service.jpg";
                }
                
                if(get_post_type() == "servicios"):
            ?>
             
             <div class="col-md-12 col-sm-12 portfolio-item mt-3">
                      
                    <div class="card card-servicios">
                     <div class="row">
                         <div class="col-md-12">
                               <div class="card-body text-left main">
                                 <div class="row">
                                     <div class="col-md-12 text-left">
                                     <a href="<?php echo get_permalink(); ?>"><h5 class="main font-weight-bold text-uppercase"><?php echo the_title(); ?></h5></a>
                                     </div>
                                     <div class="col-md-6 text-left">
                                     <h6><strong>Publicado:</strong> 01/05/2020</h6>
                                     <?php
                                      $categories = get_the_category();
                                      
                                      if (!empty($categories)) {
                                          foreach ($categories as $category) {
                                              echo esc_html( $category->name );
                                          }
                                      }
                                      ?>
                                     </div>
                                     <div class="col-md-6 text-right">
                                       <strong>Presupuesto:</strong> $ 1.000,00
                                     </div>
                                     <div class="col-md-12 text-justify">
                                     <p class="">
                                     <?php echo the_excerpt(); ?>
                                     </p>
                                     </div>
                                     <div class="col-md-6 text-left">
                                     <h6><strong></strong> <?php echo get_the_author_meta("display_name"); ?></h6>
                                     <h6><i class="fa fa-star" style="color:orange;"></i> 5.00</h6>
                                     </div>
                                     <div class="col-md-6 text-right mb-3">
                                     <a class="text-left main btn btn-servicios" href="<?php echo get_permalink(); ?>">Enviar propuesta</a>
                                     </div>
                                 </div>
                               </div>
                           </div>
                     </div>
                   
                 </div>
               </div>

            <?php
            endif;
               // the_content();
                endwhile;
            else :
                _e( 'Lamentamos no se encontraron coincidencia para la busqueda solicitada.', 'textdomain' );
            endif;

            ?>
           
        </div>
        <div class="row"> <div class="col-md-12 text-right"><?php wpbeginner_numeric_posts_nav(); ?></div></div>
       
      </div>
      <div class="col-md-3">
         <?php get_sidebar(); ?>
      </div>
      </div>
    </div>
    </div>
  </section>
  </div>
<?php
get_footer();