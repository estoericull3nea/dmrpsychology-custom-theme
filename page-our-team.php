<?php
/**
 * Template Name: Team Page
 * The template for displaying the Team page
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
                    <span class="about-hero-title-line-1">Our</span>
                    <span class="about-hero-title-line-2">Team</span>
                </h1>
                <p class="about-hero-description">Our team comprises highly qualified and experienced psychologists,
                    therapists, and mental health professionals. We are dedicated to providing evidence-based care and
                    support to individuals seeking to improve their well-being.</p>
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

    <section class="team-members-section">
        <div class="team-members-container">
            <div class="team-members-header">
                <span class="team-members-label">OUR TEAM</span>
                <h2 class="team-members-title">Meet Our Team</h2>
                <div class="team-members-divider"></div>
                <p class="team-members-intro">Our dedicated team of professionals is committed to providing exceptional
                    psychological services and support.</p>
            </div>

            <div class="team-members-grid">
                <!-- Team Member 1 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Eric-L.-Dimar-MA-RPsy-RGC.webp'); ?>"
                            alt="Eric L. Dimar" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Eric L. Dimar, MA, RPsy, RGC</h3>
                        <p class="team-member-title">Lead Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Isabel-Victoria-C.-Mapalad-RPm.webp'); ?>"
                            alt="Isabel Victoria C. Mapalad" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Isabel Victoria C. Mapalad, RPm</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Abigail-G.-Taladtad-MAEd-RGC.webp'); ?>"
                            alt="Abigail G. Taladtad" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Abigail G. Taladtad, MAEd, RGC</h3>
                        <p class="team-member-title">Guidance Counselor</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Kiana-D.C.-San-Juan-MA-RPsy.webp'); ?>"
                            alt="Kiana D.C. San Juan" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Kiana D.C. San Juan, MA, RPsy</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Alvin-L.-Jacob-III-MP-RPsy.webp'); ?>"
                            alt="Alvin L. Jacob III" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Alvin L. Jacob III, MP, RPsy</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Mabeth-B.-Francia-MP-RPsy-RGC.webp'); ?>"
                            alt="Mabeth B. Francia" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Mabeth B. Francia, MP, RPsy, RGC</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Michelle-Ivanne-M.-Avila-MA-RPsy.webp'); ?>"
                            alt="Michelle Ivanne M. Avila" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Michelle Ivanne M. Avila, MA, RPsy</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 8 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Ma.-Cristine-Jhoie-M.-Solano-RPm.webp'); ?>"
                            alt="Ma. Cristine Jhoie M. Solano" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Ma. Cristine Jhoie M. Solano, RPm</h3>
                        <p class="team-member-title">Psychometrician</p>
                    </div>
                </div>

                <!-- Team Member 9 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Lowel-L.-Urian-MAEd-RGC.webp'); ?>"
                            alt="Lowel L. Urian" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Lowel L. Urian, MAEd, RGC</h3>
                        <p class="team-member-title">Guidance Counselor</p>
                    </div>
                </div>

                <!-- Team Member 10 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Elaine-Kate-A.-Castro-RPm.webp'); ?>"
                            alt="Elaine Kate A. Castro" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Elaine Kate A. Castro, RPm</h3>
                        <p class="team-member-title">Psychometrician</p>
                    </div>
                </div>

                <!-- Team Member 11 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Erika-Mae-P.-SIlva-Rpm.webp'); ?>"
                            alt="Erika Mae P. Silva" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Erika Mae P. Silva, RPm</h3>
                        <p class="team-member-title">Psychometrician</p>
                    </div>
                </div>

                <!-- Team Member 12 -->
                <div class="team-member-card">
                    <div class="team-member-image-container">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Trisha-Joy-O.-Gotinga-MA-RPsy.webp'); ?>"
                            alt="Trisha Joy O. Gotinga" class="team-member-image">
                    </div>
                    <div class="team-member-info">
                        <h3 class="team-member-name">Trisha Joy O. Gotinga, MA, RPsy</h3>
                        <p class="team-member-title">Psychologist</p>
                    </div>
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
