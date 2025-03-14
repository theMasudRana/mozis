<?php
/**
 * Mozis functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mozis
 * @since Mozis 1.0
 */


// Enqueues style.css on the front.
if ( ! function_exists( 'mozis_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Mozis 1.0
	 *
	 * @return void
	 */
	function mozis_enqueue_styles() {
		wp_enqueue_style(
			'mozis-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'mozis_enqueue_styles' );

// Register block pattern category.
if ( ! function_exists( 'mozis_block_pattern_category' ) ) :

	/**
	 * Register block pattern category.
	 *
	 * @since Mozis 1.0
	 *
	 * @return void
	 */
	function mozis_block_pattern_category() {
		register_block_pattern_category( 'mozis', array(
			'label' => __( 'Mozis', 'mozis' )
		) );
	}
endif;
add_action( 'init', 'mozis_block_pattern_category' );