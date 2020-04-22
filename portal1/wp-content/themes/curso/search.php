<?php
	get_header();
?>

<div class="container search"> 
	
	<div class="row">

		<div class="col-3 menu"> 

			<?php 
				$args = array(
					'public' => true
				);

				$posts_types = get_post_types($args,'objects');

				foreach ($posts_types as $post_type) {
					if($post_type->name != 'attachment'){
						echo '<a href="'.get_home_url().'/?s='.get_search_query().'&posttype='.$post_type->name.'">'.$post_type->labels->singular_name.'</a>';
					} 
				}
			?>
		</div>

		<div class="col-9 listagem">  
			<?php 
				$args_search = array('s'=>$_GET['s'],'posts_per_page'=>3);

				echo "<input type='hidden' id='hideSearch' value='".$_GET['s']."'>";

				if($_GET['posttype']){
					$args_search["post_type"] = $_GET['posttype']; 
					echo "<input type='hidden' id='hidePostType' value='".$_GET['posttype']."'>"; 
				}

				$query_post = new WP_Query($args_search);

				if($query_post->have_posts()){

					while($query_post->have_posts()){ 
						$query_post->the_post();
					?>  
						<div id="post-<?php echo get_the_ID(); ?>" class="post">
							<?php echo get_the_post_thumbnail()?>
							<div class="info">
								<a href="<?php echo get_the_permalink() ?>">
									<h3> <?php echo get_the_title() ?> <br></h3>
									<p> <?php echo get_the_excerpt() ?></p> 
								</a>
							</div>
						</div> 

						<?php
					} 
				} 
			?>
		</div>

		<button class="btn btn-primary btn-lg center-block" id="btnsearch">Carregar Mais</button>
	
	</div>

</div>

<?php 
	get_footer();
?>