<?php
/**
 * Setting a custom save/load points for ACF json files.
 */

declare( strict_types=1 );

namespace SST\Functions;

add_filter( 'acf/settings/save_json', __NAMESPACE__ . '\\acf_save_json_location' );
add_filter( 'acf/settings/load_json', __NAMESPACE__ . '\\acf_load_json_location' );

/**
 * Sets saving location for ACF json files
 *
 * @return string
 */
function acf_save_json_location() : string {
	return get_template_directory() . '/acf-json';
}

/**
 * Sets loading location for ACF json files
 *
 * @param array $paths
 * @return array
 */
function acf_load_json_location( array $paths ) : array {
	$paths[] = get_template_directory() . '/acf-json';

	return $paths;
}

