<?php 
	//Criar o widgets
	add_action('widgets_init','registra_widget');
	function registra_widget(){
		register_widget('Widget_Ultimos_Posts');
	};


	/**
	 * 
	 */
	class Widget_Ultimos_Posts extends WP_Widget
	{ 
		function __construct()
		{
			parent:: __construct(
				'Widget_Ultimos_Posts',
				'Ultimos posts',
				array('description'=>'Widget para exibir os últimos posts')
			);
		}
		//Este método ira exibir os dados do widget no front-end
		public function widget($args, $instance){
			$titulo = $instance["titulo"];
			$quantidade = $instance["quantidade"];
			
			echo "<div class='widget-ultimos-posts'>";
			echo "<h2>".$titulo." </h2> ";
			
			$args = array(
				'posts_per_page'=>$quantidade,
				'orderby'=>'date',
				'order'=>'DESC');

			$the_query = new WP_Query($args);

			if($the_query->have_posts()){
				echo '<ul>';
				while($the_query->have_posts()){

					$the_query->the_post();
					echo '<li><a href="'.get_permalink().'">'. get_the_title().'</a></li>';
				} 
				echo '</ul>'; 
			}  
			echo "</div>";

		}

		//Este método ira exibir os dados do widget no admin
		public function form($instance){
			$titulo = $instance["titulo"];
			$quantidade = $instance["quantidade"];
			echo 'Titulo: <input type="text" id="'.$this->get_field_id('titulo').'" name="'.$this->get_field_name('titulo').'" value="'.$titulo.'">';
			echo 'Quantidade: <input type="text" id="'.$this->get_field_id('quantidade').'" name="'.$this->get_field_name('quantidade').'" value="'.$quantidade.'">';
		}

		//Salvar os dados do formulário
		public function update($new_instance,$old_instance){
			$instance = array();
			$instance["titulo"] = $new_instance["titulo"];
			$instance["quantidade"] = $new_instance["quantidade"];
			return $instance;
		}

	}

?>
 