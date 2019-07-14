<?php $id =  $_GET["pid"]  ?>

<div class="row">
	<div class="col-md-6">

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-user"></span>Locador - <?php echo get_the_title( $id );?></h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<strong>CPF:</strong> <?php echo get_post_meta( $id, 'cpf', true ); ?><br>
					<strong>Data de nascimento:</strong> <?php echo get_post_meta( $id, 'data_de_nascimento', true ); ?><br>
					<strong>Nacionalidade:</strong> <?php echo get_post_meta( $id, 'nacionalidade', true ); ?><br>
					<strong>Naturalidade:</strong> <?php echo get_post_meta( $id, 'naturalidade', true ); ?><br>
					<strong>Nome da mãe:</strong> <?php echo get_post_meta( $id, 'nome_da_mae', true ); ?><br>
					<strong>Nome do pai:</strong> <?php echo get_post_meta( $id, 'nome_do_pai', true ); ?><br>
					<strong>Estado civil:</strong> <?php echo get_post_meta( $id, 'estado_civil', true ); ?><br>
					<strong>RG:</strong> <?php echo get_post_meta( $id, 'rg', true ); ?> - <?php echo get_post_meta( $id, 'orgao_expedidor', true ); ?><br>
					<strong>Telefone:</strong> <?php echo get_post_meta( $id, 'telefone', true ); ?><br>
					<strong>E-mail:</strong> <?php echo get_post_meta( $id, 'e-mail', true ); ?>
				</p>                                
			</div>
		</div>

	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-map-marker"></span> Localização</h3>
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