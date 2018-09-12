<?php
function anefurni_setup() {
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'anefurni_setup');

function get_custom_types() {
	return array('suites', 'beds', 'cabinets', 'shelves', 'casegoods', 'tables', 'documents');
}

function add_admin_post_types() {
	$custom_types = get_custom_types();
	foreach ($custom_types as $slug) {
		register_post_type($slug, array(
			'label' => ucfirst($slug),
			'public' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'rewrite' => array('slug' => $slug),
			'query_var' => true,
			'menu_icon' => 'dashicons-admin-page',
			'taxonomies' => (($slug != 'documents') ? array('category') : array()),
			'supports' => array('title', 'page-attributes')
		));
	}
}
add_action('init', 'add_admin_post_types');

function custom_post_type_cat_filter($query) {
	$custom_types = get_custom_types();
  if ( !is_admin() && $query->is_main_query() ) {
    if ($query->is_category()) {
      $query->set('post_type', $custom_types);
    }
  }
}
add_action('pre_get_posts', 'custom_post_type_cat_filter');

function remove_admin_post_types() {
	remove_menu_page('edit.php');
	//remove_menu_page('edit.php?post_type=page');
	remove_menu_page('edit-comments.php');
	//remove_menu_page('plugins.php');
}
add_action('admin_menu', 'remove_admin_post_types');

function anefurni_enqueue_comment_reply_script(){
	if (get_option('thread_comments')) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('comment_form_before', 'anefurni_enqueue_comment_reply_script' );

function anefurni_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}
add_filter('the_title', 'anefurni_title');

function anefurni_filter_wp_title( $title ){
	return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_filter( 'wp_title', 'anefurni_filter_wp_title' );

add_action('wp_enqueue_scripts', 'anefurni_load_scripts');
function anefurni_load_scripts() {
	$dir = get_template_directory_uri();
	wp_enqueue_script('anefurni_app', $dir . '/build/app.min.js');
	wp_register_style('anefurni_style', get_template_directory_uri() . '/build/style.css' );
	wp_enqueue_style('anefurni_style' );
}

function my_login_logo() { ?>
  <style type="text/css">
    #login h1 a, .login h1 a {
	    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
			height: 52px;
			width: 126px;
			background-size: 126px 52px;
			background-repeat: no-repeat;
	  	padding-bottom: 8px;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>
