(function () {
	console.log('navigation.js script is loaded purrr <3');

	const siteNavigation = document.getElementById('site-navigation');
	const menuButton = document.getElementById('menu-toggle');
	const overlay = document.getElementById('overlay');
	const closeButton = document.getElementById('close-button');

	// Add chevron to sub menu items *before* selecting .down-chevron
	const subMenuItems = document.querySelectorAll('.menu-item-has-children');
	subMenuItems.forEach(function (subMenuItem) {
		const chevronSVGTemplate = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="down-chevron">
										<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
									</svg>`;
		subMenuItem.insertAdjacentHTML('beforeend', chevronSVGTemplate);
	});

	const mobileSubMenuBttn = document.querySelector('.down-chevron');
	const mobileSubMenu = document.querySelector('.sub-menu');



	// Add ARIA Label to mobile sub menu toggle
	if (mobileSubMenuBttn && mobileSubMenu) {
		mobileSubMenu.setAttribute('aria-hidden', 'true');
		mobileSubMenuBttn.setAttribute('aria-expanded', 'false');
		mobileSubMenuBttn.setAttribute('aria-controls', 'mobile-submenu');

		if (!mobileSubMenu.id) {
			mobileSubMenu.id = 'mobile-submenu';
		}

		// Toggle mobile submenu
		mobileSubMenuBttn.addEventListener('click', () => {
			mobileSubMenu.classList.toggle('show-sub-menu');

			// Toggle ARIA attributes
			const isExpanded = mobileSubMenuBttn.getAttribute('aria-expanded') === 'true';
			mobileSubMenuBttn.setAttribute('aria-expanded', !isExpanded);
			mobileSubMenu.setAttribute('aria-hidden', isExpanded);
		});
	}


	// Ensure menuButton exists before adding event listeners
	if (menuButton) {
		menuButton.addEventListener('click', function () {
			console.log('menu button clicked');

			siteNavigation.classList.toggle('show-mobile-menu');
			overlay.classList.toggle('show-overlay');

			const expanded = menuButton.getAttribute('aria-expanded') === 'true';
			menuButton.setAttribute('aria-expanded', !expanded);
			closeButton.setAttribute('aria-expanded', !expanded);
			siteNavigation.setAttribute('aria-hidden', expanded);
		});
	}

	// Close menu on overlay click
	if (overlay) {
		overlay.addEventListener('click', function () {
			siteNavigation.classList.remove('show-mobile-menu');
			overlay.classList.remove('show-overlay');

			menuButton.setAttribute('aria-expanded', 'false');
			closeButton.setAttribute('aria-expanded', 'false');
			siteNavigation.setAttribute('aria-hidden', 'true');
		});
	}

	// Close menu on close button click
	if (closeButton) {
		closeButton.addEventListener('click', function () {
			siteNavigation.classList.remove('show-mobile-menu');
			overlay.classList.remove('show-overlay');

			menuButton.setAttribute('aria-expanded', 'false');
			closeButton.setAttribute('aria-expanded', 'false');
			siteNavigation.setAttribute('aria-hidden', 'true');
		});
	}

	// Mobile navigation state on page load
	if (window.innerWidth < 1024) {
		siteNavigation.classList.add('is-mobile');
		siteNavigation.classList.remove('is-desktop');
		siteNavigation.setAttribute('aria-hidden', 'true');
	} else {
		siteNavigation.classList.add('is-desktop');
		siteNavigation.classList.remove('is-mobile');
		siteNavigation.classList.remove('show-mobile-menu');
		overlay.classList.remove('show-overlay');
		siteNavigation.setAttribute('aria-hidden', 'false');
		menuButton.setAttribute('aria-expanded', 'false');
		closeButton.setAttribute('aria-expanded', 'false');
	}

	// Handle window resize for mobile vs desktop navigation
	window.addEventListener('resize', function () {
		if (window.innerWidth >= 1024) {
			siteNavigation.classList.add('is-desktop');
			siteNavigation.classList.remove('is-mobile', 'show-mobile-menu');
			overlay.classList.remove('show-overlay');

			siteNavigation.setAttribute('aria-hidden', 'false');
			menuButton.setAttribute('aria-expanded', 'false');
			closeButton.setAttribute('aria-expanded', 'false');
		} else {
			siteNavigation.classList.add('is-mobile');
			siteNavigation.classList.remove('is-desktop');
			siteNavigation.setAttribute('aria-hidden', 'true');
		}
	});
})();
