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
			<label>URL del sitio web:&nbsp;</label>
			<input 	type="text" 
		 	
					name="url_value" 
					id="url_value"
					placeholder="localhost"
					value="<?php echo get_option('url_value'); ?>" />
				<br>
				<label>Estructura de la web:&nbsp;</label>
				<select name="structure_value" 
					id="structure_value">
				  <option value="" <?php if(get_option('structure_value')=="") echo 'selected'; ?>>Misma estructura que la web (por defecto)</option>
				  <option value="N1" <?php if(get_option('structure_value')=="N1") echo 'selected'; ?>>HTML en web/, resto de archivos en web/images/</option>
				  <option value="N4" <?php if(get_option('structure_value')=="N4") echo 'selected'; ?>>HTML en web/, resto de archivos en web/xxx, donde xxx es la extensión del archivo
				</option>
				</select>
				<br>
				<label>Tipos de archivos:&nbsp;</label>
				<select name="file_value" 
					id="file_value">
				  <option value="p3" <?php if(get_option('file_value')=="p3") echo 'selected'; ?>>Todos los archivos (por defecto)</option>
				  <option value="p1" <?php if(get_option('file_value')=="p1") echo 'selected'; ?>>Solo archivos HTML</option>
				  <option value="p2" <?php if(get_option('file_value')=="p2") echo 'selected'; ?>>Solo archivos no HTML</option>
				</select>
				<br>

				<label>Añadir páginas de error:&nbsp;</label>
				<select name="error_value" 
					id="error_value">
				  <option value="" <?php if(get_option('error_value')=="") echo 'selected'; ?>>Sí (por defecto)</option>
				  <option value="o0" <?php if(get_option('error_value')=="o0") echo 'selected'; ?>>No</option>
	
				</select>
			
			<?php submit_button('Guardar cambios'); ?>
		</form>
	</div>
<?php
 

if(isset($_REQUEST["generateArchiveButton"])){
   generate_archive_zip();
}
?>
<div class="wrap">
<form action="" method="POST">
	<button id="generateArchiveButton" name="generateArchiveButton" type="submit" onclick="return confirm('¿Desea continuar?\n\n(Tenga en cuenta que debe haber guardado los cambios si quiere que se utilicen)')" class="button-primary">Generar la web estática</button>
</form>
</div>
<?php 
echo '<br><a href="../wp-content/plugins/generacion-estatica/uploads/static-html.zip">Descargar</a>';
}


function html_generation_content_settings(){
	register_setting('html-generation-content-settings-group',
					 'url_value');
	register_setting('html-generation-content-settings-group',
					 'structure_value');
	register_setting('html-generation-content-settings-group',
					 'file_value');
	register_setting('html-generation-content-settings-group',
					 'error_value');
}

?>