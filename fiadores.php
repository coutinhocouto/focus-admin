<div class="col-md-12">
	
	<table id="listagem-table" class="table table-striped table-bordered datatable-basic">
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Telefone</th>
				<th>E-mail</th>
				<th>Cidade / Bairro</th>
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
						'post_type' => 'fiador',
						'posts_per_page' => -1,
					);
				} else {
					$args = array(
						'post_type' => 'fiador',
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
						<td><?php echo get_post_meta( get_the_ID(), 'cpf', true ); ?></td>
						<td><?php echo get_post_meta( get_the_ID(), 'telefone-pessoal', true ); ?></td>
						<td><a href="mailto:<?php echo get_post_meta( get_the_ID(), 'email-pessoal', true ); ?>"><?php echo get_post_meta( get_the_ID(), 'email-pessoal', true ); ?></a></td>
						<td><?php echo get_post_meta( get_the_ID(), 'cidade-pessoal', true ); ?> / <?php echo get_post_meta( get_the_ID(), 'estado-pessoal', true ); ?></td>
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