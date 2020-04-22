<?php 
	//Criar o widgets
	add_action('widgets_init','registra_widget_facebook');
	function registra_widget_facebook(){
		register_widget('Widget_Facebook');
	};


	/**
	 * 
	 */
	class Widget_Facebook extends WP_Widget
	{ 
		function __construct()
		{
			parent:: __construct(
				'Widget_Facebook',
				'Facebook',
				array('description'=>'Widget para facebook')
			);
		}
		//Este método ira exibir os dados do widget no front-end
		public function widget($args, $instance){  
			?>	
				<br><br>
				<div class='widget-facebook'>
					<div id="fb-root"></div>
					<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0"></script>
					<div class="fb-page" data-href="https://www.facebook.com/vamosvoltararealidade" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/vamosvoltararealidade" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/vamosvoltararealidade">MC Marechal</a></blockquote></div>
				</div>
			<?php  
		}

		//Este método ira exibir os dados do widget no admin
		public function form($instance){ 
		}

		//Salvar os dados do formulário
		public function update($new_instance,$old_instance){
			$instance = array(); 
			return $instance;
		}

	}

?>
 