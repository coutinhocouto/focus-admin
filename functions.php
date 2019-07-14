<?php

function twentyseventeen_setup() {
	load_theme_textdomain( 'twentyseventeen' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );
	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyseventeen_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'twentyseventeen_pingback_header' );

// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="https://focusadministradora.com/wp-content/themes/g5_helium/custom/images/favicon.jpg" />';
}
add_action('admin_head', 'admin_favicon');
add_action( 'wp_head', 'admin_favicon' );

function my_login_logo() { ?>
<style type="text/css">
	body {background: url(https://focusadministradora.com/rentals/wp-content/uploads/2019/03/bg-menu-1.jpg) no-repeat !important; background-size: cover !important;}
	#login h1 a, .login h1 a {
	background-image: url(https://focusadministradora.com/rentals/wp-content/uploads/2018/10/logo-2.png);
	background-size: contain !important; -webkit-background-size: contain !important; width: 300px;
}
</style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Rentals';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

function remove_header_info() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'start_post_rel_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link' ); // for WordPress < 3.0
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' ); // for WordPress >= 3.0
}
add_action( 'init', 'remove_header_info' );
                      
// --------------------------------------------------------------------------- //

// Os usuários só vêem suas mídias
add_filter( 'ajax_query_attachments_args', 'wpb_show_current_user_attachments' );
function wpb_show_current_user_attachments( $query ) {
    $user_id = get_current_user_id();
    if ( $user_id && !current_user_can('activate_plugins') && !current_user_can('edit_others_posts
') ) {
        $query['author'] = $user_id;
    }
    return $query;
}

// Os autores só vêem seus posts
function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');

require_once( ABSPATH . 'wp-admin/includes/image.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/media.php' );

function wpum_custom_redirect_to_homepage( $url ) {
    return home_url();
}
add_filter( 'wpum_get_login_redirect', 'wpum_custom_redirect_to_homepage' );

function ace_block_wp_admin() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_safe_redirect( home_url() );
		exit;
	}
}
add_action( 'admin_init', 'ace_block_wp_admin' );

// Delete from Front-End Link
function wp_delete_post_link($link = '<button type="button" class="btn btn-default btn-icon"><span class="icon-trash"></span> </button>', $before = '', $after = '', $title="Seu anunúncio foi removido.", $cssClass="delete-post") {
    global $post;
    if ( $post->post_type == 'page' ) {
        if ( !current_user_can( 'edit_page' ) )
            return;
    } else {
        if ( !current_user_can( 'edit_post' ) )
            return;
    }
    $delLink = wp_nonce_url( site_url() . "/wp-admin/post.php?action=trash&post=" . $post->ID, 'trash-' . $post->post_type . '_' . $post->ID);
    $link = '<a class="' . $cssClass . '" href="' . $delLink . '" onclick="javascript:if(!confirm("Are you sure you want to move this item to trash?")) return false;" title="'.$title.'" />'.$link."</a>";
    return $before . $link . $after;
}


