/**
 * Main JavaScript File
 * All component scripts are loaded via functions.php with proper dependencies.
 * This file can be used for any global initialization if needed.
 */

var swiper = new Swiper(".swiper_global_brands", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView:3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3.2,
		spaceBetween: 20,
	  },
	},
  });









  var swiper = new Swiper(".innovative_products", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView: 3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3,
		spaceBetween: 20,
	  },
	},
  });

  var swiper = new Swiper(".swiper_building_trust", {
	slidesPerView: 1,
	spaceBetween: 0,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
	autoplay: {
	  delay: 5000,
	  disableOnInteraction: false,
	},
	loop: true,
  });



  var swiper = new Swiper(".stay_connected_slider", {
	slidesPerView: 1,
	spaceBetween: 10,
	// pagination: {
	//   el: ".swiper-pagination",
	//   clickable: true,
	// },
	breakpoints: {
	  640: {
		slidesPerView: 2,
		spaceBetween: 10,
	  },
	  768: {
		slidesPerView: 3,
		spaceBetween: 15,
	  },
	  1024: {
		slidesPerView: 3,
		spaceBetween: 20,
	  },
	},
  });









/**
 * Initialize Pinned Gallery with GSAP ScrollTrigger
 */
(function() {
	'use strict';

	// Ensure GSAP and ScrollTrigger are available globally
	const gsap = window.gsap;
	const ScrollTrigger = window.ScrollTrigger;

	/**
	 * Initialize Pinned Gallery Animations
	 */
	const initPinnedGallery = function() {
		// Check if GSAP and ScrollTrigger are loaded
		if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
			console.warn('PinnedGallery: GSAP or ScrollTrigger not loaded');
			return;
		}

		// Register ScrollTrigger plugin
		gsap.registerPlugin(ScrollTrigger);

		// Get all pinned galleries
		const pinnedGalleries = document.querySelectorAll('.pinned-gallery');
		
		if (pinnedGalleries.length === 0) {
			return; // No pinned galleries found
		}

		gsap.utils.toArray('.pinned-gallery').forEach((pinnedGallery) => {
			if (!pinnedGallery) return;

			// Handle random image rotation if class exists
			if (pinnedGallery.classList.contains('random-img-ratation')) {
				const rotatedImages = pinnedGallery.querySelectorAll('.pinned-image:not(:first-child):not(:last-child)');
				gsap.utils.toArray(rotatedImages).forEach((pImage, i, arr) => {
					let rotation = i % 2 === 0 ? gsap.utils.random(-4, 0) : gsap.utils.random(0, 4);
					gsap.set(pImage.querySelector('img'), { rotation: rotation });
				});
			}

			const pinnedImages = pinnedGallery.querySelectorAll('.pinned-image');

			pinnedImages.forEach((pImage, i, arr) => {
				if (i < arr.length - 1) {
					const durationMultiplier = arr.length - i - 1;
					const img = pImage.querySelector('img');
					
					if (!img) return;

					ScrollTrigger.create({
						trigger: pImage,
						start: function() {
							const centerPin = (window.innerHeight - img.offsetHeight) / 2;
							return "top +=" + centerPin;
						},
						end: function() {
							const durationHeight = pImage.offsetHeight * durationMultiplier;
							return "+=" + durationHeight;
						},
						pin: true,
						pinSpacing: false,
						scrub: true,
						animation: gsap.to(img, {
							scale: 0.95,
							opacity: 1,
							zIndex: 0,
							duration: 1,
							ease: "none"
						}),
					});
				}
			});
		});

		// Refresh ScrollTrigger after initialization
		ScrollTrigger.refresh();
	};

	/**
	 * Initialize when DOM and libraries are ready
	 */
	const init = function() {
		let retryCount = 0;
		const maxRetries = 10;
		const retryDelay = 500; // ms

		const tryInit = function() {
			if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
				// Wait a bit for DOM to be fully ready
				if (document.readyState === 'loading') {
					document.addEventListener('DOMContentLoaded', function() {
						setTimeout(initPinnedGallery, 100);
					});
				} else {
					setTimeout(initPinnedGallery, 100);
				}
			} else if (retryCount < maxRetries) {
				retryCount++;
				console.warn(`PinnedGallery: GSAP or ScrollTrigger not loaded, retrying (${retryCount}/${maxRetries})...`);
				setTimeout(tryInit, retryDelay);
			} else {
				console.error('PinnedGallery: Failed to load GSAP or ScrollTrigger after multiple retries.');
			}
		};

		tryInit();
	};

	// Start initialization
	init();

})();