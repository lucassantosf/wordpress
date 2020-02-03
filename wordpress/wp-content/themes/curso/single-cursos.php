<?php
	get_header();
?>

<div <?php echo body_class("container"); ?>> 
	<?php
		while (have_posts()) {
			the_post();
			$curso_horario = get_post_meta( get_the_ID(), 'curso_horario', true );
			?>
			<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" >
			<h1><?php echo get_the_title(); ?></h1>
			<p>Horário: <?php echo $curso_horario; ?></p>
			<br><br> 
			<p><?php echo get_the_content(); ?></p> 
		<?php
		}
	?> 
</div>

<?php 
	get_footer();
?>