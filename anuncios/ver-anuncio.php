<?php 
    
    $id =  $_GET["pid"];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		if($_POST['status'] == 'Inativo'){
			$status = 'Inativo';
		} else {
			$status = 'Ativo';
		}
		
        update_field( 'status_do_anuncio', $status , $id );
        
        echo '<div class="alert alert-success alert-icon-block alert-dismissible" role="alert"><div class="alert-icon"><span class="icon-checkmark-circle"></span></div><strong>Sucesso!</strong> Status do anúncio alterado com sucesso! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button></div>';
    }

?>

<div class="row">
	<div class="col-md-6">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-home"></span>Anúncio - <?php echo get_the_title( $id );?></h3>
				<div class="panel-elements pull-right">
					<form action="" style="display: inline-block; vertical-align: super;" method="post" id="anuncio-status-change">
						
						<label class="switch switch-cube">
                           <input type="checkbox" name="status"
								  <?php 
										if(get_post_meta( $id, 'status_do_anuncio', true ) == 'Ativo') { 
											echo 'checked="" value="Inativo"';
										} else {
											echo 'value="Inativo"';
										}
									?>
								   
							>
                           <span></span>
						</label> 
					</form>
					
					<a href="https://focusadministradora.com/rentals/anuncios/editar-anuncio/?pid=<?php echo $id; ?>" style="margin: 0 0 0 10px; display: inline-block;"><button type="button" class="btn btn-info">Editar</button></a>
					
				</div>
			</div>
			<div class="panel-body">  
				
				<p>
					<strong>Transação:</strong> <?php echo get_post_meta( $id, 'transacao', true ); ?><br>
					<strong>Tipo:</strong> <?php echo get_post_meta( $id, 'tipo', true ); ?><br>
					<strong>Subtipo:</strong> <?php echo get_post_meta( $id, 'subtipo', true ); ?><br>
					<strong>Categoria:</strong> <?php echo get_post_meta( $id, 'categoria', true ); ?><br>
					<strong>Descrição:</strong><br><?php echo get_post_meta( $id, 'descricao_do_anuncio', true ); ?>
				</p>
			</div>
		</div>

	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-map-marker"></span> Localização</h3>
				<div class="panel-elements pull-right">
					<a href="<?php echo "https://www.google.com/maps/place/" . get_post_meta( $id, 'endereco', true ) . " " .  get_post_meta( $id, 'numero', true ) . " - " . get_post_meta( $id, 'bairro', true ) . " / " . get_post_meta( $id, 'cidade', true ) . " " . get_post_meta( $id, 'estado', true ); ?>" style="color: #000;" target="_blank">
						<button class="panel panel-default" style="margin: 0;">Localizar</button>
					</a>
				</div>
			</div>
			<div class="panel-body">                                    
				<p>
					<strong>CEP:</strong> <?php echo get_post_meta( $id, 'cep', true ); ?><br>
					<strong>Endreço:</strong> <?php echo get_post_meta( $id, 'endereco', true ); ?><br>
					<strong>Número:</strong> <?php echo get_post_meta( $id, 'numero', true ); ?><br>
					<strong>Bairro:</strong> <?php echo get_post_meta( $id, 'bairro', true ); ?><br>
					<strong>Cidade:</strong> <?php echo get_post_meta( $id, 'cidade', true ); ?><br>
					<strong>Estado:</strong> <?php echo get_post_meta( $id, 'estado', true ); ?><br>
					<?php if(get_post_meta( $id, 'complemento', true )) { ?>
						<strong>Complemento:</strong> <?php echo get_post_meta( $id, 'complemento', true ); ?>
					<?php } ?>
				</p>                                   
			</div>
		</div>

	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-list"></span> Caraterísticas do anúncio</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<strong>Área Útil:</strong> <?php echo get_post_meta( $id, 'area_util', true ); ?><br>
					<strong>Área Total:</strong> <?php echo get_post_meta( $id, 'area_total', true ); ?><br>
					<?php if(get_post_meta( $id, 'quartos', true )) { ?>
						<strong>Nº de quartos:</strong> <?php echo get_post_meta( $id, 'quartos', true ); ?><br>
					<?php } if(get_post_meta( $id, 'banheiros', true )) { ?>
						<strong>Nº de banheiros:</strong> <?php echo get_post_meta( $id, 'banheiros', true ); ?><br>
					<?php } if(get_post_meta( $id, 'possui_garagem', true )) { ?>
						<strong>Vagas na garagem:</strong> <?php echo get_post_meta( $id, 'vagas_na_garagem', true ); ?><br>
					<?php } if(get_post_meta( $id, 'mobiliado', true )) { ?>
						<strong>É mobiliado</strong><br>
					<?php } if(get_post_meta( $id, 'andar', true )) { ?>
						<strong>Andar:</strong> <?php echo get_post_meta( $id, 'andar', true ); ?><br>
					<?php } if(get_post_meta( $id, 'proximo_ao_metro', true )) { ?>
						<strong>É próximo ao metrô</strong><br>
					<?php } if(get_post_meta( $id, 'caracteristicas_do_imovel', true )) { ?>
						<br><strong>Características do imóvel:</strong> <br><?php 
							$cimoveis = get_post_meta( $id, 'caracteristicas_do_imovel', true );
							$lcimoveis = end($cimoveis);
							foreach ($cimoveis as $cimovel) {
								echo $cimovel;
								if($cimovel != $lcimovel) {
									echo ', ';
								}
							}
						?>
					<?php } if(get_post_meta( $id, 'caracteristicas_do_condominio', true )) { ?>
						<br><br><strong>Características do condomínio:</strong> <br><?php 
							$cconds = get_post_meta( $id, 'caracteristicas_do_condominio', true );
							$lccond = end($cconds);
							foreach ($cconds as $ccond) {
								echo $ccond;
								if($ccond != $lccond) {
									echo ', ';
								}
							}
						?>
					<?php } ?>
				</p>                                   
			</div>
		</div>

	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-usd" aria-hidden="true" style="font-size: 15px; line-height: 40px;"></i> Valores</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<?php if(get_post_meta( $id, 'valor_da_locacao', true )) { ?>
						<strong>Valor da locação:</strong> R$ <?php echo get_post_meta( $id, 'valor_da_locacao', true ); ?><br>
					<?php } if(get_post_meta( $id, 'valor_da_venda', true )) { ?>
						<strong>Valor para venda:</strong> R$ <?php echo get_post_meta( $id, 'valor_da_venda', true ); ?><br>
					<?php } if(get_post_meta( $id, 'numero_iptu', true )) { ?>
						<strong>Nº do IPTU:</strong> <?php echo get_post_meta( $id, 'numero_iptu', true ); ?><br>
					<?php } if(get_post_meta( $id, 'isento_de_iptu', true )) { ?>
						<strong>Insento do IPTU?</strong> <?php echo get_post_meta( $id, 'isento_de_iptu', true ); ?><br>
					<?php } if(get_post_meta( $id, 'valor_do_iptu', true )) { ?>
						<strong>Valor do IPTU:</strong> R$ <?php echo get_post_meta( $id, 'valor_do_iptu', true ); ?><br>
					<?php } if(get_post_meta( $id, 'valor_do_condominio', true )) { ?>
						<strong>Valor do Condomínio:</strong> R$ <?php echo get_post_meta( $id, 'valor_do_condominio', true ); ?><br>
					<?php } if(get_post_meta( $id, 'seguro_incendio', true )) { ?>
						<strong>Seguro Incêndio:</strong> R$ <?php echo get_post_meta( $id, 'seguro_incendio', true ); ?><br>
					<?php } ?>
				</p>                                   
			</div>
		</div>

	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-lock" aria-hidden="true" style="font-size: 15px; line-height: 40px;"></i>Aceite</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<?php if(get_post_meta( $id, 'arquivo_de_aceite', true )) { ?>
						<strong>Arquivo de aceite:</strong> 
						<a href="<?php echo get_field('arquivo_de_aceite', $id); ?>" target="_blank">
							<button class="btn btn-default btn-icon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
						</button>
						</a>
					<?php } ?>
				</p>
			</div>
		</div>
	</div>
	
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-camera"></span> Galeria de Fotos</h3>
			</div>
			<div class="panel-body">                                    
				<div class="col-md-4">
					<ul class="app-feature-gallery">
						
						<?php 

						$images = get_field('galeria_de_fotos', $id);
						$size = 'anuncios'; // (thumbnail, medium, large, full or custom size)

						if( $images ): ?>
							
								<?php foreach( $images as $image ): ?>
									<li>
										<div class="tile-basic">
											<div class="tile-image">
												<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
											</div>                                    
										</div>
									</li>  
								<?php endforeach; ?>
							
						<?php endif; ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>