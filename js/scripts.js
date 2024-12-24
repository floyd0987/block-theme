/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/


/**
 * zeever-animate
 */
var elements = document.getElementsByClassName('zeever-animate');
function playAnimation(element) {
  if (element.getBoundingClientRect().top > 0 && element.getBoundingClientRect().top <= window.innerHeight * 0.75) {
    element.classList.add('zeever-animate-init');
  }
}
for (let element of elements) {
  window.addEventListener('load', function () {
    playAnimation(element);
  });
  window.addEventListener('scroll', function () {
    playAnimation(element);
  });
}

/**
 * HeaderVisibility
 */

const HeaderVisibility = () => {
  let prevScrollPos = window.scrollY;
  const header = document.querySelector('header');
  window.addEventListener('scroll', () => {
    const currentScrollPos = window.scrollY;
    if (prevScrollPos < currentScrollPos) {
      // Scroll down: Hide the header with fade-out
      header.style.transition = 'opacity 0.3s ease';
      header.style.opacity = '0';
      // setTimeout(() => {
      //   header.style.display = "none";
      // }, 300);
    } else if (prevScrollPos > currentScrollPos) {
      // Scroll up: Show the header
      header.style.display = 'block'; // Ensure it's visible first
      header.style.transition = 'opacity 0.3s ease';
      header.style.opacity = '1';
    }
    prevScrollPos = currentScrollPos;
  });
};
HeaderVisibility();
/******/ })()
;
//# sourceMappingURL=scripts.js.map