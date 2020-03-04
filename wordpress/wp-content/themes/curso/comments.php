<h1>Comentários</h1>

<div id="comments">
	<h1><?php comments_number('0 Comentários','1 Comentário', '% Comentários');?></h1>
	
	<?php if(have_comments()): ?>
		<ul class="commentlist">
			<?php wp_list_comments('avatar_size=64&type=comment');?>
		</ul>
	<?php endif;?>

	<?php if( comments_open() ): ?>
		<div id="respond">
			<h1>Deixe seu comentário:</h1>
			<form action="<?php echo get_option('siteurl');?>/wp-comments-post.php" method="POST" id="commentform">
				<fieldset>
					<label for="author">Nome:</label>
					<input type="text" name="author" id="author" value="<?php echo $comment_author;?>" /> <br>
					<label for="email">Email:</label>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email;?>" /> <br>
					<label for="mensagem">Email:</label>
					<textarea name="comment" id="comment" rows="" cols=""></textarea> <br>
					<input type="submit" class="commentsubmit" value="Enviar Comentário" />

				<?php comment_id_fields(); ?>
				<?php do_action('comment_form',$post->ID); ?>
				</fieldset>
			</form>
		</div>
	<?php else:?>
			<h3>Os comentários estão fechados</h3>
	<?php endif;?>
</div>