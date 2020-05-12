<?php
/*
Template Name: Page blank container
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
			<div class="col-md-12">
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