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
	
	// Pass settings to JavaScript
	$dmr_settings = get_option( 'dmr_settings', array(
		'auto_show_popup' => false,
		'popup_delay' => 1
	) );
	
	wp_localize_script( 'dmr-main', 'dmrSettings', array(
		'autoShowPopup' => $dmr_settings['auto_show_popup'] ?? false,
		'popupDelay' => ( $dmr_settings['popup_delay'] ?? 1 ) * 1000, // Convert to milliseconds
		'isHome' => is_front_page() || is_home()
	) );
}
add_action( 'wp_enqueue_scripts', 'dmr_enqueue_scripts' );

/**
 * Register Customizer settings for Global Color Palette
 */
function dmr_customize_register( $wp_customize ) {
	// Add Global Color section
	$wp_customize->add_section( 'dmr_global_colors', array(
		'title'    => esc_html__( 'Global Color', 'dmrpsychology' ),
		'priority' => 30,
	) );

	// Primary Green Color
	$wp_customize->add_setting( 'dmr_primary_color', array(
		'default'           => '#2e7d32',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dmr_primary_color', array(
		'label'    => esc_html__( 'Primary Color', 'dmrpsychology' ),
		'section'  => 'dmr_global_colors',
		'settings' => 'dmr_primary_color',
		'description' => esc_html__( 'Main theme color used for buttons, links, and accents.', 'dmrpsychology' ),
	) ) );

	// Light Green Color
	$wp_customize->add_setting( 'dmr_light_green', array(
		'default'           => '#4caf50',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dmr_light_green', array(
		'label'    => esc_html__( 'Light Green', 'dmrpsychology' ),
		'section'  => 'dmr_global_colors',
		'settings' => 'dmr_light_green',
		'description' => esc_html__( 'Used for gradients and lighter accents.', 'dmrpsychology' ),
	) ) );

	// Dark Green Color
	$wp_customize->add_setting( 'dmr_dark_green', array(
		'default'           => '#1b5e20',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dmr_dark_green', array(
		'label'    => esc_html__( 'Dark Green', 'dmrpsychology' ),
		'section'  => 'dmr_global_colors',
		'settings' => 'dmr_dark_green',
		'description' => esc_html__( 'Used for darker gradients and hover states.', 'dmrpsychology' ),
	) ) );

	// Light Background Color
	$wp_customize->add_setting( 'dmr_light_bg', array(
		'default'           => '#e8f5e9',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dmr_light_bg', array(
		'label'    => esc_html__( 'Light Background', 'dmrpsychology' ),
		'section'  => 'dmr_global_colors',
		'settings' => 'dmr_light_bg',
		'description' => esc_html__( 'Light background color for sections.', 'dmrpsychology' ),
	) ) );
}
add_action( 'customize_register', 'dmr_customize_register' );

/**
 * Output CSS variables for Global Color Palette
 */
function dmr_output_color_css() {
	$primary_color = get_theme_mod( 'dmr_primary_color', '#2e7d32' );
	$light_green = get_theme_mod( 'dmr_light_green', '#4caf50' );
	$dark_green = get_theme_mod( 'dmr_dark_green', '#1b5e20' );
	$light_bg = get_theme_mod( 'dmr_light_bg', '#e8f5e9' );
	?>
	<style type="text/css" id="dmr-color-palette">
		:root {
			--dmr-primary-color: <?php echo esc_attr( $primary_color ); ?>;
			--dmr-light-green: <?php echo esc_attr( $light_green ); ?>;
			--dmr-dark-green: <?php echo esc_attr( $dark_green ); ?>;
			--dmr-light-bg: <?php echo esc_attr( $light_bg ); ?>;
		}
	</style>
	<?php
}
add_action( 'wp_head', 'dmr_output_color_css', 99 );
