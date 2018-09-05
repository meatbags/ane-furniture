<?php
function anefurni_setup() {
	add_theme_support('title-tag');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'anefurni_setup');

function add_admin_post_types() {
	register_post_type('anefurni', array(
		'label' => 'anefurni',
		'public' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => 'anefurni'),
		'query_var' => true,
		'menu_icon' => 'dashicons-format-anefurni',
		'taxonomies' => array('category', 'post_tag'),
		'supports' => array('title', 'editor', 'revisions', 'thumbnail')
	));
	remove_post_type_support('anefurni', 'editor');
}
add_action('init', 'add_admin_post_types');

function remove_admin_post_types() {
	remove_menu_page('edit.php');
	remove_menu_page('edit.php?post_type=page');
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

?>