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

			<!-- Footer Contact -->
			<div class="footer-contact">
				<h3 class="footer-widget-title">Get In Touch</h3>
				<div class="footer-cta">
					<a href="https://forms.gle/qm4JR9u9r2M7mxf18" class="cta-button footer-cta-button" target="_blank" rel="noopener noreferrer">
						<span>Book Now</span>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</div>
				<div class="footer-social">
					<a href="https://www.facebook.com/DmrPsychologicalServices" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17V10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
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