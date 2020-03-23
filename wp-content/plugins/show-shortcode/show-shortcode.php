<?php
/*
Plugin name: Mostrar shortcode
Plugin URI: https://wordpress.org/plugins
Description: Exibe um código no site com um shortcode
Author: Ricardo Sanches
Version: 1.0
Author URI: https://youtube.com/ricardosanches
*/

function show_my_shortcode() {
	$info = '<div class="alert alert-primary text-center mb-5" role="alert">Um alerta simples, mas importante</div>';
	return $info;
}

add_shortcode( 'my-shortcode', 'show_my_shortcode' );