<?php
add_theme_support('post-thumbnails');

function register_my_menu(){
	register_nav_menu('menu-principal',__('Menu Principal'));
	register_nav_menu('menu-rodape',__('Menu rodape'));
}

add_action('init','register_my_menu');