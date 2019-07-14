<?php $id =  $_GET["pid"]  ?>

<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<div>
		<?php acf_form_head(); ?>
		<?php
		
			acf_form(array(
				'post_title'	=> true,
				'post_id'		=> $id,
				'field_groups' => array(445),
				'new_post'		=> array(
					'post_type'		=> 'anuncio',
					'post_status'		=> 'publish'
				),
				'submit_value'		=> 'Editar Locador'
			));

		?>
	</div>

</div>