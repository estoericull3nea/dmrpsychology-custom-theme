/**
 * DMR Theme JavaScript
 */

(function() {
	'use strict';

	// Mobile Menu Toggle
	const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
	const mobileMenuPanel = document.querySelector('.mobile-menu-panel');
	const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
	const mobileMenuClose = document.querySelector('.mobile-menu-close');
	const body = document.body;

	// Toggle mobile menu
	function toggleMobileMenu() {
		const isOpen = mobileMenuPanel.classList.contains('is-open');
		
		if (isOpen) {
			closeMobileMenu();
		} else {
			openMobileMenu();
		}
	}

	// Open mobile menu
	function openMobileMenu() {
		mobileMenuToggle.setAttribute('aria-expanded', 'true');
		mobileMenuPanel.classList.add('is-open');
		mobileMenuOverlay.classList.add('is-active');
		body.classList.add('menu-open');
	}

	// Close mobile menu
	function closeMobileMenu() {
		mobileMenuToggle.setAttribute('aria-expanded', 'false');
		mobileMenuPanel.classList.remove('is-open');
		mobileMenuOverlay.classList.remove('is-active');
		body.classList.remove('menu-open');
	}

	// Event listeners
	if (mobileMenuToggle) {
		mobileMenuToggle.addEventListener('click', toggleMobileMenu);
	}

	if (mobileMenuClose) {
		mobileMenuClose.addEventListener('click', closeMobileMenu);
	}

	if (mobileMenuOverlay) {
		mobileMenuOverlay.addEventListener('click', closeMobileMenu);
	}

	// Handle submenu toggles on mobile
	const mobileSubmenuToggles = document.querySelectorAll('.mobile-navigation .menu-item-has-children > a');
	mobileSubmenuToggles.forEach(toggle => {
		toggle.addEventListener('click', function(e) {
			e.preventDefault();
			const parent = this.parentElement;
			const submenu = parent.querySelector('.sub-menu');
			
			if (submenu) {
				parent.classList.toggle('submenu-open');
				submenu.style.maxHeight = parent.classList.contains('submenu-open') 
					? submenu.scrollHeight + 'px' 
					: '0';
			}
		});
	});

	// Close menu when clicking on a link (but not parent menu items with submenus)
	const mobileMenuLinks = document.querySelectorAll('.mobile-navigation a');
	mobileMenuLinks.forEach(link => {
		link.addEventListener('click', function(e) {
			// Check if this link is a parent menu item with submenu (direct child of menu-item-has-children)
			const parent = this.parentElement;
			const isParentLink = parent.classList.contains('menu-item-has-children') && 
			                     !this.closest('.sub-menu');
			
			// Only close menu if it's NOT a parent menu item with submenu
			// Parent menu items are handled by the submenu toggle handler above
			if (!isParentLink) {
				// Close menu after a short delay to allow navigation
				setTimeout(closeMobileMenu, 300);
			}
		});
	});

	// Close menu on window resize if desktop
	window.addEventListener('resize', function() {
		if (window.innerWidth > 768) {
			closeMobileMenu();
		}
	});

	// Sticky Header Scroll Effect
	const siteHeader = document.querySelector('.site-header');
	
	if (siteHeader) {
		let lastScroll = 0;
		
		function handleScroll() {
			const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
			
			if (currentScroll > 50) {
				siteHeader.classList.add('scrolled');
			} else {
				siteHeader.classList.remove('scrolled');
			}
			
			lastScroll = currentScroll;
		}
		
		// Throttle scroll events for better performance
		let ticking = false;
		window.addEventListener('scroll', function() {
			if (!ticking) {
				window.requestAnimationFrame(function() {
					handleScroll();
					ticking = false;
				});
				ticking = true;
			}
		});
		
		// Check initial scroll position
		handleScroll();
	}

})();
