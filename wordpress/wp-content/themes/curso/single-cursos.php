<?php
	get_header();
?>

<div <?php echo body_class("container"); ?>> 
	<div class="row">
		<div class="col-md-8">
			<?php
				while (have_posts()) {
					the_post();
					$curso_horario = get_post_meta( get_the_ID(), 'curso_horario', true );
					?>
					<img class="img-responsive"  src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" " style="max-width: 230px;">
					<h1><?php echo get_the_title(); ?></h1>
					<p>Horário: <?php echo $curso_horario; ?></p>
					<p>Disponível nas seguintes cidades: 
					<?php
						$termsCidades = get_the_terms(get_the_ID(),'cidades');
						foreach ($termsCidades as $cidade) {
							
							echo $cidade->name.", ";

						}						
					?>
					</p>
					<br><br> 
					<p><?php echo get_the_content(); ?></p> 
				<?php
				}
			?> 
		</div>
		<div class="col-md-4" style="height: 400px; ">
			<?php 
				dynamic_sidebar('barra-lateral'); // Chamar pelo id'slug' onde foi registrado o sidebar 
			?> 
		</div>
	</div>
</div>

<?php 
	get_footer();
?>