<?php
/**
 * DMR theme functions and definitions
 *
 * @package DMR
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup
 */
function dmr_setup() {
	// Add theme support for various features
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	
	// Register navigation menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'dmrpsychology' ),
		)
	);
}
add_action( 'after_setup_theme', 'dmr_setup' );

/**
 * Fallback menu if no menu is assigned
 */
function dmr_fallback_menu() {
	echo '<ul id="primary-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">About</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/offerings' ) ) . '">Offerings</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">Blog</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

/**
 * Footer fallback menu if no menu is assigned
 */
function dmr_footer_fallback_menu() {
	echo '<ul id="footer-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">About</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}

/**
 * Enqueue scripts and styles
 */
function dmr_enqueue_scripts() {
	// Enqueue Google Fonts - Poppins
	wp_enqueue_style( 'dmr-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );
	
	// Enqueue styles
	wp_enqueue_style( 'dmr-style', get_template_directory_uri() . '/assets/css/style.css', array( 'dmr-google-fonts' ), '1.0.0' );
	
	// Enqueue scripts
	wp_enqueue_script( 'dmr-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'dmr_enqueue_scripts' );
