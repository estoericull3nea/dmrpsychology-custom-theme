<?php
/**
 * Template Name: Contact Page
 * The template for displaying the Contact page
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
                    <span class="about-hero-title-line-1">Contact</span>
                    <span class="about-hero-title-line-2">We're here to help.</span>
                </h1>
                <p class="about-hero-description">Contact us with your inquiries, feedback, or to learn more about our services.</p>
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

    <section class="contact-form-section">
        <div class="contact-form-container">
            <div class="contact-form-wrapper">
                <?php echo do_shortcode('[forminator_form id="98"]'); ?>
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
        if (portraitImages.length > 0 && modal) {
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
        }

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
        if (modal) {
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
            if (modalImg) {
                modalImg.addEventListener('dragstart', function (e) {
                    e.preventDefault();
                });
            }
        }
    });
</script>

<?php
get_footer();
