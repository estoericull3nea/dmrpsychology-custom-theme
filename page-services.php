<?php
/**
 * Template Name: Services Page
 * The template for displaying the Services page
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
                    <span class="about-hero-title-line-1">Services</span>
                    <span class="about-hero-title-line-2">Our Services</span>
                </h1>
                <p class="about-hero-description">DMR Psychological Services is committed to fostering mental health and emotional well-being through compassionate, client-centered care.</p>
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

    <section class="services-content-section">
        <div class="services-content-wrapper">
            <!-- Left Sidebar Navigation -->
            <div class="services-sidebar">
                <div class="services-nav-item active" data-service="1">
                    <span class="nav-dot"></span>
                    <span class="nav-number">01</span>
                    <span class="nav-label">Psychological Assessment</span>
                </div>
                <div class="services-nav-item" data-service="2">
                    <span class="nav-dot"></span>
                    <span class="nav-number">02</span>
                    <span class="nav-label">Counseling & Psychotherapy</span>
                </div>
                <div class="services-nav-item" data-service="3">
                    <span class="nav-dot"></span>
                    <span class="nav-number">03</span>
                    <span class="nav-label">Employee Training & Wellness</span>
                </div>
            </div>

            <!-- Services Content -->
            <div class="services-content-container">
                <!-- Service 1: Text Left, Image Right -->
                <div class="service-section active" id="service-1">
                    <div class="service-section-inner">
                        <div class="service-text-block">
                            <h2 class="service-main-title">Psychological Assessment</h2>
                            <span class="service-bg-letter">P</span>
                            <p class="service-description">The goal is to collaboratively help the client understand and organize their mental space, set goals, and identify the necessary steps to accomplish these goals, improve coping skills and resilience, and promote positive emotional change and mental health.</p>
                        </div>
                        <div class="service-visual-block">
                            <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Psychological-Assessment.webp'); ?>" 
                                alt="Psychological Assessment" class="service-visual-image">
                        </div>
                    </div>
                </div>

                <!-- Service 2: Image Left, Text Right -->
                <div class="service-section" id="service-2">
                    <div class="service-section-inner reverse">
                        <div class="service-visual-block">
                            <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Counseling-and-Psychotherapy.webp'); ?>" 
                                alt="Counseling and Psychotherapy" class="service-visual-image">
                        </div>
                        <div class="service-text-block">
                            <h2 class="service-main-title">Counseling and Psychotherapy</h2>
                            <span class="service-bg-letter">C</span>
                            <p class="service-description">A process wherein the client answers a battery of tests. These tests will be used to evaluate a person's behavior, abilities, and other characteristics, particularly for the purposes of making a diagnosis or treatment recommendation. This can also be used for the accomplishment of developmental forms and and the issuance of a mental health clearance for students and employees.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Text Left, Image Right -->
                <div class="service-section" id="service-3">
                    <div class="service-section-inner">
                        <div class="service-text-block">
                            <h2 class="service-main-title">Employee Training & Wellness Program</h2>
                            <span class="service-bg-letter">E</span>
                            <p class="service-description">Mental Health Training in the workplace acknowledges the existence of different stressors in the employees' lives and teaches them better ways to cope and address them to avoid the effects on their work performance. It aims to improve the employee's productivity and performance, boost the company's identity and culture, and reduce workplace conflict.</p>
                        </div>
                        <div class="service-visual-block">
                            <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/Employee-Training-Wellness-Program.webp'); ?>" 
                                alt="Employee Training & Wellness Program" class="service-visual-image">
                        </div>
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

        // Services Navigation
        const navItems = document.querySelectorAll('.services-nav-item');
        const serviceSections = document.querySelectorAll('.service-section');

        function scrollToService(serviceNumber) {
            const targetSection = document.getElementById('service-' + serviceNumber);
            if (targetSection) {
                const offset = 100;
                const elementPosition = targetSection.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }

        // Add click handlers to nav items
        navItems.forEach(item => {
            item.addEventListener('click', function() {
                const serviceNumber = this.getAttribute('data-service');
                scrollToService(serviceNumber);
            });
        });

        // Scroll spy - update active nav on scroll
        function updateActiveNav() {
            const scrollPos = window.scrollY + window.innerHeight / 3;
            
            serviceSections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                const sectionTop = rect.top + window.scrollY;
                const sectionBottom = sectionTop + rect.height;
                
                if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                    navItems.forEach(item => item.classList.remove('active'));
                    if (navItems[index]) {
                        navItems[index].classList.add('active');
                    }
                }
            });
        }

        let scrollTimeout;
        window.addEventListener('scroll', function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(updateActiveNav, 50);
        });

        // Initial update
        updateActiveNav();
    });
</script>

<?php
get_footer();
