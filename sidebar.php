<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
			 <!--<label for="">Busqueda:</label>
             <form id="searchform" method="get" action="<?php echo home_url('/'); ?>"> 
             <div class="form-group">
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Has una nueva busqueda..." aria-label="Recipient's username" aria-describedby="button-addon2" name="s" value="<?php //the_search_query(); ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
                </div>
                </div>
				</form> --> 
				<ul class="list-group">

				<?php 

				$terms = get_terms( array(
				'taxonomy' => 'categoria_servicios',
				'hide_empty' => false,
				) );

				foreach($terms as $key => $value):
				?>
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<a href="<?php echo esc_url( get_term_link( $value->term_id,"categoria_servicios" ) ); ?>"> <?php echo $value->name; ?>
					
					<!--<span class="badge badge-primary badge-pill">
						<?php 
						echo wp_get_postcount($value->term_id);
						?>
					</span>--></a>
				</li>
				<?php 
				endforeach;
				?>

				</ul>
	<?php if ( is_active_sidebar( 'sidebar-principal' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-principal' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>

</div><!-- #secondary -->

<?php
function wp_get_postcount($idcat)
{
    global $wpdb;
    $query = "SELECT count FROM $wpdb->term_taxonomy WHERE term_id = $idcat";
    $numero = $wpdb->get_col($query);
    echo $numero[0];
}

?>