<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();

    $url_image = get_the_post_thumbnail_url();

   

?>
<!-- PAGINA SINGLE.PHP -->
<!-- Header -->
  <header class="fondo-blog-interna" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/55.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    object-fit: cover;">
    <div class="transparente" style="background-color: #00000088;">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-10 m-auto">
      <div class="intro-text">
        <h1 class="titulo-blog-interna text-center pb-5"><?php echo the_title(); ?></h1>
      </div>
      </div>
      </div>
    </div>
    </div>
  </header>


<!--====SECCION N°1===-->
<section>
    <div class="container">
          <div class="row espacio-arriba-p espacio-bottom-p">
                <div class="col-md-9">
                
                  <div class="row">
                           <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
                        </div>
                 
                   
                     <div class="row">
                            <p><?php echo the_content(); ?></p>
                        </div>
                
                       <div class="row">
                        <div class="owl-carousel owl-theme my-3">
                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/33.png" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                   <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/11.png" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/1.jpg" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                   <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                               <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/4.jpg" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/33.png" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/3.jpg" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                        <div class="item">
                                <div class="card">
                                <img class="img-fluid card-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/1.jpg" alt="" />
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <small class="card-text">Some quick example text </small>
                                  <div class="pt-1"><a href="#" class="">Ver más</a></div>
                                </div>
                              </div>
                        </div>

                       </div>
                    </div>


                  
                    </div>

        


                <div class="col-md-3">
                	<?php get_sidebar(); ?>
                </div>
          </div>
    </div>
</section>



    


<?php
   
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_footer();
?>