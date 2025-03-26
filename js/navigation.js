/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
	console.log('navigation.js script is loaded purrr<3');

	const siteNavigation = document.getElementById('site-navigation');
	const menuButton = document.getElementById('menu-toggle');
	const overlay = document.getElementById('overlay');

	// toggle mobile navigation
	menuButton.addEventListener('click', function () {
		console.log('menu button clicked');

		siteNavigation.classList.toggle('show-mobile-menu');
		overlay.classList.toggle('show-overlay');

		// ARIA lables toggle
		siteNavigation.classList.toggle('toggled');
		if (menuButton.getAttribute('aria-expanded') === 'true') {
			menuButton.setAttribute('aria-expanded', 'false');
		} else {
			menuButton.setAttribute('aria-expanded', 'true');
		}
	});


	// mobile navigation on page load state
	if (window.innerWidth < 1024) {
		siteNavigation.classList.add('is-mobile');
	}

	// remove "is-mobile" class on window resize  < 1024px
	window.addEventListener('resize', function () {
		if (window.innerWidth >= 1024) {
			siteNavigation.classList.remove('is-mobile');
			siteNavigation.classList.remove('show-mobile-menu');
			siteNavigation.classList.remove('toggled');
			overlay.classList.remove('show-overlay');
			menuButton.setAttribute('aria-expanded', 'false');
		} else {
			siteNavigation.classList.add('is-mobile');
		}
	});


	// close mobile navigation on overlay click
	overlay.addEventListener('click', function () {
		siteNavigation.classList.remove('show-mobile-menu');
		overlay.classList.remove('show-overlay');
		menuButton.setAttribute('aria-expanded', 'false');
	}
	);

	
}());