/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	wp_enqueue_style( 'bootstrapvalidator', '//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css', array(), '1.0' );
	wp_enqueue_style( 'rtables', 'https://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css', array(), '1.0' );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'jquery-ui', get_theme_file_uri( '/js/vendor/jquery/jquery-ui.min.js' ), array(), '1.0' );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/vendor/bootstrap/bootstrap.min.js' ), array(), '1.0' );
	wp_enqueue_script( 'moment', get_theme_file_uri( '/js/vendor/moment/moment.min.js' ), array(), '1.0' );
	wp_enqueue_script( 'scroll', get_theme_file_uri( '/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js' ), array(), '1.0' );
	
	wp_enqueue_script( 'd3', get_theme_file_uri( '/js/vendor/rickshaw/d3.v3.js' ), array(), '1.0' );
	wp_enqueue_script( 'ricksaw', get_theme_file_uri( '/js/vendor/rickshaw/rickshaw.min.js' ), array(), '1.0' );
	
	wp_enqueue_script( 'mask', get_theme_file_uri( '/js/jquery.mask.js' ), array(), '1.0' ); 
	
	wp_enqueue_script( 'datatable', get_theme_file_uri( '/js/vendor/datatables/jquery.dataTables.min.js' ), array(), '1.0' );
	wp_enqueue_script( 'bdatatable', get_theme_file_uri( '/js/vendor/datatables/dataTables.bootstrap.min.js' ), array(), '1.0' );
	wp_enqueue_script( 'rdatatable', 'https://nightly.datatables.net/responsive/js/dataTables.responsive.min.js', array(), '1.0' );
	wp_enqueue_script( 'alerts', get_theme_file_uri( '/js/vendor/noty/jquery.noty.packaged.js' ), array(), '1.0' );
	wp_enqueue_script( 'dropzone', get_theme_file_uri( '/js/vendor/dropzone/dropzone.js' ), array(), '1.0' );
	
	wp_enqueue_script( 'validator', 'https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js', array(), '1.0' );

	wp_enqueue_script( 'app', get_theme_file_uri( '/js/app.js' ), array(), '1.0' );
	
	wp_enqueue_script( 'custom', get_theme_file_uri( '/custom.js' ), array(), '1.0' );
	
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' ); 

	
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );

add_image_size('anuncios', 300, 300, true);

add_action('acf/save_post', 'anuncio_title');
function anuncio_title( $post_id ) {
	
	// bail early if not a contact_form post
	if( get_post_type($post_id) == 'anuncio' ) {
		
		$anuncio = array(
			  'ID'           => $post_id,
			  'post_title'   => 'FA' . $post_id,
		);
		wp_update_post( $anuncio );
		
		if( get_post_meta( $post_id, 'status_do_imovel', true ) == ''){
			add_post_meta( $post_id, 'status_do_imovel', 'Disponível' );
		} else if( get_post_meta( $post_id, 'status_do_imovel', true ) == 'Vendido'){
			update_post_meta($post_id, 'status', 'Inativo');
		}
		
		echo '<meta http-equiv="refresh" content="0; url=https://focusadministradora.com/rentals/anuncios/?updated=1">';
		
	}
	if( get_post_type($post_id) == 'locador' ) {
		echo '<meta http-equiv="refresh" content="0; url=https://focusadministradora.com/rentals/locadores/?updated=1">';
	}
	
	if( get_post_type($post_id) == 'fiador' ) {
		echo '<meta http-equiv="refresh" content="0; url=https://focusadministradora.com/rentals/fiadores/?updated=1">';
	}
	
	if( get_post_type($post_id) == 'locatario' ) {
		echo '<meta http-equiv="refresh" content="0; url=https://focusadministradora.com/rentals/locatarios/?updated=1">';
	}
	
	if( get_post_type($post_id) == 'contrato' ) {
		
		$post_author_id = get_post_field( 'post_author', $post_id );
		$to = get_the_author_meta( 'user_email', $post_author_id );
		$headers = array('Content-Type: text/html; charset=UTF-8');
		
		$contrato = array(
			  'ID'           => $post_id,
			  'post_title'   => 'CO' . $post_id,
		);
		wp_update_post( $contrato );
		
		if( get_post_meta( $post_id, 'status_do_contrato', true ) == ''){
			
			$subject = 'O Contrato ' . get_the_title($post_id) . ' foi  <strong>CRIADO</strong>';
			$body = 'O Contrato ' . get_the_title($post_id) . ' referente ao imóvel ' . get_the_title(get_field('imovel', $post_id)) . ' foi <strong>CRIADO</strong>';
			wp_mail( 'coutinhocouto@hotmail.com', $subject, $body, $headers );
			add_post_meta( $post_id, 'status_do_contrato', 'Inativo' );
			
		} else if( get_post_meta( $post_id, 'status_do_contrato', true ) == 'Ativo') {
			
			update_post_meta(get_field('imovel', $post_id), 'status_do_imovel', 'Locado');
			update_post_meta(get_field('imovel', $post_id), 'status', 'Inativo');
			
			$subject = 'O Contrato ' . get_the_title($post_id) . ' está  <strong>ATIVO</strong>';
			$body = 'O Contrato ' . get_the_title($post_id) . ' referente ao imóvel ' . get_the_title(get_field('imovel', $post_id)) . ' foi aprovado e agora está <strong>ATIVO</strong>';
			wp_mail( $to, $subject, $body, $headers );
			
		} else if( get_post_meta( $post_id, 'status_do_contrato', true ) == 'Em Análise') {
			
			$subject = 'O Contrato ' . get_the_title($post_id) . ' está  <strong>EM ANÁLISE</strong>';
			$body = 'O Contrato ' . get_the_title($post_id) . ' referente ao imóvel ' . get_the_title(get_field('imovel', $post_id)) . ' está <strong>EM ANÁLISE</strong>';
			wp_mail( $to, $subject, $body, $headers );
			
		} else if( get_post_meta( $post_id, 'status_do_contrato', true ) == 'Desativado') {
			
			$subject = 'O Contrato ' . get_the_title($post_id) . ' está  <strong>DESATIVADO</strong>';
			$body = 'O Contrato ' . get_the_title($post_id) . ' referente ao imóvel ' . get_the_title(get_field('imovel', $post_id)) . ' finalisou e agora está <strong>DESATIVADO</strong>';
			wp_mail( $to, $subject, $body, $headers );
			
		}
		
		echo '<meta http-equiv="refresh" content="0; url=https://focusadministradora.com/rentals/contratos/?updated=1">';	

	}
	
}

