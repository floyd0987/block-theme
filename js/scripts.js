/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/shop-main-toggle-filters.js":
/*!********************************************!*\
  !*** ./src/js/shop-main-toggle-filters.js ***!
  \********************************************/
/***/ (() => {

document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.shop-main-toggle-filters');
  const filters = document.querySelector('.shop-main-filters');
  toggleButton.addEventListener('click', function () {
    if (filters.style.display === 'none' || filters.style.display === '') {
      filters.style.display = 'block';
      filters.style.opacity = 0;
      let opacity = 0;
      const fadeIn = setInterval(function () {
        if (opacity >= 1) {
          clearInterval(fadeIn);
        }
        filters.style.opacity = opacity;
        opacity += 0.1;
      }, 30);
    } else {
      let opacity = 1;
      const fadeOut = setInterval(function () {
        if (opacity <= 0) {
          clearInterval(fadeOut);
          filters.style.display = 'none';
        }
        filters.style.opacity = opacity;
        opacity -= 0.1;
      }, 30);
    }
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _shop_main_toggle_filters__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./shop-main-toggle-filters */ "./src/js/shop-main-toggle-filters.js");
/* harmony import */ var _shop_main_toggle_filters__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_shop_main_toggle_filters__WEBPACK_IMPORTED_MODULE_0__);




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
})();

/******/ })()
;
//# sourceMappingURL=scripts.js.map