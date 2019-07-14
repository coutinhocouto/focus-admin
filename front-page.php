<?php get_header(); ?>

                    
<!-- START PAGE HEADING -->
<div class="app-heading app-heading-bordered app-heading-page">
	<div class="icon icon-lg">
		<span class="icon-laptop-phone"></span>
	</div>
	<div class="title">
		<h1>Focus Administradora - Rentals</h1>
		<p>Dashboard</p>
	</div>               
	<!--<div class="heading-elements">
		<a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
		<a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
	</div>-->
</div>
<div class="app-heading-container app-heading-bordered bottom">
	<ul class="breadcrumb">                                                  
		<li class="active">Dashboard</li>
	</ul>
</div>
<!-- END PAGE HEADING -->

<!-- START PAGE CONTAINER -->
<div class="container">

	<div class="row">

		<div class="col-md-4">

			<ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
				  <li>                                        
					<!-- START WIDGET -->
					<div class="app-widget-tile app-widget-highlight">
						<div class="row">
							<div class="col-sm-4">
								<div class="icon icon-lg">
									<span class="icon-home"></span>
								</div>
							</div>
							<div class="col-sm-8">                                                    
								<div class="line">
									<div class="title">Anúncios</div>
									<div class="title pull-right"><span class="label label-primary label-ghost label-bordered"><a href="https://focusadministradora.com/rentals/anuncios/criar-um-anuncio/" style="color: #fff;">Adicionar Anúncio</a></span></div>
								</div>                   
								<div class="intval text-left"><?php echo count_user_posts( get_current_user_id() , 'anuncio' );?></div>                               
								<div class="line">
									<div class="subtitle pull-right"><a href="https://focusadministradora.com/rentals/anuncios/" class="text-navyblue-100">Ver Anúncios</a></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->                                        
				</li>
			</ul>

		</div>
		
		<div class="col-md-4">

			<ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
				  <li>                                        
					<!-- START WIDGET -->
					<div class="app-widget-tile app-widget-highlight">
						<div class="row">
							<div class="col-sm-4">
								<div class="icon icon-lg">
									<span class="icon-file-empty"></span>
								</div>
							</div>
							<div class="col-sm-8">                                                    
								<div class="line">
									<div class="title">Contratos</div>
									<div class="title pull-right"><span class="label label-primary label-ghost label-bordered"><a href="https://focusadministradora.com/rentals/contratos/criar-contrato/" style="color: #fff;">Adicionar Contrato</a></span></div>
								</div>                   
								<div class="intval text-left"><?php echo count_user_posts( get_current_user_id() , 'contrato' );?></div>                                        
								<div class="line">
									<div class="subtitle pull-right"><a href="https://focusadministradora.com/rentals/contratos/" class="text-navyblue-100">Ver Contratos</a></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->                                        
				</li>
			</ul>

		</div>
		
		<div class="col-md-4">

			<ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
				  <li>                                        
					<!-- START WIDGET -->
					<div class="app-widget-tile app-widget-highlight">
						<div class="row">
							<div class="col-sm-4">
								<div class="icon icon-lg">
									<span class="icon-users"></span>
								</div>
							</div>
							<div class="col-sm-8">                                                    
								<div class="line">
									<div class="title">Locadores</div> 
									<div class="title pull-right"><span class="label label-primary label-ghost label-bordered"><a href="https://focusadministradora.com/rentals/locadores/adicionar-locador/" style="color: #fff;">Adicionar Locador</a></span></div>
								</div>                   
								<div class="intval text-left"><?php echo count_user_posts( get_current_user_id() , 'locador' );?></div>                                        
								<div class="line">
									<div class="subtitle pull-right"><a href="https://focusadministradora.com/rentals/locadores/" class="text-navyblue-100">Ver Locadores</a></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->                                        
				</li>
			</ul>

		</div>
		
		<div class="col-md-4">

			<ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
				  <li>                                        
					<!-- START WIDGET -->
					<div class="app-widget-tile app-widget-highlight">
						<div class="row">
							<div class="col-sm-4">
								<div class="icon icon-lg">
									<span class="icon-users"></span>
								</div>
							</div>
							<div class="col-sm-8">                                                    
								<div class="line">
									<div class="title">Locatários</div>                                   
									<div class="title pull-right"><span class="label label-primary label-ghost label-bordered"><a href="https://focusadministradora.com/rentals/locatarios/adicionar-locatario/" style="color: #fff;">Adicionar Locatário</a></span></div>
								</div>                   
								<div class="intval text-left"><?php echo count_user_posts( get_current_user_id() , 'locatario' );?></div>                                        
								<div class="line">
									<div class="subtitle pull-right"><a href="https://focusadministradora.com/rentals/locatarios/" class="text-navyblue-100">Ver Locatários</a></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->                                        
				</li>
			</ul>

		</div>
		
		<div class="col-md-4">

			<ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
				  <li>                                        
					<!-- START WIDGET -->
					<div class="app-widget-tile app-widget-highlight">
						<div class="row">
							<div class="col-sm-4">
								<div class="icon icon-lg">
									<span class="icon-users"></span>
								</div>
							</div>
							<div class="col-sm-8">                                                    
								<div class="line">
									<div class="title">Fiadores</div>               
									<div class="title pull-right"><span class="label label-primary label-ghost label-bordered"><a href="https://focusadministradora.com/rentals/fiadores/adicionar-fiador/" style="color: #fff;">Adicionar Fiador</a></span></div>
								</div>                   
								<div class="intval text-left"><?php echo count_user_posts( get_current_user_id() , 'fiador' );?></div>                                        
								<div class="line">
									<div class="subtitle pull-right"><a href="https://focusadministradora.com/rentals/fiadores/" class="text-navyblue-100">Ver Fiadores</a></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END WIDGET -->                                        
				</li>
			</ul>

		</div>
		
	</div>

</div>
<!-- END PAGE CONTAINER -->


<?php get_footer();