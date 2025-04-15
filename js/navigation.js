(function () {
	console.log('navigation.js script is loaded purrr <3');

	const chevronSVGTemplate = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="down-chevron">
									<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
								</svg>`;

	// add down chevron 
	function appendChevronToElements(elements) {
		document.querySelectorAll(elements).forEach((element) => {
			element.insertAdjacentHTML('beforeend', chevronSVGTemplate);
		});
	};

	// Add chevron to submenu items and currency widget
	appendChevronToElements('.menu-item-has-children');
	appendChevronToElements('.wmc-current-currency-arrow');

	// Mobile Toggle Navigation
	const menuToggleButton = document.getElementById('menu-toggle');
	const menuCloseButton = document.getElementById('close-button');
	const mobileNavOverlay = document.getElementById('mobile-nav-overlay');
	const mobileMenu = document.getElementById('mobile-site-navigation');

	function toggleMobileNavigation(button) {
		button.addEventListener('click', () => {
			mobileNavOverlay.classList.toggle('show-overlay');
			const isExpanded = mobileMenu.classList.toggle('show-navigation');
			menuToggleButton.setAttribute('aria-expanded', isExpanded);
			mobileMenu.setAttribute('aria-hidden', !isExpanded);
		});
	}

	// Initial ARIA state
	menuToggleButton.setAttribute('aria-expanded', 'false');
	menuToggleButton.setAttribute('aria-controls', 'mobile-site-navigation');
	mobileMenu.setAttribute('aria-hidden', 'true');
	mobileMenu.setAttribute('role', 'navigation');

	// invoke toggle
	toggleMobileNavigation(menuToggleButton);
	toggleMobileNavigation(menuCloseButton);
	toggleMobileNavigation(mobileNavOverlay);


	// mobile sub menu toggle;
	const mobileSubMenu = document.querySelector('#mobile-site-navigation #primary-menu > .menu-item-has-children > .sub-menu')
	const mobileSubMenuButton = document.querySelector('#mobile-site-navigation #primary-menu > .menu-item-has-children > .down-chevron')

	mobileSubMenuButton.addEventListener('click', function () {
		mobileSubMenu.classList.toggle('show-sub-menu')
		console.log('button is clicked')
	})

	console.log(mobileSubMenu)
	console.log(mobileSubMenuButton)
})();


