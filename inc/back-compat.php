<?php
/**
 * petfirst back compat functionality
 *
 * Prevents petfirst from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package WordPress
 * @subpackage petfirst
 * @since petfirst 1.0
 */

/**
 * Prevent switching to petfirst on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since petfirst 1.0
 */
function petfirst_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'petfirst_upgrade_notice' );
}
add_action( 'after_switch_theme', 'petfirst_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * petfirst on WordPress versions prior to 4.4.
 *
 * @since petfirst 1.0
 *
 * @global string $wp_version WordPress version.
 */
function petfirst_upgrade_notice() {
	$message = sprintf( __( 'petfirst requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'petfirst' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since petfirst 1.0
 *
 * @global string $wp_version WordPress version.
 */
function petfirst_customize() {
	wp_die( sprintf( __( 'petfirst requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'petfirst' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'petfirst_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since petfirst 1.0
 *
 * @global string $wp_version WordPress version.
 */
function petfirst_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'petfirst requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'petfirst' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'petfirst_preview' );
