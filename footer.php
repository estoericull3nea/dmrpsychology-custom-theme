<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<div class="footer-content">
			<!-- Footer Branding -->
			<div class="footer-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
					<img src="<?php echo esc_url( get_site_url() . '/wp-content/uploads/2026/02/DMR_logo.webp' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo-image">
				</a>
				<p class="footer-tagline">DMR Psychological Services is committed to fostering mental health and emotional well-being through compassionate, client-centered care.</p>
			</div>

			<!-- Footer Navigation -->
			<div class="footer-navigation">
				<h3 class="footer-widget-title">Quick Links</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'footer-menu',
						'container'      => false,
						'fallback_cb'    => 'dmr_footer_fallback_menu',
					)
				);
				?>
			</div>

			<!-- Footer Services -->
			<div class="footer-services">
				<h3 class="footer-widget-title">Our Services</h3>
				<ul class="footer-services-list">
					<li><a href="#">Psychological Assessment</a></li>
					<li><a href="#">Counseling and Psychotherapy</a></li>
					<li><a href="#">Employee Training & Wellness Program</a></li>
				</ul>
			</div>

			<!-- Footer Mailing List -->
			<div class="footer-mailing-list">
				<h3 class="footer-widget-title">Mailing List</h3>
				<p class="mailing-list-text">Subscribe to our mailing list.</p>
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSfdTXoG1ubLdZJDlfEzNgcwEQwP0j_Op9L2HEwPevNUFAihiw/viewform" class="mailing-list-link" target="_blank" rel="noopener noreferrer">
					Link here.
				</a>
				<div class="mailing-list-qr">
					<img src="<?php echo esc_url( get_site_url() . '/wp-content/uploads/2026/02/DMR-Mailing-List-QR-code.webp' ); ?>" alt="DMR Mailing List QR Code" class="qr-code-image">
				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="footer-separator"></div>
			<div class="footer-copyright">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
				<p class="footer-privacy">
					<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
				</p>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<!-- Self Check Popup Modal -->
<div class="self-check-modal" id="self-check-modal">
	<div class="self-check-modal-overlay"></div>
	<div class="self-check-modal-content">
		<div class="self-check-modal-header">
			<h2 class="self-check-modal-title">Take Self Check</h2>
			<button class="self-check-modal-close" id="self-check-close" aria-label="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
		</div>
		<div class="self-check-modal-body">
			<div class="self-check-modal-intro">
				<p>Take a moment to assess your current stress levels and mental well-being.</p>
			</div>
			<div class="self-check-modal-actions">
				<button class="self-check-take-now-btn" id="self-check-take-now">Take Now</button>
				<button class="self-check-close-btn" id="self-check-close-btn">Skip</button>
			</div>
			<div class="self-check-form-container" id="self-check-form-container" style="display: none;">
				<?php echo do_shortcode('[dmr_self_check]'); ?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>