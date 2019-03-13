<?php

$post_arr = array(
    'post_title'   => $_POST["nome"],
    'post_status'  => 'publish',
	'post_type'	   => 'locador',
    'post_author'  => get_current_user_id(),
    'meta_input'   => array(
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
		'cep-pessoal' => $_POST["cep-pessoal"],
		'endereco-pessoal' => $_POST["endereco-pessoal"],
		'numero-pessoal' => $_POST["numero-pessoal"],
		'bairro-pessoal' => $_POST["bairro-pessoal"],
		'cidade-pessoal' => $_POST["cidade-pessoal"],
		'estado-pessoal' => $_POST["estado-pessoal"],
		'complemento-pessoal' => $_POST["complemento-pessoal"],
		'telefone-pessoal' => $_POST["telefone-pessoal"],
		'email-pessoal' => $_POST["email-pessoal"]
    ),
);

wp_insert_post( $post_arr, $wp_error );

?>

<meta http-equiv="Refresh" content="3; url=https://focusadministradora.com/rentals/locadores/" />

<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
	<div class="alert-icon">
		<span class="icon-checkmark-circle"></span> 
	</div>
	<strong>Sucesso!</strong> Locador criado, estamos te direcionamento para a lista com todos os que você criou.
</div>