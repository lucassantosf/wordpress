<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<img src="<?php echo get_template_directory_uri(); ?>/imagens/logo.jpg" class="logo">
		<?php wp_nav_menu( array('theme_location' => 'menu-principal') ); ?>
	</div>
