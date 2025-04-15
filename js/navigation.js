(function () {
	console.log('navigation.js script is loaded purrr <3');

	const chevronSVGTemplate = `
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="down-chevron">
	  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
	</svg>
  `;

	// add down chevron 
	function appendChevronToElements(elements) {
		document.querySelectorAll(elements).forEach((element) => {
			element.insertAdjacentHTML('beforeend', chevronSVGTemplate);
		});
	}

	// Add chevron to submenu items and currency widget
	appendChevronToElements('.menu-item-has-children');
	appendChevronToElements('.wmc-current-currency-arrow');

})();


