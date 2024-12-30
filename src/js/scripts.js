'use strict';

import './shop-main-toggle-filters';

/**
 * zeever-animate
 */

var elements = document.getElementsByClassName( 'zeever-animate' );

function playAnimation( element ) {
	if (
		element.getBoundingClientRect().top > 0 &&
		element.getBoundingClientRect().top <= window.innerHeight * 0.75
	) {
		element.classList.add( 'zeever-animate-init' );
	}
}

for ( let element of elements ) {
	window.addEventListener( 'load', function () {
		playAnimation( element );
	} );
	window.addEventListener( 'scroll', function () {
		playAnimation( element );
	} );
}

/**
 * HeaderVisibility
 */

const HeaderVisibility = () => {
    let prevScrollPos = window.scrollY;
    const header = document.querySelector('header');
    const defaultOpacity = 0.35;

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.scrollY;
        const maxOpacity = 0.85;
        const opacityIncrement = 0.1;

        if (prevScrollPos < currentScrollPos) {
            // Scroll down: Make header darker
            header.style.transition = 'background-color 0.3s ease';
            const currentOpacity = parseFloat(getComputedStyle(header).backgroundColor.split(',')[3]) || defaultOpacity;
            const newOpacity = Math.min(maxOpacity, currentOpacity + opacityIncrement);
            header.style.backgroundColor = `rgba(0, 0, 0, ${newOpacity})`;
        } else if (prevScrollPos > currentScrollPos) {
            // Scroll up: Lighten header back to default
            header.style.transition = 'background-color 0.3s ease';
            header.style.backgroundColor = `rgba(0, 0, 0, ${defaultOpacity})`;
        }

        prevScrollPos = currentScrollPos;
    });
};

HeaderVisibility();
