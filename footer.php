
  <section class="section-footer">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-3">
        <h6>Buscar cuidador en:</h6>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut tortor est. 
        Nunc pharetra pharetra mi, eu bibendum elit pharetra ac. Quisque molestie bibendum lectus sed porta.</p>
      </div>
      <div class="col-md-3">
        <h6>Buscar cuidador en:</h6>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut tortor est. 
        Nunc pharetra pharetra mi, eu bibendum elit pharetra ac. Quisque molestie bibendum lectus sed porta.</p>
      </div>      
      <div class="col-md-3">
      <h6>Contáctanos:</h6>

      <table>
      <tr>
        <td>
        <a href="#">
                <i class="fab fa-whatsapp" style="font-size:42px;"></i>
        </a>        
        </td>
        <td class="pl-2">
        <a href="#"><small>Whatsapp:</small><br>
        <p>+54 555 5555 5555</p></a>
        </td>
      </tr>
      <tr>
        <td>
        <a href="#">
                <i class="fa fa-envelope" style="font-size:42px;"></i>
        </a>        
        </td>
        <td class="pl-2">
        <a href="#"><small>Email:</small><br>
        <p>info@morganp.com</p></a>
        </td>
      </tr>      
      </table>
      </div>

      <div class="col-md-3">

      <h6>Más info:</h6>
      <a href="#"><p class="pb-0 mb-0">Ayuda</p></a>
      <a href="#"><p class="pb-0 mb-0">Lorem ipsum dolor sit amet</p></a>
      <a href="#"><p class="pb-0 mb-0">Lorem ipsum dolor sit</p></a>
      <a href="#"><p class="pb-0 mb-0">Lorem ipsum dolor</p></a>
      <a href="#"><p class="pb-0 mb-0">Lorem ipsum dolor sit</p></a>                        
      </div>          
      </div>      
    </div>
  </div>
  </section>

  <!-- Footer -->
  <footer class="footer" style="background-color: #000;">
    <div class="container">
      <div class="row align-items-center py-3">
        <div class="col-md-12 text-center">
          <span class="text-white copyright">© 2020 Pets All rights reserved.</span>
        </div>

        
      </div>
    </div>
  </footer>


  

<?php wp_footer(); ?>

<?php echo do_shortcode( '[chat]' ); ?>
<?php echo do_shortcode( '[chat_grupal]' ); ?>


</body>
</html>
<?php
ob_end_flush();
?>