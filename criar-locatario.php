<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<div>
		<form action="https://focusadministradora.com/rentals/locatarios/locatario-adicionado-com-sucesso/" id="form-padrao" method="post" enctype="multipart/form-data" role="form" data-toggle="validator" novalidate="true">
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a href="#tabs-1" data-toggle="tab">Informações Principais</a></li>
			<li><a href="#tabs-2" data-toggle="tab">Dados Pessoais</a></li>
			<li><a href="#tabs-3" data-toggle="tab">Dados Profissionais</a></li>
			<li><a href="#tabs-4" data-toggle="tab">Dados do Conujuge</a></li>
			<li><a href="#tabs-5" data-toggle="tab">Referências</a></li>
			<li><a href="#tabs-6" data-toggle="tab">Patrimônio</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tabs-1">
				<!--<div class="form-group">
					<div class="col-md-8">
						<label class="control-label">Imóvel pretendido *</label>
						<select name="imovel" class="form-control">
        					<option value="">Selecione</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Aluguel *</label>
						<span id="aluguel"></span>
					</div>
				</div>-->
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Cópia do CPF *</label>
						<input type="file" name="cpf-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Cópia do RG *</label>
						<input type="file" name="rg-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Comprovante de renda *</label>
						<input type="file" name="renda-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Comprovante de residência *</label>
						<input type="file" name="residencia-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-2">
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome * </label>
						<input class="form-control" name="nome" required="required" />
					</div>
					<div class="col-md-3">
						<label class="control-label">CPF * </label>
						<input class="form-control cpf" name="cpf" required="required" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Data de nascimento * </label>
						<input class="form-control date" type="text" name="data-nascimento" required="required"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Nacionalidade * </label>
						<select class="form-control" name="naturalidade" required="required" >
							<option value="">Selecione</option>
							<option value="Brasileira">Brasileira</option>
							<option value="Estrangeira">Estrangeira</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Naturalidade * </label>
						<select name="estado" class="form-control" required="required">
							<option value="">Selecione</option>
							<option value="ES">Estrangeiro</option>
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
					<div class="col-md-4">
						<label class="control-label">Sexo * </label>
						<select class="form-control" name="sexo" required="required">
							<option value="">Selecione</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da mãe * </label>
						<input class="form-control" type="text" name="nome-mae" required="required"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da pai * </label>
						<input class="form-control" type="text" name="nome-pai" required="required" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Estado civil * </label>
						<select class="form-control" name="estado-civil" required="required" >
							<option value="">Selecione</option>
							<option value="Brasileira">Casado</option>
							<option value="Estrangeira">Solteiro</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Identidade * </label>
						<input class="form-control" type="text" name="rg" required="required"/>
					</div>
					<div class="col-md-4">
						<label class="control-label">Orgão expedidor * </label>
						<input class="form-control" type="text" name="orgao" required="required" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Reside há anos * </label>
						<input class="form-control" type="number" name="anos"  required="required" />
					</div>
					<div class="col-md-2">
						<label class="control-label">e meses * </label>
						<input class="form-control" type="number" name="meses"  required="required" />
					</div>
					<div class="col-md-2">
						<label class="control-label">no CEP * </label>
						<input class="form-control cep" type="text" name="cep-pessoal" id="cep1"  required="required"/>
					</div>
					<div class="col-md-6">
						<label class="control-label">Endereço * </label>
						<input class="form-control" type="text" name="endereco-pessoal" id="log1"  required="required" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº * </label>
						<input class="form-control" type="number" name="numero-pessoal"  required="required"/>
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro * </label>
						<input class="form-control" type="text" name="bairro-pessoal" id="bar1"  required="required" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade * </label>
						<input class="form-control" type="text" name="cidade-pessoal" id="loca1"  required="required" />
					</div>
					<div class="col-md-2">
						<label class="control-label">Estado * </label>
						<select class="form-control" name="estado-pessoal" id="uf1" required="required" >
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
					<div class="col-md-6">
						<label class="control-label">Telefone * </label>
						<input class="form-control telefone" type="text" name="telefone-pessoal"  required="required" />
					</div>
					<div class="col-md-6">
						<label class="control-label">E-mail * </label>
						<input class="form-control" type="email" name="email-pessoal" required="required" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Paga aluguel? * </label>
						<div class="app-radio"> 
							<label><input type="radio" name="aluguel" value="Sim" checked=""> Sim<span></span></label> 
						</div>
						<div class="app-radio"> 
							<label><input type="radio" name="aluguel" value="Não"> Não<span></span></label> 
						</div>
					</div>
					<div class="col-md-4">
						<label class="control-label">A quem? * </label>
						<input class="form-control" type="text" name="nome-aluguel" placeholder="Nome"  required="required"/>
						<input class="form-control telefone" type="text" name="telefone-aluguel" placeholder="Telefone" required="required" />
					</div>		
					<div class="col-md-4">
						<label class="control-label">Em caso negativo, porque? * </label>
						<textarea class="form-control" name="porque" rows="5" required="required"></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-3">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Profissão * </label>
						<input class="form-control" type="text" name="profissao"/>
					</div>
					<div class="col-md-3">
						<label class="control-label">Função * </label>
						<input class="form-control" type="text" name="funcao"  />
					</div>
					<div class="col-md-3">
						<label class="control-label">Adimissão * </label>
						<input class="form-control date" type="text" name="adimissao" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Empresa * </label>
						<input class="form-control" type="text" name="empresa" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">CNPJ * </label>
						<input class="form-control cnpj" type="text" name="cnpj" />
					</div>
					<div class="col-md-3">
						<label class="control-label">CEP * </label>
						<input class="form-control cep" type="text" name="cep-profissional" id="cep2" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Endereço * </label>
						<input class="form-control" type="text" name="endereco-profissional" id="log2" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº * </label>
						<input class="form-control" type="number" name="numero-profissional" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro * </label>
						<input class="form-control" type="text" name="bairro-profissional" id="bar2" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade * </label>
						<input class="form-control" type="text" name="cidade-profissional" id="loca2"/>
					</div>
					<div class="col-md-2">
						<label class="control-label">Estado * </label>
						<select class="form-control" name="estado-profissional" id="uf2">
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
					<div class="col-md-4">
						<label class="control-label">Salário * </label>
						<input class="form-control money" type="text" name="salario" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Outras rendas * </label>
						<textarea class="form-control" name="outras-rendas" rows="5"></textarea>
					</div>
					<div class="col-md-4">
						<label class="control-label">Origem * </label>
						<textarea class="form-control" name="origem" rows="5"></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-4">
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome</label>
						<input class="form-control" name="nome-conjuge" />
					</div>
					<div class="col-md-3">
						<label class="control-label">CPF</label>
						<input class="form-control cpf" name="cpf-conjuje" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Data de nascimento</label>
						<input class="form-control date" type="text" name="data-nascimento-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Nacionalidade </label>
						<select class="form-control" name="naturalidade-conjuje" >
							<option value="">Selecione</option>
							<option value="Brasileira">Brasileira</option>
							<option value="Estrangeira">Estrangeira</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Naturalidade </label>
						<select name="estado-conjuje" class="form-control" >
							<option value="">Selecione</option>
							<option value="ES">Estrangeiro</option>
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
					<div class="col-md-4">
						<label class="control-label">Sexo </label>
						<select class="form-control" name="sexo-conjuje" >
							<option value="">Selecione</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da mãe </label>
						<input class="form-control" type="text" name="nome-mae-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da pai </label>
						<input class="form-control" type="text" name="nome-pai-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Estado civil </label>
						<select class="form-control" name="estado-civil-conjuje" >
							<option value="">Selecione</option>
							<option value="Brasileira">Casado</option>
							<option value="Estrangeira">Solteiro</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Identidade </label>
						<input class="form-control" type="text" name="rg-conjuje" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Orgão expedidor </label>
						<input class="form-control" type="text" name="orgao-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Profissão </label>
						<input class="form-control" type="text" name="profissao-conjuje" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Função </label>
						<input class="form-control" type="text" name="funcao-conjuje" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Adimissão </label>
						<input class="form-control date" type="text" name="adimissao-conjuje" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Empresa </label>
						<input class="form-control" type="text" name="empresa-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">CNPJ </label>
						<input class="form-control cnpj" type="text" name="cnpj-conjuje" />
					</div>
					<div class="col-md-4">
						<label class="control-label">no CEP </label>
						<input class="form-control cep" type="text" name="cep-conjuje" id="cep3" />
					</div>
					<div class="col-md-5">
						<label class="control-label">Endereço </label>
						<input class="form-control" type="text" name="endereco-conjuje" id="log3" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº </label>
						<input class="form-control" type="number" name="numero-conjuje" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro </label>
						<input class="form-control" type="text" name="bairro-conjuje" id="bar3" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade </label>
						<input class="form-control" type="text" name="cidade-conjuje" id="loca3" />
					</div>
					<div class="col-md-2">
						<label class="control-label">Estado </label>
						<select class="form-control" name="estado-conjuje" id="uf3" >
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
					<div class="col-md-6">
						<label class="control-label">Telefone </label>
						<input class="form-control telefone" type="text" name="telefone-conjuje" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Salário </label>
						<input class="form-control money" type="text" name="salario-conjuje" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Outras rendas </label>
						<textarea class="form-control" name="outras-rendas-conjuje" rows="5"></textarea>
					</div>
					<div class="col-md-6">
						<label class="control-label">Origem </label>
						<textarea class="form-control" name="origem-conjuje" rows="5"></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-5">
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Banco *</label>
						<input class="form-control" name="banco"  />
					</div>
					<div class="col-md-4">
						<label class="control-label">Agência *</label>
						<input class="form-control" name="agencia" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Banco *</label>
						<input class="form-control" name="banco2" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Agência *</label>
						<input class="form-control" name="agencia2" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia2"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Cartões de crédito *</label>
						<textarea name="cartoes" class="form-control"></textarea>
					</div>
				</div>
				<h2>Referencias Comeciais</h2>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-comercial-nome" type="text" class="form-control" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-comercial"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-comercial-nome2" type="text" class="form-control"/>
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-comercial2"  />
					</div>
				</div>
				<h2>Referencias pessoais</h2>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-pessoais-nome" type="text" class="form-control"  />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-pessoal"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-pessoais-nome2" type="text" class="form-control" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-pessoal2"/>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-6">
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Imóveis *</label>
						<textarea name="imoveis" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Veículos *</label>
						<textarea name="veiculos" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Outras Informações *</label>
						<textarea name="outras-info" class="form-control"></textarea>
					</div>
				</div>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="Adicionar Locatário" style="margin-top: 30px;" />
		</form>
	</div>
</div>
