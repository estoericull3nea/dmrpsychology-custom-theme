<?php
/**
 * Portrait Gallery Component
 * 
 * A reusable component for displaying portrait images in an arc layout with modal functionality.
 * 
 * @package DMR
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

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

<style>
/* Portrait Gallery Component Styles */
.about-hero-portraits-arc {
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	perspective: 2000px;
}

.portrait-item {
	position: absolute;
	width: 140px;
	height: 180px;
	border-radius: 16px;
	overflow: hidden;
	transform-style: preserve-3d;
	transition: transform 0.3s ease;
	border: 3px solid rgba(255, 255, 255, 0.8);
	box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.portrait-item img {
	width: 100%;
	height: 100%;
	object-fit: cover;
	object-position: center;
	display: block;
}

/* Arc positioning - 7 portraits in a shallow curved arrangement */
.portrait-item-1 {
	left: 2%;
	transform: translateX(-50%) translateY(15px) rotateY(-12deg) rotateZ(-6deg);
	z-index: 1;
	background: #f5a623;
}

.portrait-item-2 {
	left: 15%;
	transform: translateX(-50%) translateY(10px) rotateY(-8deg) rotateZ(-4deg);
	z-index: 2;
	background: #9013fe;
}

.portrait-item-3 {
	left: 28%;
	transform: translateX(-50%) translateY(5px) rotateY(-4deg) rotateZ(-2deg);
	z-index: 3;
	background: #333333;
}

.portrait-item-4 {
	left: 50%;
	transform: translateX(-50%) translateY(0px) rotateY(0deg) rotateZ(0deg);
	z-index: 5;
	background: #e0e0e0;
}

.portrait-item-5 {
	left: 72%;
	transform: translateX(-50%) translateY(5px) rotateY(4deg) rotateZ(2deg);
	z-index: 4;
	background: #ff6b9d;
}

.portrait-item-6 {
	left: 85%;
	transform: translateX(-50%) translateY(10px) rotateY(8deg) rotateZ(4deg);
	z-index: 3;
	background: #9b59b6;
}

.portrait-item-7 {
	left: 98%;
	transform: translateX(-50%) translateY(15px) rotateY(12deg) rotateZ(6deg);
	z-index: 1;
	background: #c0392b;
}

.portrait-item:hover {
	transform: translateX(-50%) translateY(-5px) scale(1.08);
	z-index: 10;
	box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.portrait-image {
	cursor: pointer;
	transition: opacity 0.3s ease;
}

.portrait-image:hover {
	opacity: 0.9;
}

/* Portrait Modal Styles */
.portrait-modal {
	display: none;
	position: fixed;
	z-index: 10000;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: auto;
	background-color: rgba(0, 0, 0, 0.9);
	animation: fadeIn 0.3s ease;
	-webkit-overflow-scrolling: touch;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	touch-action: manipulation;
}

.portrait-modal.show {
	display: flex;
	align-items: center;
	justify-content: center;
}

@keyframes fadeIn {
	from {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}

.portrait-modal-content {
	margin: auto;
	display: block;
	max-width: 90%;
	max-height: 90vh;
	width: auto;
	height: auto;
	object-fit: contain;
	animation: zoomIn 0.3s ease;
	border-radius: 8px;
	box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
	padding: 20px;
	box-sizing: border-box;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-touch-callout: none;
	-webkit-tap-highlight-color: transparent;
	touch-action: manipulation;
}

@keyframes zoomIn {
	from {
		transform: scale(0.8);
		opacity: 0;
	}
	to {
		transform: scale(1);
		opacity: 1;
	}
}

.portrait-modal-close {
	position: absolute;
	top: 30px;
	right: 45px;
	color: #ffffff;
	font-size: 40px;
	font-weight: bold;
	cursor: pointer;
	z-index: 10001;
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 50%;
	transition: all 0.3s ease;
	line-height: 1;
	-webkit-tap-highlight-color: transparent;
}

.portrait-modal-close:hover,
.portrait-modal-close:focus {
	color: #ffffff;
	background: rgba(0, 0, 0, 0.8);
	transform: scale(1.1);
}

/* Tablet Responsive */
@media (max-width: 968px) {
	.portrait-modal-content {
		max-width: 85%;
		max-height: 85vh;
		padding: 15px;
	}
	
	.portrait-modal-close {
		top: 25px;
		right: 30px;
		font-size: 35px;
		width: 45px;
		height: 45px;
	}
}

/* Mobile Responsive */
@media (max-width: 768px) {
	.portrait-item {
		width: 100px;
		height: 130px;
	}
	
	.portrait-item-1 {
		left: 0%;
		transform: translateX(-30%) translateY(10px) rotateY(-10deg) rotateZ(-5deg);
	}
	
	.portrait-item-2 {
		left: 12%;
		transform: translateX(-50%) translateY(8px) rotateY(-6deg) rotateZ(-3deg);
	}
	
	.portrait-item-3 {
		left: 24%;
		transform: translateX(-50%) translateY(5px) rotateY(-3deg) rotateZ(-1deg);
	}
	
	.portrait-item-4 {
		left: 50%;
		transform: translateX(-50%) translateY(0px) rotateY(0deg) rotateZ(0deg);
	}
	
	.portrait-item-5 {
		left: 76%;
		transform: translateX(-50%) translateY(5px) rotateY(3deg) rotateZ(1deg);
	}
	
	.portrait-item-6 {
		left: 88%;
		transform: translateX(-50%) translateY(8px) rotateY(6deg) rotateZ(3deg);
	}
	
	.portrait-item-7 {
		left: 100%;
		transform: translateX(-70%) translateY(10px) rotateY(10deg) rotateZ(5deg);
	}
	
	.portrait-modal {
		padding: 10px;
		align-items: center;
		justify-content: center;
	}
	
	.portrait-modal-content {
		max-width: 95%;
		max-height: 80vh;
		padding: 10px;
		border-radius: 4px;
	}
	
	.portrait-modal-close {
		top: 15px;
		right: 15px;
		font-size: 28px;
		width: 40px;
		height: 40px;
		background: rgba(0, 0, 0, 0.7);
	}
	
	.portrait-modal-close:active {
		transform: scale(0.95);
		background: rgba(0, 0, 0, 0.9);
	}
}

/* Small Mobile Responsive */
@media (max-width: 480px) {
	.portrait-modal {
		padding: 5px;
	}
	
	.portrait-modal-content {
		max-width: 98%;
		max-height: 75vh;
		padding: 5px;
		border-radius: 2px;
	}
	
	.portrait-modal-close {
		top: 10px;
		right: 10px;
		font-size: 24px;
		width: 36px;
		height: 36px;
	}
	
	@keyframes zoomIn {
		from {
			transform: scale(0.9);
			opacity: 0;
		}
		to {
			transform: scale(1);
			opacity: 1;
		}
	}
}

/* Landscape Mobile */
@media (max-width: 768px) and (orientation: landscape) {
	.portrait-modal-content {
		max-height: 90vh;
		max-width: 90%;
	}
	
	.portrait-modal-close {
		top: 10px;
		right: 10px;
	}
}
</style>

<script>
(function() {
	'use strict';
	
	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initPortraitGallery);
	} else {
		initPortraitGallery();
	}
	
	function initPortraitGallery() {
		// Get the modal
		const modal = document.getElementById('portrait-modal');
		const modalImg = document.getElementById('portrait-modal-image');
		const closeBtn = document.querySelector('.portrait-modal-close');
		
		// Check if elements exist
		if (!modal || !modalImg) {
			return;
		}
		
		// Get all portrait images
		const portraitImages = document.querySelectorAll('.portrait-image');
		
		if (portraitImages.length === 0) {
			return;
		}
		
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
				e.stopPropagation();
				if (modal) {
					modal.classList.add('show');
					modalImg.src = this.getAttribute('data-image');
					modalImg.alt = this.alt;
					preventBodyScroll();
				}
			});
			
			// Touch support for mobile
			img.addEventListener('touchend', function (e) {
				e.preventDefault();
				e.stopPropagation();
				if (modal) {
					modal.classList.add('show');
					modalImg.src = this.getAttribute('data-image');
					modalImg.alt = this.alt;
					preventBodyScroll();
				}
			});
		});
		
		// Close modal when close button is clicked
		if (closeBtn) {
			closeBtn.addEventListener('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				if (modal) {
					modal.classList.remove('show');
					restoreBodyScroll();
				}
			});
			
			// Touch support for close button
			closeBtn.addEventListener('touchend', function (e) {
				e.preventDefault();
				e.stopPropagation();
				if (modal) {
					modal.classList.remove('show');
					restoreBodyScroll();
				}
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
	}
})();
</script>
