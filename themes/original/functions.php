<?php
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'bathe', get_theme_file_uri( 'languages' ) );

	// add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'bathe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 50,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bathe' ),
	) );

	/**
	 * Remove unnecessary codes.
	 *
	 */
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	remove_action( 'wp_head', 'feed_links', 2  );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	/**
	 * Disable REST API.
	 */
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
	remove_action( 'template_redirect', 'rest_output_link_header', 11 );
	add_filter( 'rest_enabled', '__return_false' );
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'bathe_content_width', 960 );
}, 0 );

/**
 * Register widget area.
 */
add_action( 'widgets_init', function() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'original' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
} );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'wp-main', get_theme_file_uri( 'assets/css/main.css' ) );
	wp_enqueue_style( 'wp-tmp', get_theme_file_uri( 'assets/css/tmp.css' ) );
	wp_enqueue_script( 'wp-jquery', get_theme_file_uri( 'assets/js/lib/jquery3.5.1.min.js' ), array(), null, true );
	wp_enqueue_script( 'wp-main', get_theme_file_uri( 'assets/js/bundle.js' ), array(), null, true );
	wp_enqueue_script( 'wp-tmp', get_theme_file_uri( 'assets/js/tmp.js' ), array(), null, true );

    wp_deregister_script('wp-embed');
    wp_deregister_script('comment-reply');
} );
