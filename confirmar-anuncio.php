<?php

require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );

$aceite = media_handle_upload('aceite', $post_id);
$aceite_url = wp_get_attachment_url($cpf_file);

$post_arr = array(
    'post_title'   => $_POST["nome"],
    'post_status'  => 'publish',
	'post_type'	   => 'anuncio',
    'post_author'  => get_current_user_id(),
    'meta_input'   => array(
		'aceite' => $aceite_url,
		//galeria
		'data-nascimento' => $_POST["data-nascimento"],	
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
		'carac-imovel' => $_POST["carac-imovel"],
		'carac-cond' => $_POST["carac-cond"],
		'valor-locacao' => $_POST["valor-locacao"],
		'valor-venda' => $_POST["valor-venda"],
		'isento-iptu' => $_POST["isento-iptu"],
		'valor-iptu' => $_POST["valor-iptu"],
		'seg-incenio' => $_POST["seg-incenio"],
		'status' => $_POST["status"]
    ),
);

$id = wp_insert_post( $post_arr, $wp_error );

$my_post = array('ID' => $id, 'post_title'   => 'FA' . $id,);
wp_update_post( $my_post );

?>

<meta http-equiv="Refresh" content="3; url=https://focusadministradora.com/rentals/locatarios/" />

<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
	<div class="alert-icon">
		<span class="icon-checkmark-circle"></span> 
	</div>
	<strong>Sucesso!</strong> Anúncio criado, estamos te direcionamento para a lista com todos os que você criou.
</div>