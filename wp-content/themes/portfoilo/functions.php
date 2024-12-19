<?php

/**
 * Portfoilo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfoilo
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function portfoilo_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Portfoilo, use a find and replace
		* to change 'portfoilo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('portfoilo', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'portfoilo'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'portfoilo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'portfoilo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfoilo_content_width()
{
	$GLOBALS['content_width'] = apply_filters('portfoilo_content_width', 640);
}
add_action('after_setup_theme', 'portfoilo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfoilo_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'portfoilo'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'portfoilo'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'portfoilo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function portfoilo_scripts()
{
	wp_enqueue_style('portfoilo-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('portfoilo-style', 'rtl', 'replace');

	wp_enqueue_script('portfoilo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'portfoilo_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_enqueue_styles_and_scripts()
{
	// Enqueue Styles
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css');
	wp_enqueue_style('glightbox-min', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
	wp_enqueue_style('swiper-bundle-min', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

	// Enqueue Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true);
	wp_enqueue_script('typed-umd', get_template_directory_uri() . '/assets/vendor/typed.js/typed.umd.js', array(), null, true);
	wp_enqueue_script('purecounter-vanilla', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
	wp_enqueue_script('noframework-waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), null, true);
	wp_enqueue_script('glightbox-min', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
	wp_enqueue_script('imagesloaded-pkgd-min', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true);
	wp_enqueue_script('isotope-pkgd-min', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
	wp_enqueue_script('swiper-bundle-min', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles_and_scripts');

add_filter('show_admin_bar', '__return_false');

function add_custom_body_class($classes)
{
	if (is_front_page()) {
		$classes[] = 'index-page';
	}
	return $classes;
}
add_filter('body_class', 'add_custom_body_class');
