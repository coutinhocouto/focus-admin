<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<!--<div>
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a href="#tabs-1" data-toggle="tab">Informações do Anúncio</a></li>
			<li><a href="#tabs-2" data-toggle="tab">Localização</a></li>
			<li><a href="#tabs-3" data-toggle="tab">Caraterísticas do Anúncio</a></li>
			<li><a href="#tabs-4" data-toggle="tab">Valores</a></li>
			<li><a href="#tabs-5" data-toggle="tab">Imagens e outras informações</a></li>
		</ul>
		
		<form action="https://focusadministradora.com/rentals/anuncios/anuncio-adicionado-com-sucesso/" method="post" enctype="multipart/form-data" role="form" data-toggle="validator" novalidate="true">
		<div class="tab-content">
			<div class="tab-pane active" id="tabs-1">
				
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Transação * </label>
						 <select name="transacao" class="form-control" id="transacao" required="">
							<option value="">Selecione</option>
							<option value="Locação">Locação</option>
							<option value="Venda">Venda</option>
							<option value="Locação/Venda">Locação/Venda</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Tipo * </label>
						<select name="tipo" class="form-control" id="tipo-anuncio" required="">
							<option value="">Selecione</option>
							<option value="Apartamento">Apartamento</option>
							<option value="Casa">Casa</option>
							<option value="Terreno">Terreno</option>
							<option value="Rural">Rural</option>
							<option value="Flat/ApartHotel">Flat/ApartHotel</option>
							<option value="Comercial/Industrial">Comercial/Industrial</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">SubTipo * </label>
						<select name="subtipo" class="form-control" id="sub-anuncio" required="">
        					<option value="">Selecione</option>
							
							<option value="Cobertura" class="ap">Cobertura</option>
							<option value="Loft" class="ap">Loft</option>
							<option value="Apartamento Padrão" class="ap">Apartamento Padrão</option>
							<option value="Kichenette/Conjugados" class="ap">Kichenette/Conjugados</option>
							<option value="Outros" class="ap">Outros</option>
							
							<option value="Casa de Condomínio" class="casa">Casa de Condomínio</option>
							<option value="Casa de Vila" class="casa">Casa de Vila</option>
							<option value="Casa Padrão" class="casa">Casa Padrão</option>
							
							<option value="Terreno Padrão" class="terreno">Terreno Padrão</option>
							<option value="Loteamento/Condomínio" class="terreno">Loteamento/Condomínio</option>

							<option value="Box/Garagem" class="comercial">Box - Garagem</option>
							<option value="Prdio Inteiro" class="comercial">Prédio Inteiro</option>
							<option value="Conjunto Comercial - Sala" class="comercial">Conjunto Comercial/Sala</option>
							<option value="Casa Comercial" class="comercial">Casa Comercial</option>
							<option value="Loja Shopping/Ct comercial" class="comercial">Loja Shopping/Ct comercial</option>
							<option value="Loja/Salão" class="comercial">Loja - Salão</option>
							<option value="Galpão/Depósito/Armazém" class="comercial">Galpão/Depósito/Armazém</option>
							<option value="Studio" class="comercial">Studio</option>
							<option value="Hotel" class="comercial">Hotel</option>
							<option value="Motel" class="comercial">Motel</option>
							<option value="Pousada/Chalé" class="comercial">Pousada/Chalé</option>
							<option value="Indústria" class="comercial">Indústria</option>
							
							<option value="Outros" class="outros">Outros</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Categoria * </label>
						<select name="categoria" class="form-control" id="categoria-anuncio" required="">
							<option value="">Selecione</option>
							
    						<option value="Duplex" class="ap">Duplex</option>
							<option value="Triplex" class="ap">Triplex</option>
							<option value="Linear" class="ap">Linear</option>

							<option value="Casa Padrão" class="casa">Casa Padrão</option>
							<option value="Duplex" class="casa">Duplex</option>
							<option value="Triplex" class="casa">Triplex</option>

							<option value="Sem Decoração" class="comercial">Sem Decoração</option>
							<option value="Decoração Não Padronizada" class="comercial">Decoração não padronizada</option>
							<option value="Decoração Padrão" class="comercial">Decoração Padrão</option>
							<option value="Decoração Pool" class="comercial">Decoração Pool</option>
							<option value="Padrão" class="comercial">Padrão</option>
							<option value="Outros" class="comercial">Outros</option>
	
							<option value="Outros" class="outros">Outros</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Descrição * </label>
						<textarea class="form-control" name="descricao" rows="5"></textarea>
					</div>
				</div>
				
			</div>
			<div class="tab-pane" id="tabs-2">
				
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">CEP * </label>
						<input class="form-control cep" type="text" name="cep" id="cep1" required="" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Endereço * </label>
						<input class="form-control" type="text" name="endereco" id="log1" required="" />
					</div>
					<div class="col-md-2">
						<label class="control-label">Número * </label>
						<input class="form-control" type="number" name="numero" required="" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Bairro * </label>
						<input class="form-control" type="text" name="bairro" id="bar1" required="" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade * </label>
						<input class="form-control" type="text" name="cidade" id="loca1" required="" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Estado * </label>
						<select class="form-control" name="estado" id="uf1" required="">
							<option value="">Selecione</option>
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Complemento</label>
						<input class="form-control" type="text" name="complemento" />
					</div>
				</div>
				
			</div>
			<div class="tab-pane" id="tabs-3">
				
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Área Útil * </label>
						<input class="form-control" type="number" name="area-util" required="" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Área Total * </label>
						<input class="form-control" type="number" name="areal-total" required="" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Quartos/Dormitórios * </label>
						<input class="form-control" type="number" name="quartos" required="" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Banheiros * </label>
						<input class="form-control" type="number" name="banheiros" required="" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-3">
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="possui-garagem" value="1"> Possui garagem?<span></span></label> 
						</div>
					</div>
					<div class="col-md-3">
						<label class="control-label">Vagas na garagem</label>
						<input class="form-control" type="number" name="vagas-garagem" />
					</div>
					<div class="col-md-3">
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="mobiliado" value="1"> Mobiliado?<span></span></label> 
						</div>
					</div>
					<div class="col-md-3">
						<label class="control-label">Andar </label>
						<input class="form-control" type="number" name="andar" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="prox-metro" value="1"> Próximo ao metrô?<span></span></label> 
						</div>
					</div>
				</div>
				
				<div class="form-group divider-check">
					<div class="col-md-12">
						<label class="control-label">Caraterísticas do imóvel</label><br>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Acessibilidade"> Acessibilidade<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Ar Condicionado"> Ar Condicionado<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Armário na Cozinha"> Armário na Cozinha<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Armário no Banheiro"> Armário no Banheiro<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Armário Embutido"> Armário Embutido<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Armário no Quarto"> Armário no Quarto<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Banheiro"> Banheira<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Blindex"> Blindex<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Churrasqueira"> Churrasqueira<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Closet"> Closet<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Cozinha Americana"> Cozinha Americana<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Depósito privativo no subsolo"> Depósito privativo no subsolo<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Dispensa"> Dispensa<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Gesso"> Gesso<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Lareira"> Lareira<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Lavabo"> Lavabo<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Ofurô"> Ofurô<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Piscina Privativa"> Piscina Privativa<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Piso de Madeira"> Piso de Madeira<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Piso Laminado"> Piso Laminado<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Piso de Vinílico"> Piso de Vinílico<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Porcelanato"> Porcelanato<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Quarto/WC Empregada"> Quarto/WC Empregada<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Quarto Reversível"> Quarto Reversível<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Sanca"> Sanca<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Teto Rebaixado"> Teto Rebaixado<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="Varanda"> Varanda<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="cimovel[]" value="WC Empregada"> WC Empregada<span></span></label> 
						</div>
					</div>
				</div>
				
				<div class="form-group divider-check">
					<div class="col-md-12">
						<label class="control-label">Caraterísticas do condomínio</label><br>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Academia"> Academia<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Biblioteca"> Biblioteca<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Bilicletário"> Bilicletário<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Boliche"> Boliche<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Campo de Futebol"> Campo de Futebol<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Cantina"> Cantina<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Children Care"> Children Care<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Churrasqueira"> Churrasqueira<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Cinema"> Cinema<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Espaço Gourmet"> Espaço Gourmet<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Espaço Pet"> Espaço Pet<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Estacionamento para Visitantes"> Estacionamento para Visitantes<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Hall de Entrada"> Hall de Entrada<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Hidromassagem"> Hidromassagem<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Horta"> Horta<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Lavanderia"> Lavanderia<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Minimercado"> Minimercado <span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Piscina"> Piscina<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Playground"> Playground<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Portaria 24h"> Portaria 24h<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Quadra de Tênis"> Quadra de Tênis<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Quadra Poliesportiva"> Quadra Poliesportiva<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Sala de Ginástica"> Sala de Ginástica<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Salão de Beleza"> Salão de Beleza<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Salão de Festas"> Salão de Festas<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Salão de Jogos"> Salão de Jogos<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Sauna"> Sauna<span></span></label> 
						</div>
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="ccond[]" value="Transporte Comunitário"> Transporte Comunitário<span></span></label> 
						</div>
					</div>
				</div>
				
			</div>
			<div class="tab-pane" id="tabs-4">
				
				<div class="form-group">
					<div class="col-md-6 valor-locacao">
						<label class="control-label">Valor da locação *</label>
						<input class="form-control money" type="text" name="valor-locacao" />
					</div>
					<div class="col-md-6 valor-venda">
						<label class="control-label">Valor da venda *</label>
						<input class="form-control money " type="text" name="valor-venda" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Numero do IPTU </label>
						<input class="form-control" type="text" name="numero-iptu" />
					</div>
					<div class="col-md-3">
						<div class="app-checkbox"> 
							<label><input type="checkbox" name="isento-iptu" value="1"> Isento do IPTU?<span></span></label> 
						</div>
					</div>
					<div class="col-md-3">
						<label class="control-label">Valor IPTU </label>
						<input class="form-control money" type="text" name="valor-iptu" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Valor do condomínio</label>
						<input class="form-control money" type="text" name="valor-cond" />
					</div>
				</div>
				
				<div class="form-group">
					
					<div class="col-md-12">
						<label class="control-label">Seguro incêndio </label>
						<input class="form-control money" type="text" name="seg-incenio" />
					</div>
				</div>
				
				
			</div>
			<div class="tab-pane" id="tabs-5">
				<div class="form-group">
					<div id="dropzone" class="dropzone"></div>					
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Status do anúncio * </label>
						<select class="form-control" name="status" required="">
							<option value="">Selecione</option>
							<option value="Ativo">Ativo</option>
							<option value="Inativo">Inativo</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Arquivo de aceite</label>
						<input type="file" name="aceite-file" accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Usuário (para emissão de boleto na administradora do imóvel) </label>
						<input class="form-control" type="text" name="usuario-adm" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Senha (para emissão de boleto na administradora do imóvel) </label>
						<input class="form-control" type="text" name="senha-adm" />
					</div>
				</div>
				
			</div>
			</form>
			
			<input type="submit" class="btn btn-primary" value="Adicionar Anúncio" style="margin-top: 30px;" />
		</div>
	</div>-->
	
	<div>
		<?php acf_form_head(); ?>
		<?php
		
			acf_form(array(
				'post_id'		=> 'new_post',
				'field_groups' => array(14),
				'updated_message' => __("Anúncio criado com sucesso!", 'acf'),
				'new_post'		=> array(
					'post_type'		=> 'anuncio',
					'post_status'		=> 'publish'
				),
				'submit_value'		=> 'Adicionar Anuncio'
			));

		?>
	</div>

</div>