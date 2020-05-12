<?php 
get_header();
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
        <h1 class="titulo-blog-interna text-center pb-5">ERROR 404</h1>
      </div>
      </div>
      </div>
    </div>
    </div>
  </header> 

<section class="cuerpo">
    <div class="container">
        <div class="row justify-content-center" style="height: auto;">
            <div class="col-md-12 diseno text-center">
                <h2 class="text-center pt-5" style="font-size: 45px !important">PAGINA NO ENCONTRADA</h2>
                <a href="<?php echo get_site_url(); ?>" class="pb-5 btn boton-encontrada">IR AL HOME</a>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer();
?>