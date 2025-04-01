(function () {
    console.log('scripts for filter is loaded. AS IT SHOUlLDTTTTT <3333');

    // Initialize UI variables
    const filterWrapper = document.querySelector('.product-filter-wrapper');
    const filterToggleButton = document.querySelector('.filter-button');
    const filterCloseButton = document.querySelector('.filter-close-button');

    // Set initial ARIA attributes
    filterToggleButton.setAttribute('aria-controls', 'product-filters');
    filterToggleButton.setAttribute('aria-expanded', 'false');
    filterWrapper.setAttribute('id', 'product-filter-wrapper');

    // Set `is-mobile` class and `aria-hidden` based on window width
    function updateFilterVisibility() {
        if (window.innerWidth < 1024) {
            filterWrapper.classList.add('is-mobile');
            filterWrapper.setAttribute('aria-hidden', 'true');
            filterToggleButton.setAttribute('aria-expanded', 'false');
        } else {
            filterWrapper.classList.remove('is-mobile');
            filterWrapper.setAttribute('aria-hidden', 'false');
            filterToggleButton.setAttribute('aria-expanded', 'true'); 
        }
    }
    updateFilterVisibility(); // Run on load

    window.addEventListener('resize', updateFilterVisibility);
    // Toggle filter on button click
    filterToggleButton.addEventListener('click', function () {
        const isExpanded = filterToggleButton.getAttribute('aria-expanded') === 'true';

        filterWrapper.classList.toggle('show-mobile-filter');
        filterWrapper.setAttribute('aria-hidden', isExpanded ? 'true' : 'false');
        filterToggleButton.setAttribute('aria-expanded', !isExpanded);
    });

    // Close filter when clicking the close button
    filterCloseButton.addEventListener('click', function () {
        filterWrapper.classList.remove('show-mobile-filter');
        filterWrapper.setAttribute('aria-hidden', 'true');
        filterToggleButton.setAttribute('aria-expanded', 'false');
    });

})();
