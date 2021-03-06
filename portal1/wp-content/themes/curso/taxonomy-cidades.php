<?php
	get_header();

	$cidade = get_term_by('slug',get_query_var('term'),get_query_var('taxonomy'));
?>
<div class="container">
	<div class="listagem">
		<h2><?php echo $cidade->name; ?></h2> 
		<?php			 
			if( have_posts()){

				while( have_posts()){

					the_post();
					
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
</div>
<?php 
	get_footer();
?>