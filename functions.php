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
	wp_enqueue_style( 'ihcu-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );
	
	// Swiper CSS
	wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );

	// Main Style
	wp_enqueue_style( 'ihcu-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Swiper JS
	wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );

	// Custom JS (inline for now, or create main.js if needed)
}
add_action( 'wp_enqueue_scripts', 'ihcu_scripts' );

/**
 * Add Tailwind classes to menu anchors
 */
function ihcu_add_menu_link_class( $atts, $item, $args ) {
    if ( $args->theme_location == 'menu-1' ) {
        $atts['class'] = 'hover:text-labelGray transition-colors';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'ihcu_add_menu_link_class', 10, 3 );
