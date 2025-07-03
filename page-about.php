<?php
/**
 * Template Name: About Page
 * The template for displaying the About page
 *
 * @package DMR
 */

get_header();
?>

<main id="main" class="site-main">
    <section class="about-hero-section">
        <div class="about-hero-container">
            <div class="about-hero-header">
                <h1 class="about-hero-title">
                    <span class="about-hero-title-line-1">About</span>
                    <span class="about-hero-title-line-2">DMR Psychological Services</span>
                </h1>
                <p class="about-hero-description">All-in-one psychological services to support, guide, and empower —
                    with compassion and professional expertise.</p>
                <a href="https://forms.gle/qm4JR9u9r2M7mxf18" class="about-hero-cta-button" target="_blank"
                    rel="noopener noreferrer">
                    <span>Get Started for Free</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <div class="about-hero-visual">
                <div class="about-hero-portraits-arc">
                    <div class="portrait-item portrait-item-1">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 1">
                    </div>
                    <div class="portrait-item portrait-item-2">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 2">
                    </div>
                    <div class="portrait-item portrait-item-3">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 3">
                    </div>
                    <div class="portrait-item portrait-item-4">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 4">
                    </div>
                    <div class="portrait-item portrait-item-5">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 5">
                    </div>
                    <div class="portrait-item portrait-item-6">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 6">
                    </div>
                    <div class="portrait-item portrait-item-7">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                            alt="Portrait 7">
                    </div>
                </div>
            </div>

            <div class="about-hero-features">
                <div class="about-feature-item">
                    <h3 class="about-feature-title">Expert Psychological Services</h3>
                    <p class="about-feature-description">Access professional psychological assessments, counseling, and
                        therapy services delivered by licensed and experienced practitioners.</p>
                </div>
                <div class="about-feature-item">
                    <h3 class="about-feature-title">Personalized Care & Support</h3>
                    <p class="about-feature-description">Receive tailored treatment plans and ongoing support designed
                        to meet your unique needs and help you achieve your mental health goals.</p>
                </div>
                <div class="about-feature-item">
                    <h3 class="about-feature-title">Organizational Wellness Programs</h3>
                    <p class="about-feature-description">Enhance workplace well-being with comprehensive employee
                        training and wellness programs that promote mental health and productivity.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
