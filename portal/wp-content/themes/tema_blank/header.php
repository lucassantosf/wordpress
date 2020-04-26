<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/style.css">

	<?php wp_head(); ?>

</head>
<body>

	<div id="header">

		<div id="header-superior">

			<div id="header-superior-content">

				<div id="header-paginas">
					Header pages
				</div><!--fim header-paginas-->

				<div id="header-social">
					Header social
				</div><!--fim header-social-->

			</div><!--fim header-superior-content-->
		
		</div><!--fim header-superior -->
		
		<div id="header-content">

			<div id="logo">
				Logo
			</div><!--fim logo -->

			<div id="login">
				login
			</div><!--fim login -->

			<div id="search">
				search
			</div><!--fim search -->

		</div><!--fim header-content -->

		<div id="nav">
			
			<div id="nav-content">
				Barra de Navegação
			</div><!--fim nav-content -->

		</div><!--fim nav -->

	</div><!--fim header -->