
 
  <!-- Footer -->
  <footer class="footer" style="background-color: #000;">
    <div class="container" style=" border-top: 1px solid #fff;">
      <div class="row align-items-center pt-3">
        <div class="col-md-4">
          <span class="text-white copyright">© 2020 Pets All rights reserved.</span>
        </div>

        <div class="col-md-4">
         
        </div>

        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </footer>


  

<?php wp_footer(); ?>

<?php 

    $cu = wp_get_current_user();
?>
<div class="container-fluid h-100 d-none posision-chat" id="chat">
			<div class="row justify-content-center h-100">
				
				<div class="chat posicion-caja">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight justify-content-between">
								<div class="img_cont d-flex justify-content-center align-items-center">
									<!-- <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img"> -->
                  <i class="fas fa-user-circle" style="font-size: 3rem"></i>
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?php echo $cu->user_firstname ?></span>
									<p class="contar-mensage"></p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-times-circle cerrar-chat"></i></span>
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
									<span class="input-group-text send_btn" id-post="" id-user="" id-cliente=""><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


</body>
</html>
<?php
ob_end_flush();
?>