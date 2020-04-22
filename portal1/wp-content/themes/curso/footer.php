
<?php 
	dynamic_sidebar('antes-rodape'); // Chamar pelo id onde foi registrado o sidebar
	
?>

<div class="footer">
<?php wp_nav_menu(array('theme_location'=>'menu-rodape') ) ?>
</div>

<?php wp_footer(); ?> 
</body>
</html>