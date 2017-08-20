<?php
/*
Plugin Name: Simple Custom JS
Description: A simple, lightweight plugin that adds custom Javascript to your website
Author: Chris Liu-Beers | Tomatillo Design
Author URI: http://www.tomatillodesign.com
Version: 1.0
*/


// Activate custom JS
add_action( 'wp_enqueue_scripts', 'clb_add_custom_js' );
function clb_add_custom_js() {

     wp_enqueue_script( 'clb-custom-js', plugin_dir_url( __FILE__ ) . '/js/clb-custom-js.js', array( 'jquery' ), '1.0.0', true );


}
