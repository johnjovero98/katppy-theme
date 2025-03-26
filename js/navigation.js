/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
	console.log('navigation.js script is loaded purrr <3');

	const siteNavigation = document.getElementById('site-navigation');
	const menuButton = document.getElementById('menu-toggle');
	const overlay = document.getElementById('overlay');
	const closeButton = document.getElementById('close-button');

	// toggle mobile navigation
	menuButton.addEventListener('click', function () {
		console.log('menu button clicked');

		siteNavigation.classList.toggle('show-mobile-menu');
		overlay.classList.toggle('show-overlay');

		// ARIA attributes toggle
		const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
		menuButton.setAttribute('aria-expanded', !expanded);
		closeButton.setAttribute('aria-expanded', !expanded);
		siteNavigation.setAttribute("aria-hidden", expanded);
	});


	// mobile navigation on page load state
	if (window.innerWidth < 1024) {
		siteNavigation.classList.add('is-mobile');
		siteNavigation.classList.remove('is-desktop');

		// ARIA attributes toggle
		siteNavigation.setAttribute("aria-hidden", "true");
	}

	if (window.innerWidth >= 1024) {
		siteNavigation.classList.add('is-desktop');
		siteNavigation.classList.remove('is-mobile');
		siteNavigation.classList.remove('show-mobile-menu');

		overlay.classList.remove('show-overlay');

		// aria attributes toggle
		siteNavigation.setAttribute("aria-hidden", "false");
		menuButton.setAttribute('aria-expanded', 'false');
		closeButton.setAttribute('aria-expanded', 'false');

	}

	// remove "is-mobile" class on window resize  < 1024px
	window.addEventListener('resize', function () {
		if (window.innerWidth >= 1024) {
			// UI state
			siteNavigation.classList.add('is-desktop');
			siteNavigation.classList.remove('is-mobile');
			siteNavigation.classList.remove('show-mobile-menu');
			overlay.classList.remove('show-overlay');


			// aria attributes toggle
			siteNavigation.setAttribute("aria-hidden", "false");
			menuButton.setAttribute('aria-expanded', 'false');
			closeButton.setAttribute('aria-expanded', 'false');


		} else {
			// UI state
			siteNavigation.classList.add('is-mobile');
			siteNavigation.classList.remove('is-desktop');

			// ARIA attributes toggle
			siteNavigation.setAttribute("aria-hidden", "true");
		}
	});

	// close mobile navigation on overlay click
	overlay.addEventListener('click', function () {
		// UI state
		siteNavigation.classList.remove('show-mobile-menu');
		overlay.classList.remove('show-overlay');

		// ARIA attributes toggle
		menuButton.setAttribute('aria-expanded', 'false');
		closeButton.setAttribute('aria-expanded', 'false');
		siteNavigation.setAttribute("aria-hidden", "true");


	});

	// close mobile navigation on close button click
	closeButton.addEventListener('click', function () {
		siteNavigation.classList.remove('show-mobile-menu');
		overlay.classList.remove('show-overlay');

		// ARIA attributes toggle
		menuButton.setAttribute('aria-expanded', 'false');
		closeButton.setAttribute('aria-expanded', 'false');
		siteNavigation.setAttribute("aria-hidden", "true");
	});


	// add a chevron to a sub menu item
	const subMenuItems = document.querySelectorAll('.menu-item-has-children');
	subMenuItems.forEach(function (subMenuItem) {
		const chevronSVGTemplate = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="down-chevron">
										<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
									</svg>
									`;

		subMenuItem.insertAdjacentHTML('beforeend', chevronSVGTemplate);
	});
}());
