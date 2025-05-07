<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<div class="footer-content">
			<!-- Footer Branding -->
			<div class="footer-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">DMR</a>
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

<?php wp_footer(); ?>
</body>

</html>