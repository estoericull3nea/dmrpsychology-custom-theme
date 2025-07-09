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
                <p class="about-hero-description">DMR Psychological Services, established in 2012, is a company that
                    offers sound and professional psychological services that cater to the needs of individuals and
                    organizations. Manned with competent, experienced, and licensed practitioners, we are committed to
                    providing timely, practical, and effective solutions to our client's needs.</p>
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
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/9.webp'); ?>"
                            alt="Portrait 1">
                    </div>
                    <div class="portrait-item portrait-item-2">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8.webp'); ?>"
                            alt="Portrait 2">
                    </div>
                    <div class="portrait-item portrait-item-3">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7.webp'); ?>"
                            alt="Portrait 3">
                    </div>
                    <div class="portrait-item portrait-item-4">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6.webp'); ?>"
                            alt="Portrait 4">
                    </div>
                    <div class="portrait-item portrait-item-5">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5.webp'); ?>"
                            alt="Portrait 5">
                    </div>
                    <div class="portrait-item portrait-item-6">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4.webp'); ?>"
                            alt="Portrait 6">
                    </div>
                    <div class="portrait-item portrait-item-7">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3.webp'); ?>"
                            alt="Portrait 7">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-core-values-section">
        <div class="about-core-values-container">
            <div class="about-core-values-left">
                <h2 class="about-core-values-title">
                    <span class="about-core-values-title-line-1">Our</span>
                    <span class="about-core-values-title-line-2">Core Values</span>
                </h2>
                <p class="about-core-values-description">DMR Psychological Services, established in 2012, is a company
                    that
                    offers sound and professional psychological services that cater to the needs of individuals and
                    organizations. Manned with competent, experienced, and licensed practitioners, we are committed to
                    providing timely, practical, and effective solutions to our client's needs.</p>
                <svg class="about-core-values-arrow" width="160" height="160" viewBox="0 0 160 160" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 20 L20 75 Q20 95 42 95 L75 95 Q80 95 80 90 Q80 88 78 88 L72 88 Q70 88 70 90 Q70 92 72 92 L76 92 Q78 92 78 90 Q78 88 76 88 L70 88 Q68 88 68 90 L68 95 L95 125 M95 125 L115 105 M95 125 L75 105"
                        stroke="#1a1a1a" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" fill="none"
                        style="filter: drop-shadow(0 3px 4px rgba(0,0,0,0.15));" />
                </svg>
            </div>
            <div class="about-core-values-right">
                <div class="about-core-values-bg-image">
                    <span class="bg-text bg-text-1">ETHICS</span>
                    <span class="bg-text bg-text-2">TRUST</span>
                    <span class="bg-text bg-text-3">VALUES</span>
                </div>
                <div class="about-core-values-cards">
                    <div class="about-core-value-card">
                        <span class="about-core-value-number">01</span>
                        <h3 class="about-core-value-title">Honesty</h3>
                        <p class="about-core-value-description">We deal with our clients with honesty; presenting
                            ourselves
                            truthfully with our capabilities and knowing full well our limitations. We deal with our
                            clients
                            fairly; promising only what we can deliver when we can deliver it.</p>
                    </div>
                    <div class="about-core-value-card">
                        <span class="about-core-value-number">02</span>
                        <h3 class="about-core-value-title">Compassion</h3>
                        <p class="about-core-value-description">We care for our clients. We listen empathically,
                            accompany
                            them in their journey, and help them move forward to live more happy and more productive
                            lives.
                        </p>
                    </div>
                    <div class="about-core-value-card">
                        <span class="about-core-value-number">03</span>
                        <h3 class="about-core-value-title">Competence</h3>
                        <p class="about-core-value-description">We equip ourselves with the latest information and
                            techniques as we carry out our duties to the public; we make sure that our clients receive
                            excellent service; and we engage only in tasks we are very capable of handling.</p>
                    </div>
                    <div class="about-core-value-card">
                        <span class="about-core-value-number">04</span>
                        <h3 class="about-core-value-title">Professionalism</h3>
                        <p class="about-core-value-description">We deal with our clients with courtesy and
                            conscientiousness. We adhere to the highest technical and ethical standards of the
                            profession.
                        </p>
                    </div>
                    <div class="about-core-value-card">
                        <span class="about-core-value-number">05</span>
                        <h3 class="about-core-value-title">Fun</h3>
                        <p class="about-core-value-description">We look for reasons and opportunities to enjoy life;
                            celebrating life's successes and triumphs as they come. We look at life positively and find
                            peace on how things are at the present.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