//Adiciona primeiro nome no registro
add_action( 'register_form', 'myplugin_register_form' );
function myplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? trim( $_POST['first_name'] ) : '';

        ?>
        <p>
            <label for="first_name"><?php _e( 'Nome Completo *', 'mydomain' ) ?><br />
                <input type="text" name="first_name" id="first_name" class="input" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25" /></label>
        </p>

        <?php
    }

    //2. Add validation. In this case, we make sure first_name is required.
    add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
    function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {

        if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
            $errors->add( 'first_name_error', __( '<strong>ERRO</strong>: É Preciso informar seu nome.', 'mydomain' ) );
        }
        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action( 'user_register', 'myplugin_user_register' );
    function myplugin_user_register( $user_id ) {
        if ( ! empty( $_POST['first_name'] ) ) {
            update_user_meta( $user_id, 'first_name', trim( $_POST['first_name'] ) );
            update_user_meta( $user_id, 'last_name', trim( $_POST['last_name'] ) );
        }
    }
        
function redirect_non_admin_user(){
    if ( is_user_logged_in() ) {
        if ( !defined( 'DOING_AJAX' ) && !current_user_can('administrator') ){
            wp_redirect( site_url() );  exit;
        }
    }
}
add_action( 'admin_init', 'redirect_non_admin_user' );

add_filter( 'wp_image_editors', 'change_graphic_lib' );
function change_graphic_lib($array) {
	return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}


function fiador_query( $args, $field, $post ){
	// modify the order
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$args['post_type'] = 'fiador';
	$args['author'] = $user_id;
	$args['authors'] = $user_id;	

	return $args;
}

// filter for every field
add_filter('acf/fields/post_object/query/name=fiador', 'fiador_query', 10, 3);

function locador_query( $args, $field, $post ){
	// modify the order
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$args['post_type'] = 'locador';
	$args['author'] = $user_id;
	$args['authors'] = $user_id;	

	return $args;
}

// filter for every field
add_filter('acf/fields/post_object/query/name=locador', 'locador_query', 10, 3);

function locatario_query( $args, $field, $post ){
	// modify the order
	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$args['post_type'] = 'locatario';
	$args['author'] = $user_id;
	$args['authors'] = $user_id;	

	return $args;
}

// filter for every field
add_filter('acf/fields/post_object/query/name=locatario', 'locatario_query', 10, 3);

add_filter('show_admin_bar', '__return_false');

function admin_default_page() {
  return 'https://focusadministradora.com/rentals/';
}

add_filter('login_redirect', 'admin_default_page');

add_action('init', 'start_session', 1);
function start_session() {
	if(!session_id()) {
		session_start();
	}
}