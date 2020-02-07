<?php
/*
Plugin Name: Slide Primeiro Projeto
Description: Plugin para adicionar slide a home
Author: Lucas Ferreira dos Santos
*/

add_action('init','criar_custom_slide');

function criar_custom_slide(){
	$args_slides_post_type = array(
		'labels' => array('name'=>'Slides'),
		'public' => false,
		'exclude_from_search' => true,
		'publicly_queryacle' => true,
		'show_ui' => true,
		'supports' => array('title','excerpt','thumbnail'),
		'register_meta_box_cb'=>'slides_meta_box'
	);

	register_post_type('slide_home',$args_slides_post_type);
}

function slides_meta_box(){
	add_meta_box('campos_slides', __('Informações'), 'campos_slides', 'slide_home', 'side', 'high');
}

function campos_slides(){
	global $post;
	$slide_link = get_post_meta($post->ID, 'slide_link', true);
	?>
	<br>
	<label for="slide_link">Link: </label>
	<input type="text" name="slide_link" id="slide_link" value="<?php echo $slide_link ; ?>">
	<br>
	<?php
}

function salvar_campos_slides(){
	global $post;
	update_post_meta($post->id,'slide_link',$_POST['slide_link']);
}
add_action('save_post','salvar_campos_slides');
 
//Uso do bxSlider - Não funciona
/*function add_slides($atts){
	$html = "";

	$args_slides = array('post_type'=>'slide_home');

	$the_query_post = new WP_Query($args_slides);

	if ($the_query_post->have_posts()) { 
		$html .= "<ul class='bxslider'>";
		while($the_query_post->have_posts()){
			$the_query_post->the_post();
			$imgurl = wp_get_attachment_image_src(get_post_thumbnail_id(),'full',true);
			
			if(!empty($imgurl[0])){
				$html .= "<li> <img src='".$imgurl[0]."' title='".get_the_title().': '.get_the_excerpt()."' /></li>";
			}
		} 

		$html .= "</ul>";

		$html .= "<script>";
		$html .= "JQuery(document).ready(function(){";
			$html .= "JQuery('.bxslider').bxslider({adaptiveHeight: true, captions: true});";
		$html .= "});";
		$html .= "</script>";
	}
	 
	return $hmtl;
}*/  
add_shortcode('slides','add_slides');