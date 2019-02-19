<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<div>
		<form action="https://focusadministradora.com/rentals/locatarios/locatario-adicionado-com-sucesso/" method="post" enctype="multipart/form-data">
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
						<br>
						<a href="<?php echo get_post_meta( get_the_ID(), 'cpf-file', true ); ?>" target="_blank"><button type="button" class="btn btn-danger" style="font-size: 30px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a>
					</div>
					<div class="col-md-3">
						<label class="control-label">Cópia do RG *</label>
						<input type="file" name="rg-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
						
						<button type="button" class="btn btn-danger btn-clean"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
					</div>
					<div class="col-md-3">
						<label class="control-label">Comprovante de renda *</label>
						<input type="file" name="renda-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
						
						<button type="button" class="btn btn-danger btn-clean"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
					</div>
					<div class="col-md-3">
						<label class="control-label">Comprovante de residência *</label>
						<input type="file" name="residencia-file"
  accept=".doc,.docx,.pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
						
						<button type="button" class="btn btn-danger btn-clean"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-2">
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome * </label>
						<input class="form-control" name="nome" value="<?php the_title(); ?>"  />
					</div>
					<div class="col-md-3">
						<label class="control-label">CPF * </label>
						<input class="form-control cpf" name="cpf" value="<?php echo get_post_meta( get_the_ID(), 'cpf', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Data de nascimento * </label>
						<input class="form-control date" type="text" name="data-nascimento"  value="<?php echo get_post_meta( get_the_ID(), 'data-nascimento', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Nacionalidade * </label>
						<select class="form-control" name="naturalidade" >
							<option value="">Selecione</option>
							<option value="Brasileira">Brasileira</option>
							<option value="Estrangeira">Estrangeira</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Naturalidade * </label>
						<select name="estado" class="form-control">
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
						<select class="form-control" name="sexo">
							<option value="">Selecione</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da mãe * </label>
						<input class="form-control" type="text" name="nome-mae" value="<?php echo get_post_meta( get_the_ID(), 'nome-mae', true ); ?>"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da pai * </label>
						<input class="form-control" type="text" name="nome-pai" value="<?php echo get_post_meta( get_the_ID(), 'nome-pai', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Estado civil * </label>
						<select class="form-control" name="estado-civil" >
							<option value="">Selecione</option>
							<option value="Brasileira">Casado</option>
							<option value="Estrangeira">Solteiro</option>
						</select>
					</div>
					<div class="col-md-4">
						<label class="control-label">Identidade * </label>
						<input class="form-control" type="text" name="rg"  value="<?php echo get_post_meta( get_the_ID(), 'rg', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Orgão expedidor * </label>
						<input class="form-control" type="text" name="orgao" value="<?php echo get_post_meta( get_the_ID(), 'orgao', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Reside há anos * </label>
						<input class="form-control" type="number" name="anos"  value="<?php echo get_post_meta( get_the_ID(), 'anos', true ); ?>" />
					</div>
					<div class="col-md-2">
						<label class="control-label">e meses * </label>
						<input class="form-control" type="number" name="meses"  value="<?php echo get_post_meta( get_the_ID(), 'meses', true ); ?>" />
					</div>
					<div class="col-md-2">
						<label class="control-label">no CEP * </label>
						<input class="form-control cep" type="text" name="cep-pessoal" value="<?php echo get_post_meta( get_the_ID(), 'cep-pessoal', true ); ?>" id="cep1" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Endereço * </label>
						<input class="form-control" type="text" name="endereco-pessoal" value="<?php echo get_post_meta( get_the_ID(), 'endereco-pessoal', true ); ?>" id="log1"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº * </label>
						<input class="form-control" type="number" name="numero-pessoal" value="<?php echo get_post_meta( get_the_ID(), 'numero-pessoal', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro * </label>
						<input class="form-control" type="text" name="bairro-pessoal" id="bar1" value="<?php echo get_post_meta( get_the_ID(), 'bairro-pessoal', true ); ?>"  />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade * </label>
						<input class="form-control" type="text" name="cidade-pessoal" id="loca1" value="<?php echo get_post_meta( get_the_ID(), 'cidade-pessoal', true ); ?>" />					</div>
					<div class="col-md-2">
						<label class="control-label">Estado * </label>
						<select class="form-control" name="estado-pessoal" id="uf1" >
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
						<input class="form-control telefone" type="text" name="telefone-pessoal" value="<?php echo get_post_meta( get_the_ID(), 'telefone-pessoal', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">E-mail * </label>
						<input class="form-control" type="email" name="email-pessoal" value="<?php echo get_post_meta( get_the_ID(), 'email-pessoal', true ); ?>" />
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
						<input class="form-control" type="text" name="nome-aluguel" placeholder="Nome" value="<?php echo get_post_meta( get_the_ID(), 'nome-aluguel', true ); ?>" />
						<input class="form-control telefone" type="text" name="telefone-aluguel" placeholder="Telefone" value="<?php echo get_post_meta( get_the_ID(), 'telefone-aluguel', true ); ?>" />
					</div>		
					<div class="col-md-4">
						<label class="control-label">Em caso negativo, porque? * </label>
						<textarea class="form-control" name="porque" rows="5"><?php echo get_post_meta( get_the_ID(), 'porque', true ); ?></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-3">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Profissão * </label>
						<input class="form-control" type="text" name="profissao" value="<?php echo get_post_meta( get_the_ID(), 'profissao', true ); ?>"/>
					</div>
					<div class="col-md-3">
						<label class="control-label">Função * </label>
						<input class="form-control" type="text" name="funcao" value="<?php echo get_post_meta( get_the_ID(), 'funcao', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Adimissão * </label>
						<input class="form-control date" type="text" name="adimissao" value="<?php echo get_post_meta( get_the_ID(), 'adimissao', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Empresa * </label>
						<input class="form-control" type="text" name="empresa" value="<?php echo get_post_meta( get_the_ID(), 'empresa', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">CNPJ * </label>
						<input class="form-control cnpj" type="text" name="cnpj" value="<?php echo get_post_meta( get_the_ID(), 'cnpj', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">CEP * </label>
						<input class="form-control cep" type="text" name="cep-profissional" id="cep2" value="<?php echo get_post_meta( get_the_ID(), 'cep-profissional', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Endereço * </label>
						<input class="form-control" type="text" name="endereco-profissional" id="log2" value="<?php echo get_post_meta( get_the_ID(), 'endereco-profissional', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº * </label>
						<input class="form-control" type="number" name="numero-profissional" value="<?php echo get_post_meta( get_the_ID(), 'numero-profissional', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro * </label>
						<input class="form-control" type="text" name="bairro-profissional" id="bar2" value="<?php echo get_post_meta( get_the_ID(), 'bairro-profissional', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade * </label>
						<input class="form-control" type="text" name="cidade-profissional" id="loca2" value="<?php echo get_post_meta( get_the_ID(), 'cidade-profissional', true ); ?>"/>
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
						<input class="form-control money" type="text" name="salario" value="<?php echo get_post_meta( get_the_ID(), 'salario', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Outras rendas * </label>
						<textarea class="form-control" name="outras-rendas" rows="5"><?php echo get_post_meta( get_the_ID(), 'outras-rendas', true ); ?></textarea>
					</div>
					<div class="col-md-4">
						<label class="control-label">Origem * </label>
						<textarea class="form-control" name="origem" rows="5"><?php echo get_post_meta( get_the_ID(), 'origem', true ); ?></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-4">
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome</label>
						<input class="form-control" name="nome-conjuge" value="<?php echo get_post_meta( get_the_ID(), 'nome-conjuge', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">CPF</label>
						<input class="form-control cpf" name="cpf-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'cpf-conjuje', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Data de nascimento</label>
						<input class="form-control date" type="text" name="data-nascimento-conjuje"  value="<?php echo get_post_meta( get_the_ID(), 'data-nascimento-conjuje', true ); ?>" />
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
						<input class="form-control" type="text" name="nome-mae-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'nome-mae-conjuje', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Nome da pai </label>
						<input class="form-control" type="text" name="nome-pai-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'nome-pai-conjuje', true ); ?>" />
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
						<input class="form-control" type="text" name="rg-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'rg-conjuje', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Orgão expedidor </label>
						<input class="form-control" type="text" name="orgao-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'orgao-conjuje', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Profissão </label>
						<input class="form-control" type="text" name="profissao-conjuje"  value="<?php echo get_post_meta( get_the_ID(), 'profissao-conjuje', true ); ?>"/>
					</div>
					<div class="col-md-3">
						<label class="control-label">Função </label>
						<input class="form-control" type="text" name="funcao-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'funcao-conjuje', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Adimissão </label>
						<input class="form-control date" type="text" name="adimissao-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'adimissao-conjuje', true ); ?>" />
					</div>
					<div class="col-md-3">
						<label class="control-label">Empresa </label>
						<input class="form-control" type="text" name="empresa-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'empresa-conjuje', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">CNPJ </label>
						<input class="form-control cnpj" type="text" name="cnpj-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'cnpj-conjuje', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">no CEP </label>
						<input class="form-control cep" type="text" name="cep-conjuje" id="cep3" value="<?php echo get_post_meta( get_the_ID(), 'cep-conjuje', true ); ?>" />
					</div>
					<div class="col-md-5">
						<label class="control-label">Endereço </label>
						<input class="form-control" type="text" name="endereco-conjuje" id="log3" value="<?php echo get_post_meta( get_the_ID(), 'endereco-conjuje', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2">
						<label class="control-label">Nº </label>
						<input class="form-control" type="number" name="numero-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'numero-conjuje', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Bairro </label>
						<input class="form-control" type="text" name="bairro-conjuje" id="bar3" value="<?php echo get_post_meta( get_the_ID(), 'bairro-conjuje', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Cidade </label>
						<input class="form-control" type="text" name="cidade-conjuje" id="loca3" value="<?php echo get_post_meta( get_the_ID(), 'cidade-conjuje', true ); ?>" />
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
						<input class="form-control telefone" type="text" name="telefone-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'telefone-conjuje', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Salário </label>
						<input class="form-control money" type="text" name="salario-conjuje" value="<?php echo get_post_meta( get_the_ID(), 'salario-conjuje', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Outras rendas </label>
						<textarea class="form-control" name="outras-rendas-conjuje" rows="5"><?php echo get_post_meta( get_the_ID(), 'outras-rendas-conjuje', true ); ?></textarea>
					</div>
					<div class="col-md-6">
						<label class="control-label">Origem </label>
						<textarea class="form-control" name="origem-conjuje" rows="5"><?php echo get_post_meta( get_the_ID(), 'origem-conjuje', true ); ?></textarea>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-5">
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Banco *</label>
						<input class="form-control" name="banco"  value="<?php echo get_post_meta( get_the_ID(), 'banco', true ); ?>" />
					</div>
					<div class="col-md-4">
						<label class="control-label">Agência *</label>
						<input class="form-control" name="agencia"  value="<?php echo get_post_meta( get_the_ID(), 'agencia', true ); ?>"/>
					</div>
					<div class="col-md-4">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia"  value="<?php echo get_post_meta( get_the_ID(), 'telefone-rereferencia', true ); ?>"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4">
						<label class="control-label">Banco *</label>
						<input class="form-control" name="banco2"  value="<?php echo get_post_meta( get_the_ID(), 'banco2', true ); ?>"/>
					</div>
					<div class="col-md-4">
						<label class="control-label">Agência *</label>
						<input class="form-control" name="agencia2"  value="<?php echo get_post_meta( get_the_ID(), 'agencia2', true ); ?>"/>
					</div>
					<div class="col-md-4">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia2" value="<?php echo get_post_meta( get_the_ID(), 'telefone-referencia2', true ); ?>"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Cartões de crédito *</label>
						<textarea name="cartoes" class="form-control" value="<?php echo get_post_meta( get_the_ID(), 'cartoes', true ); ?>"></textarea>
					</div>
				</div>
				<h2>Referencias Comeciais</h2>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-comercial-nome" type="text" class="form-control" value="<?php echo get_post_meta( get_the_ID(), 'referencias-comercial-nome', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-comercial" value="<?php echo get_post_meta( get_the_ID(), 'telefone-referencia-comercial', true ); ?>"  />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-comercial-nome2" type="text" class="form-control" value="<?php echo get_post_meta( get_the_ID(), 'referencias-comercial-nome2', true ); ?>"/>
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-comercial2"  value="<?php echo get_post_meta( get_the_ID(), 'telefone-referencia-comercial2', true ); ?>" />
					</div>
				</div>
				<h2>Referencias pessoais</h2>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-pessoais-nome" type="text" class="form-control"  value="<?php echo get_post_meta( get_the_ID(), 'referencias-pessoais-nome', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-pessoal"  value="<?php echo get_post_meta( get_the_ID(), 'telefone-referencia-pessoal', true ); ?>" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<label class="control-label">Nome *</label>
						<input name="referencias-pessoais-nome2" type="text" class="form-control" value="<?php echo get_post_meta( get_the_ID(), 'referencias-pessoais-nome2', true ); ?>" />
					</div>
					<div class="col-md-6">
						<label class="control-label">Telefone *</label>
						<input class="form-control telefone" name="telefone-referencia-pessoal2" value="<?php echo get_post_meta( get_the_ID(), 'telefone-referencia-pessoal2', true ); ?>"/>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tabs-6">
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Imóveis *</label>
						<textarea name="imoveis" class="form-control"><?php echo get_post_meta( get_the_ID(), 'imoveis', true ); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Veículos *</label>
						<textarea name="veiculos" class="form-control"><?php echo get_post_meta( get_the_ID(), 'veiculos', true ); ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label">Outras Informações *</label>
						<textarea name="outras-info" class="form-control"><?php echo get_post_meta( get_the_ID(), 'outras-info', true ); ?></textarea>
					</div>
				</div>
			</div>
		</div>
		<input type="submit" class="btn btn-primary" value="Adicionar Locatário" style="margin-top: 30px;" />
		</form>
	</div>
</div>
