<?php
$id = $_GET["pid"];
	
$aceite_file = media_handle_upload('aceite-file', $post_id);
$aceite_file_url = wp_get_attachment_url($aceite_file);

$post_arr = array(
	'ID'           => $id,
    'post_title'   => $_POST["nome"],
    'post_status'  => 'publish',
	'post_type'	   => 'anuncio',
    'post_author'  => get_current_user_id(),
    'meta_input'   => array(
		'aceite' => $aceite_file_url,
		'transacao' => $_POST["transacao"],
		'tipo' => $_POST["tipo"],
		'subtipo' => $_POST["subtipo"],
		'categoria' => $_POST["categoria"],
		'descricao' => $_POST["descricao"],
		'cep' => $_POST["cep"],
		'endereco' => $_POST["endereco"],
		'numero' => $_POST["numero"],
		'bairro' => $_POST["bairro"],
		'cidade' => $_POST["cidade"],
		'estado' => $_POST["estado"],
		'complemento' => $_POST["complemento"],
		'area-util' => $_POST["area-util"],
		'areal-total' => $_POST["areal-total"],
		'quartos' => $_POST["quartos"],
		'banheiros' => $_POST["banheiros"],
		'possui-garagem' => $_POST["possui-garagem"],
		'vagas-garagem' => $_POST["vagas-garagem"],
		'mobiliado' => $_POST["mobiliado"],
		'andar' => $_POST["andar"],
		'prox-metro' => $_POST["prox-metro"],
		'valor-locacao' => $_POST["valor-locacao"],
		'valor-venda' => $_POST["valor-venda"],
		'isento-iptu' => $_POST["isento-iptu"],
		'numero-iptu' => $_POST['numero-iptu'],
		'valor-iptu' => $_POST["valor-iptu"],
		'seg-incenio' => $_POST["seg-incenio"],
		'valor-cond' => $_POST["valor-cond"],
		'status' => $_POST["status"],
		'cimovel' => $_POST['cimovel'],
		'ccond' => $_POST['ccond'],
		'usuario-adm' => $_POST['usuario-adm'],
		'senha-adm' => $_POST['senha-adm'],	
    ),
);

$idn = wp_update_post( $post_arr, $wp_error );

$my_post = array('ID' => $idn, 'post_title'   => 'FA' . $id,);
wp_update_post( $my_post );

?>


<meta http-equiv="Refresh" content="3; url=https://focusadministradora.com/rentals/anuncios/" />

<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
	<div class="alert-icon">
		<span class="icon-checkmark-circle"></span> 
	</div>
	<strong>Sucesso!</strong> Anúncio editado, estamos te direcionamento para a lista com todos os seus anúncios.
</div>