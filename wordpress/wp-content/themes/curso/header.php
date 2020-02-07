<!DOCTYPE html> 

<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?> &raquo;</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<!-- Carregamento css-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"></link>
	
	<!-- Carregamento BootStrap -->	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/libs/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/libs/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Carregamento Jquery-->	
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>	
	<!-- Carregamento JqueryBxSlider
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
	-->	 	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> > 
	<div class="header">	
		<div class="col-md-6 col-md-offset-3">
			<a href="<?php echo get_bloginfo('home');?>"><img src="<?php echo get_template_directory_uri()?>/imgs/alfs.png" class="logo"></a> 
		</div>	 
	</div>  
	 
	<nav class="navbar navbar-expand-lg menu-principal"> 
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto"> 

			<?php $itens = wp_nav_menu(array('theme_location'=>'menu-principal','menu_class'=>'nav-item')); ?> 
 		
	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="<?php get_home_url('url') ?>"> 
	      <input class="form-control mr-sm-2" type="search" placeholder="Insira" name="s" aria-label="Search">
	      <button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
	    </form>
	  </div>
	</nav>
 
	<nav class="navbar navbar-default ">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php $itens = wp_nav_menu(array('theme_location'=>'menu-principal','menu_class'=>'nav-item')); ?> 
				<form class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="button" class="btn btn-default">Submit</button>
				</form>
			</div> 
		</div> 
	</nav> 