<?php

$cpf_file = media_handle_upload('cpf-file', $post_id);
$cpf_file_url = wp_get_attachment_url($cpf_file);

$rg_file = media_handle_upload('rg-file', $post_id);
$rg_file_url = wp_get_attachment_url($rg_file);

$renda_file = media_handle_upload('renda-file', $post_id);
$renda_file_url = wp_get_attachment_url($renda_file);

$residencia_file = media_handle_upload('residencia-file', $post_id);
$residencia_file_url = wp_get_attachment_url($residencia_file);


$post_arr = array(
    'post_title'   => $_POST["nome"],
    'post_status'  => 'publish',
	'post_type'	   => 'locatario',
    'post_author'  => get_current_user_id(),
    'meta_input'   => array(
		'cpf-file' => $cpf_file_url,
		'rg-file' => $rg_file_url,
		'renda-file' => $renda_file_url,
		'residencia-file' => $residencia_file_url,
		'cpf' => $_POST["cpf"],
		'data-nascimento' => $_POST["data-nascimento"],
		'naturalidade' => $_POST["naturalidade"],
		'estado' => $_POST["estado"],
		'sexo' => $_POST["sexo"],
		'nome-mae' => $_POST["nome-mae"],
		'nome-pai' => $_POST["nome-pai"],
		'estado-civil' => $_POST["estado-civil"],
		'rg' => $_POST["rg"],
		'orgao' => $_POST["orgao"],
		'anos' => $_POST["anos"],
		'meses' => $_POST["meses"],
		'cep-pessoal' => $_POST["cep-pessoal"],
		'endereco-pessoal' => $_POST["endereco-pessoal"],
		'numero-pessoal' => $_POST["numero-pessoal"],
		'bairro-pessoal' => $_POST["bairro-pessoal"],
		'cidade-pessoal' => $_POST["cidade-pessoal"],
		'estado-pessoal' => $_POST["estado-pessoal"],
		'complemento-pessoal' => $_POST["complemento-pessoal"],
		'telefone-pessoal' => $_POST["telefone-pessoal"],
		'email-pessoal' => $_POST["email-pessoal"],
		'aluguel' => $_POST["aluguel"],
		'nome-aluguel' => $_POST["nome-aluguel"],
		'telefone-aluguel' => $_POST["telefone-aluguel"],
		'porque' => $_POST["porque"],
		'profissao' => $_POST["profissao"],
		'funcao' => $_POST["funcao"],
		'adimissao' => $_POST["adimissao"],
		'empresa' => $_POST["empresa"],
		'cnpj' => $_POST["cnpj"],
		'cep-profissional' => $_POST["cep-profissional"],
		'endereco-profissional' => $_POST["endereco-profissional"],
		'numero-profissional' => $_POST["numero-profissional"],
		'bairro-profissional' => $_POST["bairro-profissional"],
		'cidade-profissional' => $_POST["cidade-profissional"],
		'estado-profissional' => $_POST["estado-profissional"],
		'complemento-profissional' => $_POST["complemento-profissional"],
		'salario' => $_POST["salario"],
		'outras-rendas' => $_POST["outras-rendas"],
		'origem' => $_POST["origem"],
		'nome-conjuge' => $_POST["nome-conjuge"],
		'cpf-conjuje' => $_POST["cpf-conjuje"],
		'data-nascimento-conjuje' => $_POST["data-nascimento-conjuje"],
		'naturalidade-conjuje' => $_POST["naturalidade-conjuje"],
		'estado-conjuje' => $_POST["estado-conjuje"],
		'sexo-conjuje' => $_POST["sexo-conjuje"],
		'nome-mae-conjuje' => $_POST["nome-mae-conjuje"],
		'nome-pai-conjuje' => $_POST["nome-pai-conjuje"],
		'estado-civil-conjuje' => $_POST["estado-civil-conjuje"],
		'rg-conjuje' => $_POST["rg-conjuje"],
		'orgao-conjuje' => $_POST["orgao-conjuje"],
		'profissao-conjuje' => $_POST["profissao-conjuje"],
		'funcao-conjuje' => $_POST["funcao-conjuje"],
		'adimissao-conjuje' => $_POST["adimissao-conjuje"],
		'empresa-conjuje' => $_POST["empresa-conjuje"],
		'cnpj-conjuje' => $_POST["cnpj-conjuje"],
		'cep-conjuje' => $_POST["cep-conjuje"],
		'endereco-conjuje' => $_POST["endereco-conjuje"],
		'numero-conjuje' => $_POST["numero-conjuje"],
		'bairro-conjuje' => $_POST["bairro-conjuje"],
		'cidade-conjuje' => $_POST["cidade-conjuje"],
		'estado-conjuje' => $_POST["estado-conjuje"],
		'complemento-conjuje' => $_POST["complemento-conjuje"],
		'telefone-conjuje' => $_POST["telefone-conjuje"],
		'salario-conjuje' => $_POST["salario-conjuje"],
		'outras-rendas-conjuje' => $_POST["outras-rendas-conjuje"],
		'origem-conjuje' => $_POST["origem-conjuje"],
		'banco' => $_POST["banco"],
		'agencia' => $_POST["agencia"],
		'telefone-referencia' => $_POST["telefone-referencia"],
		'banco2' => $_POST["banco2"],
		'agencia2' => $_POST["agencia2"],
		'telefone-referencia2' => $_POST["telefone-referencia2"],
		'cartoes' => $_POST["cartoes"],
		'referencias-comercial-nome' => $_POST["referencias-comercial-nome"],
		'telefone-referencia-comercial' => $_POST["telefone-referencia-comercial"],
		'referencias-comercial-nome2' => $_POST["referencias-comercial-nome2"],
		'telefone-referencia-comercial2' => $_POST["telefone-referencia-comercial2"],
		'referencias-pessoais-nome' => $_POST["referencias-pessoais-nome"],
		'telefone-referencia-pessoal' => $_POST["telefone-referencia-pessoal"],
		'referencias-pessoais-nome2' => $_POST["referencias-pessoais-nome2"],
		'telefone-referencia-pessoal2' => $_POST["telefone-referencia-pessoal2"],
		'imoveis' => $_POST["imoveis"],
		'veiculos' => $_POST["veiculos"],
		'outras-info' => $_POST["outras-info"]
    ),
);

wp_insert_post( $post_arr, $wp_error );

?>

<meta http-equiv="Refresh" content="3; url=https://focusadministradora.com/rentals/locatarios/" />

<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
	<div class="alert-icon">
		<span class="icon-checkmark-circle"></span> 
	</div>
	<strong>Sucesso!</strong> Locatário criado, estamos te direcionamento para a lista com todos os que você criou.
</div>