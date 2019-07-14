<div class="col-md-12">

	<table id="listagem-table" class="table table-striped table-bordered datatable-basic responsive no-wrap">
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Celular</th>
				<th>CRECI</th>
			</tr>
		</thead>                                    
		<tbody>
			
			 <?php
				$blogusers = get_users( 'orderby=first_name&role=author' );
				// Array of WP_User objects.
				foreach ( $blogusers as $user ) {
					echo '<tr>';
					echo '<td>' . esc_html( $user->first_name ) . '</td>';
					echo '<td>' . esc_html( $user->user_email ) . '</td>';
					echo '<td>' . esc_html( $user->celular ) . '</td>';
					echo '<td>' . esc_html( $user->creci ) . '</td>';
					echo '</tr>';
				}
			?>
			
		</tbody>
	</table>
	
</div>