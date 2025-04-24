/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$.fn.ryderRepeat = function (option) {

	return this.each(function () {

		var $this = $(this);

		var deFault = {

			img: '',

			size: 8

		};

		var setting = $.extend(deFault, option);

		var $div = '<div class="item"><img src="' + setting.img + '"></div>';

		var _html = '';

		for (var i = 0; i < setting.size; i++) {

			_html += $div;
		}

		$this.append(_html);

		var _offset = setting.size / 2 / 10 * -1;

		var $repeat = $(".item", $this).get();

		var $repeat2 = $(".item", $this).not(':first').get();

		$($repeat).css("opacity", 0);

		gsap.timeline({

			scrollTrigger: {

				trigger: $this,

				toggleActions: "play none play none",

				start: "top 70%",

				end: "bottom 50%"

				// markers: true,

			}

		}).to($repeat, {

			duration: 0.2,

			opacity: 1,

			stagger: {

				each: .1,

				from: "end"

			}

		}).to($repeat2, {

			duration: 0.2,

			opacity: 0,

			stagger: {

				each: .1,

				from: "end"

			}

		}, '>' + _offset);
	});
};

$(window).on("resize", function () {

	if ($(this).width() > 1600) {

		if (window.device == 'mobile' || window.device == 'laptop') {

			location.reload();
		}

		window.device = 'desktop';
	} else if ($(this).width() > 1025) {

		if (window.device == 'mobile' || window.device == 'desktop') {

			location.reload();
		}

		window.device = 'laptop';
	} else {

		if (window.device == 'desktop' || window.device == 'laptop') {

			location.reload();
		}

		window.device = 'mobile';
	}
}).trigger("resize");

$(window).on("scroll", function () {

	var _scrollTop = $(this).scrollTop();

	if (_scrollTop >= 100) {

		$(".logo-fixed, .topmenuWrap").addClass("is-small");

		$(".topmenu-bg").addClass("is-show");
	} else {

		$(".logo-fixed, .topmenuWrap").removeClass("is-small");

		$(".topmenu-bg").removeClass("is-show");
	}
}).trigger("scroll");

$(window).on("load", function () {

	var rellax = new Rellax('.rellax');
});

if (device != 'mobile') {

	gsap.ticker.add(ryderParallax);
}

var mouse = { x: 0, y: 0, moved: false };

$(window).mousemove(function (e) {

	mouse.moved = true;

	mouse.x = e.clientX - $(window).width() / 2;

	mouse.y = e.clientY - $(window).height() / 2;
});

function ryderParallax() {

	if (mouse.moved) {

		$("[data-parallax]").each(function (i, el) {

			parallaxIt(el, $(el).data("parallax"));
		});
	}

	mouse.moved = false;
}

function parallaxIt(el, p) {

	gsap.to(el, 0.5, {

		x: mouse.x * p,

		y: mouse.y * p,

		ease: 'power1.out'

	});
}

$("#preload").delay(200).fadeOut(500);

$(".hamburger, .mobile-topmenuopenWrap .close").on("click", function () {

	$(this).toggleClass("is-open");

	$(".topmenuopenWrap").fadeToggle(500);

	$(".logo-fixed, .topmenuWrap").toggleClass("is-open");

	$(".mobile-topmenuopenWrap").fadeToggle(500);
});

$("[data-r]").each(function (i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {

		var _p = $(el).data("mobile-r");
	} else {

		var _p = $(el).data("r");
	}

	var _st_default = {

		trigger: el,

		start: "top 90%",

		end: "bottom 0%",

		toggleActions: "play none play none"

		// markers: true,

	};

	var _st = Object.assign(_st_default, _p.scrollTrigger);

	var _t = $(el).offset().top;

	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100;

	if (_t <= _hook) {

		_p.delay = _p.delay != undefined ? _p.delay += .3 : .3;
	}

	delete _p.scrollTrigger;

	var _setting = {

		scrollTrigger: _st,

		duration: 1.2,

		// opacity: 0,

		ease: "power2.out"

	};

	if (_p != '' && "stagger" in _p) {

		var $el = $(el).children();
	} else {

		var $el = el;
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
});

/***/ })
/******/ ]);