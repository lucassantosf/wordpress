<?php

require_once('custom-posts/cursos.php');
require_once('taxonomias/cidades.php');
require_once('widgets/ultimos-posts/ultimos-posts.php');
require_once('widgets/facebook/facebook.php');

//Liberar imagens em interna de post
add_theme_support('post-thumbnails');

//Registrar menu
function register_my_menu(){
	register_nav_menu('menu-principal',__('Menu Principal'));
	register_nav_menu('menu-rodape',__('Menu Rodape'));
}
add_action('init','register_my_menu');

//Registrar sidebar
add_action('widgets_init', 'registra_sidebar');
function registra_sidebar(){
	register_sidebar(array(
		'name'=>'Area antes do rodapé',
		'id'=>'antes-rodape',
		'description'=>'Insira widgets para aparecer antes do rodape'
	));
	register_sidebar(array(
		'name'=>'Barra lateral',
		'id'=>'barra-lateral',
		'description'=>'Insira widgets para aparecer na barra-lateral.'
	));
}