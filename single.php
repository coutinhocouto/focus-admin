<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<!-- START PAGE HEADING -->
<div class="app-heading app-heading-bordered app-heading-page">
	<div class="icon icon-lg">
		<span class="icon-laptop-phone"></span>
	</div>
	<div class="title">
		<h1>Focus Administradora - Rentals</h1>
		<p><?php the_title(); ?></p>
	</div>               
	<!--<div class="heading-elements">
		<a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
		<a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
	</div>-->
</div>
<div class="app-heading-container app-heading-bordered bottom">
	<ul class="breadcrumb">
		<li><a href="https://focusadministradora.com/rentals">Dashboard</a></li>                                                     
		<li class="active"><?php the_title(); ?></li>
	</ul>
</div>
<!-- END PAGE HEADING -->

<!-- START PAGE CONTAINER -->
<div class="container">

	<div class="row">
		<div class="col-md-12">
			<div class="block block-condensed">
				<div class="app-heading app-heading-small">                                
					<div class="title">
						
					</div>
				</div>
				<div class="block-content">
					
					<?php 

						if ( is_singular( 'locatario' ) ) {
							
							include (TEMPLATEPATH . '/ver-locatario.php');
							
						}
					?>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php endwhile; ?>

<?php get_footer();
