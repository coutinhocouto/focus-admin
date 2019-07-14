<?php $up =  $_GET["updated"]  ?>
<?php $del =  $_GET["trashed"]  ?>

<div class="col-md-12">
	
	<?php if($up) { ?>
		<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
			<div class="alert-icon">
				<span class="icon-checkmark-circle"></span> 
			</div>
			<strong>Sucesso!</strong> Contrato criado/alterado com sucesso! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		</div>
	<?php } ?>
	
	<?php if($del) { ?>
		<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert"> 
			<div class="alert-icon">
				<span class="icon-trash"></span>
			</div>                                        
			<strong>Alerta!</strong> Seu contrato foi removido! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		</div>
	<?php } ?>
	
	<table id="listagem-table" class="table table-striped table-bordered datatable-basic">
		<thead>
			<tr>
				<th>Código</th>
				<th style="width: 100px;">Data de Início</th>
				<th style="width: 100px;">Data Final</th>
				<th style="width: 100px;">Prazo de Vigência</th>
				<th style="width: 100px;">Dia do Vencimento</th>
				<th style="width: 100px;">Status do contrato</th>
				<?php if(current_user_can('administrator') || current_user_can('editor' ) ) {
					echo '<th>Corretor</th>';
				} ?>
				<th>Ações</th>
			</tr>
		</thead>                                    
		<tbody>
			
			 <?php
			
				global $current_user;
				get_currentuserinfo();
				$authorID = $current_user->ID;
			
				if(current_user_can('administrator')  || get_current_user_id() == 2 ) {
					$args = array(
						'post_type' => 'contrato',
						'posts_per_page' => -1,
					);
				} else {
					$args = array(
						'post_type' => 'contrato',
						'posts_per_page' => -1,
						'author' => $authorID
					);
				}

				$the_query = new WP_Query($args);
			
				while ($the_query->have_posts()) :
				$the_query->the_post();
			?>
			
					<tr>
						<td><?php the_title(); ?></td>
						<td>
							<?php
								the_field('data_de_inicio');
							?>
						</td>
						<td>
							<?php
								the_field('data_final');
							?>
						</td>
						<td><?php echo get_post_meta( get_the_ID(), 'prazo_de_vigencia', true ); ?></td>
						<td><?php echo get_post_meta( get_the_ID(), 'dia_do_vencimento', true ); ?></td>
						<td><?php echo get_post_meta( get_the_ID(), 'status_do_contrato', true ); ?></td>
						<?php if(current_user_can('administrator') || current_user_can('editor' ) ) {
							echo '<td>' . get_the_author_meta( 'first_name' ) . '</td>';
						} ?>
						<td>
							<a href="https://focusadministradora.com/rentals/contratos/ver-contrato/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="fa fa-eye"></span></button></a>
						
							<?php if(current_user_can('administrator') || current_user_can('editor' ) ) { ?>
							
								<a href="https://focusadministradora.com/rentals/contratos/editar-contrato/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-pencil"></button></a>

								<a href=" <?php echo get_delete_post_link( get_the_ID() ); ?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-trash"></span></button></a>
							
							<?php } else { ?>
								
								<?php if(get_post_meta( get_the_ID(), 'status_do_contrato', true ) == 'Inativo') { ?>
									
									<a href="https://focusadministradora.com/rentals/contratos/editar-contrato/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-pencil"></button></a>

									<a href=" <?php echo get_delete_post_link( get_the_ID() ); ?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-trash"></span></button></a>
									
								<?php } ?>
									
							<?php } ?>
							
						</td>
					</tr>
			
				<?php
				endwhile;
				wp_reset_postdata();
			?>
			
		</tbody>
	</table>
	
</div>