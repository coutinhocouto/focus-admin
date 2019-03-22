<div class="col-md-6">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="icon-home"></span>Anúncio - <?php the_title();?></h3>
			<div class="panel-elements pull-right">
				<?php 
					if(get_post_meta( get_the_ID(), 'status', true ) == 'Ativo') { 
						$class = 'btn-success'; 
					} else if(get_post_meta( get_the_ID(), 'status', true ) == 'Inativo') { 
						$class = 'btn-danger';
					} 
				?>
				<button class="btn <?php echo $class;?>"><?php echo get_post_meta( get_the_ID(), 'status', true ); ?></button>
			</div>
		</div>
		<div class="panel-body">                                    
			<p>
				<strong>Transação:</strong> <?php echo get_post_meta( get_the_ID(), 'transacao', true ); ?><br>
				<strong>Tipo:</strong> <?php echo get_post_meta( get_the_ID(), 'tipo', true ); ?><br>
				<strong>Subtipo:</strong> <?php echo get_post_meta( get_the_ID(), 'subtipo', true ); ?><br>
				<strong>Categoria:</strong> <?php echo get_post_meta( get_the_ID(), 'categoria', true ); ?><br>
				<strong>Descrição:</strong><br><?php echo get_post_meta( get_the_ID(), 'descricao', true ); ?>
			</p>                                   
		</div>
	</div>

</div>

<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="icon-map-marker"></span> Localização</h3>
			<div class="panel-elements pull-right">
				<a href="<?php echo "https://www.google.com/maps/place/" . get_post_meta( get_the_ID(), 'endereco', true ) . " " .  get_post_meta( get_the_ID(), 'numero', true ) . " - " . get_post_meta( get_the_ID(), 'bairro', true ) . " / " . get_post_meta( get_the_ID(), 'cidade', true ) . " " . get_post_meta( get_the_ID(), 'estado', true ); ?>" style="color: #000;" target="_blank">
					<button class="panel panel-default" style="margin: 0;">Localizar</button>
				</a>
			</div>
		</div>
		<div class="panel-body">                                    
			<p>
				<strong>CEP:</strong> <?php echo get_post_meta( get_the_ID(), 'cep', true ); ?><br>
				<strong>Endreço:</strong> <?php echo get_post_meta( get_the_ID(), 'endereco', true ); ?><br>
				<strong>Número:</strong> <?php echo get_post_meta( get_the_ID(), 'numero', true ); ?><br>
				<strong>Bairro:</strong> <?php echo get_post_meta( get_the_ID(), 'bairro', true ); ?><br>
				<strong>Cidade:</strong> <?php echo get_post_meta( get_the_ID(), 'cidade', true ); ?><br>
				<strong>Estado:</strong> <?php echo get_post_meta( get_the_ID(), 'estado', true ); ?><br>
				<?php if(get_post_meta( get_the_ID(), 'complemento', true )) { ?>
					<strong>Complemento:</strong> <?php echo get_post_meta( get_the_ID(), 'complemento', true ); ?>
				<?php } ?>
			</p>                                   
		</div>
	</div>

</div>

<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="icon-list"></span> Caraterísticas do anúncio</h3>
		</div>
		<div class="panel-body">                                    
			<p>
				<strong>Área Útil:</strong> <?php echo get_post_meta( get_the_ID(), 'area-util', true ); ?><br>
				<strong>Área Total:</strong> <?php echo get_post_meta( get_the_ID(), 'areal-total', true ); ?><br>
				<?php if(get_post_meta( get_the_ID(), 'quartos', true )) { ?>
					<strong>Nº de quartos:</strong> <?php echo get_post_meta( get_the_ID(), 'quartos', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'banheiros', true )) { ?>
					<strong>Nº de banheiros:</strong> <?php echo get_post_meta( get_the_ID(), 'banheiros', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'possui-garagem', true )) { ?>
					<strong>Vagas na garagem:</strong> <?php echo get_post_meta( get_the_ID(), 'vagas-garagem', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'mobiliado', true )) { ?>
					<strong>É mobiliado</strong><br>
				<?php } if(get_post_meta( get_the_ID(), 'andar', true )) { ?>
					<strong>Andar:</strong> <?php echo get_post_meta( get_the_ID(), 'andar', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'prox-metro', true )) { ?>
					<strong>É próximo ao metrô</strong><br>
				<?php } if(get_post_meta( get_the_ID(), 'cimovel', true )) { ?>
					<br><strong>Características do imóvel:</strong> <br><?php 
						$cimoveis = get_post_meta( get_the_ID(), 'cimovel', true );
						$lcimoveis = end($cimovel);
						foreach ($cimoveis as $cimovel) {
							echo $cimovel;
							if($cimovel != $lcimovel) {
								echo ', ';
							}
						}
					?>
				<?php } if(get_post_meta( get_the_ID(), 'ccond', true )) { ?>
					<br><br><strong>Características do condomínio:</strong> <br><?php 
						$cconds = get_post_meta( get_the_ID(), 'ccond', true );
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

<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="fa fa-usd" aria-hidden="true" style="font-size: 15px; line-height: 40px;"></i> Valores</h3>
		</div>
		<div class="panel-body">                                    
			<p>
				<?php if(get_post_meta( get_the_ID(), 'valor-locacao', true )) { ?>
					<strong>Valor da locação:</strong> R$ <?php echo get_post_meta( get_the_ID(), 'valor-locacao', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'valor-venda', true )) { ?>
					<strong>Valor para venda: R$ </strong> <?php echo get_post_meta( get_the_ID(), 'valor-venda', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'numero-iptu', true )) { ?>
					<strong>Nº do IPTU:</strong> <?php echo get_post_meta( get_the_ID(), 'numero-iptu', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'isento-ipt', true )) { ?>
					<strong>Insento do IPTU?</strong> <?php echo get_post_meta( get_the_ID(), 'isento-ipt', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'valor-iptu', true )) { ?>
					<strong>Valor do IPTU:</strong> <?php echo get_post_meta( get_the_ID(), 'valor-iptu', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'valor-cond', true )) { ?>
					<strong>Valor do Condomínio:</strong> <?php echo get_post_meta( get_the_ID(), 'valor-cond', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'seg-incenio', true )) { ?>
					<strong>Seguro Incêndio:</strong> <?php echo get_post_meta( get_the_ID(), 'seg-incenio', true ); ?><br>
				<?php } if(get_post_meta( get_the_ID(), 'aceite-file', true )) { ?>
					<strong>Arquivo de aceite:</strong> <?php echo get_post_meta( get_the_ID(), 'aceite-file', true ); ?>
				<?php } ?>
			</p>                                   
		</div>
	</div>

</div>