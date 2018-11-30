<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo get_bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<?php get_template_part("header-meta"); ?>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">
	<script type="text/javascript">
	//<![CDATA[
		var siteUrl = '<?php echo get_site_url(); ?>';
		var themeRoot = '<?php echo get_template_directory_uri(); ?>/';
		var appRoot = '<?php echo get_template_directory_uri(); ?>/';
	//]]>
	</script>
	<noscript>
		<style type='text/css'>
			.parallax-hide { opacity: 1; transform: translateX(0px); }
			.parallax-slide {	opacity: 1; transform: translate(0px); }
		</style>
	</noscript>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
</head>
<body <?php body_class(); ?>>
