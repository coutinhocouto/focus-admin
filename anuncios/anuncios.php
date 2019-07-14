<?php $up =  $_GET["updated"]  ?>
<?php $del =  $_GET["trashed"]  ?>


<div class="col-md-12">
	
	<?php if($up) { ?>
		<div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
			<div class="alert-icon">
				<span class="icon-checkmark-circle"></span> 
			</div>
			<strong>Sucesso!</strong> Anúncio criado/alterado com sucesso! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		</div>
	<?php } ?>
	
	<?php if($del) { ?>
		<div class="alert alert-danger alert-icon-block alert-dismissible" role="alert"> 
			<div class="alert-icon">
				<span class="icon-trash"></span>
			</div>                                        
			<strong>Alerta!</strong> Seu anúncio foi removido! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
		</div>
	<?php } ?>
	
	
	
	<table id="listagem-table" class="table table-striped table-bordered datatable-basic responsive no-wrap">
		<thead>
			<tr>
				<th style="width: 60px;">Código</th>
				<th style="width: 70px;">Transação</th>
				<th style="width: 100px;">Tipo</th>
				<th style="width: 300px;">Cidade / Bairro</th>
				<th style="width: 100px;">Valor</th>
				<th style="width: 120px;">Status</th>
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
			
				if(current_user_can('administrator') || current_user_can('editor' ) ) {
					$args = array(
						'post_type' => 'anuncio',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'DESC',
					);
				} else {
					$args = array(
						'post_type' => 'anuncio',
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
						<td><?php echo get_post_meta( get_the_ID(), 'transacao', true ); ?></td>
						<td><?php echo get_post_meta( get_the_ID(), 'tipo', true ); ?></td>
						<td><?php echo get_post_meta( get_the_ID(), 'bairro', true ); ?> / <?php echo get_post_meta( get_the_ID(), 'cidade', true ); ?></td>
						<td>
							<?php if(get_post_meta( get_the_ID(), 'valor_da_locacao', true )) { ?>
								R$ <?php echo number_format(get_post_meta( get_the_ID(), 'valor_da_locacao', true ),0,",","."); ?><br>
							<?php } if(get_post_meta( get_the_ID(), 'valor_da_venda', true )) { ?>
								R$ <?php echo number_format(get_post_meta( get_the_ID(), 'valor_da_venda', true ),0,",","."); ?><br>
							<?php } ?>
						</td>
						<td>
							<span style="color: <?php if( get_post_meta( get_the_ID(), 'status_do_anuncio', true ) == 'Ativo') { echo 'green';} else { echo 'red'; } ?>"><?php echo get_post_meta( get_the_ID(), 'status_do_anuncio', true ); ?><br></span>
							<?php
								if( get_post_meta( get_the_ID(), 'status_do_imovel', true ) == 'Disponível'){
									echo 'Sem contrato Ativo';
								} else if( get_post_meta( get_the_ID(), 'status_do_imovel', true ) == 'Locado'){
									echo '<span style="color: green">Contrato Ativo</span>';
								} else if( get_post_meta( get_the_ID(), 'status_do_imovel', true ) == 'Vendido'){
									echo '<span style="color: green">Imóvel Vendido</span>';
								}
							?>
						</td>
						<?php if(current_user_can('administrator') || current_user_can('editor' ) ) {
							echo '<td>' . get_the_author_meta( 'first_name' ) . '</td>';
						} ?>
						<td>
							<a href="https://focusadministradora.com/rentals/anuncios/ver-anuncio/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="fa fa-eye"></span></button></a>
							
							<?php if(current_user_can('administrator') || current_user_can('editor' ) ) { ?>
							
								<a href="https://focusadministradora.com/rentals/anuncios/editar-anuncio/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-pencil"></button></a>
								<a href=" <?php echo get_delete_post_link( get_the_ID() ); ?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-trash"></span></button></a>
							
							<?php } else { ?>
								
								<?php if(get_post_meta( get_the_ID(), 'status_do_imovel', true ) == 'Disponível') { ?>
									
									<a href="https://focusadministradora.com/rentals/anuncios/editar-anuncio/?pid=<?php echo get_the_ID();?>"><button type="button" class="btn btn-default btn-icon"><span class="icon-pencil"></button></a>
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