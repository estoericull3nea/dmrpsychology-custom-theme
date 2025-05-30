<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo">
					<img src="<?php echo esc_url( get_site_url() . '/wp-content/uploads/2026/02/DMR_logo.webp' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo-image">
				</a>
			</div>
			
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => 'dmr_fallback_menu',
					)
				);
				?>
			</nav>
			
			<div class="header-cta">
				<a href="#" class="take-self-check-link" id="take-self-check-link" style="text-decoration: underline; margin-right: 15px; color: inherit; display: none;">Take Self Check</a>
				<a href="https://forms.gle/qm4JR9u9r2M7mxf18" class="cta-button" target="_blank" rel="noopener noreferrer">Book Now</a>
			</div>
			
			<button class="mobile-menu-toggle" aria-label="Toggle mobile menu" aria-expanded="false">
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
				<span class="hamburger-line"></span>
			</button>
		</div>
		
		<!-- Mobile Menu Overlay -->
		<div class="mobile-menu-overlay"></div>
		
		<!-- Mobile Menu Panel -->
		<div class="mobile-menu-panel">
			<div class="mobile-menu-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="mobile-menu-logo">
					<img src="<?php echo esc_url( get_site_url() . '/wp-content/uploads/2026/02/DMR_logo.webp' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo-image">
				</a>
				<button class="mobile-menu-close" aria-label="Close mobile menu">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
			</div>
			<nav class="mobile-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'mobile-menu',
						'container'      => false,
						'fallback_cb'    => 'dmr_fallback_menu',
					)
				);
				?>
			</nav>
			<div class="mobile-menu-cta">
				<a href="#" class="take-self-check-link" id="take-self-check-link-mobile" style="text-decoration: underline; margin-right: 15px; color: inherit; display: none; margin-bottom: 10px;">Take Self Check</a>
				<a href="https://forms.gle/qm4JR9u9r2M7mxf18" class="cta-button" target="_blank" rel="noopener noreferrer">Book Now</a>
			</div>
		</div>
	</header>
