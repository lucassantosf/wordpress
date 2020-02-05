<!DOCTYPE html> 

<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?> &raquo;</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"></link>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/libs/bootstrap/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script><script type="text/javascript" src="<?php echo get_template_directory_uri()?>/libs/bootstrap/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 
	<div class="header">		
		<img src="<?php echo get_template_directory_uri()?>/imgs/alfs.png" class="logo"> 
	</div> 
	
	<ul class="nav">
	   
		<?php $itens = wp_nav_menu(array('theme_location'=>'menu-principal','menu_class'=>'nav-item')) ; var_dump($itens) ; exit();   ?> 
		
	  	<li class="nav-item">
		    <form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="button" class="btn btn-default">Submit</button>
			</form>
	  	</li>

	</ul>