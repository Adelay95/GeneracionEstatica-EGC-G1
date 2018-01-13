<?php
/*
Plugin Name: Generación Estática
Plugin URI:  https://www.splc2017.net
Description: Plugin para generar una copia estática de la web.
Version:     1.0.0
Author:      Equipo de Generación Estática
Author URI:  https://1984.lsi.us.es/wiki-egc/index.php/Gesti%C3%B3n_de_generaci%C3%B3n_est%C3%A1tica_del_sitio_web_-_17_18_-_G1#Miembros	
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

require_once 'library/functions.php';
require_once 'library/view.php';

function html_generation_plugin_menu(){
	
	add_menu_page('Configuración de la generación estática del sitio web',
					'Generación estática',
					'administrator',	
				  	'html-generation-content-settings',		
				  	'html_generation_content_page_settings',
					'dashicons-admin-generic');				
}
add_action('admin_menu','html_generation_plugin_menu');



add_action('admin_init','html_generation_content_settings');


?>