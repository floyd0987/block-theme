<?php
/**
 * Setup theme
 *
 * @package BlockTheme
 */

namespace BlockTheme\Setup;

/**
 * Setup theme
 */
function theme_setup() {
	/**
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on 'block-theme', use a find and replace
	* to change 'block-theme' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'block-theme', get_template_directory() . '/languages' );

	/**
	 * Remove support for the core block pattern library.
	 *
	 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#disabling-the-default-block-patterns
	 */
	remove_theme_support( 'core-block-patterns' );


	register_nav_menus(
		[
			'menu' => esc_html__('Menu Primario', 'block-theme'),
			'footer'   => esc_html__('Menu Footer', 'block-theme'),
		]
	);


}
add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );

/**
 * Custom login logo
 */
function custom_login_logo() {

	$colors    = wp_get_global_styles( array( 'color' ) );
	$variables = wp_get_global_stylesheet( array( 'variables' ) );
	?>

	<style type="text/css">
		<?php echo esc_html( $variables ); ?>
		body.login {
			background-color: <?php echo esc_attr( $colors['background'] ); ?>;
			color: <?php echo esc_attr( $colors['text'] ); ?>;
		}

		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );

		// We have a logo. Logo is go.
		if ( $custom_logo_id ) :
			$image = wp_get_attachment_image_src( $custom_logo_id, 'medium' );
			?>
			#login h1 a, .login h1 a {
				background-image: url(<?php echo esc_attr( $image[0] ); ?>);
				height:<?php echo esc_attr( $image[2] ); ?>px;
				width:<?php echo esc_attr( $image[1] ); ?>px;
				max-width: 100%;
				background-size: <?php echo esc_attr( $image[1] ); ?>px <?php echo esc_attr( $image[2] ); ?>px;
				background-repeat: no-repeat;
				padding-bottom: 30px;
			}
		<?php endif; ?>

	</style>
	<?php
}
add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\custom_login_logo' );


/**
 * Replace login logo link to homepage
 */
function custom_login_link() {
	return home_url();
}
add_filter( 'login_headerurl', __NAMESPACE__ . '\custom_login_link' );





add_filter( 'styles_inline_size_limit', '__return_zero' );







// Add custom menu for wp_block post type
function add_wp_block_menu() {
    // Check if the function exists to avoid potential conflicts
    if (function_exists('add_menu_page')) {
        add_menu_page(
            'WP Blocks',                  // Page title
            'WP Blocks',                  // Menu title
            'manage_options',             // Capability required to access
            'edit.php?post_type=wp_block', // The URL for the custom post type
            '',                           // Function to display the page content (we can leave it empty)
            'dashicons-block-default',    // Dashicon for the menu item (you can change it)
            20                            // Position of the menu item
        );
    }
}
// Hook the function to the admin_menu action
add_action('admin_menu', __NAMESPACE__ . '\add_wp_block_menu');
