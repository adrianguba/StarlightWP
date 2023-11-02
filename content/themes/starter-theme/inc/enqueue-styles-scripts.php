<?php
/**
 * Load all theme styles and scripts
 */
declare( strict_types=1 );

namespace SST\Functions;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_styles' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts' );

function enqueue_styles() : void {
	wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/dist/index.css', [], filemtime( get_stylesheet_directory() . '/dist/index.css') );
}

function enqueue_scripts() : void {
	wp_enqueue_script( 'main-scripts', get_stylesheet_directory_uri() . '/dist/index.js' );
}