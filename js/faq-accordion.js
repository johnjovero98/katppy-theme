console.log('accordion script loaded as it SHOUDTTTT <33333');

// Add chevron to each accordion question
const accordionQuestions = document.querySelectorAll('.accordion-question');

accordionQuestions.forEach(function (accordionQuestion) {
    const chevronSVGTemplate = `
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
             class="down-chevron">
            <path stroke-linecap="round" stroke-linejoin="round" 
                  d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>`;

    accordionQuestion.insertAdjacentHTML('beforeend', chevronSVGTemplate);

    // Add click listener to each individual question
    accordionQuestion.addEventListener('click', function () {
        const answer = this.nextElementSibling; // assumes answer follows question in DOM
        const chevron = this.querySelector('.down-chevron');

        answer.classList.toggle('show-answer');
        chevron.classList.toggle('rotate');
    });
});