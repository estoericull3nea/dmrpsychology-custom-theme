<?php
/**
 * Template Name: Life Reminders Page
 * The template for displaying the Life Reminders page
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
                    <span class="about-hero-title-line-1">Life</span>
                    <span class="about-hero-title-line-2">Reminders</span>
                </h1>
                <p class="about-hero-description">Life may sometimes be tough, but life is still good. At Life Reminders, we share inspiration, wisdom, and motivation to remind you of the beauty in every moment. Whether you need encouragement, a fresh perspective, or a simple reminder to appreciate life's moments, we're here for you. Stay inspired. Stay grateful. Keep moving forward.</p>
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
                <div class="life-reminders-video-wrapper">
                    <video class="life-reminders-video" loop playsinline>
                        <source src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/youre-better-now-Made-with-Clipchamp-1.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button class="life-reminders-play-btn" aria-label="Play video">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="38" fill="rgba(255, 255, 255, 0.9)" stroke="var(--dmr-primary-color)" stroke-width="2"/>
                            <path d="M32 26L32 54L54 40L32 26Z" fill="var(--dmr-primary-color)"/>
                        </svg>
                    </button>
                    <button class="life-reminders-fullscreen-btn" aria-label="Toggle fullscreen">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 3H5C3.89543 3 3 3.89543 3 5V8M21 8V5C21 3.89543 20.1046 3 19 3H16M16 21H19C20.1046 21 21 20.1046 21 19V16M3 16V19C3 20.1046 3.89543 21 5 21H8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="life-reminders-gallery-section">
        <div class="life-reminders-gallery-container">
            <div class="life-reminders-gallery-grid">
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/9-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/9-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/8-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/7-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/6-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/5-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/4-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/3-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/2-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/2-1.webp'); ?>">
                </div>
                <div class="life-reminder-item">
                    <img src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/1-1.webp'); ?>" 
                        alt="Life Reminder" class="life-reminder-image"
                        data-image="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/1-1.webp'); ?>">
                </div>
            </div>
        </div>

        <!-- Image Modal -->
        <div id="life-reminder-modal" class="portrait-modal">
            <span class="portrait-modal-close">&times;</span>
            <img class="portrait-modal-content" id="life-reminder-modal-image" src="" alt="Life Reminder">
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.querySelector('.life-reminders-video');
        const playBtn = document.querySelector('.life-reminders-play-btn');
        const fullscreenBtn = document.querySelector('.life-reminders-fullscreen-btn');
        const videoWrapper = document.querySelector('.life-reminders-video-wrapper');
        
        if (video && playBtn) {
            // Play button click handler
            playBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                video.play();
                playBtn.style.display = 'none';
            });
            
            // Video click to pause
            video.addEventListener('click', function() {
                if (!video.paused) {
                    video.pause();
                    playBtn.style.display = 'flex';
                }
            });
            
            // Hide play button when video is playing
            video.addEventListener('play', function() {
                playBtn.style.display = 'none';
            });
            
            // Show play button when video is paused
            video.addEventListener('pause', function() {
                playBtn.style.display = 'flex';
            });
        }
        
        // Fullscreen functionality
        if (fullscreenBtn && videoWrapper) {
            fullscreenBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleFullscreen();
            });
            
            function toggleFullscreen() {
                if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
                    // Enter fullscreen
                    if (videoWrapper.requestFullscreen) {
                        videoWrapper.requestFullscreen();
                    } else if (videoWrapper.mozRequestFullScreen) {
                        videoWrapper.mozRequestFullScreen();
                    } else if (videoWrapper.webkitRequestFullscreen) {
                        videoWrapper.webkitRequestFullscreen();
                    } else if (videoWrapper.msRequestFullscreen) {
                        videoWrapper.msRequestFullscreen();
                    }
                } else {
                    // Exit fullscreen
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    }
                }
            }
            
            // Listen for fullscreen changes
            document.addEventListener('fullscreenchange', updateFullscreenButton);
            document.addEventListener('mozfullscreenchange', updateFullscreenButton);
            document.addEventListener('webkitfullscreenchange', updateFullscreenButton);
            document.addEventListener('msfullscreenchange', updateFullscreenButton);
            
            function updateFullscreenButton() {
                if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
                    fullscreenBtn.setAttribute('aria-label', 'Exit fullscreen');
                } else {
                    fullscreenBtn.setAttribute('aria-label', 'Enter fullscreen');
                }
            }
        }
        
        // Life Reminders Gallery Modal
        const lifeReminderModal = document.getElementById('life-reminder-modal');
        const lifeReminderModalImg = document.getElementById('life-reminder-modal-image');
        const lifeReminderCloseBtn = lifeReminderModal ? lifeReminderModal.querySelector('.portrait-modal-close') : null;
        const lifeReminderItems = document.querySelectorAll('.life-reminder-item');
        
        let scrollPosition = 0;
        
        // Prevent body scroll when modal is open
        function preventBodyScroll() {
            scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = '-' + scrollPosition + 'px';
            document.body.style.width = '100%';
        }
        
        function restoreBodyScroll() {
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';
            window.scrollTo(0, scrollPosition);
        }
        
        // Open modal when item is clicked or touched
        if (lifeReminderItems.length > 0 && lifeReminderModal) {
            lifeReminderItems.forEach(function (item) {
                const img = item.querySelector('.life-reminder-image');
                if (!img) return;
                
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    lifeReminderModal.classList.add('show');
                    lifeReminderModalImg.src = img.getAttribute('data-image');
                    lifeReminderModalImg.alt = img.alt;
                    preventBodyScroll();
                    return false;
                });
                
                // Touch support for mobile
                item.addEventListener('touchend', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    lifeReminderModal.classList.add('show');
                    lifeReminderModalImg.src = img.getAttribute('data-image');
                    lifeReminderModalImg.alt = img.alt;
                    preventBodyScroll();
                    return false;
                });
            });
        }
        
        // Close modal when close button is clicked
        if (lifeReminderCloseBtn) {
            lifeReminderCloseBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                lifeReminderModal.classList.remove('show');
                restoreBodyScroll();
            });
            
            // Touch support for close button
            lifeReminderCloseBtn.addEventListener('touchend', function (e) {
                e.preventDefault();
                e.stopPropagation();
                lifeReminderModal.classList.remove('show');
                restoreBodyScroll();
            });
        }
        
        // Close modal when clicking outside the image
        if (lifeReminderModal) {
            lifeReminderModal.addEventListener('click', function (e) {
                if (e.target === lifeReminderModal) {
                    lifeReminderModal.classList.remove('show');
                    restoreBodyScroll();
                }
            });
            
            // Touch support for closing on background tap
            let touchStartY = 0;
            lifeReminderModal.addEventListener('touchstart', function (e) {
                if (e.target === lifeReminderModal) {
                    touchStartY = e.touches[0].clientY;
                }
            });
            
            lifeReminderModal.addEventListener('touchend', function (e) {
                if (e.target === lifeReminderModal) {
                    const touchEndY = e.changedTouches[0].clientY;
                    const diff = Math.abs(touchEndY - touchStartY);
                    // Only close if it's a tap (not a swipe)
                    if (diff < 10) {
                        lifeReminderModal.classList.remove('show');
                        restoreBodyScroll();
                    }
                }
            });
            
            // Close modal with Escape key
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && lifeReminderModal.classList.contains('show')) {
                    lifeReminderModal.classList.remove('show');
                    restoreBodyScroll();
                }
            });
            
            // Prevent image dragging on mobile
            if (lifeReminderModalImg) {
                lifeReminderModalImg.addEventListener('dragstart', function (e) {
                    e.preventDefault();
                });
            }
        }
    });
</script>

<?php
get_footer();
