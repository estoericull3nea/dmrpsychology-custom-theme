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
        <div class="about-hero-background-elements">
            <div class="hero-blob hero-blob-1"></div>
            <div class="hero-blob hero-blob-2"></div>
            <div class="hero-dots"></div>
        </div>
        <div class="about-hero-container">
            <div class="about-hero-content">
                <h1 class="about-hero-title" data-animate="fade-in-up">About</h1>
                <div class="about-hero-text" data-animate="fade-in-up">
                    <p>DMR Psychological Services, established in 2012, is a company that offers sound and professional
                        psychological services that cater to the needs of individuals and organizations. Manned with
                        competent, experienced, and licensed practitioners, we are committed to providing timely,
                        practical, and effective solutions to our client's needs.</p>
                </div>
            </div>
            <div class="about-hero-image" data-animate="fade-in-right">
                <div class="about-hero-image-wrapper">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/dmr-quote.webp'); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name')); ?> About Image">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
