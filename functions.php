<?php

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