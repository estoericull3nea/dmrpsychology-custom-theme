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
                            alt="Portrait 1" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/9.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-2">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8.webp'); ?>"
                            alt="Portrait 2" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-3">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7.webp'); ?>"
                            alt="Portrait 3" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-4">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6.webp'); ?>"
                            alt="Portrait 4" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-5">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5.webp'); ?>"
                            alt="Portrait 5" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-6">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4.webp'); ?>"
                            alt="Portrait 6" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4.webp'); ?>">
                    </div>
                    <div class="portrait-item portrait-item-7">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3.webp'); ?>"
                            alt="Portrait 7" class="portrait-image"
                            data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3.webp'); ?>">
                    </div>
                </div>
            </div>

            <!-- Image Modal -->
            <div id="portrait-modal" class="portrait-modal">
                <span class="portrait-modal-close">&times;</span>
                <img class="portrait-modal-content" id="portrait-modal-image" src="" alt="Full size portrait">
            </div>
        </div>
    </section>

    <section id="core-values" class="about-core-values-section">
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
                <a href="#core-values-cards" class="about-core-values-arrow-link" aria-label="View our core values">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/arrow.png'); ?>"
                        alt="Arrow pointing to core values" class="about-core-values-arrow" />
                </a>
            </div>
            <div class="about-core-values-right">
                <div class="about-core-values-bg-image">
                    <span class="bg-text bg-text-1">ETHICS</span>
                    <span class="bg-text bg-text-2">TRUST</span>
                    <span class="bg-text bg-text-3">VALUES</span>
                </div>
                <div id="core-values-cards" class="about-core-values-cards">
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

    <section id="mission-vision" class="about-mission-vision-section">
        <div class="about-mission-vision-container">
            <!-- Mission Section -->
            <div class="mission-vision-block mission-block">
                <div class="mission-vision-header">
                    <div class="mission-vision-title-wrapper">
                        <span class="mission-vision-label">MISSION</span>
                        <h2 class="mission-vision-title">Our Mission</h2>
                    </div>
                    <div class="mission-vision-divider"></div>
                </div>
                <div class="mission-vision-items">
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">To become an essential resource provider for companies,
                            organizations, and individuals who seek psychological services;</p>
                    </div>
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">To provide timely, practical, and effective solutions to our
                            client's needs;</p>
                    </div>
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">To ensure that all work is evidence-based and adheres to
                            professional guidelines</p>
                    </div>
                </div>
            </div>

            <!-- Vision Section -->
            <div class="mission-vision-block vision-block">
                <div class="mission-vision-header">
                    <div class="mission-vision-title-wrapper">
                        <span class="mission-vision-label">VISION</span>
                        <h2 class="mission-vision-title">Our Vision</h2>
                    </div>
                    <div class="mission-vision-divider"></div>
                </div>
                <div class="mission-vision-items">
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">A go-to center for companies and corporations in the assessment
                            of personnel and employment applicants.</p>
                    </div>
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">A partner of schools, colleges, and universities in the
                            assessment of pupils and students.</p>
                    </div>
                    <div class="mission-vision-item">
                        <p class="mission-vision-text">We envision being a recognized leader in providing psychological
                            services in the Philippines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-clients" class="about-clients-section">
        <div class="about-clients-container">
            <div class="about-clients-header">
                <span class="about-clients-label">OUR CLIENTS</span>
                <h2 class="about-clients-title">Our Clients</h2>
                <div class="about-clients-divider"></div>
                <p class="about-clients-intro">We are a mental health provider specializing in counseling, psychological
                    assessment, and training for individuals and different organizations. We cater to the following:</p>
            </div>

            <div class="about-clients-blocks">
                <div class="about-client-block">
                    <div class="client-block-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="16" width="48" height="12" rx="6" fill="var(--dmr-primary-color)" />
                            <circle cx="14" cy="22" r="3" fill="var(--dmr-light-green)" />
                            <rect x="8" y="32" width="48" height="12" rx="6" fill="var(--dmr-light-green)" />
                            <circle cx="54" cy="38" r="3" fill="#ffffff" />
                        </svg>
                    </div>
                    <h3 class="client-block-title">Individual Clients</h3>
                    <p class="client-block-description">This includes children, adolescents, and adults who are seeking
                        additional psychological support for their personal struggles.</p>
                </div>

                <div class="about-client-block">
                    <div class="client-block-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="24" fill="var(--dmr-light-green)" />
                            <circle cx="32" cy="24" r="8" fill="var(--dmr-primary-color)" />
                            <path d="M20 40C20 36 24 32 32 32C40 32 44 36 44 40" stroke="var(--dmr-primary-color)"
                                stroke-width="3" stroke-linecap="round" />
                            <line x1="32" y1="48" x2="32" y2="52" stroke="var(--dmr-primary-color)" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="client-block-title">Organizational Clients</h3>
                    <p class="client-block-description">We partner with different private and corporate organizations in
                        the Philippines and internationally.</p>
                </div>

                <div class="about-client-block">
                    <div class="client-block-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <clipPath id="heartLeftClip">
                                    <rect x="0" y="0" width="32" height="64" />
                                </clipPath>
                            </defs>
                            <path d="M32 20C28 16 20 18 20 26C20 34 28 42 32 46C36 42 44 34 44 26C44 18 36 16 32 20Z"
                                fill="var(--dmr-primary-color)" clip-path="url(#heartLeftClip)" />
                            <path d="M32 20C28 16 20 18 20 26C20 34 28 42 32 46C36 42 44 34 44 26C44 18 36 16 32 20Z"
                                fill="var(--dmr-light-green)" />
                        </svg>
                    </div>
                    <h3 class="client-block-title">Esports Teams</h3>
                    <p class="client-block-description">We also handle psychological assessments and evaluations for
                        different Esports teams, conduct team-building workshops, and provide mental toughness training
                        for them.</p>
                </div>

                <div class="about-client-block">
                    <div class="client-block-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="24" fill="var(--dmr-light-green)" />
                            <path d="M32 16C32 16 20 22 20 32C20 42 26 48 32 48C38 48 44 42 44 32C44 22 32 16 32 16Z"
                                fill="var(--dmr-primary-color)" />
                            <circle cx="32" cy="28" r="4" fill="#ffffff" />
                            <path d="M24 36L32 40L40 36" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="client-block-title">HMO Companies</h3>
                    <p class="client-block-description">In an effort to make mental health support and services more
                        accessible to different individuals, we partner with HMO companies to provide comprehensive
                        psychological services.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the modal
        const modal = document.getElementById('portrait-modal');
        const modalImg = document.getElementById('portrait-modal-image');
        const closeBtn = document.querySelector('.portrait-modal-close');

        // Get all portrait images
        const portraitImages = document.querySelectorAll('.portrait-image');

        // Prevent body scroll when modal is open
        function preventBodyScroll() {
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.width = '100%';
        }

        function restoreBodyScroll() {
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.width = '';
        }

        // Open modal when image is clicked or touched
        portraitImages.forEach(function (img) {
            img.addEventListener('click', function (e) {
                e.preventDefault();
                modal.classList.add('show');
                modalImg.src = this.getAttribute('data-image');
                modalImg.alt = this.alt;
                preventBodyScroll();
            });

            // Touch support for mobile
            img.addEventListener('touchend', function (e) {
                e.preventDefault();
                modal.classList.add('show');
                modalImg.src = this.getAttribute('data-image');
                modalImg.alt = this.alt;
                preventBodyScroll();
            });
        });

        // Close modal when close button is clicked
        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                modal.classList.remove('show');
                restoreBodyScroll();
            });

            // Touch support for close button
            closeBtn.addEventListener('touchend', function (e) {
                e.preventDefault();
                e.stopPropagation();
                modal.classList.remove('show');
                restoreBodyScroll();
            });
        }

        // Close modal when clicking outside the image
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.classList.remove('show');
                restoreBodyScroll();
            }
        });

        // Touch support for closing on background tap
        let touchStartY = 0;
        modal.addEventListener('touchstart', function (e) {
            if (e.target === modal) {
                touchStartY = e.touches[0].clientY;
            }
        });

        modal.addEventListener('touchend', function (e) {
            if (e.target === modal) {
                const touchEndY = e.changedTouches[0].clientY;
                const diff = Math.abs(touchEndY - touchStartY);
                // Only close if it's a tap (not a swipe)
                if (diff < 10) {
                    modal.classList.remove('show');
                    restoreBodyScroll();
                }
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.classList.contains('show')) {
                modal.classList.remove('show');
                restoreBodyScroll();
            }
        });

        // Prevent image dragging on mobile
        modalImg.addEventListener('dragstart', function (e) {
            e.preventDefault();
        });
    });
</script>

<?php
get_footer();
