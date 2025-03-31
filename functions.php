<?php

/**
 * Katppy Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Katppy_Theme
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
function katppy_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Katppy Theme, use a find and replace
		* to change 'katppy-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('katppy-theme', get_template_directory() . '/languages');

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
			'menu-1' => esc_html__('Primary', 'katppy-theme'),
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
			'katppy_theme_custom_background_args',
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

	// Add WooCommerce support
	add_theme_support('woocommerce');

	// Add block support
	add_theme_support('block-styles');
}
add_action('after_setup_theme', 'katppy_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function katppy_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('katppy_theme_content_width', 640);
}
add_action('after_setup_theme', 'katppy_theme_content_width', 0);


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function katppy_theme_widgets_init()
{
	// Header: Register Announcement Bar Widget Area
	register_sidebar(
		array(
			'name'          => esc_html__('Header: Announcement Bar', 'katppy-theme'),
			'id'            => 'announcement',
			'description'   => esc_html__('Add a announcement here.', 'katppy-theme'),
			'before_widget' => '<div id="%1$s" class="announcement-bar-container widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Header: Register Search Bar Widget Area
	register_sidebar(
		array(
			'name'          => esc_html__('Header: Search Bar', 'katppy-theme'),
			'id'            => 'search-bar',
			'description'   => esc_html__('Add a search bar widget here.', 'katppy-theme'),
			'before_widget' => '<div id="%1$s" class="search-bar-container widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	// Header: Cart Widget Area
	register_sidebar(
		array(
			'name'          => esc_html__('Header: Cart', 'katppy-theme'),
			'id'            => 'mini-cart',
			'description'   => esc_html__('Add a cart widget here.', 'katppy-theme'),
			'before_widget' => '<div id="%1$s" class="mini-cart-container widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Header: Currency Switch Widget Area
	register_sidebar(
		array(
			'name'          => esc_html__('Header: Currency Switch', 'katppy-theme'),
			'id'            => 'currency-switch',
			'description'   => esc_html__('Add a Currency Switch widget here.', 'katppy-theme'),
			'before_widget' => '<div id="%1$s" class="currency-switch-container widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Home  Page: Customer testimonials 
	register_sidebar(
		array(
			'name'          => esc_html__('Customer Testimonials', 'katppy-theme'),
			'id'            => 'customer-testimonials',
			'description'   => esc_html__('Add a customer testimonials widget here.', 'katppy-theme'),
			'before_widget' => '<div id="%1$s" class="customer-testimonials-container widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Footer: Product links
	register_sidebar(
		array(
			'name'          => esc_html__('Footer: Product Links', 'katppy'),
			'id'            => 'product-links',
			'description'   => esc_html__('Add Product Links here.', 'katppy'),
			'before_widget' => '<div id="%1$s" class="product-links widget %2$s product-links">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Footer: Site Links
	register_sidebar(
		array(
			'name'          => esc_html__('Footer: Site Links', 'katppy'),
			'id'            => 'site-links',
			'description'   => esc_html__('Add site links here.', 'katppy'),
			'before_widget' => '<div id="%1$s" class="site-links widget %2$s site-links">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Footer: Social Media links
	register_sidebar(
		array(
			'name'          => esc_html__('Footer: Social Media Links', 'katppy'),
			'id'            => 'social-media-links',
			'description'   => esc_html__('Add Social Media links here.', 'katppy'),
			'before_widget' => '<div id="%1$s" class="social-media-links widget %2$s social-media-links">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Shop page filter
    // Product Filter Desktop
    register_sidebar(
        array(
            'name'          => esc_html__('Product Filter', 'katppy'),
            'id'            => 'product-filter',
            'description'   => esc_html__('Add announcement here.', 'katppy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s product-filter">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
	
}
add_action('widgets_init', 'katppy_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function katppy_theme_scripts()
{
	wp_enqueue_style('katppy-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('katppy-theme-style', 'rtl', 'replace');

	wp_enqueue_script('katppy-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'katppy_theme_scripts');


/**
 * Remove default WooCommerce CSS on the product detail page.
 */
function remove_woocommerce_styles()
{
	if (is_product()) {
		wp_enqueue_style('woocommerce-general'); // Main WooCommerce CSS
		wp_dequeue_style('woocommerce-layout'); // Layout-related styles
		wp_dequeue_style('woocommerce-smallscreen'); // Small screen styles
	}
}
add_action('wp_enqueue_scripts', 'remove_woocommerce_styles', 99);



/**
 * Remove Add to cart button on WooCommerce product card components.
 */
function remove_add_to_cart_buttons()
{
	remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
}
add_action('init', 'remove_add_to_cart_buttons');


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
