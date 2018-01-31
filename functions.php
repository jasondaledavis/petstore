<?php
/**
 * petfirst functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage petfirst
 * @since Twenty Sixteen 1.4
 */

// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );
//================================================================================//
// Register the themes custom functions and supporting files/directories
//================================================================================//
require get_template_directory() . '/inc/theme-function.php';
/**
 * petfirst only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
}
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

if ( ! function_exists( 'petfirst_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own petfirst_setup() function to override in a child theme.
 *
 * @since petfirst 1.0
 */
function petfirst_setup() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on petfirst, use a find and replace
    * to change 'petfirst' to the name of your theme in all the template files
    */
    load_theme_textdomain( 'petfirst' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for custom logo.
    *
    * @since petfirst 1.0
    */
    add_theme_support( 'custom-logo', array(
      'height'      => 240,
      'width'       => 240,
      'flex-height' => true,
      'flex-width' => true,
      'header-selector' => '.site-title a',
    ) );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    // add_theme_support( 'align-wide' ); // Gutenberg Support
    set_post_thumbnail_size( 1200, 9999 );
    add_image_size( 'header-image', 1200, 9999 ); // Interior Page Header Image

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'petfirst' ),
      'footernav' => __( 'Footer Menu', 'petfirst' ),
      'footernavterms' => __( 'Footer Terms Menu', 'petfirst' ),
    ) );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

  /*
  * This theme styles the visual editor to resemble the theme style,
  * specifically font, colors, icons, and column width.
  */
  add_editor_style( array( 'assets/css/editor-style.css' ) );

  // Indicate widget sidebars can use selective refresh in the Customizer.
  add_theme_support( 'customize-selective-refresh-widgets' );

}
endif; // petfirst_setup

add_action( 'after_setup_theme', 'petfirst_setup' );

/**
* Sets the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*
* @since petfirst 1.0
*/
function petfirst_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'petfirst_content_width', 840 );
}
add_action( 'after_setup_theme', 'petfirst_content_width', 0 );

