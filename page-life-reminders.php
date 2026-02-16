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
                    <video class="life-reminders-video" muted loop playsinline>
                        <source src="<?php echo esc_url(get_site_url() . '/wp-content/uploads/2026/02/youre-better-now-Made-with-Clipchamp-1.mp4'); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button class="life-reminders-play-btn" aria-label="Play video">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="38" fill="rgba(255, 255, 255, 0.9)" stroke="var(--dmr-primary-color)" stroke-width="2"/>
                            <path d="M32 26L32 54L54 40L32 26Z" fill="var(--dmr-primary-color)"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.querySelector('.life-reminders-video');
        const playBtn = document.querySelector('.life-reminders-play-btn');
        
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
    });
</script>

<?php
get_footer();
