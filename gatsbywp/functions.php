<?php
if ( ! function_exists( 'gatsbywp_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function gatsbywp_theme_setup() {

		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'gatsbywp_theme_setup' );

function gatsbywp_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'gatsbywp_excerpt_more');

/*
* We need to set ACF fields that are empty to null
* This prevents GraphQl from breaking for posts without values in fields
*/
if (!function_exists('acf_nullify_empty')) {
    function acf_nullify_empty($value, $post_id, $field) {
        if (empty($value)) {
            return null;
        }
        return $value;
    }
}
add_filter('acf/format_value', 'acf_nullify_empty', 100, 3);

/* Include Custom Post Types */
include('inc/post_types/recipes.php');