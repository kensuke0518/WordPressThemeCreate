/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/darkFunc.js":
/*!****************************!*\
  !*** ./src/js/darkFunc.js ***!
  \****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "darkFunc": function() { return /* binding */ darkFunc; }
/* harmony export */ });


var darkFunc = function darkFunc() {
  var darkCheck = document.querySelector('[data-dark="dark"]');
  var localTheme = localStorage.getItem('colormode');

  var darkOn = function darkOn() {
    document.documentElement.setAttribute('data-colormode', 'dark');
    darkCheck.checked = true;
    localStorage.setItem('colormode', 'dark');
  };

  var darkOff = function darkOff() {
    document.documentElement.removeAttribute('data-colormode', 'dark');
    darkCheck.checked = false;
    localStorage.setItem('colormode', 'light');
  }; //ダークモード自動切り替え


  switch (localTheme) {
    case 'dark':
      darkOn();
      break;

    case 'light':
      darkOff();
      break;

    default:
      var darkMode = matchMedia('(prefers-color-scheme:dark)').matches;
      darkMode ? darkOn() : darkOff();
      break;
  } //ダークモード手動切り替え


  darkCheck.addEventListener('change', function () {
    return darkCheck.checked ? darkOn() : darkOff();
  });
};

/***/ }),

/***/ "./src/js/desc2cellFunc.js":
/*!*********************************!*\
  !*** ./src/js/desc2cellFunc.js ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "desc2cellFunc": function() { return /* binding */ desc2cellFunc; }
/* harmony export */ });


function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function desc2cellFunc() {
  var dts = document.getElementsByClassName('c-desc2cell__term');

  var _iterator = _createForOfIteratorHelper(dts),
      _step;

  try {
    var _loop = function _loop() {
      var dt = _step.value;
      dt.addEventListener('click', function (e) {
        //初期化
        dt.classList.remove('is-active');
        var body = dt.closest('.c-desc2cell');
        body.style.height = '800px'; //初期化

        var actives = document.querySelectorAll('.c-desc2cell__detail');

        var _iterator3 = _createForOfIteratorHelper(actives),
            _step3;

        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var active = _step3.value;
            active.classList.remove('is-active');
          } //追加

        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }

        var box = dt.parentNode;
        var detail = box.querySelector('.c-desc2cell__detail');

        if (!detail.classList.contains('is-active')) {
          detail.classList.add('is-active');
          dt.classList.add('is-active');
        }
      });
    };

    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      _loop();
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  var outs = document.getElementsByClassName('c-desc2cell__boxout');

  var _iterator2 = _createForOfIteratorHelper(outs),
      _step2;

  try {
    var _loop2 = function _loop2() {
      var out = _step2.value;
      out.addEventListener('click', function (e) {
        //初期化
        var actives = document.querySelectorAll('.c-desc2cell__detail');

        var _iterator4 = _createForOfIteratorHelper(actives),
            _step4;

        try {
          for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
            var active = _step4.value;
            active.classList.remove('is-active');
          }
        } catch (err) {
          _iterator4.e(err);
        } finally {
          _iterator4.f();
        }

        var body = out.closest('.c-desc2cell');
        body.style.height = 'auto';
      });
    };

    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      _loop2();
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
}

/***/ }),

/***/ "./src/js/gmenuFunc.js":
/*!*****************************!*\
  !*** ./src/js/gmenuFunc.js ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "gmenuFunc": function() { return /* binding */ gmenuFunc; }
/* harmony export */ });


function gmenuFunc() {
  var gmenuOpenBtn = document.querySelector('.gmenu-open');
  var gmenu = document.querySelector('.gmenu');
  gmenuOpenBtn.addEventListener('click', function (e) {
    gmenuOpenBtn.classList.toggle('is-open');
    gmenu.classList.toggle('is-open');
    document.body.classList.toggle('gmenu-is-open');
  });
}

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _gmenuFunc__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./gmenuFunc */ "./src/js/gmenuFunc.js");
/* harmony import */ var _desc2cellFunc__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./desc2cellFunc */ "./src/js/desc2cellFunc.js");
/* harmony import */ var _darkFunc__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./darkFunc */ "./src/js/darkFunc.js");
/* harmony import */ var _searchFunc__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./searchFunc */ "./src/js/searchFunc.js");






(0,_gmenuFunc__WEBPACK_IMPORTED_MODULE_0__.gmenuFunc)();
(0,_desc2cellFunc__WEBPACK_IMPORTED_MODULE_1__.desc2cellFunc)();
(0,_darkFunc__WEBPACK_IMPORTED_MODULE_2__.darkFunc)();
(0,_searchFunc__WEBPACK_IMPORTED_MODULE_3__.searchFunc)();

/***/ }),

/***/ "./src/js/searchFunc.js":
/*!******************************!*\
  !*** ./src/js/searchFunc.js ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "searchFunc": function() { return /* binding */ searchFunc; }
/* harmony export */ });


var searchFunc = function searchFunc() {
  var outside = document.querySelector('.p-inclusion-rows');
  var searchInput = document.querySelector('.c-search');
  var searchElms, inputWords;
  searchInput.addEventListener('focus', function (e) {
    searchElms = document.querySelectorAll('.c-card-2');
  });
  searchInput.addEventListener('input', function (e) {
    var nothingCheck = [];
    inputWords = e.target.value;
    searchElms.forEach(function (elm) {
      var elmText = elm.querySelector('.c-card__title');
      var searchText = elmText.textContent;

      var nothingFunc = function nothingFunc(disp, pushNum) {
        elm.style.display = disp;
        nothingCheck.push(pushNum);
      };

      searchText.includes(inputWords) ? nothingFunc('', 0) : nothingFunc('none', 1);
    });

    if (!nothingCheck.includes(0) && inputWords !== '') {
      var nothingElm = document.createElement('p');
      var nothingText = document.createTextNode('検索結果はありません');
      nothingElm.appendChild(nothingText);
      nothingElm.id = 'nothing';

      if (!outside.querySelector('#nothing')) {
        outside.appendChild(nothingElm);
      }
    } else if (nothingCheck.includes(0)) {
      var no = outside.querySelector('#nothing');
      if (no) no.remove();
    }
  });
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
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
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./src/js/index.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;
//# sourceMappingURL=index.js.map