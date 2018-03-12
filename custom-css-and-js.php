<?php
//This is my custom php
/*
Plugin Name:   Dennis' Custom CSS and JS Plugin
Plugin URI:    https://github.com/GhostInTheMachines/custom-css-and-js
Description:   Add a custom CSS stylesheet and JavaScript file to WordPress
Version:       1.0
Author:        Dennis Kimble
Author URI:    http://islanderremoteservices.com/web-services
*/
function custom_css_js_enqueue_scripts() {

    /* enqueue the custom-style.css file */
    wp_enqueue_style( 'custom-css', plugins_url( '/css/custom-style.css', __FILE__ ), $ver = false );

    /* enqueue the custom-scripts.js file */
    wp_enqueue_script( 'custom-js', plugins_url( '/js/custom-scripts.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'custom_css_js_enqueue_scripts' );