/**
* Registers a widget area.
*
* @link https://developer.wordpress.org/reference/functions/register_sidebar/
*
* @since petfirst 1.0
*/
function petfirst_widgets_init() {

  register_sidebar( array(
    'name' => __('Blog Sidebar', 'petfirst' ),
    'id' => 'sidebar-blog',
    'description'   => __( 'Add widgets here to appear in your blog posts and page sidebar.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Sidebar 1', 'petfirst' ),
    'id' => 'sidebar-footer-1',
    'description'   => __( 'Add widgets here to appear in your footer sidebar column one.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Sidebar 2', 'petfirst' ),
    'id' => 'sidebar-footer-2',
    'description'   => __( 'Add widgets here to appear in your footer sidebar column two.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Sidebar 3', 'petfirst' ),
    'id' => 'sidebar-footer-3',
    'description'   => __( 'Add widgets here to appear in your footer sidebar column three.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Sidebar 4', 'petfirst' ),
    'id' => 'sidebar-footer-4',
    'description'   => __( 'Add widgets here to appear in your footer sidebar column four.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Sidebar 5', 'petfirst' ),
    'id' => 'sidebar-footer-5',
    'description'   => __( 'Add widgets here to appear in your footer sidebar column five.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer CTA', 'petfirst' ),
    'id' => 'sidebar-footer-cta',
    'description'   => __( 'This is for your CTA in the footer centered in the row above footer nav.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Footer Terms Widget', 'petfirst' ),
    'id' => 'sidebar-footer-terms',
    'description'   => __( 'This is for your Terms in the footer centered in the row below footer nav.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Top Sidebar Left', 'petfirst' ),
    'id' => 'topbar-left',
    'description'   => __( 'Add widgets here to appear in above your header in a sidebar on the left.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => __('Top Sidebar Right', 'petfirst' ),
    'id' => 'topbar-right',
    'description'   => __( 'Add widgets here to appear in above your header in a sidebar on the right.', 'petfirst' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

}

add_action( 'widgets_init', 'petfirst_widgets_init' );

if ( ! function_exists( 'petfirst_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own petfirst_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function petfirst_fonts_url() {
  $fonts_url = '';
  $fonts     = array();
  $subsets   = 'latin,latin-ext';

  /* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'petfirst' ) ) {
    $fonts[] = 'Open Sans:400,700,900,400italic,700italic,900italic';
  }

  /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Fira Sans font: on or off', 'petfirst' ) ) {
    $fonts[] = 'Fira Sans:300,400,500,600,700,800,900';
  }

  /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'petfirst' ) ) {
    $fonts[] = 'Merriweather:300,400,500,600,700';
  }

  if ( $fonts ) {
    $fonts_url = add_query_arg( array(
      'family' => urlencode( implode( '|', $fonts ) ),
      'subset' => urlencode( $subsets ),
    ), '//fonts.googleapis.com/css' );
  }

  return $fonts_url;
}
endif;

/**
* Handles JavaScript detection.
*
* Adds a `js` class to the root `<html>` element when JavaScript is detected.
*
* @since petfirst 1.0
*/
function petfirst_javascript_detection() {
echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'petfirst_javascript_detection', 0 );

/**
* Enqueues scripts and styles.
*
* @since petfirst 1.0
*/

function petfirst_scripts() {

  // Add Genericons, used in the main stylesheet.
  wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

  // Theme stylesheet.
  wp_enqueue_style( 'petfirst-style', get_stylesheet_uri() );

  // Gutenberg stylesheet.
  wp_enqueue_style( 'petfirst-main', get_template_directory_uri() . '/main.css');

  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'petfirst-fonts', petfirst_fonts_url(), array(), null );

  // Load the Internet Explorer specific stylesheet.
  wp_enqueue_style( 'petfirst-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'petfirst-style' ), '20160816' );
  wp_style_add_data( 'petfirst-ie', 'conditional', 'lt IE 10' );

  // Load the Internet Explorer 8 specific stylesheet.
  wp_enqueue_style( 'petfirst-ie8', get_template_directory_uri() . '/assets/css/ie8.css', array( 'petfirst-style' ), '20160816' );
  wp_style_add_data( 'petfirst-ie8', 'conditional', 'lt IE 9' );
  
  // Load the Internet Explorer 7 specific stylesheet.
  wp_enqueue_style( 'petfirst-ie7', get_template_directory_uri() . '/assets/css/ie7.css', array( 'petfirst-style' ), '20160816' );
  wp_style_add_data( 'petfirst-ie7', 'conditional', 'lt IE 8' );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  if ( is_singular() && wp_attachment_is_image() ) {
    wp_enqueue_script( 'petfirst-keyboard-image-navigation-min', get_template_directory_uri() . '/assets/js/min/keyboard-image-navigation.min.js', array( 'jquery' ), '20160816' );
  }
  
  // Enqueue Scripts
  wp_enqueue_script( 'petfirst-script', get_template_directory_uri() . '/assets/js/min/custom-functions.min.js', array( 'jquery' ), '20160816', true );

  // Add FortAwesome
  wp_enqueue_script( 'fortawesome', '//use.fortawesome.com/a789a9d9.js', '20160816', true);
  

  wp_localize_script( 'petfirst-script', 'screenReaderText', array(
    'expand'   => __( 'expand child menu', 'petfirst' ),
    'collapse' => __( 'collapse child menu', 'petfirst' ),
  ) );

}

add_action( 'wp_enqueue_scripts', 'petfirst_scripts' );

/**
* Adds custom classes to the array of body classes.
*
* @since petfirst 1.0
*
* @param array $classes Classes for the body element.
* @return array (Maybe) filtered body classes.
*/
function petfirst_body_classes( $classes ) {
  // Adds a class of custom-background-image to sites with a custom background image.
  if ( get_background_image() ) {

    $classes[] = 'custom-background-image';

  }

  // Adds a class of group-blog to sites with more than 1 published author.
  if ( is_multi_author() ) {

    $classes[] = 'group-blog';

  }

  // Adds a class of no-sidebar to sites without active sidebar.
  if ( ! is_active_sidebar( 'sidebar-blog', 'sidebar-page', 'sidebar-footer-1', 'sidebar-footer-2', 'sidebar-footer-3', 'sidebar-footer-4', 'sidebar-footer-5', 'sidebar-footer-terms', 'sidebar-footer-cta', 'topbar-left', 'topbar-right' ) ) {
    
    $classes[] = 'no-sidebar';
  
  }

  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    
    $classes[] = 'hfeed';
  
  }

  return $classes;

}

add_filter( 'body_class', 'petfirst_body_classes' );

/**
* Converts a HEX value to RGB.
*
* @since petfirst 1.0
*
* @param string $color The original color, in 3- or 6-digit hexadecimal form.
* @return array Array containing RGB (red, green, and blue) values for the given
*               HEX code, empty array otherwise.
*/
function petfirst_hex2rgb( $color ) {
$color = trim( $color, '#' );

  if ( strlen( $color ) === 3 ) {
    $r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
    $g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
    $b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
    } else if ( strlen( $color ) === 6 ) {
    $r = hexdec( substr( $color, 0, 2 ) );
    $g = hexdec( substr( $color, 2, 2 ) );
    $b = hexdec( substr( $color, 4, 2 ) );

  } else {

  return array();

  }

  return array( 'red' => $r, 'green' => $g, 'blue' => $b );

}

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
  $width = $size[0];

  if ( 840 <= $width ) {
    $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
  }

  if ( 'page' === get_post_type() ) {
    if ( 840 > $width ) {
      $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    }
  } else {
    if ( 840 > $width && 600 <= $width ) {
      $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
    } elseif ( 600 > $width ) {
      $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
    }
  }

  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
  if ( 'post-thumbnail' === $size ) {
    if ( is_active_sidebar( 'sidebar-1' ) ) {
      $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
    } else {
      $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
    }
  }
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
* Modifies tag cloud widget arguments to have all tags in the widget same font size.
*
* @since petfirst 1.0
*
* @param array $args Arguments for tag cloud widget.
* @return array A new modified arguments.
*/
function petfirst_widget_tag_cloud_args( $args ) {

  $args['largest']  = 1;
  $args['smallest'] = 1;
  $args['unit']     = 'em';
  $args['format']   = 'list';
  
  return $args;

}

add_filter( 'widget_tag_cloud_args', 'petfirst_widget_tag_cloud_args' );