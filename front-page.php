<?php 
/*
Template Name: Pagina Home
*/
get_header();
?>


  <!-- Masthead-->
        <header class="masthead" id="home">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source Lorem Ipsum Themes</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

 <!-- ======= Services Section ======= -->
    <section id="services " class="services section-bg">
      <div class="container">
     
        <div class="section-title mt-5 pt-5">
          <h2 class="text-center mt-0">Servicios que puedes encontrar</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row pb-5 mb-5">
          <div class="col-lg-3 col-md-3">
            <div class="icon-box">
              <div class="icon"> <i class="fas fa-paw icon-blue"></i></div>
              <h4 class="title"><a href="">Mascotas</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="icon-box">
              <div class="icon"> <i class="fas fa-4x fa-child icon-blue"></i></div>
              <h4 class="title"><a href="">Cuidado de niños</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-4x fa-blind icon-blue"></i></div>
              <h4 class="title"><a href="">Cuidado de Ancianos</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-3">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-4x fa-running icon-blue"></i></div>
              <h4 class="title"><a href="">Personal Trainer</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



     <!--- 
        <section class="page-section" id="services">
            <div class="container">
               
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                          
                            <h3 class="h4 mb-2"></h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                           
                            <h3 class="h4 mb-2"></h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            
                            <h3 class="h4 mb-2"></h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            
                            <h3 class="h4 mb-2"></h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        
      
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/11.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/55.jpeg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/22.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/66.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/44.jpg" alt="" />
                            <div class="portfolio-box-caption"> 
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"
                            ><img class="img-fluid galery" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/thumbnails/33.png" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Pets MP</div>
                            </div></a
                        >
                    </div>

                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Lorem Ipsum es simplemente el texto de relleno</h2>
                <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>

            </div>
        </section>
       
        <!-- Contact section-->
        <section class="contactanos" id="contact">
            <div class="wrapper-contact">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-5 text-dark">Contáctanos</h2>
                        <hr class="divider my-4" />
                        <p class="mb-5 text-dark">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone text-dark fa-3x mb-3"></i>
                        <div class="text-dark">+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center text-dark">
                        <i class="fas fa-envelope text-dark fa-3x mb-3"></i
                        ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block text-dark" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                    </div>
                </div>
            </div>
            </div>
        </section>


<?php
get_footer();
?>