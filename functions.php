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
	// Enqueue styles (Google Fonts are loaded separately via dmr_load_google_fonts)
	wp_enqueue_style( 'dmr-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	
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

	// Add Typography section
	$wp_customize->add_section( 'dmr_typography', array(
		'title'    => esc_html__( 'Typography', 'dmrpsychology' ),
		'priority' => 35,
	) );

	// Body Font Family
	$wp_customize->add_setting( 'dmr_body_font', array(
		'default'           => 'Poppins',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_body_font', array(
		'label'       => esc_html__( 'Body Font Family', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'select',
		'choices'     => array(
			'Poppins' => 'Poppins',
			'Roboto' => 'Roboto',
			'Open Sans' => 'Open Sans',
			'Lato' => 'Lato',
			'Montserrat' => 'Montserrat',
			'Raleway' => 'Raleway',
			'Inter' => 'Inter',
			'Nunito' => 'Nunito',
			'Source Sans Pro' => 'Source Sans Pro',
			'Playfair Display' => 'Playfair Display',
		),
		'description' => esc_html__( 'Font family for body text and paragraphs.', 'dmrpsychology' ),
	) );

	// Heading Font Family
	$wp_customize->add_setting( 'dmr_heading_font', array(
		'default'           => 'Poppins',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_heading_font', array(
		'label'       => esc_html__( 'Heading Font Family', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'select',
		'choices'     => array(
			'Poppins' => 'Poppins',
			'Roboto' => 'Roboto',
			'Open Sans' => 'Open Sans',
			'Lato' => 'Lato',
			'Montserrat' => 'Montserrat',
			'Raleway' => 'Raleway',
			'Inter' => 'Inter',
			'Nunito' => 'Nunito',
			'Source Sans Pro' => 'Source Sans Pro',
			'Playfair Display' => 'Playfair Display',
		),
		'description' => esc_html__( 'Font family for headings (H1-H6).', 'dmrpsychology' ),
	) );

	// Body Font Size
	$wp_customize->add_setting( 'dmr_body_font_size', array(
		'default'           => 16,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_body_font_size', array(
		'label'       => esc_html__( 'Body Font Size (px)', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 12,
			'max'  => 24,
			'step' => 1,
		),
		'description' => esc_html__( 'Base font size for body text (12-24px).', 'dmrpsychology' ),
	) );

	// Body Line Height
	$wp_customize->add_setting( 'dmr_body_line_height', array(
		'default'           => 1.6,
		'sanitize_callback' => 'floatval',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_body_line_height', array(
		'label'       => esc_html__( 'Body Line Height', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1.0,
			'max'  => 2.5,
			'step' => 0.1,
		),
		'description' => esc_html__( 'Line height for body text (1.0-2.5).', 'dmrpsychology' ),
	) );

	// H1 Font Size
	$wp_customize->add_setting( 'dmr_h1_font_size', array(
		'default'           => 4.5,
		'sanitize_callback' => 'floatval',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_h1_font_size', array(
		'label'       => esc_html__( 'H1 Font Size (rem)', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 2.0,
			'max'  => 6.0,
			'step' => 0.1,
		),
		'description' => esc_html__( 'Font size for H1 headings (2.0-6.0rem).', 'dmrpsychology' ),
	) );

	// H2 Font Size
	$wp_customize->add_setting( 'dmr_h2_font_size', array(
		'default'           => 2.75,
		'sanitize_callback' => 'floatval',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_h2_font_size', array(
		'label'       => esc_html__( 'H2 Font Size (rem)', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1.5,
			'max'  => 4.0,
			'step' => 0.1,
		),
		'description' => esc_html__( 'Font size for H2 headings (1.5-4.0rem).', 'dmrpsychology' ),
	) );

	// H3 Font Size
	$wp_customize->add_setting( 'dmr_h3_font_size', array(
		'default'           => 2.0,
		'sanitize_callback' => 'floatval',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_h3_font_size', array(
		'label'       => esc_html__( 'H3 Font Size (rem)', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1.25,
			'max'  => 3.0,
			'step' => 0.1,
		),
		'description' => esc_html__( 'Font size for H3 headings (1.25-3.0rem).', 'dmrpsychology' ),
	) );

	// Heading Font Weight
	$wp_customize->add_setting( 'dmr_heading_font_weight', array(
		'default'           => '800',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( 'dmr_heading_font_weight', array(
		'label'       => esc_html__( 'Heading Font Weight', 'dmrpsychology' ),
		'section'     => 'dmr_typography',
		'type'        => 'select',
		'choices'     => array(
			'300' => 'Light (300)',
			'400' => 'Regular (400)',
			'500' => 'Medium (500)',
			'600' => 'Semi Bold (600)',
			'700' => 'Bold (700)',
			'800' => 'Extra Bold (800)',
		),
		'description' => esc_html__( 'Font weight for all headings.', 'dmrpsychology' ),
	) );
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
	
	// Typography settings
	$body_font = get_theme_mod( 'dmr_body_font', 'Poppins' );
	$heading_font = get_theme_mod( 'dmr_heading_font', 'Poppins' );
	$body_font_size = get_theme_mod( 'dmr_body_font_size', 16 );
	$body_line_height = get_theme_mod( 'dmr_body_line_height', 1.6 );
	$h1_font_size = get_theme_mod( 'dmr_h1_font_size', 4.5 );
	$h2_font_size = get_theme_mod( 'dmr_h2_font_size', 2.75 );
	$h3_font_size = get_theme_mod( 'dmr_h3_font_size', 2.0 );
	$heading_font_weight = get_theme_mod( 'dmr_heading_font_weight', '800' );
	?>
	<style type="text/css" id="dmr-theme-customizations">
		:root {
			--dmr-primary-color: <?php echo esc_attr( $primary_color ); ?>;
			--dmr-light-green: <?php echo esc_attr( $light_green ); ?>;
			--dmr-dark-green: <?php echo esc_attr( $dark_green ); ?>;
			--dmr-light-bg: <?php echo esc_attr( $light_bg ); ?>;
			--dmr-body-font: '<?php echo esc_attr( $body_font ); ?>', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
			--dmr-heading-font: '<?php echo esc_attr( $heading_font ); ?>', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
			--dmr-body-font-size: <?php echo esc_attr( $body_font_size ); ?>px;
			--dmr-body-line-height: <?php echo esc_attr( $body_line_height ); ?>;
			--dmr-h1-font-size: <?php echo esc_attr( $h1_font_size ); ?>rem;
			--dmr-h2-font-size: <?php echo esc_attr( $h2_font_size ); ?>rem;
			--dmr-h3-font-size: <?php echo esc_attr( $h3_font_size ); ?>rem;
			--dmr-heading-font-weight: <?php echo esc_attr( $heading_font_weight ); ?>;
		}
		
		* {
			font-family: var(--dmr-body-font);
		}
		
		body {
			font-size: var(--dmr-body-font-size);
			line-height: var(--dmr-body-line-height);
		}
		
		h1, h2, h3, h4, h5, h6,
		.hero-headline,
		.offerings-main-headline,
		.offerings-cta-headline {
			font-family: var(--dmr-heading-font);
			font-weight: var(--dmr-heading-font-weight);
		}
		
		h1, .hero-headline {
			font-size: var(--dmr-h1-font-size);
		}
		
		h2, .offerings-main-headline {
			font-size: var(--dmr-h2-font-size);
		}
		
		h3, .offerings-cta-headline {
			font-size: var(--dmr-h3-font-size);
		}
	</style>
	<?php
}
add_action( 'wp_head', 'dmr_output_color_css', 99 );

/**
 * Load Google Fonts based on Customizer settings
 */
function dmr_load_google_fonts() {
	$body_font = get_theme_mod( 'dmr_body_font', 'Poppins' );
	$heading_font = get_theme_mod( 'dmr_heading_font', 'Poppins' );
	
	// Google Fonts mapping
	$google_fonts = array(
		'Poppins' => 'Poppins:wght@300;400;500;600;700;800',
		'Roboto' => 'Roboto:wght@300;400;500;700;900',
		'Open Sans' => 'Open+Sans:wght@300;400;600;700;800',
		'Lato' => 'Lato:wght@300;400;700;900',
		'Montserrat' => 'Montserrat:wght@300;400;500;600;700;800',
		'Raleway' => 'Raleway:wght@300;400;500;600;700;800',
		'Inter' => 'Inter:wght@300;400;500;600;700;800',
		'Nunito' => 'Nunito:wght@300;400;600;700;800',
		'Source Sans Pro' => 'Source+Sans+Pro:wght@300;400;600;700;900',
		'Playfair Display' => 'Playfair+Display:wght@400;700;900',
	);
	
	$fonts_to_load = array();
	
	if ( isset( $google_fonts[ $body_font ] ) ) {
		$fonts_to_load[] = $google_fonts[ $body_font ];
	}
	
	if ( isset( $google_fonts[ $heading_font ] ) && $heading_font !== $body_font ) {
		$fonts_to_load[] = $google_fonts[ $heading_font ];
	}
	
	if ( ! empty( $fonts_to_load ) ) {
		$font_url = 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', $fonts_to_load ) . '&display=swap';
		wp_enqueue_style( 'dmr-custom-google-fonts', $font_url, array(), null );
	}
}
add_action( 'wp_enqueue_scripts', 'dmr_load_google_fonts', 5 );
