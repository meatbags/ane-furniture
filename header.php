<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo get_bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta property="og:url" content="<?php echo get_site_url(); ?>" />
	<meta property="og:title" content="ANE Furniture"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.jpg"/>
	<meta property="og:site_name" content="ANE Furniture"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!--
	<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" integrity="sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" integrity="sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7" crossorigin="anonymous">
	<script type="text/javascript">
	//<![CDATA[
		var siteUrl = '<?php echo get_site_url(); ?>';
		var themeRoot = '<?php echo get_template_directory_uri(); ?>/';
		var appRoot = '<?php echo get_template_directory_uri(); ?>/';
	//]]>
	</script>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
</head>
<body <?php body_class(); ?>>
