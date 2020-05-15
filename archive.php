<?php
/*
Template Name: Pagina blog
*/
get_header();

    $url_image = get_the_post_thumbnail_url();

    $fondo = "background: linear-gradient(90deg, rgba(18,9,171,1) 0%, rgba(37,51,236,1) 35%, rgba(0,212,255,1) 100%) !important;;";

    $categorias = get_term(get_the_ID());

    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

    

?>
   <!-- PAGINA INDEX.PHP -->
  <!-- Header -->
  <header class="fondo-blog" style="<?php echo $fondo; ?>">
    <div class="transparente">
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
         <div class="row lista-servicios">
            <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 

                $id_current_user = get_current_user_id();

                $author_id = get_the_author_meta("ID");

                if($id_current_user != $author_id ){

                if(get_the_post_thumbnail_url() != ""){
                  $url_image = get_the_post_thumbnail_url();
                }else{
                  $url_image = get_theme_file_uri()."/assets/img/service.jpg";
                }

                if(get_the_post_thumbnail_url() != ""){
                  $url_icon = get_the_post_thumbnail_url();
                }else{

                  $url_icon = get_theme_file_uri()."/assets/img/user-icon.png";
                  
                }
                $id_post = get_the_ID();
                $id_user = get_current_user_id();
                $buscar_propuesta = $wpdb->get_row("SELECT * FROM ".TABLA_DATOS_PROPUESTAS." WHERE id_user = ".$id_user." AND id_post = ".$id_post."");               

            ?>
             
             <div class="col-md-12 col-sm-12 portfolio-item mt-3">
                      
                    <div class="card card-servicios">
                     <div class="row">
                         <div class="col-md-12">
                               <div class="card-body text-left main">
                                 <div class="row">

                                     <div class="col-md-12 text-left">
                                     <?php if($buscar_propuesta): ?>
                                        <span class="badge badge-success">Ya enviaste una propuesta</span>
                                     <?php endif; ?>
                                     <a href="<?php echo get_permalink(); ?>"><h5 class="main font-weight-bold text-uppercase"><?php echo the_title(); ?></h5></a>
                                     </div>
                                     <div class="col-md-6 text-left">
                                     <h6><strong>Publicado:</strong> <?php  echo get_the_date( 'd/m/Y' ); ?></h6>
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
                                       <strong>Presupuesto:</strong> <?php echo $presupuesto = get_post_meta( $id_post, 'precio-servicio', true ); ?>
                                     </div>
                                     <div class="col-md-4 mb-3">
                                     <img src="<?php echo $url_image; ?>" style="width:100%;height:100%;object-fit:cover;border-radius:50%;min-height:230px;box-shadow: 2px 2px 5px rgba(0,0,0,.3);">
                                     </div>
                                     <div class="col-md-8 text-justify">
                                     <p class="">
                                     <?php echo the_excerpt(); ?>
                                     </p>
                                     </div>
                                     <div class="col-md-6 text-left">
                                     <img src="<?php echo $url_icon; ?>" class="d-inline-block" style="width:60px;height:60px;object-fit:cover;border-radius:50%;box-shadow: 1px 1px 1px rgba(0,0,0,.3);margin-top: -30px;">
                                     <span class="d-inline-block">
                                     <h6><strong></strong> <?php echo get_the_author_meta("display_name"); ?></h6>
                                     <h6><i class="fa fa-star" style="color:orange;"></i> 0.00</h6>
                                     </span>
                                     </div>
                                     <div class="col-md-6 text-right mb-3">
                                     <?php if($buscar_propuesta): ?>
                                     <a class="text-left main btn btn-servicios" href="<?php echo get_permalink(); ?>">Modificar propuesta</a>
                                     <?php else: ?>
                                      <a class="text-left main btn btn-servicios" href="<?php echo get_permalink(); ?>">Enviar propuesta</a>
                                     <?php endif; ?>
                                     </div>
                                 </div>
                               </div>
                           </div>
                     </div>
                   
                 </div>
               </div>

            <?php
              }
               // the_content();
                endwhile;
            else :
                _e( 'Lamentamos no se encontraron servicios solicitados en esta categoria.', 'textdomain' );
            endif;

            ?>
           
        </div>
        <div class="row"> <div class="col-md-12 text-right"><?php wpbeginner_numeric_posts_nav(); ?></div></div>
       
      </div>
      </div>
    </div>
    </div>
  </section>
  </div>
<?php
get_footer();
?>