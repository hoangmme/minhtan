<?php
/**
 * IHC UAE Clone functions and definitions
 */

if ( ! function_exists( 'ihcu_setup' ) ) :
	function ihcu_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register menus
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ihcu' ),
				'footer' => esc_html__( 'Footer Menu', 'ihcu' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments
		// to output valid HTML5.
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
	}
endif;
add_action( 'after_setup_theme', 'ihcu_setup' );

/**
 * Enqueue scripts and styles.
 */
function ihcu_scripts() {
	// Google Fonts (Cairo)
	wp_enqueue_style( 'ihcu-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&display=swap', array(), null );
	
	// Main Style
	wp_enqueue_style( 'ihcu-style', get_stylesheet_uri(), array(), '1.0.0' );

	// wp_enqueue_script( 'ihcu-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ihcu_scripts' );
