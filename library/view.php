<?php 
function html_generation_content_page_settings(){
?>
	<div class="wrap">
		<h2>Configuración de la generación estática del sitio web</h2>
		<form method="POST" action="options.php">
			<?php 
				settings_fields('html-generation-content-settings-group');
				do_settings_sections( 'html-generation-content-settings-group' ); 
			?>
			<label>Prueba:&nbsp;</label>
			<input 	type="text" 
					name="prueba_value" 
					id="prueba_value" 
					value="<?php echo get_option('prueba_value'); ?>" />
			
			<?php submit_button(); ?>

		</form>
	</div>
<?php
 

if(isset($_REQUEST["generateArchiveButton"])){
   generate_archive_zip();
}else{
?>
<div class="wrap">
<form action="" method="POST">
	<button id="generateArchiveButton" name="generateArchiveButton" type="submit" class="button-primary">Generar la web estática</button>
</form>
</div>
<?php 
echo '<br><a href="../wp-content/plugins/generacion-estatica/uploads/static-html.zip">Descargar</a>';
}
}


function html_generation_content_settings(){
	register_setting('html-generation-content-settings-group',
					 'prueba_value');
}

?>