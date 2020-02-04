<?php
//Sempre que o php for iniciado, o metodo add_action('init') também é executado, o segundo parametro serve para iniciar alguma funcao
add_action('init','cidades_init');
function cidades_init(){
	//REgistrando uma taxonomia
	register_taxonomy(
		'cidades',
		array('cursos'),//Array que recebe o slug de quais lugares irão aparecer esta taxonomia
		array(
			'label'=>__('Cidades'),
			'labels'=>array(
				'name' => esc_html('Cidades','taxonomy general name'),
				'singular_name' => esc_html('Cidade','taxonomy singular name'),
				'menu_name' => esc_html('Cidades'),
				'all_items' => esc_html('Todas cidades'),
				'edit_item' => esc_html('Editar cidade'),
				'view_item' => esc_html('Visualizar cidade'),
				'update_item' => esc_html('Alterar cidade'),
				'add_new_item' => esc_html('Adicionar cidade'),
				'search_items' => esc_html('Procurar cidade'),
				'not_found' => esc_html('Nenhuma cidade encontrada'),
			),
			'hierarchical'=>true
		)
	);
}

//Criar um campo novo dentro do form da taxonomia cidades
add_action('cidades_add_form_fields','add_cidades_fields',10,2);
function add_cidades_fields($taxonomy){
	?>
	<label for="uf">UF</label>
	<input type="text" name="uf" id="uf"><br><br>
	<?php
}

//Esta action é "disparada" quando clicar em 'Salvar' a cidade no form created, isso serve para o php também salvar o campo personilizado de UF criado acima
add_action('created_cidades','save_cidades_meta',10,2);
function save_cidades_meta($term_id,$tt_id){ 
	if(!empty($_POST['uf'])){ 
		add_term_meta($term_id, 'uf', $_POST['uf'], true);
	}
}

//Este action acontece quando vou editar uma taxonomia, quando vou exibir os dados do form de edição para ver os campos personalizados
add_action('cidades_edit_form_fields','edit_cidades_fields',10,2);
function edit_cidades_fields($term,$taxonomy){ 
	global $uf;
	$uf = get_term_meta($term->term_id,'uf',true);
?>
	<tr class="form-field term-group-wrap">
		<th scope="row"><label for="uf">UF</label></th>
		<td>
			<div class="form-field term-group">
				<input type="text" name="uf" id="uf" value="<?php echo $uf; ?>">				
			</div>
		</td>
	</tr>	
	<?php
}

//Este action acontece quando clico no botao de salvar os dados do form update da taxonomia de cidade
add_action('edited_cidades','udpate_cidades_meta', 10 , 2);
function udpate_cidades_meta($term_id,$tt_id){
	if(!empty($_POST['uf'])){
		update_term_meta($term_id,'uf',$_POST['uf']);
	}
}