<?php

/**
 * 
 *  Template Post Type: servicios
 * 
 */

get_header();

global $wpdb;

if ( have_posts() ) : 
while ( have_posts() ) : the_post();

if(get_the_post_thumbnail_url()){
  $url_image = get_the_post_thumbnail_url();
}else{
  $url_image = get_template_directory_uri()."/assets/img/portfolio/thumbnails/55.jpeg";
}
$id_post = get_the_ID();
$id_user = get_current_user_id();
$buscar_propuesta = $wpdb->get_row("SELECT * FROM ".TABLA_DATOS_PROPUESTAS." WHERE id_user = ".$id_user." AND id_post = ".$id_post."");

$categorias = get_the_terms($id_post,"categoria_servicios");
$terms_string = join(', ', wp_list_pluck($categorias, 'name'));

if(get_the_post_thumbnail_url() != ""){
  $url_icon = get_the_post_thumbnail_url();
}else{

  $url_icon = get_theme_file_uri()."/assets/img/user-icon.png";
  
}

$user_author_data = get_user_by('id',get_the_author_meta( 'ID' ));    
$id_autor = get_the_author_meta( 'ID' );

if(isset($_POST["guardar_propuesta"])){
 

  if($buscar_propuesta){

    $data = [
      "descripcion_propuesta" => $_POST["descripcion_propuesta"],
      "valor_propuesta" => $_POST["presupuesto"],
      "fecha_comienzo" => $_POST["fecha_comienzo"],
      "fecha_fin" => $_POST["fecha_fin"],
    ];

    $where = [
      "id_propuesta" => $buscar_propuesta->id_propuesta
    ];

    $wpdb->update( TABLA_DATOS_PROPUESTAS, $data, $where);

    echo "<script>location.href = location.href;</script>";

  }else{

    $data = [

      "id_propuesta" => 0,
      "id_user" => $_POST["id_user"],
      "id_post" => $_POST["id_post"],
      "descripcion_propuesta" => $_POST["descripcion_propuesta"],
      "valor_propuesta" => $_POST["presupuesto"],
      "fecha_comienzo" => $_POST["fecha_comienzo"],
      "fecha_fin" => $_POST["fecha_fin"],
      "estatus" => 0,
      "fecha_propuesta" => date("Y-m-d")
    ];
  
    $wpdb->insert( TABLA_DATOS_PROPUESTAS, $data );
    echo "<script>location.href = location.href;</script>";
  }


}





