<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

        <!-- APP WRAPPER -->
        <div class="app">           

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="<?php echo get_home_url(); ?>" class="app-navigation-logo">
                        Focus Administradora - Rentals
                        <!--<button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">7</span></button>-->
                    </a>
                    <nav>
                        <ul>
                            <li class="title">PRINCIPAL</li>
                            <li><a href="<?php echo get_home_url(); ?>"><span class="nav-icon-hexa text-bloody-100">Pa</span> Painel</a></li>
                            <li>
                                <a href="#">
									<span class="nav-icon-hexa text-orange-100">AN</span> Anúncios <span class="label label-success label-bordered label-ghost">+5</span></a>
                                <ul>                                
                                    <li><a href="https://focusadministradora.com/rentals/anuncios/"><span class="nav-icon-hexa">TA</span> Todos os anúnicios</a></li>
                                    <li><a href="https://focusadministradora.com/rentals/anuncios/criar-um-anuncio/"><span class="nav-icon-hexa">AA</span> Adicionar anúncio</a></li>
                                </ul>
                            </li>
							<li>
                                <a href="#">
									<span class="nav-icon-hexa text-orange-100">CO</span> Contratos <span class="label label-success label-bordered label-ghost">+5</span>
								</a>
                                <ul>                                
                                    <li><a href="https://focusadministradora.com/rentals/contratos/"><span class="nav-icon-hexa">TC</span> Todos os contratos</a></li>
                                    <li><a href="https://focusadministradora.com/rentals/contratos/criar-um-contrato/"><span class="nav-icon-hexa">AC</span> Adicionar contrato</a></li>
                                </ul>
                            </li>
                            
							<li class="title">PESSOAS</li>
							<li>
								<a href="#"><span class="nav-icon-hexa text-sea-100">Lo</span> Locadores</a>
								<ul>                                
                                    <li><a href="https://focusadministradora.com/rentals/locadores/"><span class="nav-icon-hexa">AL</span> Todos os locadores</a></li>
                                    <li><a href="https://focusadministradora.com/rentals/locadores/adicionar-locador/"><span class="nav-icon-hexa">TL</span> Adicionar locador</a></li>
                                </ul>
							</li>
							<li>
                                <a href="#"><span class="nav-icon-hexa text-teal-100">Lo</span> Locatários</a>
								<ul>                                
                                    <li><a href="https://focusadministradora.com/rentals/locatarios/"><span class="nav-icon-hexa">AL</span> Todos os locatários</a></li>
                                    <li><a href="https://focusadministradora.com/rentals/locatarios/adicionar-locatario/"><span class="nav-icon-hexa">TL</span> Adicionar locatário</a></li>
                                </ul>
							</li>
							<li>
                                <a href="#"><span class="nav-icon-hexa text-blue-100">Fi</span> Fiadores</a>
								<ul>                                
                                    <li><a href="https://focusadministradora.com/rentals/fiadores/"><span class="nav-icon-hexa">AF</span> Todos os fiadores</a></li>
                                    <li><a href="https://focusadministradora.com/rentals/fiadores/adicionar-fiador/"><span class="nav-icon-hexa">TF</span> Adicionar fiador</a></li>
                                </ul>
							</li>
							
                            <li class="title">MINHA CONTA</li>                
                            <li>
                                <a href="https://focusadministradora.com/rentals/editar-conta/"><span class="nav-icon-hexa text-lime-200">EC</span> Editar Conta</a>
                            </li>
       
                            <li class="title">ADICIONAIS</li>							
                            <li>
                                <a href="https://focusadministradora.com/rentals/chat/"><span class="nav-icon-hexa text-purple-100">CH</span> Chat</a>
                            </li>
							<li class="title">SAIR</li>							
                            <li>
                                <a href="<?php echo wp_logout_url(); ?>"><span class="nav-icon-hexa text-yellow-100">SA</span> Sair</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->
                
                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        </ul>
                    
                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls">
                                    <div class="contact-container">
                                        <span>
											<?php global $current_user; get_currentuserinfo(); echo $current_user->user_firstname;?>
										</span>
                                    </div>
                                    <div class="contact-controls">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-cog"></span></button>                        
                                            <ul class="dropdown-menu dropdown-left">
                                                <li><a href="https://focusadministradora.com/rentals/editar-conta/"><span class="icon-cog"></span> Editar conta</a></li> 
                                                <li><a href="https://focusadministradora.com/rentals/chat/"><span class="icon-envelope"></span> Chat</a></li>
                                                <li class="divider"></li>
                                                <li><a href="<?php echo wp_logout_url(); ?>"><span class="icon-exit"></span> Sair</a></li> 
                                            </ul>
                                        </div>                    
                                    </div>
                                </div>
                            </li>        
                        </ul>
                    </div>
                    <!-- END APP HEADER  -->