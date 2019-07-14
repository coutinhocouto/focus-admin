<?php get_header(); ?>

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
					<?php if(is_page(277)) { include (TEMPLATEPATH . '/anuncios/criar-anuncio.php');  ?>
					<?php } else if(is_page(286)) { include (TEMPLATEPATH . '/anuncios/anuncios.php');  ?> 
					<?php } else if(is_page(404)) { include (TEMPLATEPATH . '/anuncios/editar-anuncio.php');  ?>
					<?php } else if(is_page(412)) { include (TEMPLATEPATH . '/anuncios/ver-anuncio.php');  ?>

					<?php } else if(is_page(300)) { include (TEMPLATEPATH . '/locatarios/criar-locatario.php');  ?>
					<?php } else if(is_page(298)) { include (TEMPLATEPATH . '/locatarios/locatarios.php');  ?> 
					<?php } else if(is_page(429)) { include (TEMPLATEPATH . '/locatarios/editar-locatario.php');  ?>
					<?php } else if(is_page(325)) { include (TEMPLATEPATH . '/locatarios/ver-locatario.php');  ?>
					
					<?php } else if(is_page(296)) { include (TEMPLATEPATH . '/locadores/criar-locador.php');  ?>
					<?php } else if(is_page(294)) { include (TEMPLATEPATH . '/locadores/locadores.php');  ?> 
					<?php } else if(is_page(467)) { include (TEMPLATEPATH . '/locadores/editar-locador.php');  ?>
					<?php } else if(is_page(358)) { include (TEMPLATEPATH . '/locadores/ver-locador.php');  ?>
					
					<?php } else if(is_page(304)) { include (TEMPLATEPATH . '/fiadores/criar-fiador.php');  ?>					
					<?php } else if(is_page(302)) { include (TEMPLATEPATH . '/fiadores/fiadores.php');  ?> 
					<?php } else if(is_page(431)) { include (TEMPLATEPATH . '/fiadores/editar-fiador.php');  ?>
					<?php } else if(is_page(364)) { include (TEMPLATEPATH . '/fiadores/ver-fiador.php');  ?>
					
					<?php } else if(is_page(283)) { include (TEMPLATEPATH . '/contrato/criar-contrato.php');  ?>					
					<?php } else if(is_page(288)) { include (TEMPLATEPATH . '/contrato/contratos.php');  ?>
					<?php } else if(is_page(433)) { include (TEMPLATEPATH . '/contrato/editar-contrato.php');  ?>
					<?php } else if(is_page(718)) { include (TEMPLATEPATH . '/contrato/ver-contrato.php');  ?>
					
					<?php } else if(is_page(443)) { include (TEMPLATEPATH . '/financeiro/criar-financeiro.php');  ?>					
					<?php } else if(is_page(437)) { include (TEMPLATEPATH . '/financeiro/financeiro.php');  ?> 
					<?php } else if(is_page(439)) { include (TEMPLATEPATH . '/financeiro/editar-financeiro.php');  ?>
					<?php } else if(is_page(441)) { include (TEMPLATEPATH . '/financeiro/ver-financeiro.php');  ?>
					
					<?php } else if(is_page(1012)) { include (TEMPLATEPATH . '/corretor/corretor.php');  ?>
					
					<?php } else { while ( have_posts() ) : the_post(); the_content(); endwhile; } ?>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
