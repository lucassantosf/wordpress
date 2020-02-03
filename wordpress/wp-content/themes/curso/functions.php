<?php
//Liberar imagens em interna de post
add_theme_support('post-thumbnails');
//Registrar menu
function register_my_menu(){
	register_nav_menu('menu-principal',__('Menu Principal'));
	register_nav_menu('menu-rodape',__('Menu Rodape'));
}
add_action('init','register_my_menu');

//Registrando um novo menu 'CRUD' no admin do Wordpress
function criar_custom_post_cursos(){
	
	$args_cursos_post_type = array(
		'labels' => array('name'=>'Cursos'),
		'public' => true,
		'supports' => array('title'),
		'register_meta_box_cb' => 'cursos_meta_box');

	register_post_type('cursos',$args_cursos_post_type);
}
add_action('init','criar_custom_post_cursos');

function cursos_meta_box(){
	add_meta_box('campos_cursos',__('Informações'),'campos_cursos','cursos','side','high');
}

function campos_cursos(){
	global $post; 
	$curso_horario = get_post_meta( $post->ID, 'curso_horario', true );
	?>
	<br>
	<label for="curso_horario">Horário</label>
	<input type="text" name="curso_horario" id="curso_horario" value="<?php echo $curso_horario;?>">
	<br>
	<br>
	<?php
}

function salvar_campos_cursos(){
	global $post;
	update_post_meta($post->ID,'curso_horario',$_POST['curso_horario']);
}
add_action('save_post','salvar_campos_cursos');