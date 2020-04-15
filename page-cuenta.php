<?php
/*
Template Name: Page mi cuenta home
*/

get_header();
 
if ( have_posts() ) : 
while ( have_posts() ) : the_post();

$url_image = get_the_post_thumbnail_url();

if(!$url_image){
$fondo = "background: #000 !important;";
}else{
  $fondo = "background-image: url(".$url_image.") !important;";
}
    

?> 
<!-- PAGINA PAGE.PHP -->

 <header class="fondo-blog-interna" style="<?php echo $fondo; ?>">
    <div class="transparente" style="background-color: #000;">
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
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=lista_servicios" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "lista_servicios" || $_GET["slug"] == "add_new" || $_GET["slug"] == "edit_post"){ echo "active"; } ?>">Lista servicios</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=propuestas_recibidas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "propuestas_recibidas"){ echo "active"; } ?>">Propuestas recibidas</a>
            <a href="<?php echo get_site_url(); ?>/mi-cuenta/?slug=propuestas_enviadas" class="list-group-item list-group-item-action <?php if(isset($_GET["slug"]) && $_GET["slug"] == "propuestas_enviadas"){ echo "active"; } ?>">Propuestas enviadas</a>
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