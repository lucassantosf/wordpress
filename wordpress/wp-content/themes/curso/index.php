<?php
	get_header();
?>

<div class="listagem">
	<h2>Noticias</h2>

	<?php
		$args_posts = array('post_type'=>'post');

		$query_post = new WP_Query($args_posts);

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

<div class="listagem">

	<h2>Páginas</h2>

	<?php
		$args_pages = array('post_type'=>'page');

		$query_page = new WP_Query($args_pages);

		if($query_page->have_posts()){

			while($query_page->have_posts()){

				$query_page->the_post();
				?>
				<div id="page-<?php echo get_the_ID(); ?>" class="page">
					<a href="<?php echo get_the_permalink() ?>">
						<?php echo get_the_post_thumbnail()?>
						<h3> <?php echo get_the_title() ?></h3>
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