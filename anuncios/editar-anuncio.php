<?php $id =  $_GET["pid"]  ?>

<div class="col-md-12">

	<div class="app-heading app-heading-small app-heading-condensed">
		<div class="title">
			<p>Campos marcados com * são obrigatórios</p>
		</div>                                    
	</div>

	<div>
		
		<?php if(current_user_can('administrator') || current_user_can('editor' ) ) { ?>
							
			<?php acf_form_head(); ?>
			<?php

				acf_form(array(
					'post_id'		=> $id,
					'field_groups' => array(14),
					'new_post'		=> array(
						'post_type'		=> 'anuncio',
						'post_status'		=> 'publish'
					),
					'submit_value'		=> 'Editar Anuncio'
				));

			?>
			<br><br><br>
			<h2>Controle</h2>
			<?php

				acf_form(array(
					'post_id'		=> $id,
					'field_groups' => array(1015),
					'new_post'		=> array(
						'post_type'		=> 'anuncio',
						'post_status'		=> 'publish'
					),
					'submit_value'		=> 'Editar Anuncio'
				));

			?>

		<?php } else { ?>

			<?php if(get_post_meta( get_the_ID(), 'status_do_imovel', true ) == 'Disponível') { ?>

				<?php acf_form_head(); ?>
				<?php

					acf_form(array(
						'post_id'		=> $id,
						'field_groups' => array(14),
						'new_post'		=> array(
							'post_type'		=> 'anuncio',
							'post_status'		=> 'publish'
						),
						'submit_value'		=> 'Editar Anuncio'
					));

				?>

			<?php } ?>

		<?php } ?>
	</div>

</div>