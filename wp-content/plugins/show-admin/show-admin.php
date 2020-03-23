<?php
/*
Plugin name: Mostra meu admin
Plugin URI: https://wordpress.org/plugins
Description: Exibe uma página admin de teste
Author: Ricardo Sanches
Version: 1.0
Author URI: https://youtube.com/ricardosanches
*/

function my_admin(){
	add_menu_page( 'Meu teste', 'Meu teste', 'manage_options', 'my-admin', 'show_my_admin' );
}

add_action('admin_menu', 'my_admin');

function show_my_admin() {
	echo '
	<h1>Novo título</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pulvinar, nunc eget venenatis cursus, dui arcu rhoncus sapien, ac commodo arcu nisl eu odio. Sed vel lobortis mi.</p>
	';
}
