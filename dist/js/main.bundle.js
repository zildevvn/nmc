/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/components/function.js":
/*!******************************************!*\
  !*** ./assets/js/components/function.js ***!
  \******************************************/
/***/ (() => {

eval("{(function ($) {\n  \"use strict\";\n\n  $(document).ready(function () {\n    $('.btn-top').on('click', function (e) {\n      e.preventDefault();\n      $('html, body').animate({\n        scrollTop: 0\n      }, 600);\n    });\n  });\n})(jQuery);\n\n//# sourceURL=webpack://nmc/./assets/js/components/function.js?\n}");

/***/ }),

/***/ "./assets/js/components/header.js":
/*!****************************************!*\
  !*** ./assets/js/components/header.js ***!
  \****************************************/
/***/ (() => {

eval("{(function ($) {\n  \"use strict\";\n\n  $(window).on(\"load\", function () {});\n\n  // Mobile Menu Functions\n  function initMobileMenu() {\n    var $hamburgerBtn = $('.humberger-btn');\n    var $closeBtn = $('.menu-close-btn');\n    var $overlay = $('.mobile-menu-overlay');\n    var $body = $('body');\n    function toggleMobileMenu(e) {\n      if (e) e.preventDefault();\n      var isOpen = $overlay.hasClass('is-active');\n      if (isOpen) {\n        $overlay.removeClass('is-active');\n        $hamburgerBtn.removeClass('is-active');\n        $body.css('overflow', '');\n      } else {\n        $overlay.addClass('is-active');\n        $hamburgerBtn.addClass('is-active');\n        $body.css('overflow', 'hidden'); // Prevent background scrolling\n      }\n    }\n    $hamburgerBtn.on('click', toggleMobileMenu);\n    $closeBtn.on('click', toggleMobileMenu);\n  }\n  $(document).ready(function () {\n    initMobileMenu();\n  });\n})(jQuery);\n\n//# sourceURL=webpack://nmc/./assets/js/components/header.js?\n}");

/***/ }),

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("{__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_header__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/header */ \"./assets/js/components/header.js\");\n/* harmony import */ var _components_header__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_header__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_function__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/function */ \"./assets/js/components/function.js\");\n/* harmony import */ var _components_function__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_function__WEBPACK_IMPORTED_MODULE_1__);\n\n\n\n//# sourceURL=webpack://nmc/./assets/js/index.js?\n}");

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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/index.js");
/******/ 	
/******/ })()
;