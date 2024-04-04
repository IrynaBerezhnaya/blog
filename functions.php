<?php
/**
 * Enqueue all styles and scripts.
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style}
 *
 * @package Twenty Twenty-Four Child
 */

if ( ! function_exists( 'twentytwentyfour_scripts' ) ) :
	/**
	 * twentytwentyfourchild_scripts
	 *
	 * @return void
	 */
	function twentytwentyfour_scripts() {
		wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css');
	}

	add_action( 'wp_enqueue_scripts', 'twentytwentyfour_scripts' );
endif;

/**
 * Write log
 */
if ( ! function_exists( 'write_log' ) ) {
	function write_log( $variable, $text_before = '' ) {

		if ( ini_get( 'log_errors' ) === 'On' ) {
			error_log( '------' . $text_before . '------' );
			error_log( gettype( $variable ) );
			if ( is_array( $variable ) || is_object( $variable ) ) {
				error_log( print_r( $variable, true ) );
			} else {
				error_log( $variable );
			}
		}
	}
}
