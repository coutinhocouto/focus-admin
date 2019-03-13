<div class="col-md-12">
	
	<table id="listagem-table" class="table table-striped table-bordered datatable-basic">
		<thead>
			<tr>
				<th>Código</th>
				<th>Transação</th>
				<th>Tipo</th>
				<th>Cidade / Bairro</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>                                    
		<tbody>
			
			 <?php
			
				global $current_user;
				get_currentuserinfo();
				$authorID = $current_user->ID;
			
				if(current_user_can('administrator') ) {
					$args = array(
						'post_type' => 'anuncio',
						'posts_per_page' => -1,
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
							<?php echo get_post_meta( get_the_ID(), 'valor-locacao', true ); ?> 
							<?php if(get_post_meta( get_the_ID(), 'valor-locacao', true )) echo ' / ';?> 
							<?php echo get_post_meta( get_the_ID(), 'valor-venda', true ); ?>
						</td>
						<td>
							<a href="<?php the_permalink();?>"><button type="button" class="btn btn-default btn-icon"><span class="fa fa-eye"></span></button></a>
							<button type="button" class="btn btn-default btn-icon"><span class="icon-cross"></span></button>
						</td>
					</tr>
			
				<?php
				endwhile;
				wp_reset_postdata();
			?>
			
		</tbody>
	</table>
	
</div>