<?php
//Liberar imagens em interna de post
add_theme_support('post-thumbnails');
//Registrar menu
function register_my_menu(){
	register_nav_menu('menu-principal',__('Menu Principal'));
	register_nav_menu('menu-rodape',__('Menu Rodape'));
}
add_action('init','register_my_menu');