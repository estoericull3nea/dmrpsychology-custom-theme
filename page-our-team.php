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
                <p class="about-hero-description">Our team comprises highly qualified and experienced psychologists, therapists, and mental health professionals. We are dedicated to providing evidence-based care and support to individuals seeking to improve their well-being.</p>
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
                <p class="team-members-intro">Our dedicated team of professionals is committed to providing exceptional psychological services and support.</p>
            </div>

            <div class="team-members-grid">
                <!-- Team Member 1 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/9.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Experienced professional dedicated to providing quality psychological services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. John Doe</h3>
                        <p class="team-member-job">Clinical Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Specialized in cognitive behavioral therapy and mental health assessment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. Jane Smith</h3>
                        <p class="team-member-job">Licensed Therapist</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Expert in organizational psychology and employee wellness programs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. Michael Johnson</h3>
                        <p class="team-member-job">Organizational Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Focused on child and adolescent psychology and family counseling.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. Sarah Williams</h3>
                        <p class="team-member-job">Child Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Specialist in trauma therapy and stress management techniques.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. Robert Brown</h3>
                        <p class="team-member-job">Trauma Specialist</p>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Expert in educational psychology and student assessment programs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. Emily Davis</h3>
                        <p class="team-member-job">Educational Psychologist</p>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="team-member-card">
                    <div class="team-member-image-wrapper">
                        <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3.webp'); ?>" 
                            alt="Team Member Name" class="team-member-image">
                        <div class="team-member-overlay">
                            <div class="team-member-info-hover">
                                <p class="team-member-bio">Specialized in sports psychology and performance enhancement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member-details">
                        <h3 class="team-member-name">Dr. David Martinez</h3>
                        <p class="team-member-job">Sports Psychologist</p>
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
