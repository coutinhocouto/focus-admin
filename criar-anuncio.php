<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<div>
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a href="#tabs-1" data-toggle="tab">Informações do Anúncio</a></li>
			<li><a href="#tabs-2" data-toggle="tab">Localização</a></li>
			<li><a href="#tabs-3" data-toggle="tab">Caraterísticas do Anúncio</a></li>
			<li><a href="#tabs-4" data-toggle="tab">Valores e outras informações</a></li>
			<li><a href="#tabs-5" data-toggle="tab">Imagens</a></li>
		</ul>
		
		<form action="https://focusadministradora.com/rentals/locatarios/locatario-adicionado-com-sucesso/" method="post">
		<div class="tab-content">
			<div class="tab-pane active" id="tabs-1">
				
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Transação * </label>
						 <select name="trasacao" class="form-control" required="">
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
						<select name="tipo" class="form-control" required="">
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
						<select name="subtipo" class="form-control" required="">
        					<option value="">Selecione</option>
							
							<option value="Cobertura" class="ap">Cobertura</option>
							<option value="Loft" class="ap">Loft</option>
							<option value="Apartamento Padrão" class="ap">Apartamento Padrão</option>
							<option value="Kichenette - Conjugados" class="ap">Kichenette - Conjugados</option>
							<option value="Outros" class="ap">Outros</option>
							
							<option value="Casa de Condomínio" class="casa">Casa de Condomínio</option>
							<option value="Casa de Vila" class="casa">Casa de Vila</option>
							<option value="Casa Padrão" class="casa">Casa Padrão</option>
							
							<option value="Terreno Padrão" class="terreno">Terreno Padrão</option>
							<option value="Loteamento - Condomínio" class="terreno">Loteamento - Condomínio</option>

							<option value="Box - Garagem" class="comercial">Box - Garagem</option>
							<option value="Prdio Inteiro" class="comercial">Prédio Inteiro</option>
							<option value="Conjunto Comercial - Sala" class="comercial">Conjunto Comercial - Sala</option>
							<option value="Casa Comercial" class="comercial">Casa Comercial</option>
							<option value="Loja Shopping - Ct comercial" class="comercial">Loja Shopping - Ct comercial</option>
							<option value="Loja - Salão" class="comercial">Loja - Salão</option>
							<option value="Galpão - Depósito - Armazém" class="comercial">Galpão - Depósito - Armazém</option>
							<option value="Studio" class="comercial">Studio</option>
							<option value="Hotel" class="comercial">Hotel</option>
							<option value="Motel" class="comercial">Motel</option>
							<option value="Pousada - Chalé" class="comercial">Pousada - Chalé</option>
							<option value="Indústria" class="comercial">Indústria</option>
							
							<option value="outros" class="outros">Outros</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Categoria * </label>
						<select name="categoria" class="form-control" required="">
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
						<input class="form-control" type="text" name="numero" required="" />
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
						<label class="control-label">Complemento * </label>
						<input class="form-control" type="text" name="complemento" required="" />
					</div>
				</div>
				
			</div>
			<div class="tab-pane" id="tabs-3">
				
			</div>
			<div class="tab-pane" id="tabs-4">
				
			</div>
			<div class="tab-pane" id="tabs-5">
				
			</div>
			</form>
			
			<input type="submit" class="btn btn-primary" value="Adicionar Locatário" style="margin-top: 30px;" />
		</div>
	</div>

</div>