?>
<!-- PAGINA SINGLE.PHP -->
<!-- Header -->
  <header class="fondo-blog-interna" style="background: linear-gradient(90deg, rgba(18,9,171,1) 0%, rgba(37,51,236,1) 35%, rgba(0,212,255,1) 100%);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    object-fit: cover;">
    <div class="transparente">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-12 m-auto">
      <div class="intro-text">
     
      <h1 class="titulo-blog-interna text-left pb-5"> 
        
        <span class="badge badge-warning">Evaluando Propuestas</span> 
        <!-- 
        <span class="badge badge-danger">Cancelado</span> 
        <span class="badge badge-success">Trabajando</span>
        --> 
        <br><?php echo the_title(); ?><span class="span-publicado">Publicado el <?php echo get_the_date(); ?> en <?php echo $terms_string; ?></span></h1>
        
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
             <?php if(!isset($_GET["slug"])): ?>
             <div class="col-md-9">
              <div class="row">
              <div class="col-md-4">
              <img class="img-fluid img-circle" src="<?php echo $url_image; ?>" alt=""> 
              </div>
              <div class="col-md-8">
             
              <p><?php echo the_content(); ?></p>
              </div>

              </div>
            
              </div>

              <?php else: ?>
              <?php if($buscar_propuesta): ?>
                <div class="col-md-12">
                 <h3>Modifica tu propuesta</h3>
                </div>
              <?php else: ?>
                <div class="col-md-12">
                 <h3>Realiza tu propuesta</h3>
                </div>
              <?php endif; ?>

               
              <div class="col-md-9">
              <!-- ACORDEON DESCRIPCION -->
                <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header text-right" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Mostrar descripción sobre esta publicación
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                    <p><?php echo the_content(); ?></p>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- ACORDEON DESCRIPCION -->

              <form action="" method="POST">
              <div class="row mt-4"> 
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Fecha comienzo</label>
                  <input type="hidden" name="id_post" value="<?php echo $id_post; ?>">
                  <input type="hidden" name="id_user" value="<?php echo get_current_user_id(); ?>">
                  <input type="date" name="fecha_comienzo" id="fecha_comienzo" class="form-control" <?php if($buscar_propuesta): ?>value="<?php echo $buscar_propuesta->fecha_comienzo; ?>"<?php endif; ?>>
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Fecha fin</label>
                  <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" <?php if($buscar_propuesta): ?>value="<?php echo $buscar_propuesta->fecha_fin; ?>"<?php endif; ?>>
              </div>              
              </div>   
              <div class="col-md-12">
              <div class="form-group">
                  <label for="">Describe tu propuesta</label>
                  <textarea name="descripcion_propuesta" id="descripcion_propuesta" rows="10" class="form-control"><?php if($buscar_propuesta): ?><?php echo $buscar_propuesta->descripcion_propuesta; ?><?php endif; ?></textarea>
              </div>              
              </div>  
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Valor propuesta</label>
              <input type="number" name="presupuesto" id="presupuesto" class="form-control" <?php if($buscar_propuesta): ?>value="<?php echo $buscar_propuesta->valor_propuesta; ?>"<?php endif; ?>>
              </div>              
              </div>  

              <div class="col-md-12">
              <div class="form-group">
              <?php if($buscar_propuesta): ?>
                  <button type="submit" class="btn btn-primary" name="guardar_propuesta">Modificar Propuesta</button>
              <?php else: ?>
                  <button type="submit" class="btn btn-primary" name="guardar_propuesta">Enviar Propuesta</button>
              <?php endif; ?>
              </div>              
              </div>                                                      
              </div>
              
              
              </form>


              </div>
              

              <?php endif; ?>

              <div class="col-md-3 shadow pt-3 pb-3">
                <?php if(!isset($_GET["slug"])): ?>
                <?php if(is_user_logged_in()): ?> 
                <?php if($buscar_propuesta): ?>
                  <a class="btn btn-propuesta" href="<?php echo get_permalink(); ?>?slug=hacer-propuesta">Modificar Propuesta</a>
                <?php else: ?>
                  <a class="btn btn-propuesta" href="<?php echo get_permalink(); ?>?slug=hacer-propuesta">Hacer Propuesta</a>
                <?php endif; ?>

              
                <?php else: ?>
                <a class="btn btn-propuesta" href="<?php echo get_site_url(); ?>/acceder">Acceder</a>
                <?php endif; ?>
                <?php endif; ?>
                <div class="text-left mt-3">
                <img src="<?php echo $url_icon; ?>" class="d-inline-block" style="width:60px;height:60px;object-fit:cover;border-radius:50%;box-shadow: 1px 1px 1px rgba(0,0,0,.3);margin-top: -30px;">
                <span class="d-inline-block">
                <h6><strong></strong> <?php echo get_the_author_meta("display_name"); ?></h6>
                <h6><i class="fa fa-star" style="color:orange;"></i> 5.00</h6>
                </span>
                </div>
                <div class="text-left mt-3 text-secondary">
                <h6><strong>Trabajos publicados:</strong> 1 </h6>
                <h6><strong>Trabajos pagados:</strong> 0 </h6>
                <h6><strong>Miembro desde:</strong> <?php echo date("M Y", strtotime($user_author_data->user_registered)); ?> </h6>
                </div>                

                <div class="text-left mt-3 text-secondary">
                <h4>Datos del trabajo:</h4>
                <h6><strong>Propuestas recibidas:</strong> 0 </h6>
                <button type="button" class="btn btn-propuesta messenger" id-user="<?php echo get_current_user_id(); ?>" id-post="<?php echo $id_post; ?>" id-autor="<?php echo $id_autor ?>">Enviar Mensaje</button>
                </div>

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


<div class="container-fluid h-100 d-none posision-chat" id="chat">
			<div class="row justify-content-center h-100">
				
				<div class="col-md-4 offset-md-8 chat posicion-caja">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with Khalid</span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<!-- <span><i class="fas fa-video"></i></span> -->
									<!-- <span><i class="fas fa-phone"></i></span> -->
								</div>
							</div>
							<!-- <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div> -->
						</div>
						<div class="card-body msg_card_body">
              
							
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>