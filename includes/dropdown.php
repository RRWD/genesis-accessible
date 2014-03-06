<?php
/** attributes.php
	Description: Fixes issues with keyboard accessibility of the dropdown menu's
	Author: Rian Rietveld
	Plugin URI: http://genesis-accessible.org/
	License: GPLv2 or later
*/

add_action( 'wp_enqueue_scripts', 'genwpacc_dropdown_scripts' );
function genwpacc_dropdown_scripts() {

	if ( ( 	genesis_get_option( 'genwpacc_dropdown', 'genwpacc-settings' )  == 0 ) ||
			function_exists( 'wpacc_genesis_dropdown_scripts'  )  )
			return;

	wp_enqueue_script( 'genwpacc-dropdown',  GENWPACC_PLUGIN_URL . '/js/genwpacc-dropdown.js', array( 'jquery' ), false, true );

	wp_register_style( 'genwpacc-dropdown-css', GENWPACC_PLUGIN_URL .  '/css/genwpacc-dropdown.css' );
	wp_enqueue_style('genwpacc-dropdown-css');
}


?>