<?php
/**
 * petfirst Customizer functionality
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */

/**
 * Sets up the WordPress core custom header and custom background features.
 *
 * @since petfirst 1.0
 *
 * @see petfirst_header_style()
 */
function petfirst_custom_header_and_background() {

	/**
	 * Filter the arguments used when adding 'custom-background' support in petfirst.
	 *
	 * @since petfirst 1.0
	 *
	 * @param array $args {
	 *     An array of custom-background support arguments.
	 *
	 *     @type string $default-color Default color of the background.
	 * }
	 */
	add_theme_support( 'custom-background' );
	/**
	 * Filter the arguments used when adding 'custom-header' support in petfirst.
	 *
	 * @since petfirst 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-text-color Default color of the header text.
	 *     @type int      $width            Width in pixels of the custom header image. Default 1200.
	 *     @type int      $height           Height in pixels of the custom header image. Default 280.
	 *     @type bool     $flex-height      Whether to allow flexible-height header images. Default true.
	 *     @type callable $wp-head-callback Callback function used to style the header image and text
	 *                                      displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'petfirst_custom_header_args', array(
		'width'                  => 1200,
		'height'                 => 280,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'petfirst_header_style',
		'header-selector'        => '.site-title a',
		'header-text'            => true,
	) ) );
}
add_action( 'after_setup_theme', 'petfirst_custom_header_and_background' );

if ( ! function_exists( 'petfirst_header_style' ) ) :
/**
 * Styles the header text displayed on the site.
 *
 * Create your own petfirst_header_style() function to override in a child theme.
 *
 * @since petfirst 1.0
 *
 * @see petfirst_custom_header_and_background().
 */
function petfirst_header_style() {
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}
	// If the header text has been hidden.
	?>
	<style type="text/css" id="petfirst-header-css">
		.site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	</style>
	<?php
}
endif; // petfirst_header_style

/**
 * Adds postMessage support for site title and description for the Customizer.
 *
 * @since petfirst 1.0
 *
 * @param WP_Customize_Manager $wp_customize The Customizer object.
 */
function petfirst_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title a',
			'container_inclusive' => false,
			'render_callback' => 'petfirst_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'petfirst_customize_partial_blogdescription',
		) );
	}

}
add_action( 'customize_register', 'petfirst_customize_register', 11 );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since petfirst 1.2
 * @see petfirst_customize_register()
 *
 * @return void
 */
function petfirst_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since petfirst 1.2
 * @see petfirst_customize_register()
 *
 * @return void
 */
function petfirst_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since petfirst 1.0
 */
function petfirst_customize_preview_js() {
	wp_enqueue_script( 'petfirst-customize-preview', get_template_directory_uri() . '/assets/js/min/customize-preview-min.js', array( 'customize-preview' ), '20160816', true );
}
add_action( 'customize_preview_init', 'petfirst_customize_preview_js' );