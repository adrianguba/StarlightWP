<?php
/*
 * Plugin Name:       Starlight Starter Custom ACF Blocks
 * Plugin URI:        https://github.com/adrianguba/Wordpress-Starter
 * Description:       Place to register custom ACF blocks.
 * Version:           1.0.0
 * Author:            Adrian Guba
 * Author URI:        https://github.com/adrianguba/
 * License:           MIT
 */

declare( strict_types=1 );

namespace SST\Blocks;

function register_all_blocks() : void {
	register_block_type( dirname( __FILE__ ) . '/blocks/sample-block' );
}

add_action( 'init', __NAMESPACE__ . '\\register_all_blocks' );