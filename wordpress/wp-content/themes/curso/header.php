<!DOCTYPE html> 

<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?> &raquo;</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"></link>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 
	<div class="header">		
		<img src="<?php echo get_template_directory_uri()?>/imgs/alfs.png" class="logo">
		<?php wp_nav_menu(array('theme_location'=>'menu-principal') ) ?>
	</div> 