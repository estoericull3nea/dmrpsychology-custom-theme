<section class="hero-section">
	<div class="hero-container">
		<div class="hero-content">
			<h1 class="hero-headline">
				<span class="headline-line">We Will Write a</span>
				<span class="headline-line">Headline</span>
				<span class="headline-line">Highlighting Your</span>
				<span class="headline-line">Business</span>
			</h1>
			<p class="hero-description">
				We will write a persuasive introduction for you or your company. This can be about your products, offerings, or simply why you exist.
			</p>
			<div class="hero-cta">
				<a href="#contact" class="cta-button">Call To Action</a>
			</div>
		</div>
		<div class="hero-image">
			<?php
			// You can replace this with a featured image or custom field
			$hero_image = get_theme_mod( 'hero_image' );
			if ( $hero_image ) :
				?>
				<img src="<?php echo esc_url( $hero_image ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Hero Image">
			<?php else : ?>
				<div class="hero-image-placeholder">
					<!-- Placeholder for hero image - replace with actual image -->
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
