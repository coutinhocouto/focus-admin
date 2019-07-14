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
					<strong>Residência:</strong> Reside a <?php echo get_post_meta( $id, 'reside_ha_anos', true ); ?> anos e <?php echo get_post_meta( $id, 'e_meses', true ); ?> meses<br>
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
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-briefcase"></span> Dados Profissionais</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<strong>Profissão:</strong> <?php echo get_post_meta( $id, 'profissao', true ); ?><br>
					<strong>Função:</strong> <?php echo get_post_meta( $id, 'funcao', true ); ?><br>
					<strong>Adimissão:</strong> <?php echo get_post_meta( $id, 'admissao', true ); ?><br>
					<strong>Empresa:</strong> <?php echo get_post_meta( $id, 'empresa', true ); ?><br>
					<strong>CNPJ:</strong> <?php echo get_post_meta( $id, 'cnpj', true ); ?><br>
					<strong>CEP:</strong> <?php echo get_post_meta( $id, 'cep_profissional', true ); ?><br>
					<strong>Endreço:</strong> <?php echo get_post_meta( $id, 'endreco_profissional', true ); ?><br>
					<strong>Número:</strong> <?php echo get_post_meta( $id, 'numero_profissional', true ); ?><br>
					<strong>Bairro:</strong> <?php echo get_post_meta( $id, 'bairro_profissional', true ); ?><br>
					<strong>Cidade:</strong> <?php echo get_post_meta( $id, 'cidade_profissional', true ); ?><br>
					<strong>Estado:</strong> <?php echo get_post_meta( $id, 'estado_profissional', true ); ?><br>
					<?php if(get_post_meta( $id, 'complemento_profissional', true )) { ?>
						<strong>Complemento:</strong> <?php echo get_post_meta( $id, 'complemento_profissional', true ); ?><br>
					<?php } ?>
					<strong>Salário:</strong> <?php echo get_post_meta( $id, 'salario', true ); ?><br>
					<?php if(get_post_meta( $id, 'outras_rendas', true )) { ?>
						<strong>Outras redas:</strong><br> <?php echo get_post_meta( $id, 'outras_rendas', true ); ?><br><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'origem', true )) { ?>
						<strong>Origem:</strong><br> <?php echo get_post_meta( $id, 'origem', true ); ?>
					<?php } ?>
				</p>                                   
			</div>
		</div>
	</div>
	
	<?php if(get_post_meta( $id, 'estado_civil', true ) == 'Casado') { ?>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-users"></span> Dados do Cônjuge</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<strong>Nome:</strong> <?php echo get_post_meta( $id, 'nome_conjuge', true ); ?><br>
					<strong>CPF:</strong> <?php echo get_post_meta( $id, 'cpf_conjuge', true ); ?><br>
					<strong>Data de nascimento:</strong> <?php echo get_post_meta( $id, 'data_de_nascimento_conjuge', true ); ?><br>
					<strong>Nacionalidade:</strong> <?php echo get_post_meta( $id, 'nacionalidade_conjuge', true ); ?><br>
					<strong>Naturalidade:</strong> <?php echo get_post_meta( $id, 'naturalidade_conjuge', true ); ?><br>
					<strong>Nome da mãe:</strong> <?php echo get_post_meta( $id, 'nome_da_mae_conjuge', true ); ?><br>
					<strong>Nome do pai:</strong> <?php echo get_post_meta( $id, 'nome_do_pai_conjuge', true ); ?><br>
					<strong>RG:</strong> <?php echo get_post_meta( $id, 'rg_conjuge', true ); ?> - <?php echo get_post_meta( $id, 'orgao_expedidor_conjuge', true ); ?><br>
					<strong>Profissão:</strong> <?php echo get_post_meta( $id, 'profissao_conjuge', true ); ?><br>
					<strong>Função:</strong> <?php echo get_post_meta( $id, 'funcao_conjuge', true ); ?><br>
					<strong>Adimissão:</strong> <?php echo get_post_meta( $id, 'admissao_conjuge', true ); ?><br>
					<strong>Empresa:</strong> <?php echo get_post_meta( $id, 'empresa_conjuge', true ); ?><br>
					<strong>CNPJ:</strong> <?php echo get_post_meta( $id, 'cnpj_conjuge', true ); ?><br>
					<strong>CEP:</strong> <?php echo get_post_meta( $id, 'cep_profissional_conjuge', true ); ?><br>
					<strong>Endreço:</strong> <?php echo get_post_meta( $id, 'numero_profissional_conjuge', true ); ?><br>
					<strong>Número:</strong> <?php echo get_post_meta( $id, 'numero_profissional', true ); ?><br>
					<strong>Bairro:</strong> <?php echo get_post_meta( $id, 'bairro_profissional_conjuge', true ); ?><br>
					<strong>Cidade:</strong> <?php echo get_post_meta( $id, 'cidade_profissional_conjuge', true ); ?><br>
					<strong>Estado:</strong> <?php echo get_post_meta( $id, 'estado_profissional_conjuge', true ); ?><br>
					<?php if(get_post_meta( $id, 'complemento_profissional_conjuge', true )) { ?>
						<strong>Complemento:</strong> <?php echo get_post_meta( $id, 'complemento_profissional_conjuge', true ); ?><br>
					<?php } ?>
					<strong>Salário:</strong> <?php echo get_post_meta( $id, 'salario_conjuge', true ); ?><br>
					<?php if(get_post_meta( $id, 'outras_rendas_conjuge', true )) { ?>
						<strong>Outras redas:</strong><br> <?php echo get_post_meta( $id, 'outras_rendas_conjuge', true ); ?><br><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'origem_conjuge', true )) { ?>
						<strong>Origem:</strong><br> <?php echo get_post_meta( $id, 'origem_conjuge', true ); ?>
					<?php } ?>
				</p>                                   
			</div>
		</div>

	</div>
	<?php } ?>
	
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-thumbs-up"></span> Referências</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<?php if(get_post_meta( $id, 'banco', true )) { ?>
						<strong>Banco:</strong> <?php echo get_post_meta( $id, 'banco', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'agencia', true )) { ?>
						<strong>Agência:</strong> <?php echo get_post_meta( $id, 'agencia', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_banco', true )) { ?>
						<strong>Telefone agência:</strong> <?php echo get_post_meta( $id, 'telefone_banco', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'banco2', true )) { ?>
						<strong>Banco:</strong> <?php echo get_post_meta( $id, 'banco2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'agencia2', true )) { ?>
						<strong>Agência:</strong> <?php echo get_post_meta( $id, 'agencia2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_banco2', true )) { ?>
						<strong>Telefone agência:</strong> <?php echo get_post_meta( $id, 'telefone_banco2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'cartoes_de_credito', true )) { ?>
						<strong>Cartões de Crédito:</strong> <?php echo get_post_meta( $id, 'cartoes_de_credito', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'nome_referencia_comercial', true )) { ?>
						<strong>Nome (Referência Comercial):</strong> <?php echo get_post_meta( $id, 'nome_referencia_comercial', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_ref_comercial', true )) { ?>
						<strong>Telefone (Referência Comercial):</strong> <?php echo get_post_meta( $id, ' telefone_ref_comercial', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'nome_referencia_comercial2', true )) { ?>
						<strong>Nome (Referência Comercial):</strong> <?php echo get_post_meta( $id, 'nome_referencia_comercial2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_ref_comercial2', true )) { ?>
						<strong>Telefone (Referência Comercial):</strong> <?php echo get_post_meta( $id, ' telefone_ref_comercial2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'nome_referencia_pessoal', true )) { ?>
						<strong>Nome (Referência Pessoal):</strong> <?php echo get_post_meta( $id, 'nome_referencia_pessoal', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_ref_pessoal', true )) { ?>
						<strong>Telefone (Referência Pessoal):</strong> <?php echo get_post_meta( $id, ' telefone_ref_pessoal', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'nome_referencia_pessoal2', true )) { ?>
						<strong>Nome (Referência Pessoal):</strong> <?php echo get_post_meta( $id, 'nome_referencia_pessoal2', true ); ?><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'telefone_ref_pessoal2', true )) { ?>
						<strong>Telefone (Referência Pessoal):</strong> <?php echo get_post_meta( $id, 'telefone_ref_pessoal2', true ); ?>
					<?php } ?>
					
				</p>                                   
			</div>
		</div>
	</div>
	
	<?php if(get_post_meta( $id, 'estado_civil', true ) == 'Casado') { ?>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><span class="icon-home"></span> Patrimônio</h3>
			</div>
			<div class="panel-body">                                    
				<p>
					<?php if(get_post_meta( $id, 'imoveis', true )) { ?>
						<strong>Imóveis:</strong><br> <?php echo get_post_meta( $id, 'imoveis', true ); ?><br><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'veiculos', true )) { ?>
						<strong>Veículos:</strong><br> <?php echo get_post_meta( $id, 'veiculos', true ); ?><br><br>
					<?php } ?>
					<?php if(get_post_meta( $id, 'outras_informacoes', true )) { ?>
						<strong>Outras Informações:</strong><br> <?php echo get_post_meta( $id, 'outras_informacoes', true ); ?>
					<?php } ?>
				</p>                                   
			</div>
		</div>

	</div>
	<?php } ?>
	
</div>
