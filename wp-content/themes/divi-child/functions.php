<?php
function divichild_enqueue_scripts() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divichild_enqueue_scripts' );

// END ENQUEUE PARENT ACTION

// Function to Add Fontawesome
add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}

add_filter( 'caldera_forms_phone_js_options', function( $options){
	$options[ 'initialCountry' ] = 'SA';
	return $options;
});