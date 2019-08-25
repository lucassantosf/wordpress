<?php 
	get_header();
?>
<div class="listagem">
<h2>Notícias</h2> 
	<?php
		$args_post = array(
			'post_type' => 'post' 
		);

		$query = new WP_Query($args_post);

		if($query->have_posts()){
			
			while ($query->have_posts()) {
				$query->the_post(); 
				?>
				<div id="post-<?php echo get_the_ID();?>" class="post">
					<?php echo get_the_post_thumbnail() ?>  
					<a href="<?php echo get_the_permalink(); ?>">
					<h3><?php echo get_the_title(); ?></h3> 
					<p><?php echo get_the_excerpt(); ?></p>
					</a>
				</div>	
				<?php
			}
			
		} 
	?>
</div>

<div class="listagem">
	<h2>Páginas</h2>
		<?php
			$args_page = array(
				'post_type' => 'page' 
			);

			$query = new WP_Query($args_page);

			if($query->have_posts()){
				
				while ($query->have_posts()) {
					$query->the_post(); 
					?>
					<div id="post-<?php echo get_the_ID();?>" class="post">
					 	<a href="<?php echo get_the_permalink(); ?>">
						<h3><?php echo get_the_title(); ?></h3> 
						</a>
					</div>	
					<?php
				}
				
			} 
		?>
</div>
<?php
	get_footer();
?>



