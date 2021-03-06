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

//Pesquisa Filtro - Aux ajax
function tornese_search_page($query, $paged){

	$args_search = array(
		's'=>$_POST["search"],
		'posts_per_page'=>3,
		'paged'=>$_POST["paged"]
	);

	if($_POST["posttype"]){
		$args_search["post_type"] = $_POST['posttype'];
	}

	$query_search = new WP_Query($args_search);

	$results = '';
	if($query_search->have_posts()):
		while($query_search->have_posts()):$query_search->the_post();

			$results .= '<div id="post-'.get_the_ID().'" class="post">';
				$results .= get_the_post_thumbnail();
				$results .= '<div class="info">';
					$results .= '<a href="'.get_the_permalink().'">';
						$results .= '<h3>'.get_the_title().'"</h3>';
						$results .= '<p>'.get_the_excerpt().'"</p>'; 
					$results .= '</a>';
				$results .= '</div>';
			$results .= '</div>';

		endwhile;
	endif;

	echo $results;
}

add_action('wp_ajax_tornese_search','tornese_search_page');
add_action('wp_ajax_nopriv_tornese_search','tornese_search_page');