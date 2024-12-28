<?php

function register_custom_icons() {
	wp_enqueue_script(
		'example-register-custom-icons',
		get_theme_file_uri( '/inc/custom-icons/register-custom-icons.js' ),
		array( 'wp-i18n', 'wp-hooks', 'wp-dom' ),
		wp_get_theme()->get( 'Version' ),
		true // Very important, otherwise the filter is called too early.
	);
}
add_action( 'enqueue_block_editor_assets', 'register_custom_icons' );
