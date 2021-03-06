<?php
/*
Template Name: Page mi cuenta home
*/

get_header();
 
if ( have_posts() ) : 
while ( have_posts() ) : the_post();

$url_image = get_the_post_thumbnail_url();

if(!$url_image){
$fondo = "background: linear-gradient(90deg, rgba(18,9,171,1) 0%, rgba(37,51,236,1) 35%, rgba(0,212,255,1) 100%) !important;";
}else{
  $fondo = "background-image: url(".$url_image.") !important;";
}
    

?> 
<!-- PAGINA PAGE.PHP -->

 <header class="fondo-blog-interna" style="<?php echo $fondo; ?>">
    <div class="transparente">
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
<div class="wrapper-page">
<section>

	<div class="container">
		<div class="row">
            <div class="col-md-3">
            <div class="list-group">
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"])){ }else{ echo "active"; } ?>">Panel de control</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=lista_servicios" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "lista_servicios" || isset($_GET["slug"]) && $_GET["slug"] == "add_new" || isset($_GET["slug"]) && $_GET["slug"] == "edit_post"){ echo "active"; } ?>">Lista servicios solicitados</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=propuestas_recibidas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "propuestas_recibidas"){ echo "active"; } ?>">Propuestas recibidas</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=propuestas_enviadas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "propuestas_enviadas"){ echo "active"; } ?>">Propuestas enviadas</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=propuestas_enviadas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "servicios_activos"){ echo "active"; } ?>">Servicios Ejecutando</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=mis_finanzas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "mis_finanzas" || isset($_GET["slug"]) && $_GET["slug"] == "cargar_saldo"){ echo "active"; } ?>">Mis finanzas</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=editar_perfil" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "editar_perfil"){ echo "active"; } ?>">Editar perfil</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=cambiar_contrasena" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "cambiar_contrasena"){ echo "active"; } ?>">Cambiar contraseña</a>
            <a href="<?php echo wp_logout_url(); ?>" class="list-group-item list-group-item-action">Salir</a>

            
            </div>
            </div> 
			<div class="col-md-9">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</section>	
</div>        

<?php
	endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 

get_footer();
?>