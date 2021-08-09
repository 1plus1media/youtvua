!function(t,n){"object"==typeof exports&&"object"==typeof module?module.exports=n():"function"==typeof define&&define.amd?define([],n):"object"==typeof exports?exports.HSGoTo=n():t.HSGoTo=n()}(window,function(){return(d={"./src/js/hs-go-to.js":function(module,exports,__webpack_require__){"use strict";eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n\tvalue: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nvar HSGoTo = function () {\n\tfunction HSGoTo(elem, settings) {\n\t\t_classCallCheck(this, HSGoTo);\n\n\t\tthis.elem = elem;\n\t\tthis.defaults = {\n\t\t\tpageContainerSelector: 'html, body',\n\t\t\ttargetSelector: null,\n\t\t\tcompensationSelector: null,\n\n\t\t\tanimationInit: 'animated',\n\t\t\tanimationIn: 'fadeInUp',\n\t\t\tanimationOut: 'fadeOutDown',\n\t\t\tduration: 800,\n\n\t\t\toffsetTop: 0,\n\t\t\tposition: {\n\t\t\t\tinit: null,\n\t\t\t\thide: null,\n\t\t\t\tshow: null\n\t\t\t},\n\n\t\t\tisReferencedToOtherPage: null,\n\t\t\tpreventEventClass: 'hs-go-to-prevent-event'\n\t\t};\n\t\tthis.settings = settings;\n\t}\n\n\t_createClass(HSGoTo, [{\n\t\tkey: 'init',\n\t\tvalue: function init() {\n\t\t\tvar context = this,\n\t\t\t    $el = context.elem,\n\t\t\t    dataSettings = $el.attr('data-hs-go-to-options') ? JSON.parse($el.attr('data-hs-go-to-options')) : {},\n\t\t\t    options = $.extend(true, context.defaults, dataSettings, context.settings);\n\n\t\t\toptions.targetOffsetTop = function () {\n\t\t\t\tif ($(options.compensationSelector).length) {\n\t\t\t\t\treturn $(options.targetSelector) ? $(options.targetSelector).offset().top - $(options.compensationSelector).outerHeight() : 0;\n\t\t\t\t} else {\n\t\t\t\t\treturn $(options.targetSelector) ? $(options.targetSelector).offset().top : 0;\n\t\t\t\t}\n\t\t\t};\n\n\t\t\tcontext._prepareObject($el, options);\n\n\t\t\t// Set Position\n\t\t\tif (options.position) {\n\t\t\t\tcontext._setPosition($el, options.position.init);\n\t\t\t}\n\n\t\t\t// Click Events\n\t\t\t$el.on('click', function (e) {\n\t\t\t\tcontext._clickEvents($el, options, e);\n\t\t\t});\n\n\t\t\t// Scroll Events\n\t\t\tif (options.animationIn && options.animationOut) {\n\t\t\t\t$(window).on('scroll', function () {\n\t\t\t\t\tcontext._scrollEvents($el, options);\n\t\t\t\t});\n\t\t\t}\n\t\t}\n\t}, {\n\t\tkey: '_prepareObject',\n\t\tvalue: function _prepareObject(el, params) {\n\t\t\tvar options = params;\n\n\t\t\tif (params.animationIn && params.animationOut) {\n\t\t\t\tif (navigator.userAgent.match('MSIE 10.0;')) {\n\t\t\t\t\t$('html').addClass('ie10');\n\t\t\t\t}\n\n\t\t\t\tel.addClass(options.animationInit + ' ' + options.animationOut + ' ' + options.preventEventClass);\n\t\t\t}\n\t\t}\n\t}, {\n\t\tkey: '_setPosition',\n\t\tvalue: function _setPosition(el, params) {\n\t\t\tvar options = params;\n\n\t\t\tel.css(options);\n\t\t}\n\t}, {\n\t\tkey: '_clickEvents',\n\t\tvalue: function _clickEvents(el, params, event) {\n\t\t\tvar options = params;\n\n\t\t\tif (!options.isReferencedToOtherPage) {\n\t\t\t\tif (event) {\n\t\t\t\t\tevent.preventDefault();\n\t\t\t\t}\n\n\t\t\t\t$(options.pageContainerSelector).stop().animate({\n\t\t\t\t\tscrollTop: options.targetOffsetTop()\n\t\t\t\t}, options.duration);\n\t\t\t}\n\t\t}\n\t}, {\n\t\tkey: '_scrollEvents',\n\t\tvalue: function _scrollEvents(el, params) {\n\t\t\tvar options = params;\n\n\t\t\tel.css('visibility', '');\n\n\t\t\tif ($(window).scrollTop() >= options.offsetTop) {\n\t\t\t\tif (options.position.show) {\n\t\t\t\t\tel.css(options.position.show);\n\t\t\t\t}\n\n\t\t\t\tel.removeClass(options.animationOut).addClass(options.animationIn);\n\t\t\t} else {\n\t\t\t\tif (options.position.hide) {\n\t\t\t\t\tel.css(options.position.hide);\n\t\t\t\t}\n\n\t\t\t\tel.removeClass(options.animationIn).addClass(options.animationOut);\n\t\t\t}\n\t\t}\n\t}]);\n\n\treturn HSGoTo;\n}();\n\nexports.default = HSGoTo;\n\n//# sourceURL=webpack://HSGoTo/./src/js/hs-go-to.js?")}},e={},f.m=d,f.c=e,f.d=function(t,n,e){f.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},f.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},f.t=function(n,t){if(1&t&&(n=f(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var e=Object.create(null);if(f.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)f.d(e,o,function(t){return n[t]}.bind(null,o));return e},f.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return f.d(n,"a",n),n},f.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},f.p="",f(f.s="./src/js/hs-go-to.js")).default;function f(t){if(e[t])return e[t].exports;var n=e[t]={i:t,l:!1,exports:{}};return d[t].call(n.exports,n,n.exports,f),n.l=!0,n.exports}var d,e});
;!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n():"function"==typeof define&&define.amd?define([],n):"object"==typeof exports?exports.HSUnfold=n():e.HSUnfold=n()}(window,function(){return d={"./src/js/hs-unfold.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return HSUnfold; });\n/* harmony import */ var _methods_smart_position__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./methods/smart-position */ \"./src/js/methods/smart-position.js\");\n/* harmony import */ var _methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./methods/close-element-with-specific-effect */ \"./src/js/methods/close-element-with-specific-effect.js\");\n/* harmony import */ var _modes_simple__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modes/simple */ \"./src/js/modes/simple.js\");\n/* harmony import */ var _methods_simple_show__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./methods/simple-show */ \"./src/js/methods/simple-show.js\");\n/* harmony import */ var _modes_css_animation__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modes/css-animation */ \"./src/js/modes/css-animation.js\");\n/* harmony import */ var _methods_css_animation_show__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./methods/css-animation-show */ \"./src/js/methods/css-animation-show.js\");\n/* harmony import */ var _modes_slide__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modes/slide */ \"./src/js/modes/slide.js\");\n/* harmony import */ var _methods_slide_show__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./methods/slide-show */ \"./src/js/methods/slide-show.js\");\nfunction _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\n\n\n\n\n\n\n\n\n\nvar HSUnfold = /*#__PURE__*/function () {\n  function HSUnfold(elem, settings) {\n    _classCallCheck(this, HSUnfold);\n\n    this.elem = elem;\n    this.defaults = {\n      event: 'click',\n      type: 'simple',\n      duration: 300,\n      delay: 350,\n      easing: 'linear',\n      animationIn: 'slideInUp',\n      animationOut: 'fadeOut',\n      hideOnScroll: false,\n      hasOverlay: false,\n      smartPositionOff: false,\n      isFullWindow: false,\n      wrapperSelector: '.hs-unfold',\n      contentSelector: '.hs-unfold-content',\n      invokerSelector: '.js-hs-unfold-invoker',\n      invokerActiveClass: '.hs-active',\n      overlayClass: '.hs-unfold-overlay',\n      overlayStyles: {},\n      initializedClass: '.hs-unfold-content-initialized',\n      hiddenClass: '.hs-unfold-hidden',\n      simpleEffectClass: '.hs-unfold-simple',\n      cssAnimationClass: '.hs-unfold-css-animation',\n      cssAnimatedClass: '.animated',\n      slideEffectClass: '.hs-unfold-jquery-slide',\n      reverseClass: '.hs-unfold-reverse-y',\n      unfoldTimeOut: null,\n      afterOpen: function afterOpen() {},\n      afterClose: function afterClose() {}\n    };\n    this.settings = settings;\n  }\n\n  _createClass(HSUnfold, [{\n    key: \"init\",\n    value: function init() {\n      var context = this; // Keycodes\n\n      var ESC_KEYCODE = 27,\n          TAB_KEYCODE = 9,\n          ENTER_KEYCODE = 13,\n          SPACE_KEYCODE = 32,\n          ARROW_UP_KEYCODE = 38,\n          ARROW_DOWN_KEYCODE = 40,\n          ARROW_RIGHT_KEYCODE = 39,\n          ARROW_LEFT_KEYCODE = 37; // Prevent scroll\n\n      function preventScroll(keycode) {\n        return function (e) {\n          if (e.which === keycode) {\n            e.preventDefault();\n          }\n        };\n      } // Get Item Settings\n\n\n      function getItemSettings(el) {\n        var $el = el,\n            dataSettings = $el.attr('data-hs-unfold-options') ? JSON.parse($el.attr('data-hs-unfold-options')) : {};\n        var options = Object.assign({}, context.defaults, context.settings, dataSettings);\n        return options;\n      } // Init Unfold\n\n\n      $(this.elem).each(function () {\n        context.UnfoldItem($(this));\n      }); // *****\n      // Start: ACCESSIBILITY\n      // *****\n\n      var myPreventScrollSpace = preventScroll(SPACE_KEYCODE),\n          myPreventScrollDown = preventScroll(ARROW_DOWN_KEYCODE),\n          myPreventScrollUp = preventScroll(ARROW_UP_KEYCODE);\n      var $items,\n          index,\n          itemSettings,\n          ingnore = [\"INPUT\"];\n      $(document).on('keyup', '[data-hs-unfold-invoker], [data-hs-unfold-content]', function (e) {\n        if (e.which !== ESC_KEYCODE && e.which !== TAB_KEYCODE && e.which !== ENTER_KEYCODE && e.which !== SPACE_KEYCODE && e.which !== ARROW_UP_KEYCODE && e.which !== ARROW_DOWN_KEYCODE || ingnore.includes(e.target.tagName.toUpperCase())) {\n          return;\n        } //\n        // Start: PREVENT SCROLL\n        //\n\n\n        e.preventDefault();\n        e.stopPropagation();\n        window.addEventListener('keydown', myPreventScrollSpace, false);\n        window.addEventListener('keydown', myPreventScrollUp, false);\n        window.addEventListener('keydown', myPreventScrollDown, false); //\n        // End: PREVENT SCROLL\n        //\n\n        if (_typeof($(e.target).attr('data-hs-unfold-invoker')) !== ( true ? \"undefined\" : undefined) && $(e.target).attr('data-hs-unfold-invoker') !== false) {\n          itemSettings = getItemSettings($(e.target));\n          $items = [].slice.call($(itemSettings.target).find('a, button, input, select, textarea')).filter(function (item) {\n            return $(item).is(':visible');\n          });\n        }\n\n        index = $items.indexOf(e.target); //\n        // End: HAS ITEMS\n        //\n        // Up\n\n        if ($items.length > 0 && e.which === ARROW_UP_KEYCODE && index > 0) {\n          index--;\n        } // Down\n\n\n        if ($items.length > 0 && e.which === ARROW_DOWN_KEYCODE && index < $items.length - 1) {\n          index++;\n        } // Open Dropdown\n\n\n        if ($items.length <= 0 && (e.which === ARROW_DOWN_KEYCODE || e.which === ARROW_UP_KEYCODE || e.which === SPACE_KEYCODE || e.which === ENTER_KEYCODE)) {\n          if (!$(\"\".concat(itemSettings.target, \":visible\")).length) {\n            $(e.target).addClass(itemSettings.invokerActiveClass.slice(1));\n\n            if (itemSettings.type === 'css-animation') {\n              Object(_methods_css_animation_show__WEBPACK_IMPORTED_MODULE_5__[\"default\"])($(itemSettings.target), itemSettings);\n            } else if (itemSettings.type === 'jquery-slide') {\n              Object(_methods_slide_show__WEBPACK_IMPORTED_MODULE_7__[\"default\"])($(itemSettings.target), itemSettings, function () {});\n            } else {\n              Object(_methods_simple_show__WEBPACK_IMPORTED_MODULE_3__[\"default\"])($(itemSettings.target), itemSettings);\n            }\n          } else if ($(\"\".concat(itemSettings.target, \":visible\")).length) {\n            $($(itemSettings.target).find('a')[0]).focus();\n            return;\n          }\n        } // Close Self\n\n\n        if (e.which === ESC_KEYCODE) {\n          var _$target = $(\"\".concat(itemSettings.contentSelector, \":not(\").concat(itemSettings.hiddenClass, \")\")); // $(itemSettings.invokerActiveClass).focus();\n\n\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])(_$target, itemSettings, _$target.data('hs-unfold-content-animation-in'), _$target.data('hs-unfold-content-animation-out'));\n          return;\n        } // Close All\n\n\n        if (e.which === TAB_KEYCODE && $(e.target).closest('[data-hs-unfold-content]').length === 0) {\n          var $invoker = $('[data-hs-unfold-invoker].hs-active'),\n              $target = $('[data-hs-unfold-content]:visible'),\n              openedItemSettings = getItemSettings($invoker);\n          $invoker.removeClass('hs-active');\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($target, openedItemSettings, $target.data('hs-unfold-content-animation-in'), $target.data('hs-unfold-content-animation-out'));\n          return;\n        } //\n        // End: HAS ITEMS\n        //\n\n\n        $($items[index]).focus();\n      });\n      $(document).on('keyup', function (e) {\n        var $invoker, $target, openedItemSettings; // Close All\n\n        if (e.which === TAB_KEYCODE && $(e.target).closest('[data-hs-unfold-content]').length === 0) {\n          $invoker = $('[data-hs-unfold-invoker].hs-active');\n          $target = $('[data-hs-unfold-content]:visible');\n          openedItemSettings = getItemSettings($invoker);\n          $invoker.removeClass('hs-active');\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($target, openedItemSettings, $target.data('hs-unfold-content-animation-in'), $target.data('hs-unfold-content-animation-out'));\n        } // Close Self\n\n\n        if (e.which === ESC_KEYCODE) {\n          $invoker = $('[data-hs-unfold-invoker].hs-active');\n          $target = $('[data-hs-unfold-content]:visible');\n          openedItemSettings = getItemSettings($invoker);\n          $invoker.removeClass('hs-active');\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($target, openedItemSettings, $target.data('hs-unfold-content-animation-in'), $target.data('hs-unfold-content-animation-out'));\n        }\n      }); // *****\n      // End: ACCESSIBILITY\n      // *****\n    }\n  }, {\n    key: \"UnfoldItem\",\n    value: function UnfoldItem(el) {\n      var context = this,\n          $el = el,\n          itemDataSettings = el.attr('data-hs-unfold-options') ? JSON.parse(el.attr('data-hs-unfold-options')) : {};\n      var options = Object.assign({}, context.defaults, context.settings, itemDataSettings);\n\n      context._prepareObjects($el, $(options.target), options);\n\n      $el.on(options.event === 'hover' ? 'mouseenter' : 'click', function () {\n        $(options.contentSelector).not($(options.target)).not($(options.target).parents(options.contentSelector)).each(function () {\n          $(options.invokerSelector).removeClass(options.invokerActiveClass.slice(1));\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($(this), options, options.animationIn, options.animationOut);\n        });\n      });\n\n      if (options.type === 'css-animation') {\n        Object(_modes_css_animation__WEBPACK_IMPORTED_MODULE_4__[\"default\"])($el, options, options.animationOut);\n      } else if (options.type === 'jquery-slide') {\n        Object(_modes_slide__WEBPACK_IMPORTED_MODULE_6__[\"default\"])($el, options);\n      } else {\n        Object(_modes_simple__WEBPACK_IMPORTED_MODULE_2__[\"default\"])($el, options);\n      } // Document Events\n\n\n      $(window).on('click', function (e) {\n        var targetClass = \"\".concat(options.contentSelector, \":not(\").concat(options.hiddenClass, \")\"),\n            $target = $(targetClass);\n\n        if ($(e.target).closest(options.contentSelector).length === 0 && $(e.target).closest(options.invokerSelector).length === 0 && $target.length !== 0) {\n          $el.removeClass(options.invokerActiveClass.slice(1));\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($target, options, $target.data('hs-unfold-content-animation-in'), $target.data('hs-unfold-content-animation-out'));\n        } else if ($(e.target).closest(options.contentSelector).length !== 0 && $(e.target).closest(options.contentSelector).find(options.contentSelector).length !== 0 && $(e.target).closest(options.invokerSelector).length === 0) {\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($(e.target).closest(options.contentSelector).find(targetClass), options, $(e.target).closest(options.contentSelector).find(targetClass).data('hs-unfold-content-animation-in'), $(e.target).closest(options.contentSelector).find(targetClass).data('hs-unfold-content-animation-out'));\n        }\n      }); // Resize and Scroll Events\n\n      $(window).on('resize scroll', function () {\n        if (!options.smartPositionOff) {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__[\"default\"])($(options.target), $el, options);\n        }\n      });\n\n      if (options.hideOnScroll) {\n        $(window).on('scroll', function () {\n          $el.removeClass(options.invokerActiveClass.slice(1));\n          Object(_methods_close_element_with_specific_effect__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($(options.target), options, options.animationIn, options.animationOut);\n        });\n      }\n    }\n  }, {\n    key: \"_prepareObjects\",\n    value: function _prepareObjects(el, target, config) {\n      el.addClass(config.invokerSelector.slice(1));\n      el.attr('data-hs-unfold-target', config.target);\n      el.attr('data-hs-unfold-invoker', '');\n      target.attr('data-hs-target-height', target.outerHeight());\n      target.attr('data-hs-unfold-content', '');\n      target.addClass(\"\".concat(config.hiddenClass.slice(1), \" \").concat(config.initializedClass.slice(1)));\n\n      if (config.hasOverlay && $(config.overlayClass).length === 0) {\n        $('body').append($(\"<div class=\\\"\".concat(config.overlayClass.slice(1), \"\\\"></div>\")).css(config.overlayStyles));\n      }\n\n      if (config.type === 'css-animation') {\n        target.attr('data-hs-unfold-content-animation-in', config.animationIn);\n        target.attr('data-hs-unfold-content-animation-out', config.animationOut);\n      }\n    }\n  }]);\n\n  return HSUnfold;\n}();\n\n\n\n//# sourceURL=webpack://HSUnfold/./src/js/hs-unfold.js?")},"./src/js/methods/close-element-with-specific-effect.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return closeElementWithSpecificEffect; });\n/* harmony import */ var _methods_simple_hide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../methods/simple-hide */ "./src/js/methods/simple-hide.js");\n/* harmony import */ var _css_animation_hide__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./css-animation-hide */ "./src/js/methods/css-animation-hide.js");\n/* harmony import */ var _methods_slide_hide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../methods/slide-hide */ "./src/js/methods/slide-hide.js");\n\n\n\nfunction closeElementWithSpecificEffect(el, config, cssAnimationShowEffect, cssAnimationHideEffect) {\n  if (el.hasClass(config.hiddenClass.slice(1))) return;\n\n  if (el.hasClass(config.cssAnimationClass.slice(1))) {\n    Object(_css_animation_hide__WEBPACK_IMPORTED_MODULE_1__["default"])(el, config, cssAnimationHideEffect);\n    el.on(\'animationend webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend\', function (e) {\n      if (el.hasClass(cssAnimationHideEffect)) {\n        el.removeClass(cssAnimationHideEffect).addClass(config.hiddenClass.slice(1));\n        config.afterClose();\n      }\n\n      if (el.hasClass(cssAnimationShowEffect)) {\n        config.afterOpen();\n      }\n\n      e.preventDefault();\n      e.stopPropagation();\n    });\n  } else if (el.hasClass(config.slideEffectClass.slice(1))) {\n    Object(_methods_slide_hide__WEBPACK_IMPORTED_MODULE_2__["default"])(el, config, function () {});\n  } else {\n    Object(_methods_simple_hide__WEBPACK_IMPORTED_MODULE_0__["default"])(el, config);\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/close-element-with-specific-effect.js?')},"./src/js/methods/css-animation-hide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return cssAnimationHide; });\nfunction cssAnimationHide(target, config, effect) {\n  target.removeClass(config.animationIn).addClass(effect);\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/css-animation-hide.js?')},"./src/js/methods/css-animation-show.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return cssAnimationShow; });\nfunction cssAnimationShow(target, config) {\n  if (config.cssAnimatedClass) {\n    target.removeClass("".concat(config.hiddenClass.slice(1), " ").concat(config.animationOut)).addClass(config.animationIn);\n  } else {\n    target.removeClass("".concat(config.hiddenClass.slice(1), " ").concat(config.animationOut));\n    setTimeout(function () {\n      target.addClass(config.animationIn);\n    });\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/css-animation-show.js?')},"./src/js/methods/simple-hide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return simpleHide; });\nfunction simpleHide(target, config) {\n  target.addClass(config.hiddenClass.slice(1));\n\n  if (config.hasOverlay) {\n    $(config.overlayClass).hide();\n  }\n\n  config.afterClose();\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/simple-hide.js?')},"./src/js/methods/simple-show.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return simpleShow; });\nfunction simpleShow(target, config) {\n  target.removeClass(config.hiddenClass.slice(1));\n\n  if (config.hasOverlay) {\n    $(config.overlayClass).show();\n  }\n\n  config.afterOpen();\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/simple-show.js?')},"./src/js/methods/slide-hide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return slideHide; });\nfunction slideHide(target, config, callback) {\n  target.slideUp({\n    duration: config.duration,\n    easing: config.easing,\n    complete: function complete() {\n      callback();\n      config.afterClose();\n      target.addClass(config.hiddenClass.slice(1));\n    }\n  });\n\n  if (config.hasOverlay) {\n    $(config.overlayClass).fadeOut(200);\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/slide-hide.js?')},"./src/js/methods/slide-show.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return slideShow; });\nfunction slideShow(target, config, callback) {\n  target.removeClass(config.hiddenClass.slice(1)).stop().slideDown({\n    duration: config.duration,\n    easing: config.easing,\n    complete: function complete() {\n      callback();\n      config.afterOpen();\n    }\n  });\n\n  if (config.hasOverlay) {\n    $(config.overlayClass).fadeIn(200);\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/slide-show.js?')},"./src/js/methods/smart-position.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return smartPosition; });\nfunction smartPosition(el, invoker, config) {\n  var $w = $(window);\n  var styles = getComputedStyle(el.get(0)),\n      direction = Math.abs(parseInt(styles.left, 10)) < 40 ? 'left' : 'right',\n      targetOuterGeometry = el.offset(),\n      invokerOffsetTop = invoker.offset().top - $(window).scrollTop(); // Horizontal Axis\n\n  if (direction === 'right') {\n    if (targetOuterGeometry.left < 0) {\n      el.css({\n        left: 'auto',\n        right: (parseInt(el.css('right'), 10) - (targetOuterGeometry.left - 10)) * -1\n      });\n    }\n  } else {\n    if (targetOuterGeometry.left + el.outerWidth() > $w.width()) {\n      el.css({\n        right: 'auto',\n        left: parseInt(el.css('left'), 10) - (targetOuterGeometry.left + el.outerWidth() + 10 - $w.width())\n      });\n    }\n  } // Vertical Axis\n\n\n  if (invokerOffsetTop > $w.height() / 2 && el.data('hs-target-height') - invoker.offset().top < 0 && !config.isFullWindow) {\n    el.addClass(config.reverseClass.slice(1));\n  } else {\n    el.removeClass(config.reverseClass.slice(1));\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/methods/smart-position.js?")},"./src/js/modes/css-animation.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return cssAnimation; });\n/* harmony import */ var _methods_smart_position__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../methods/smart-position */ \"./src/js/methods/smart-position.js\");\n/* harmony import */ var _methods_css_animation_show__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../methods/css-animation-show */ \"./src/js/methods/css-animation-show.js\");\n/* harmony import */ var _methods_css_animation_hide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../methods/css-animation-hide */ \"./src/js/methods/css-animation-hide.js\");\n\n\n\nfunction cssAnimation(el, config, hideEffect) {\n  $(config.target).addClass(\"\".concat(config.cssAnimationClass.slice(1), \" \").concat(config.cssAnimatedClass ? config.cssAnimatedClass.slice(1) : '')).css('animation-duration', \"\".concat(config.duration, \"ms\"));\n  $(config.target).on('animationend webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend', function (e) {\n    if ($(config.target).hasClass(config.animationOut)) {\n      $(config.target).removeClass(config.animationOut).addClass(config.hiddenClass.slice(1));\n      config.afterClose();\n    }\n\n    if ($(config.target).hasClass(config.animationIn)) {\n      config.afterOpen();\n    }\n\n    e.preventDefault();\n    e.stopPropagation();\n  });\n  $(config.target).on('animationstart webkitAnimationStart mozAnimationStart MSAnimationStart oanimationstart', function (e) {\n    if ($(config.target).hasClass(config.animationOut)) {\n      if (config.hasOverlay) {\n        $(config.overlayClass).fadeOut(200);\n      }\n    }\n\n    if ($(config.target).hasClass(config.animationIn)) {\n      if (config.hasOverlay) {\n        $(config.overlayClass).fadeIn(200);\n      }\n    }\n\n    e.preventDefault();\n    e.stopPropagation();\n  });\n\n  function mouseEnterFunc() {\n    if (config.unfoldTimeOut) {\n      clearTimeout(config.unfoldTimeOut);\n    }\n\n    el.addClass(config.invokerActiveClass.slice(1));\n    Object(_methods_css_animation_show__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($(config.target), config);\n\n    if (!config.smartPositionOff) {\n      Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__[\"default\"])($(config.target), el, config);\n    }\n  }\n\n  function mouseLeaveFunc() {\n    config.unfoldTimeOut = setTimeout(function () {\n      el.removeClass(config.invokerActiveClass.slice(1));\n      Object(_methods_css_animation_hide__WEBPACK_IMPORTED_MODULE_2__[\"default\"])($(config.target), config, hideEffect);\n    }, config.delay);\n  }\n\n  function clickFunc() {\n    if (!$(config.target).hasClass(config.hiddenClass.slice(1))) {\n      el.removeClass(config.invokerActiveClass.slice(1));\n      Object(_methods_css_animation_hide__WEBPACK_IMPORTED_MODULE_2__[\"default\"])($(config.target), config, hideEffect);\n    } else {\n      el.addClass(config.invokerActiveClass.slice(1));\n      Object(_methods_css_animation_show__WEBPACK_IMPORTED_MODULE_1__[\"default\"])($(config.target), config);\n\n      if (!config.smartPositionOff) {\n        Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__[\"default\"])($(config.target), el, config);\n      }\n\n      if (config.hasOverlay) {\n        $(config.overlayClass).fadeIn(200);\n      }\n    }\n  }\n\n  if (config.event === 'hover') {\n    // Hover\n    $(window).on('resize', function () {\n      if (window.navigator.userAgent.indexOf('Mobile') !== -1) {\n        el.parent(config.wrapperSelector)[0].removeEventListener('mouseenter', mouseEnterFunc, false);\n        el.parent(config.wrapperSelector)[0].removeEventListener('mouseleave', mouseLeaveFunc, false);\n        el[0].addEventListener('click', clickFunc, false);\n      } else {\n        el[0].removeEventListener('click', clickFunc, false);\n        el.parent(config.wrapperSelector)[0].addEventListener('mouseenter', mouseEnterFunc, false);\n        el.parent(config.wrapperSelector)[0].addEventListener('mouseleave', mouseLeaveFunc, false);\n      }\n    }).trigger('resize');\n  } else {\n    // Click\n    el[0].addEventListener('click', clickFunc, false);\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/modes/css-animation.js?")},"./src/js/modes/simple.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return simple; });\n/* harmony import */ var _methods_smart_position__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../methods/smart-position */ "./src/js/methods/smart-position.js");\n/* harmony import */ var _methods_simple_show__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../methods/simple-show */ "./src/js/methods/simple-show.js");\n/* harmony import */ var _methods_simple_hide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../methods/simple-hide */ "./src/js/methods/simple-hide.js");\n\n\n\nfunction simple(el, config) {\n  $(config.target).addClass(config.simpleEffectClass.slice(1));\n\n  if (config.event === \'hover\') {\n    // Hover\n    el.parent(config.wrapperSelector).on({\n      mouseenter: function mouseenter() {\n        el.addClass(config.invokerActiveClass.slice(1));\n        Object(_methods_simple_show__WEBPACK_IMPORTED_MODULE_1__["default"])($(config.target), config);\n\n        if (!config.smartPositionOff) {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__["default"])($(config.target), el, config);\n        }\n      },\n      mouseleave: function mouseleave() {\n        el.removeClass(config.invokerActiveClass.slice(1));\n        Object(_methods_simple_hide__WEBPACK_IMPORTED_MODULE_2__["default"])($(config.target), config);\n      }\n    });\n  } else {\n    // Click\n    el.on(\'click\', function () {\n      if (!$(config.target).hasClass(config.hiddenClass.slice(1))) {\n        el.removeClass(config.invokerActiveClass.slice(1));\n        Object(_methods_simple_hide__WEBPACK_IMPORTED_MODULE_2__["default"])($(config.target), config);\n      } else {\n        el.addClass(config.invokerActiveClass.slice(1));\n        Object(_methods_simple_show__WEBPACK_IMPORTED_MODULE_1__["default"])($(config.target), config);\n\n        if (!config.smartPositionOff) {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__["default"])($(config.target), el, config);\n        }\n      }\n    });\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/modes/simple.js?')},"./src/js/modes/slide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return slide; });\n/* harmony import */ var _methods_smart_position__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../methods/smart-position */ "./src/js/methods/smart-position.js");\n/* harmony import */ var _methods_slide_show__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../methods/slide-show */ "./src/js/methods/slide-show.js");\n/* harmony import */ var _methods_slide_hide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../methods/slide-hide */ "./src/js/methods/slide-hide.js");\n\n\n\nfunction slide(el, config) {\n  $(config.target).addClass(config.slideEffectClass.slice(1)).css(\'display\', \'none\');\n\n  if (config.event === \'hover\') {\n    // Hover\n    el.parent(config.wrapperSelector).on({\n      mouseenter: function mouseenter() {\n        Object(_methods_slide_show__WEBPACK_IMPORTED_MODULE_1__["default"])($(config.target), config, function () {\n          el.addClass(config.invokerActiveClass.slice(1));\n        });\n\n        if (!config.smartPositionOff) {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__["default"])($(config.target), el, config);\n        }\n      },\n      mouseleave: function mouseleave() {\n        Object(_methods_slide_hide__WEBPACK_IMPORTED_MODULE_2__["default"])($(config.target), config, function () {\n          el.removeClass(config.invokerActiveClass.slice(1));\n        });\n      }\n    });\n  } else {\n    // Click\n    el.on(\'click\', function () {\n      if (!$(config.target).hasClass(config.hiddenClass.slice(1))) {\n        Object(_methods_slide_hide__WEBPACK_IMPORTED_MODULE_2__["default"])($(config.target), config, function () {\n          el.removeClass(config.invokerActiveClass.slice(1));\n        });\n      } else {\n        Object(_methods_slide_show__WEBPACK_IMPORTED_MODULE_1__["default"])($(config.target), config, function () {\n          el.addClass(config.invokerActiveClass.slice(1));\n        });\n\n        if (!config.smartPositionOff) {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_0__["default"])($(config.target), el, config);\n        }\n      }\n    });\n  }\n}\n\n//# sourceURL=webpack://HSUnfold/./src/js/modes/slide.js?')}},e={},f.m=d,f.c=e,f.d=function(e,n,t){f.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},f.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},f.t=function(n,e){if(1&e&&(n=f(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(f.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var o in n)f.d(t,o,function(e){return n[e]}.bind(null,o));return t},f.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return f.d(n,"a",n),n},f.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},f.p="",f(f.s="./src/js/hs-unfold.js").default;function f(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return d[n].call(t.exports,t,t.exports,f),t.l=!0,t.exports}var d,e});
;!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n():"function"==typeof define&&define.amd?define([],n):"object"==typeof exports?exports.HSMegaMenu=n():e.HSMegaMenu=n()}(window,function(){return d={"./src/js/hs-mega-menu.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return HSMegaMenu; });\n/* harmony import */ var _methods_object_assign_deep__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./methods/object-assign-deep */ "./src/js/methods/object-assign-deep.js");\n/* harmony import */ var _methods_object_assign_deep__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_methods_object_assign_deep__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _methods_get_type__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./methods/get-type */ "./src/js/methods/get-type.js");\n/* harmony import */ var _methods_smart_position__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./methods/smart-position */ "./src/js/methods/smart-position.js");\n/* harmony import */ var _methods_desktop_css_animation_enable__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./methods/desktop-css-animation-enable */ "./src/js/methods/desktop-css-animation-enable.js");\n/* harmony import */ var _methods_desktop_mouseenter_event_listener__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./methods/desktop-mouseenter-event-listener */ "./src/js/methods/desktop-mouseenter-event-listener.js");\n/* harmony import */ var _methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./methods/desktop-mouseleave-event-listener */ "./src/js/methods/desktop-mouseleave-event-listener.js");\n/* harmony import */ var _methods_desktop_click_event_listener__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./methods/desktop-click-event-listener */ "./src/js/methods/desktop-click-event-listener.js");\n/* harmony import */ var _methods_mobile_click_event_listener__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./methods/mobile-click-event-listener */ "./src/js/methods/mobile-click-event-listener.js");\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\n/*\n* HSMegaMenu Plugin\n* @version: 2.0.0 (Mon, 25 Nov 2019)\n* @requires: jQuery v3.0 or later\n* @author: HtmlStream\n* @event-namespace: .HSMegaMenu\n* @license: Htmlstream Libraries (https://htmlstream.com/)\n* Copyright 2019 Htmlstream\n*/\n\n\n\n\n\n\n\n\n\nvar HSMegaMenu = /*#__PURE__*/function () {\n  function HSMegaMenu(el, settings) {\n    _classCallCheck(this, HSMegaMenu);\n\n    this.el = el;\n    this.defaults = {\n      eventType: \'hover\',\n      direction: \'horizontal\',\n      breakpoint: \'lg\',\n      rtl: false,\n      isMenuOpened: false,\n      sideBarRatio: 1 / 4,\n      pageContainer: $(\'body\'),\n      mobileSpeed: 400,\n      duration: 300,\n      delay: 0,\n      itemOptions: {\n        megaMenuTimeOut: null,\n        desktop: {\n          animation: \'animated\',\n          animationIn: \'slideInUp\',\n          animationOut: false,\n          position: null,\n          maxWidth: null\n        }\n      },\n      classMap: {\n        rtl: \'.hs-rtl\',\n        reversed: \'.hs-reversed\',\n        initialized: \'.hs-menu-initialized\',\n        mobileState: \'.hs-mobile-state\',\n        invoker: \'.hs-mega-menu-invoker\',\n        subMenu: \'.hs-sub-menu\',\n        hasSubMenu: \'.hs-has-sub-menu\',\n        hasSubMenuActive: \'.hs-sub-menu-opened\',\n        megaMenu: \'.hs-mega-menu\',\n        hasMegaMenu: \'.hs-has-mega-menu\',\n        hasMegaMenuActive: \'.hs-mega-menu-opened\'\n      }\n    };\n    this.settings = settings;\n    this.state = null;\n  }\n\n  _createClass(HSMegaMenu, [{\n    key: "init",\n    value: function init() {\n      var context = this,\n          $el = $(context.el),\n          defaults = Object.assign({}, context.defaults),\n          dataSettings = $el.attr(\'data-hs-mega-menu-options\') ? JSON.parse($el.attr(\'data-hs-mega-menu-options\')) : {};\n      var settings = {};\n      settings = _methods_object_assign_deep__WEBPACK_IMPORTED_MODULE_0___default()({}, defaults, settings, dataSettings, context.settings); // Resolution list\n\n      var resolutionsList = {\n        xs: 0,\n        sm: 576,\n        md: 768,\n        lg: 992,\n        xl: 1200\n      }; // Keycodes\n\n      var ESC_KEYCODE = 27,\n          TAB_KEYCODE = 9,\n          ENTER_KEYCODE = 13,\n          SPACE_KEYCODE = 32,\n          ARROW_UP_KEYCODE = 38,\n          ARROW_DOWN_KEYCODE = 40,\n          ARROW_RIGHT_KEYCODE = 39,\n          ARROW_LEFT_KEYCODE = 37; // Prevent scroll\n\n      function preventScroll(keycode) {\n        return function (e) {\n          if (e.which === keycode) {\n            e.preventDefault();\n          }\n        };\n      } // Get Item Settings\n\n\n      function getItemSettings(el) {\n        var $el = el,\n            dataSettings = $el.attr(\'data-hs-mega-menu-item-options\') ? JSON.parse($el.attr(\'data-hs-mega-menu-item-options\')) : {},\n            itemSettings = settings.itemOptions;\n        itemSettings = $.extend(true, itemSettings, dataSettings);\n\n        itemSettings.activeItemClass = function () {\n          return Object(_methods_get_type__WEBPACK_IMPORTED_MODULE_1__["default"])($el, settings) === \'mega-menu\' ? settings.classMap.hasMegaMenuActive : settings.classMap.hasSubMenuActive;\n        };\n\n        return itemSettings;\n      } // State Detection\n\n\n      $(window).on(\'resize\', function () {\n        if (window.innerWidth < resolutionsList[settings.breakpoint]) {\n          context.state = \'mobile\';\n        } else {\n          context.state = \'desktop\';\n        }\n      }).trigger(\'resize\'); // Set RTL\n\n      if (settings.rtl) {\n        $el.addClass(settings.classMap.rtl.slice(1));\n      } // Init Menu Items\n\n\n      $el.find("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)).each(function () {\n        context.MegaMenuItem($(this), $(this).children(settings.classMap[Object(_methods_get_type__WEBPACK_IMPORTED_MODULE_1__["default"])($(this), settings) === \'mega-menu\' ? \'megaMenu\' : \'subMenu\']), settings);\n      }); // Add Initialized Classes\n\n      $el.addClass("".concat(settings.classMap.initialized.slice(1), " hs-menu-").concat(settings.direction)); // *****\n      // Start: ACCESSIBILITY\n      // *****\n\n      var myPreventScrollSpace = preventScroll(SPACE_KEYCODE),\n          myPreventScrollDown = preventScroll(ARROW_DOWN_KEYCODE),\n          myPreventScrollUp = preventScroll(ARROW_UP_KEYCODE);\n      var $items,\n          index,\n          state = null;\n      $(document).on(\'keyup\', function () {\n        window.removeEventListener(\'keydown\', myPreventScrollSpace, false);\n        window.removeEventListener(\'keydown\', myPreventScrollUp, false);\n        window.removeEventListener(\'keydown\', myPreventScrollDown, false);\n      });\n      $(document).on(\'keyup\', "".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu), function (e) {\n        //\n        // Start: PREVENT SCROLL\n        //\n        e.preventDefault();\n        e.stopPropagation();\n        window.addEventListener(\'keydown\', myPreventScrollSpace, false);\n        window.addEventListener(\'keydown\', myPreventScrollUp, false);\n        window.addEventListener(\'keydown\', myPreventScrollDown, false); //\n        // End: PREVENT SCROLL\n        //\n        //\n        // Start: ELEMENT DETECTION\n        //\n\n        if ($(e.target).hasClass(settings.classMap.invoker.slice(1)) && !$(e.target).closest("".concat(settings.classMap.subMenu, ", ").concat(settings.classMap.megaMenu)).length) {\n          // console.log(\'Top level\');\n          if (state !== \'topLevel\') {\n            state = \'topLevel\';\n          }\n\n          $items = [].slice.call($(e.target).parent().parent().find(settings.classMap.invoker)).filter(function (item) {\n            if (!$(item).closest("".concat(settings.classMap.subMenu, ", ").concat(settings.classMap.megaMenu)).length) {\n              return $(item).is(\':visible\');\n            }\n          });\n        } else if ($(e.target).closest("".concat(settings.classMap.subMenu, ", ").concat(settings.classMap.megaMenu)).length && $(e.target).siblings("".concat(settings.classMap.subMenu, ", ").concat(settings.classMap.megaMenu)).length) {\n          // console.log(\'Has submenu and not top level\');\n          if (state !== \'hasSubmenu\') {\n            state = \'hasSubmenu\';\n          }\n\n          $items = [].slice.call($(e.target).parent().parent().find(settings.classMap.invoker)).filter(function (item) {\n            return $(item).is(\':visible\');\n          });\n        } else {\n          // console.log(\'Just element\');\n          if (state !== \'simple\') {\n            state = \'simple\';\n          }\n\n          $items = [].slice.call($(e.target).closest("".concat(settings.classMap.subMenu, ", ").concat(settings.classMap.megaMenu)).find(\'a, button\')).filter(function (item) {\n            return $(item).is(\':visible\');\n          });\n        } //\n        // End: ELEMENT DETECTION\n        //\n\n\n        index = $items.indexOf(e.target); //\n        // Start: TOP LEVEL\n        //\n        // Left\n\n        if (state === \'topLevel\' && e.which === ARROW_LEFT_KEYCODE && index > 0) {\n          index--;\n        } // Right\n\n\n        if (state === \'topLevel\' && e.which === ARROW_RIGHT_KEYCODE && index < $items.length - 1) {\n          index++;\n        } // Open Sub\n\n\n        if (state === \'topLevel\' && (e.which === ARROW_DOWN_KEYCODE || e.which === SPACE_KEYCODE || e.which === ENTER_KEYCODE)) {\n          if (!$(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n            Object(_methods_desktop_mouseenter_event_listener__WEBPACK_IMPORTED_MODULE_4__["default"])($(e.target).parent(), $(e.target).siblings(), settings, getItemSettings($(e.target).parent()))();\n          } else if ($(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n            $($(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).find(\'a\')[0]).focus();\n            return;\n          }\n        } // Close Siblings\n\n\n        if (state === \'topLevel\' && (e.which === TAB_KEYCODE || e.which === ARROW_RIGHT_KEYCODE || e.which === ARROW_LEFT_KEYCODE) && $(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)).parent().find("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n          Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)), $(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)).parent().find("".concat(settings.classMap.hasMegaMenuActive, " > ").concat(settings.classMap.megaMenu, ", ").concat(settings.classMap.hasSubMenuActive, " > ").concat(settings.classMap.subMenu)), settings, getItemSettings($(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu))))();\n        } //\n        // End: TOP LEVEL\n        //\n        //\n        // Start: HAS SUB-MENU BUT NOT TOP LEVEL\n        //\n        // Up\n\n\n        if (state === \'hasSubmenu\' && e.which === ARROW_UP_KEYCODE && index > 0) {\n          index--;\n        } // Down\n\n\n        if (state === \'hasSubmenu\' && e.which === ARROW_DOWN_KEYCODE && index < $items.length - 1) {\n          index++;\n        } // Open Sub\n\n\n        if (state === \'hasSubmenu\' && (e.which === ARROW_LEFT_KEYCODE || e.which === ARROW_RIGHT_KEYCODE || e.which === SPACE_KEYCODE || e.which === ENTER_KEYCODE)) {\n          if (!$(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n            Object(_methods_desktop_mouseenter_event_listener__WEBPACK_IMPORTED_MODULE_4__["default"])($(e.target).parent(), $(e.target).siblings(), settings, getItemSettings($(e.target).parent()))();\n          } else if ($(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n            $($(e.target).siblings("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).find(\'a\')[0]).focus();\n            return;\n          }\n        } // Close Siblings\n\n\n        if (state === \'hasSubmenu\' && (e.which === TAB_KEYCODE || e.which === ARROW_DOWN_KEYCODE || e.which === ARROW_UP_KEYCODE) && $(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)).parent().find("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")).length) {\n          Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)), $(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu)).parent().find("".concat(settings.classMap.hasMegaMenuActive, " > ").concat(settings.classMap.megaMenu, ", ").concat(settings.classMap.hasSubMenuActive, " > ").concat(settings.classMap.subMenu)), settings, getItemSettings($(e.target).closest("".concat(settings.classMap.hasMegaMenu, ", ").concat(settings.classMap.hasSubMenu))))();\n        } //\n        // End: HAS SUB-MENU BUT NOT TOP LEVEL\n        //\n        //\n        // Start: SIMPLE\n        //\n        // Left, Up\n\n\n        if (state === \'simple\' && e.which === ARROW_UP_KEYCODE && index > 0) {\n          index--;\n        } // Right, Down\n\n\n        if (state === \'simple\' && e.which === ARROW_DOWN_KEYCODE && index < $items.length - 1) {\n          index++;\n        } // Close Siblings\n\n\n        if (state === \'simple\' && (e.which === ARROW_RIGHT_KEYCODE || e.which === ARROW_LEFT_KEYCODE) && $(e.target).closest(settings.classMap.hasSubMenu).parent().find(settings.classMap.subMenu).length) {\n          $(e.target).closest(settings.classMap.hasSubMenu).children(settings.classMap.invoker).focus();\n          Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($(e.target).closest(settings.classMap.hasSubMenu), $(e.target).closest(settings.classMap.hasSubMenu).parent().find("".concat(settings.classMap.hasSubMenuActive, " > ").concat(settings.classMap.subMenu)), settings, getItemSettings($(e.target).closest(settings.classMap.hasSubMenu)))();\n          return;\n        } //\n        // End: SIMPLE\n        //\n        // Close Self\n\n\n        if (e.which === ESC_KEYCODE && context.state === \'desktop\' && $(e.target).closest("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive)).length) {\n          $(e.target).closest("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive)).children(settings.classMap.invoker).focus();\n          Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($(e.target).closest("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive)), $(e.target).closest("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive)).find("".concat(settings.classMap.megaMenu, ", ").concat(settings.classMap.subMenu)), settings, getItemSettings($(e.target).closest("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive))))();\n          return;\n        } // Reset index\n\n\n        if (index < 0) {\n          index = 0;\n        }\n\n        $($items[index]).focus();\n      });\n      $(document).on(\'keyup\', function (e) {\n        // Close All\n        if (e.which === TAB_KEYCODE && $(e.target).closest("".concat(settings.classMap.megaMenu, ", ").concat(settings.classMap.subMenu)).length === 0) {\n          Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive)), $("".concat(settings.classMap.megaMenu, ":visible, ").concat(settings.classMap.subMenu, ":visible")), settings, getItemSettings($("".concat(settings.classMap.hasMegaMenuActive, ", ").concat(settings.classMap.hasSubMenuActive))))();\n        }\n      }); // *****\n      // End: ACCESSIBILITY\n      // *****\n    }\n  }, {\n    key: "MegaMenuItem",\n    value: function MegaMenuItem(el, menu, params) {\n      var context = this,\n          settings = params,\n          itemDataSettings = el.attr(\'data-hs-mega-menu-item-options\') ? JSON.parse(el.attr(\'data-hs-mega-menu-item-options\')) : {},\n          $el = el,\n          $menu = menu;\n      var itemSettings = {\n        eventType: \'hover\',\n        megaMenuTimeOut: null,\n        desktop: {\n          animation: \'animated\',\n          animationIn: \'slideInUp\',\n          animationOut: false,\n          position: null,\n          maxWidth: null\n        }\n      };\n      itemSettings = _methods_object_assign_deep__WEBPACK_IMPORTED_MODULE_0___default()({}, settings, itemSettings, itemDataSettings);\n\n      itemSettings.activeItemClass = function () {\n        return Object(_methods_get_type__WEBPACK_IMPORTED_MODULE_1__["default"])($el, itemSettings) === \'mega-menu\' ? itemSettings.classMap.hasMegaMenuActive : itemSettings.classMap.hasSubMenuActive;\n      }; // Set Menu Breakpoint Class\n\n\n      $menu.addClass(Object(_methods_get_type__WEBPACK_IMPORTED_MODULE_1__["default"])($el, itemSettings) === \'mega-menu\' ? "hs-mega-menu-desktop-".concat(itemSettings.breakpoint) : "hs-sub-menu-desktop-".concat(itemSettings.breakpoint)); // Listeners\n\n      var myDesktopCSSAnimationEnable = Object(_methods_desktop_css_animation_enable__WEBPACK_IMPORTED_MODULE_3__["default"])($menu, itemSettings),\n          myDesktopMouseEnterEventListener = Object(_methods_desktop_mouseenter_event_listener__WEBPACK_IMPORTED_MODULE_4__["default"])($el, $menu, settings, itemSettings),\n          myDesktopMouseLeaveEventListener = Object(_methods_desktop_mouseleave_event_listener__WEBPACK_IMPORTED_MODULE_5__["default"])($el, $menu, settings, itemSettings),\n          myDesktopClickEventListener = Object(_methods_desktop_click_event_listener__WEBPACK_IMPORTED_MODULE_6__["default"])($el, $menu, settings, itemSettings),\n          myMobileClickEventListener = Object(_methods_mobile_click_event_listener__WEBPACK_IMPORTED_MODULE_7__["default"])($el, $menu, settings, itemSettings);\n\n      var mobileListeners = function mobileListeners() {\n        // Remove Desktop Listeners\n        $menu[0].removeEventListener(\'animationend\', myDesktopCSSAnimationEnable, false);\n        $menu[0].removeEventListener(\'webkitAnimationEnd\', myDesktopCSSAnimationEnable, false);\n        $el[0].removeEventListener(\'mouseenter\', myDesktopMouseEnterEventListener, false);\n        $el[0].removeEventListener(\'mouseleave\', myDesktopMouseLeaveEventListener, false); // $el.children(settings.classMap.invoker)[0].removeEventListener(\'focus\', myDesktopMouseEnterEventListener, false);\n\n        $el.children(itemSettings.classMap.invoker)[0].removeEventListener(\'click\', myDesktopClickEventListener, false); // Add Mobile Listeners\n\n        $el.children(itemSettings.classMap.invoker)[0].addEventListener(\'click\', myMobileClickEventListener, false);\n      },\n          desktopListeners = function desktopListeners() {\n        // Remove Mobile Listeners\n        $el.children(itemSettings.classMap.invoker)[0].removeEventListener(\'click\', myMobileClickEventListener, false); // Add Desktop Listeners\n\n        $menu[0].addEventListener(\'animationend\', myDesktopCSSAnimationEnable, false);\n        $menu[0].addEventListener(\'webkitAnimationEnd\', myDesktopCSSAnimationEnable, false);\n\n        if (itemSettings.eventType === \'hover\') {\n          $el[0].addEventListener(\'mouseenter\', myDesktopMouseEnterEventListener, false);\n          $el[0].addEventListener(\'mouseleave\', myDesktopMouseLeaveEventListener, false); // if (!$el.parents().hasClass(settings.classMap.subMenu.slice(1))) {\n          // \t$el.children(settings.classMap.invoker)[0].addEventListener(\'focus\', myDesktopMouseEnterEventListener, false);\n          // }\n        }\n\n        if (itemSettings.eventType === \'click\') {\n          $el.children(itemSettings.classMap.invoker)[0].addEventListener(\'click\', myDesktopClickEventListener, false);\n        }\n      };\n\n      if (itemSettings.desktop.maxWidth) {\n        $menu.css(\'max-width\', itemSettings.desktop.maxWidth);\n      }\n\n      if (itemSettings.desktop.position) {\n        $menu.addClass("hs-position-".concat(itemSettings.desktop.position));\n      } // Document Events\n\n\n      $(document).on(\'click\', function (e) {\n        if ($(e.target).closest($menu).length === 0 && $(e.target).closest(itemSettings.classMap.invoker).length === 0 && context.state === \'desktop\') {\n          $el.removeClass(itemSettings.activeItemClass().slice(1));\n          $menu.removeClass(itemSettings.desktop.animationIn);\n\n          if (itemSettings.animationOut) {\n            $menu.addClass(itemSettings.desktop.animationOut);\n          } else {\n            $menu.hide();\n          }\n        }\n      }); // Resize and Scroll Events\n\n      $(window).on(\'resize\', function () {\n        if (context.state === \'desktop\') {\n          Object(_methods_smart_position__WEBPACK_IMPORTED_MODULE_2__["default"])($menu, itemSettings);\n        }\n      }); // State Detection\n\n      $(window).on(\'resize\', function () {\n        if (context.state === \'mobile\') {\n          $menu.removeClass(itemSettings.desktop.animation).css(\'animation-duration\', \'\');\n          mobileListeners();\n        } else if (context.state === \'desktop\') {\n          $menu.addClass(itemSettings.desktop.animation).css(\'animation-duration\', "".concat(itemSettings.duration, "ms"));\n          desktopListeners();\n        }\n      }).trigger(\'resize\');\n    }\n  }]);\n\n  return HSMegaMenu;\n}();\n\n\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/hs-mega-menu.js?')},"./src/js/methods/desktop-click-event-listener.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopClickEventListener; });\n/* harmony import */ var _get_type__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./get-type */ "./src/js/methods/get-type.js");\n/* harmony import */ var _smart_position__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./smart-position */ "./src/js/methods/smart-position.js");\n/* harmony import */ var _desktop_show__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./desktop-show */ "./src/js/methods/desktop-show.js");\n/* harmony import */ var _desktop_hide__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./desktop-hide */ "./src/js/methods/desktop-hide.js");\n\n\n\n\nfunction desktopClickEventListener(el, menu, params, itemParams) {\n  return function () {\n    var $siblingInvokers = menu.parent("".concat(params.classMap.hasMegaMenu, ", ").concat(params.classMap.hasSubMenu)).siblings("".concat(params.classMap.hasMegaMenu).concat(params.classMap.hasMegaMenuActive, ", ").concat(params.classMap.hasSubMenu).concat(params.classMap.hasSubMenuActive));\n\n    if ($siblingInvokers.length) {\n      $siblingInvokers.each(function () {\n        var $el = $(this),\n            $menu = $el.children("".concat(params.classMap.megaMenu, ", ").concat(params.classMap.subMenu)),\n            itemDataSettings = $el.attr(\'data-hs-mega-menu-item-options\') ? JSON.parse($el.attr(\'data-hs-mega-menu-item-options\')) : {};\n        var itemSettings = {\n          desktop: {\n            animation: \'animated\',\n            animationIn: \'slideInUp\',\n            animationOut: \'fadeOut\',\n            position: null\n          }\n        };\n        itemSettings = Object.assign({}, itemSettings, itemDataSettings);\n\n        itemSettings.activeItemClass = function () {\n          return Object(_get_type__WEBPACK_IMPORTED_MODULE_0__["default"])($el, params) === \'mega-menu\' ? params.classMap.hasMegaMenuActive : params.classMap.hasSubMenuActive;\n        };\n\n        $el.removeClass(itemSettings.activeItemClass().slice(1));\n        Object(_desktop_hide__WEBPACK_IMPORTED_MODULE_3__["default"])($el, $menu, params, itemSettings);\n      });\n    }\n\n    if (menu.is(\':hidden\')) {\n      el.addClass(itemParams.activeItemClass().slice(1));\n      Object(_desktop_show__WEBPACK_IMPORTED_MODULE_2__["default"])(el, menu, params, itemParams);\n      Object(_smart_position__WEBPACK_IMPORTED_MODULE_1__["default"])(menu, params);\n    } else {\n      el.removeClass(itemParams.activeItemClass().slice(1));\n      Object(_desktop_hide__WEBPACK_IMPORTED_MODULE_3__["default"])(el, menu, params, itemParams);\n    }\n  };\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-click-event-listener.js?')},"./src/js/methods/desktop-css-animation-enable.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopCSSAnimationEnable; });\nfunction desktopCSSAnimationEnable(menu, itemParams) {\n  return function (e) {\n    if (menu.hasClass(itemParams.desktop.animationOut)) {\n      menu.removeClass(itemParams.desktop.animationOut).hide();\n    }\n\n    e.preventDefault();\n    e.stopPropagation();\n  };\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-css-animation-enable.js?')},"./src/js/methods/desktop-hide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopHide; });\nfunction desktopHide(el, menu, params, itemParams) {\n  if (!menu.length) {\n    return this;\n  }\n\n  if (itemParams.desktop.animationOut) {\n    menu.removeClass(itemParams.desktop.animationIn).addClass(itemParams.desktop.animationOut).hide();\n  } else {\n    menu.removeClass(itemParams.desktop.animationIn).hide();\n  }\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-hide.js?')},"./src/js/methods/desktop-mouseenter-event-listener.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopMouseEnterEventListener; });\n/* harmony import */ var _smart_position__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./smart-position */ "./src/js/methods/smart-position.js");\n/* harmony import */ var _desktop_show__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./desktop-show */ "./src/js/methods/desktop-show.js");\n/* harmony import */ var _get_type__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./get-type */ "./src/js/methods/get-type.js");\n/* harmony import */ var _desktop_hide__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./desktop-hide */ "./src/js/methods/desktop-hide.js");\n\n\n\n\nfunction desktopMouseEnterEventListener(el, menu, params, itemParams) {\n  return function () {\n    if (itemParams.megaMenuTimeOut) {\n      clearTimeout(itemParams.megaMenuTimeOut);\n    }\n\n    var $siblingInvokers = menu.parent("".concat(params.classMap.hasMegaMenu, ", ").concat(params.classMap.hasSubMenu)).siblings("".concat(params.classMap.hasMegaMenu).concat(params.classMap.hasMegaMenuActive, ", ").concat(params.classMap.hasSubMenu).concat(params.classMap.hasSubMenuActive));\n\n    if ($siblingInvokers.length) {\n      $siblingInvokers.each(function () {\n        var $el = $(this),\n            $menu = $el.children("".concat(params.classMap.megaMenu, ", ").concat(params.classMap.subMenu)),\n            itemDataSettings = $el.attr(\'data-hs-mega-menu-item-options\') ? JSON.parse($el.attr(\'data-hs-mega-menu-item-options\')) : {};\n        var itemSettings = {\n          desktop: {\n            animation: \'animated\',\n            animationIn: \'slideInUp\',\n            animationOut: \'fadeOut\',\n            position: null\n          }\n        };\n        itemSettings = Object.assign({}, itemSettings, itemDataSettings);\n\n        itemSettings.activeItemClass = function () {\n          return Object(_get_type__WEBPACK_IMPORTED_MODULE_2__["default"])($el, params) === \'mega-menu\' ? params.classMap.hasMegaMenuActive : params.classMap.hasSubMenuActive;\n        };\n\n        $el.removeClass(itemSettings.activeItemClass().slice(1));\n        Object(_desktop_hide__WEBPACK_IMPORTED_MODULE_3__["default"])($el, $menu, params, itemSettings);\n      });\n    }\n\n    el.addClass(itemParams.activeItemClass().slice(1));\n    Object(_desktop_show__WEBPACK_IMPORTED_MODULE_1__["default"])(el, menu, params, itemParams);\n    Object(_smart_position__WEBPACK_IMPORTED_MODULE_0__["default"])(menu, params);\n  };\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-mouseenter-event-listener.js?')},"./src/js/methods/desktop-mouseleave-event-listener.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopMouseLeaveEventListener; });\n/* harmony import */ var _desktop_hide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./desktop-hide */ "./src/js/methods/desktop-hide.js");\n\nfunction desktopMouseLeaveEventListener(el, menu, params, itemParams) {\n  return function () {\n    itemParams.megaMenuTimeOut = setTimeout(function () {\n      el.removeClass(itemParams.activeItemClass().slice(1));\n      Object(_desktop_hide__WEBPACK_IMPORTED_MODULE_0__["default"])(el, menu, params, itemParams);\n    }, params.delay);\n  };\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-mouseleave-event-listener.js?')},"./src/js/methods/desktop-show.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return desktopShow; });\nfunction desktopShow(el, menu, params, itemParams) {\n  menu.removeClass(itemParams.desktop.animationOut).show().addClass(itemParams.desktop.animationIn);\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/desktop-show.js?')},"./src/js/methods/get-type.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return getType; });\nfunction getType(el, params) {\n  if (!el || !el.length) {\n    return false;\n  }\n\n  return el.hasClass(params.classMap.hasSubMenu.slice(1)) ? 'sub-menu' : el.hasClass(params.classMap.hasMegaMenu.slice(1)) ? 'mega-menu' : null;\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/get-type.js?")},"./src/js/methods/mobile-click-event-listener.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return mobileClickEventListener; });\n/* harmony import */ var _get_type__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./get-type */ "./src/js/methods/get-type.js");\n/* harmony import */ var _mobile_show__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mobile-show */ "./src/js/methods/mobile-show.js");\n/* harmony import */ var _mobile_hide__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./mobile-hide */ "./src/js/methods/mobile-hide.js");\n\n\n\nfunction mobileClickEventListener(el, menu, params, itemParams) {\n  return function () {\n    var $siblingInvokers = menu.parent("".concat(params.classMap.hasMegaMenu, ", ").concat(params.classMap.hasSubMenu)).siblings("".concat(params.classMap.hasMegaMenu).concat(params.classMap.hasMegaMenuActive, ", ").concat(params.classMap.hasSubMenu).concat(params.classMap.hasSubMenuActive));\n\n    if ($siblingInvokers.length) {\n      $siblingInvokers.each(function () {\n        var $el = $(this),\n            $menu = $el.children("".concat(params.classMap.megaMenu, ", ").concat(params.classMap.subMenu)),\n            itemSettings = {};\n\n        itemSettings.activeItemClass = function () {\n          return Object(_get_type__WEBPACK_IMPORTED_MODULE_0__["default"])($el, params) === \'mega-menu\' ? params.classMap.hasMegaMenuActive : params.classMap.hasSubMenuActive;\n        };\n\n        Object(_mobile_hide__WEBPACK_IMPORTED_MODULE_2__["default"])($el, $menu, params, itemSettings);\n      });\n    }\n\n    if (menu.is(\':hidden\')) {\n      Object(_mobile_show__WEBPACK_IMPORTED_MODULE_1__["default"])(el, menu, params, itemParams);\n    } else {\n      Object(_mobile_hide__WEBPACK_IMPORTED_MODULE_2__["default"])(el, menu, params, itemParams);\n    }\n  };\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/mobile-click-event-listener.js?')},"./src/js/methods/mobile-hide.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return mobileHide; });\nfunction mobileHide(el, menu, params, itemParams) {\n  if (!menu.length) {\n    return this;\n  }\n\n  el.removeClass(itemParams.activeItemClass().slice(1));\n  menu.slideUp(params.mobileSpeed);\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/mobile-hide.js?')},"./src/js/methods/mobile-show.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return mobileShow; });\nfunction mobileShow(el, menu, params, itemParams) {\n  if (!menu.length) {\n    return this;\n  }\n\n  el.addClass(itemParams.activeItemClass().slice(1));\n  menu.slideDown(params.mobileSpeed);\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/mobile-show.js?')},"./src/js/methods/object-assign-deep.js":function(module,exports,__webpack_require__){"use strict";eval("\n/*\n * OBJECT ASSIGN DEEP\n * Allows deep cloning of plain objects that contain primitives, nested plain objects, or nested plain arrays.\n */\n\n/*\n * A unified way of returning a string that describes the type of the given variable.\n */\n\nfunction _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\nfunction getTypeOf(input) {\n  if (input === null) {\n    return 'null';\n  } else if (typeof input === 'undefined') {\n    return 'undefined';\n  } else if (_typeof(input) === 'object') {\n    return Array.isArray(input) ? 'array' : 'object';\n  }\n\n  return _typeof(input);\n}\n/*\n * Branching logic which calls the correct function to clone the given value base on its type.\n */\n\n\nfunction cloneValue(value) {\n  // The value is an object so lets clone it.\n  if (getTypeOf(value) === 'object') {\n    return quickCloneObject(value);\n  } // The value is an array so lets clone it.\n  else if (getTypeOf(value) === 'array') {\n      return quickCloneArray(value);\n    } // Any other value can just be copied.\n\n\n  return value;\n}\n/*\n * Enumerates the given array and returns a new array, with each of its values cloned (i.e. references broken).\n */\n\n\nfunction quickCloneArray(input) {\n  return input.map(cloneValue);\n}\n/*\n * Enumerates the properties of the given object (ignoring the prototype chain) and returns a new object, with each of\n * its values cloned (i.e. references broken).\n */\n\n\nfunction quickCloneObject(input) {\n  var output = {};\n\n  for (var key in input) {\n    if (!input.hasOwnProperty(key)) {\n      continue;\n    }\n\n    output[key] = cloneValue(input[key]);\n  }\n\n  return output;\n}\n/*\n * Does the actual deep merging.\n */\n\n\nfunction executeDeepMerge(target) {\n  var _objects = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [];\n\n  var _options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};\n\n  var options = {\n    arrayBehaviour: _options.arrayBehaviour || 'replace' // Can be \"merge\" or \"replace\".\n\n  }; // Ensure we have actual objects for each.\n\n  var objects = _objects.map(function (object) {\n    return object || {};\n  });\n\n  var output = target || {}; // Enumerate the objects and their keys.\n\n  for (var oindex = 0; oindex < objects.length; oindex++) {\n    var object = objects[oindex];\n    var keys = Object.keys(object);\n\n    for (var kindex = 0; kindex < keys.length; kindex++) {\n      var key = keys[kindex];\n      var value = object[key];\n      var type = getTypeOf(value);\n      var existingValueType = getTypeOf(output[key]);\n\n      if (type === 'object') {\n        if (existingValueType !== 'undefined') {\n          var existingValue = existingValueType === 'object' ? output[key] : {};\n          output[key] = executeDeepMerge({}, [existingValue, quickCloneObject(value)], options);\n        } else {\n          output[key] = quickCloneObject(value);\n        }\n      } else if (type === 'array') {\n        if (existingValueType === 'array') {\n          var newValue = quickCloneArray(value);\n          output[key] = options.arrayBehaviour === 'merge' ? output[key].concat(newValue) : newValue;\n        } else {\n          output[key] = quickCloneArray(value);\n        }\n      } else {\n        output[key] = value;\n      }\n    }\n  }\n\n  return output;\n}\n/*\n * Merge all the supplied objects into the target object, breaking all references, including those of nested objects\n * and arrays, and even objects nested inside arrays. The first parameter is not mutated unlike Object.assign().\n * Properties in later objects will always overwrite.\n */\n\n\nmodule.exports = function objectAssignDeep(target) {\n  for (var _len = arguments.length, objects = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {\n    objects[_key - 1] = arguments[_key];\n  }\n\n  return executeDeepMerge(target, objects);\n};\n/*\n * Same as objectAssignDeep() except it doesn't mutate the target object and returns an entirely new object.\n */\n\n\nmodule.exports.noMutate = function objectAssignDeepInto() {\n  for (var _len2 = arguments.length, objects = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {\n    objects[_key2] = arguments[_key2];\n  }\n\n  return executeDeepMerge({}, objects);\n};\n/*\n * Allows an options object to be passed in to customise the behaviour of the function.\n */\n\n\nmodule.exports.withOptions = function objectAssignDeepInto(target, objects, options) {\n  return executeDeepMerge(target, objects, options);\n};\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/object-assign-deep.js?")},"./src/js/methods/smart-position.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return smartPosition; });\nfunction smartPosition(el, params) {\n  if (!el && !el.length) return;\n\n  if (!params.rtl) {\n    if (el.offset().left + el.outerWidth() > window.innerWidth) {\n      el.addClass(params.classMap.reversed.slice(1));\n    }\n  } else {\n    if (el.offset().left < 0) {\n      el.addClass(params.classMap.reversed.slice(1));\n    }\n  }\n}\n\n//# sourceURL=webpack://HSMegaMenu/./src/js/methods/smart-position.js?')}},e={},f.m=d,f.c=e,f.d=function(e,n,t){f.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},f.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},f.t=function(n,e){if(1&e&&(n=f(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(f.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var s in n)f.d(t,s,function(e){return n[e]}.bind(null,s));return t},f.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return f.d(n,"a",n),n},f.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},f.p="",f(f.s="./src/js/hs-mega-menu.js").default;function f(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return d[n].call(t.exports,t,t.exports,f),t.l=!0,t.exports}var d,e});
;!function(t,n){"object"==typeof exports&&"object"==typeof module?module.exports=n():"function"==typeof define&&define.amd?define([],n):"object"==typeof exports?exports.HSShowAnimation=n():t.HSShowAnimation=n()}(window,function(){return(d={"./src/js/hs-show-animation.js":function(module,exports,__webpack_require__){"use strict";eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n\tvalue: true\n});\n\nvar _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\n/*\n* HSShowAnimation Plugin\n* @version: 2.0.0 (Mon, 25 Nov 2019)\n* @requires: jQuery v3.0 or later\n* @author: HtmlStream\n* @event-namespace: .HSShowAnimation\n* @license: Htmlstream Libraries (https://htmlstream.com/)\n* Copyright 2019 Htmlstream\n*/\n\nvar HSShowAnimation = function () {\n\tfunction HSShowAnimation(elem, settings) {\n\t\t_classCallCheck(this, HSShowAnimation);\n\n\t\tthis.elem = elem;\n\t\tthis.defaults = {\n\t\t\tgroupName: null,\n\t\t\ttargetSelector: null,\n\t\t\tsiblingSelector: null,\n\t\t\teventType: 'click',\n\n\t\t\tclassMap: {\n\t\t\t\tactive: 'active'\n\t\t\t},\n\n\t\t\tanimationType: 'simple',\n\t\t\tanimationInit: 'animated',\n\t\t\tanimationIn: null,\n\t\t\tduration: null,\n\n\t\t\tafterShow: function afterShow() {}\n\t\t};\n\t\tthis.settings = settings;\n\t}\n\n\t_createClass(HSShowAnimation, [{\n\t\tkey: 'init',\n\t\tvalue: function init() {\n\t\t\tvar context = this,\n\t\t\t    $el = context.elem,\n\t\t\t    dataSettings = $el.attr('data-hs-show-animation-options') ? JSON.parse($el.attr('data-hs-show-animation-options')) : {},\n\t\t\t    options = $.extend(true, context.defaults, dataSettings, context.settings);\n\n\t\t\tcontext._prepareObject($el, options);\n\n\t\t\t$el.on(options.eventType, function (e) {\n\t\t\t\te.preventDefault();\n\n\t\t\t\tif ($el.hasClass(options.classMap.active)) {\n\t\t\t\t\treturn;\n\t\t\t\t}\n\n\t\t\t\tcontext._activeClassChange($el, options);\n\n\t\t\t\tif (options.animationType === 'css-animation') {\n\t\t\t\t\tcontext._cssAnimation($el, options);\n\t\t\t\t} else {\n\t\t\t\t\tcontext._simpleAnimation($el, options);\n\t\t\t\t}\n\t\t\t});\n\t\t}\n\t}, {\n\t\tkey: '_prepareObject',\n\t\tvalue: function _prepareObject(el, params) {\n\t\t\tvar options = params;\n\n\t\t\tel.attr('data-hs-show-animation-link-group', options.groupName);\n\n\t\t\tif (options.duration) {\n\t\t\t\t$(options.targetSelector).css({\n\t\t\t\t\tanimationDuration: options.duration + 'ms'\n\t\t\t\t});\n\t\t\t}\n\n\t\t\t$(options.targetSelector).attr('data-hs-show-animation-target-group', options.groupName);\n\n\t\t\tif (options.siblingSelector) {\n\t\t\t\t$(options.siblingSelector).attr('data-hs-show-animation-target-group', options.groupName);\n\t\t\t}\n\t\t}\n\t}, {\n\t\tkey: '_activeClassChange',\n\t\tvalue: function _activeClassChange(el, params) {\n\t\t\tvar options = params;\n\n\t\t\t$('[data-hs-show-animation-link-group=\"' + options.groupName + '\"]').removeClass(options.classMap.active);\n\n\t\t\tel.addClass(options.classMap.active);\n\t\t}\n\t}, {\n\t\tkey: '_simpleAnimation',\n\t\tvalue: function _simpleAnimation(el, params) {\n\t\t\tvar options = params;\n\n\t\t\t$('[data-hs-show-animation-target-group=\"' + options.groupName + '\"]').hide().css({\n\t\t\t\topacity: 0\n\t\t\t});\n\n\t\t\t$(options.targetSelector).show().css({\n\t\t\t\topacity: 1\n\t\t\t});\n\n\t\t\toptions.afterShow();\n\t\t}\n\t}, {\n\t\tkey: '_cssAnimation',\n\t\tvalue: function _cssAnimation(el, params) {\n\t\t\tvar options = params;\n\n\t\t\t$('[data-hs-show-animation-target-group=\"' + options.groupName + '\"]').hide().css({\n\t\t\t\topacity: 0\n\t\t\t}).removeClass(options.animationInit + ' ' + options.animationIn);\n\n\t\t\t$(options.targetSelector).show();\n\n\t\t\toptions.afterShow();\n\n\t\t\tsetTimeout(function () {\n\t\t\t\t$(options.targetSelector).css({\n\t\t\t\t\topacity: 1\n\t\t\t\t}).addClass(options.animationInit + ' ' + options.animationIn);\n\t\t\t}, 50);\n\t\t}\n\t}]);\n\n\treturn HSShowAnimation;\n}();\n\nexports.default = HSShowAnimation;\n\n//# sourceURL=webpack://HSShowAnimation/./src/js/hs-show-animation.js?")}},e={},f.m=d,f.c=e,f.d=function(t,n,e){f.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},f.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},f.t=function(n,t){if(1&t&&(n=f(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var e=Object.create(null);if(f.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)f.d(e,o,function(t){return n[t]}.bind(null,o));return e},f.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return f.d(n,"a",n),n},f.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},f.p="",f(f.s="./src/js/hs-show-animation.js")).default;function f(t){if(e[t])return e[t].exports;var n=e[t]={i:t,l:!1,exports:{}};return d[t].call(n.exports,n,n.exports,f),n.l=!0,n.exports}var d,e});
;!function(n,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.HsNavScroller=e():n.HsNavScroller=e()}(window,function(){return d={"./src/js/hs-nav-scroller.js":function(module,__webpack_exports__,__webpack_require__){"use strict";eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return HsNavScroller; });\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar HsNavScroller = /*#__PURE__*/function () {\n  function HsNavScroller(elem, settings) {\n    _classCallCheck(this, HsNavScroller);\n\n    this.elem = elem;\n    this.defaults = {\n      type: 'horizontal',\n      target: '.active',\n      offset: 0,\n      delay: 20\n    };\n    this.settings = settings;\n  }\n\n  _createClass(HsNavScroller, [{\n    key: \"init\",\n    value: function init() {\n      var context = this,\n          $el = context.elem,\n          dataSettings = $el.attr('data-hs-nav-scroller-options') ? JSON.parse($el.attr('data-hs-nav-scroller-options')) : {},\n          options = $.extend(true, context.defaults, dataSettings, context.settings);\n\n      if (options.type == 'vertical') {\n        $($el).animate({\n          scrollTop: $($el).find(options.target).position().top - options.offset\n        }, options.delay);\n      } else if (options.type == 'horizontal') {\n        var nav = $($el).find('.nav').first(),\n            prev = $($el).find('.hs-nav-scroller-arrow-prev').first(),\n            next = $($el).find('.hs-nav-scroller-arrow-next').first(),\n            activeElementLeftPosition = nav.find(options.target).position().left,\n            scrollMaxLeft = (nav[0].scrollWidth.toFixed() - nav.outerWidth()).toFixed(),\n            scrollPosition = nav.scrollLeft();\n\n        if (scrollPosition <= 0) {\n          prev.fadeOut(0);\n        }\n\n        if (scrollMaxLeft <= 0) {\n          next.fadeOut(0);\n        }\n\n        $(window).on('load resize', function () {\n          var scrollMaxLeft = parseInt(nav[0].scrollWidth.toFixed()) - parseInt(nav.outerWidth().toFixed()),\n              scrollPosition = nav.scrollLeft();\n\n          if (scrollPosition <= 0) {\n            prev.fadeOut(0);\n          } else {\n            prev.fadeIn(0);\n          }\n\n          if (scrollMaxLeft <= 0) {\n            next.fadeOut(0);\n          } else {\n            next.fadeIn(0);\n          }\n        });\n\n        if (activeElementLeftPosition > nav.width() / 2) {\n          nav.animate({\n            scrollLeft: activeElementLeftPosition - options.offset - prev.width()\n          }, options.delay);\n        }\n\n        next.click(function () {\n          var scrollPosition = nav.scrollLeft();\n          nav.animate({\n            scrollLeft: scrollPosition + nav.outerWidth() - next.width()\n          }, options.delay);\n        });\n        prev.click(function () {\n          var scrollPosition = nav.scrollLeft();\n          nav.animate({\n            scrollLeft: scrollPosition - nav.outerWidth() + prev.width()\n          }, options.delay);\n        });\n        nav.scroll(function () {\n          var scrollMaxLeft = (nav[0].scrollWidth.toFixed() - nav.outerWidth()).toFixed(),\n              scrollPosition = nav.scrollLeft(); // Hide or Show Back Arrow\n\n          if (scrollPosition <= 0) {\n            prev.fadeOut(0);\n          } else {\n            prev.fadeIn(0);\n          } // Hide or Show Next Arrow\n\n\n          if (scrollPosition >= scrollMaxLeft) {\n            next.fadeOut(0);\n          } else {\n            next.fadeIn(0);\n          }\n        });\n      }\n    }\n  }]);\n\n  return HsNavScroller;\n}();\n\n\n\n//# sourceURL=webpack://HsNavScroller/./src/js/hs-nav-scroller.js?")}},e={},f.m=d,f.c=e,f.d=function(n,e,t){f.o(n,e)||Object.defineProperty(n,e,{enumerable:!0,get:t})},f.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},f.t=function(e,n){if(1&n&&(e=f(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(f.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)f.d(t,o,function(n){return e[n]}.bind(null,o));return t},f.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return f.d(e,"a",e),e},f.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},f.p="",f(f.s="./src/js/hs-nav-scroller.js").default;function f(n){if(e[n])return e[n].exports;var t=e[n]={i:n,l:!1,exports:{}};return d[n].call(t.exports,t,t.exports,f),t.l=!0,t.exports}var d,e});
;/*
     _ _      _       _
 ___| (_) ___| | __  (_)___
/ __| | |/ __| |/ /  | / __|
\__ \ | | (__|   < _ | \__ \
|___/_|_|\___|_|\_(_)/ |___/
                   |__/

 Version: 1.8.0
  Author: Ken Wheeler
 Website: http://kenwheeler.github.io
    Docs: http://kenwheeler.github.io/slick
    Repo: http://github.com/kenwheeler/slick
  Issues: http://github.com/kenwheeler/slick/issues

 */
/* global window, document, define, jQuery, setInterval, clearInterval */
;(function(factory) {
  'use strict';
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (typeof exports !== 'undefined') {
    module.exports = factory(require('jquery'));
  } else {
    factory(jQuery);
  }

}(function($) {
  'use strict';
  var Slick = window.Slick || {};

  Slick = (function() {

    var instanceUid = 0;

    function Slick(element, settings) {

      var _ = this, dataSettings;

      _.defaults = {
        accessibility: true,
        adaptiveHeight: false,
        appendArrows: $(element),
        appendDots: $(element),
        arrows: true,
        asNavFor: null,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
        autoplay: false,
        autoplaySpeed: 3000,
        centerMode: false,
        centerPadding: '50px',
        cssEase: 'ease',
        customPaging: function(slider, i) {
          return $('<button type="button" />').text(i + 1);
        },
        dots: false,
        dotsClass: 'slick-dots',
        draggable: true,
        easing: 'linear',
        edgeFriction: 0.35,
        fade: false,
        focusOnSelect: false,
        focusOnChange: false,
        infinite: true,
        initialSlide: 0,
        lazyLoad: 'ondemand',
        mobileFirst: false,
        pauseOnHover: true,
        pauseOnFocus: true,
        pauseOnDotsHover: false,
        respondTo: 'window',
        responsive: null,
        rows: 1,
        rtl: false,
        slide: '',
        slidesPerRow: 1,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        swipe: true,
        swipeToSlide: false,
        touchMove: true,
        touchThreshold: 5,
        useCSS: true,
        useTransform: true,
        variableWidth: false,
        vertical: false,
        verticalSwiping: false,
        waitForAnimate: true,
        zIndex: 1000
      };

      _.initials = {
        animating: false,
        dragging: false,
        autoPlayTimer: null,
        currentDirection: 0,
        currentLeft: null,
        currentSlide: 0,
        direction: 1,
        $dots: null,
        listWidth: null,
        listHeight: null,
        loadIndex: 0,
        $nextArrow: null,
        $prevArrow: null,
        scrolling: false,
        slideCount: null,
        slideWidth: null,
        $slideTrack: null,
        $slides: null,
        sliding: false,
        slideOffset: 0,
        swipeLeft: null,
        swiping: false,
        $list: null,
        touchObject: {},
        transformsEnabled: false,
        unslicked: false
      };

      $.extend(_, _.initials);

      _.activeBreakpoint = null;
      _.animType = null;
      _.animProp = null;
      _.breakpoints = [];
      _.breakpointSettings = [];
      _.cssTransitions = false;
      _.focussed = false;
      _.interrupted = false;
      _.hidden = 'hidden';
      _.paused = true;
      _.positionProp = null;
      _.respondTo = null;
      _.rowCount = 1;
      _.shouldClick = true;
      _.$slider = $(element);
      _.$slidesCache = null;
      _.transformType = null;
      _.transitionType = null;
      _.visibilityChange = 'visibilitychange';
      _.windowWidth = 0;
      _.windowTimer = null;

      dataSettings = $(element).data('slick') || {};

      _.options = $.extend({}, _.defaults, settings, dataSettings);

      _.currentSlide = _.options.initialSlide;

      _.originalSettings = _.options;

      if (typeof document.mozHidden !== 'undefined') {
        _.hidden = 'mozHidden';
        _.visibilityChange = 'mozvisibilitychange';
      } else if (typeof document.webkitHidden !== 'undefined') {
        _.hidden = 'webkitHidden';
        _.visibilityChange = 'webkitvisibilitychange';
      }

      _.autoPlay = $.proxy(_.autoPlay, _);
      _.autoPlayClear = $.proxy(_.autoPlayClear, _);
      _.autoPlayIterator = $.proxy(_.autoPlayIterator, _);
      _.changeSlide = $.proxy(_.changeSlide, _);
      _.clickHandler = $.proxy(_.clickHandler, _);
      _.selectHandler = $.proxy(_.selectHandler, _);
      _.setPosition = $.proxy(_.setPosition, _);
      _.swipeHandler = $.proxy(_.swipeHandler, _);
      _.dragHandler = $.proxy(_.dragHandler, _);
      _.keyHandler = $.proxy(_.keyHandler, _);

      _.instanceUid = instanceUid++;

      // A simple way to check for HTML strings
      // Strict HTML recognition (must start with <)
      // Extracted from jQuery v1.11 source
      _.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/;


      _.registerBreakpoints();
      _.init(true);

    }

    return Slick;

  }());

  Slick.prototype.activateADA = function() {
    var _ = this;

    _.$slideTrack.find('.slick-active').attr({
      'aria-hidden': 'false'
    }).find('a, input, button, select').attr({
      'tabindex': '0'
    });

  };

  Slick.prototype.addSlide = Slick.prototype.slickAdd = function(markup, index, addBefore) {

    var _ = this;

    if (typeof(index) === 'boolean') {
      addBefore = index;
      index = null;
    } else if (index < 0 || (index >= _.slideCount)) {
      return false;
    }

    _.unload();

    if (typeof(index) === 'number') {
      if (index === 0 && _.$slides.length === 0) {
        $(markup).appendTo(_.$slideTrack);
      } else if (addBefore) {
        $(markup).insertBefore(_.$slides.eq(index));
      } else {
        $(markup).insertAfter(_.$slides.eq(index));
      }
    } else {
      if (addBefore === true) {
        $(markup).prependTo(_.$slideTrack);
      } else {
        $(markup).appendTo(_.$slideTrack);
      }
    }

    _.$slides = _.$slideTrack.children(this.options.slide);

    _.$slideTrack.children(this.options.slide).detach();

    _.$slideTrack.append(_.$slides);

    _.$slides.each(function(index, element) {
      $(element).attr('data-slick-index', index);
    });

    _.$slidesCache = _.$slides;

    _.reinit();

  };

  Slick.prototype.animateHeight = function() {
    var _ = this;
    // Old
    // if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true && _.options.vertical === false) {
    if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true) {
      var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
      _.$list.animate({
        height: targetHeight
      }, _.options.speed);
    }
  };

  Slick.prototype.animateSlide = function(targetLeft, callback) {

    var animProps = {},
      _ = this;

    _.animateHeight();

    if (_.options.rtl === true && _.options.vertical === false) {
      targetLeft = -targetLeft;
    }
    if (_.transformsEnabled === false) {
      if (_.options.vertical === false) {
        _.$slideTrack.animate({
          left: targetLeft
        }, _.options.speed, _.options.easing, callback);
      } else {
        _.$slideTrack.animate({
          top: targetLeft
        }, _.options.speed, _.options.easing, callback);
      }

    } else {

      if (_.cssTransitions === false) {
        if (_.options.rtl === true) {
          _.currentLeft = -(_.currentLeft);
        }
        $({
          animStart: _.currentLeft
        }).animate({
          animStart: targetLeft
        }, {
          duration: _.options.speed,
          easing: _.options.easing,
          step: function(now) {
            now = Math.ceil(now);

            if (_.options.vertical === false) {
              animProps[_.animType] = 'translate(' +
                now + 'px, 0px)';
              _.$slideTrack.css(animProps);
            } else {
              animProps[_.animType] = 'translate(0px,' +
                now + 'px)';
              _.$slideTrack.css(animProps);
            }
          },
          complete: function() {
            if (callback) {
              callback.call();
            }
          }
        });

      } else {

        _.applyTransition();
        targetLeft = Math.ceil(targetLeft);

        if (_.options.vertical === false) {
          animProps[_.animType] = 'translate3d(' + targetLeft + 'px, 0px, 0px)';
        } else {
          animProps[_.animType] = 'translate3d(0px,' + targetLeft + 'px, 0px)';
        }
        _.$slideTrack.css(animProps);

        if (callback) {
          setTimeout(function() {

            _.disableTransition();

            callback.call();
          }, _.options.speed);
        }

      }

    }

  };

  Slick.prototype.getNavTarget = function() {

    var _ = this,
      asNavFor = _.options.asNavFor;

    if ( asNavFor && asNavFor !== null ) {
      asNavFor = $(asNavFor).not(_.$slider);
    }

    return asNavFor;

  };

  Slick.prototype.asNavFor = function(index) {

    var _ = this,
      asNavFor = _.getNavTarget();

    if ( asNavFor !== null && typeof asNavFor === 'object' ) {
      asNavFor.each(function() {
        var target = $(this).slick('getSlick');
        if(!target.unslicked) {
          target.slideHandler(index, true);
        }
      });
    }

  };

  Slick.prototype.applyTransition = function(slide) {

    var _ = this,
      transition = {};

    if (_.options.fade === false) {
      transition[_.transitionType] = _.transformType + ' ' + _.options.speed + 'ms ' + _.options.cssEase;
    } else {
      transition[_.transitionType] = 'opacity ' + _.options.speed + 'ms ' + _.options.cssEase;
    }

    if (_.options.fade === false) {
      _.$slideTrack.css(transition);
    } else {
      _.$slides.eq(slide).css(transition);
    }

  };

  Slick.prototype.autoPlay = function() {

    var _ = this;

    _.autoPlayClear();

    if ( _.slideCount > _.options.slidesToShow ) {
      _.autoPlayTimer = setInterval( _.autoPlayIterator, _.options.autoplaySpeed );
    }

  };

  Slick.prototype.autoPlayClear = function() {

    var _ = this;

    if (_.autoPlayTimer) {
      clearInterval(_.autoPlayTimer);
    }

  };

  Slick.prototype.autoPlayIterator = function() {

    var _ = this,
      slideTo = _.currentSlide + _.options.slidesToScroll;

    if ( !_.paused && !_.interrupted && !_.focussed ) {

      if ( _.options.infinite === false ) {

        if ( _.direction === 1 && ( _.currentSlide + 1 ) === ( _.slideCount - 1 )) {
          _.direction = 0;
        }

        else if ( _.direction === 0 ) {

          slideTo = _.currentSlide - _.options.slidesToScroll;

          if ( _.currentSlide - 1 === 0 ) {
            _.direction = 1;
          }

        }

      }

      _.slideHandler( slideTo );

    }

  };

  Slick.prototype.buildArrows = function() {

    var _ = this;

    if (_.options.arrows === true ) {

      _.$prevArrow = $(_.options.prevArrow).addClass('slick-arrow');
      _.$nextArrow = $(_.options.nextArrow).addClass('slick-arrow');

      if( _.slideCount > _.options.slidesToShow ) {

        _.$prevArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');
        _.$nextArrow.removeClass('slick-hidden').removeAttr('aria-hidden tabindex');

        if (_.htmlExpr.test(_.options.prevArrow)) {
          _.$prevArrow.prependTo(_.options.appendArrows);
        }

        if (_.htmlExpr.test(_.options.nextArrow)) {
          _.$nextArrow.appendTo(_.options.appendArrows);
        }

        if (_.options.infinite !== true) {
          _.$prevArrow
            .addClass('slick-disabled')
            .attr('aria-disabled', 'true');
        }

      } else {

        _.$prevArrow.add( _.$nextArrow )

          .addClass('slick-hidden')
          .attr({
            'aria-disabled': 'true',
            'tabindex': '-1'
          });

      }

    }

  };

  Slick.prototype.buildDots = function() {

    var _ = this,
      i, dot;

    if (_.options.dots === true) {

      _.$slider.addClass('slick-dotted');

      dot = $('<ul />').addClass(_.options.dotsClass);

      for (i = 0; i <= _.getDotCount(); i += 1) {
        dot.append($('<li />').append(_.options.customPaging.call(this, _, i)));
      }

      _.$dots = dot.appendTo(_.options.appendDots);

      _.$dots.find('li').first().addClass('slick-active');

    }

  };

  Slick.prototype.buildOut = function() {

    var _ = this;

    _.$slides =
      _.$slider
        .children( _.options.slide + ':not(.slick-cloned)')
        .addClass('slick-slide');

    _.slideCount = _.$slides.length;

    _.$slides.each(function(index, element) {
      $(element)
        .attr('data-slick-index', index)
        .data('originalStyling', $(element).attr('style') || '');
    });

    _.$slider.addClass('slick-slider');

    _.$slideTrack = (_.slideCount === 0) ?
      $('<div class="slick-track"/>').appendTo(_.$slider) :
      _.$slides.wrapAll('<div class="slick-track"/>').parent();

    _.$list = _.$slideTrack.wrap(
      '<div class="slick-list"/>').parent();
    _.$slideTrack.css('opacity', 0);

    if (_.options.centerMode === true || _.options.swipeToSlide === true) {
      _.options.slidesToScroll = 1;
    }

    $('img[data-lazy]', _.$slider).not('[src]').addClass('slick-loading');

    _.setupInfinite();

    _.buildArrows();

    _.buildDots();

    _.updateDots();


    _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

    if (_.options.draggable === true) {
      _.$list.addClass('draggable');
    }

  };

  Slick.prototype.buildRows = function() {

    var _ = this, a, b, c, newSlides, numOfSlides, originalSlides,slidesPerSection;

    newSlides = document.createDocumentFragment();
    originalSlides = _.$slider.children();

    if(_.options.rows > 1) {

      slidesPerSection = _.options.slidesPerRow * _.options.rows;
      numOfSlides = Math.ceil(
        originalSlides.length / slidesPerSection
      );

      for(a = 0; a < numOfSlides; a++){
        var slide = document.createElement('div');
        for(b = 0; b < _.options.rows; b++) {
          var row = document.createElement('div');
          for(c = 0; c < _.options.slidesPerRow; c++) {
            var target = (a * slidesPerSection + ((b * _.options.slidesPerRow) + c));
            if (originalSlides.get(target)) {
              row.appendChild(originalSlides.get(target));
            }
          }
          slide.appendChild(row);
        }
        newSlides.appendChild(slide);
      }

      _.$slider.empty().append(newSlides);
      _.$slider.children().children().children()
        .css({
          'width':(100 / _.options.slidesPerRow) + '%',
          'display': 'inline-block'
        });

    }

  };

  Slick.prototype.checkResponsive = function(initial, forceUpdate) {

    var _ = this,
      breakpoint, targetBreakpoint, respondToWidth, triggerBreakpoint = false;
    var sliderWidth = _.$slider.width();
    var windowWidth = window.innerWidth || $(window).width();

    if (_.respondTo === 'window') {
      respondToWidth = windowWidth;
    } else if (_.respondTo === 'slider') {
      respondToWidth = sliderWidth;
    } else if (_.respondTo === 'min') {
      respondToWidth = Math.min(windowWidth, sliderWidth);
    }

    if ( _.options.responsive &&
      _.options.responsive.length &&
      _.options.responsive !== null) {

      targetBreakpoint = null;

      for (breakpoint in _.breakpoints) {
        if (_.breakpoints.hasOwnProperty(breakpoint)) {
          if (_.originalSettings.mobileFirst === false) {
            if (respondToWidth < _.breakpoints[breakpoint]) {
              targetBreakpoint = _.breakpoints[breakpoint];
            }
          } else {
            if (respondToWidth > _.breakpoints[breakpoint]) {
              targetBreakpoint = _.breakpoints[breakpoint];
            }
          }
        }
      }

      if (targetBreakpoint !== null) {
        if (_.activeBreakpoint !== null) {
          if (targetBreakpoint !== _.activeBreakpoint || forceUpdate) {
            _.activeBreakpoint =
              targetBreakpoint;
            if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
              _.unslick(targetBreakpoint);
            } else {
              _.options = $.extend({}, _.originalSettings,
                _.breakpointSettings[
                  targetBreakpoint]);
              if (initial === true) {
                _.currentSlide = _.options.initialSlide;
              }
              _.refresh(initial);
            }
            triggerBreakpoint = targetBreakpoint;
          }
        } else {
          _.activeBreakpoint = targetBreakpoint;
          if (_.breakpointSettings[targetBreakpoint] === 'unslick') {
            _.unslick(targetBreakpoint);
          } else {
            _.options = $.extend({}, _.originalSettings,
              _.breakpointSettings[
                targetBreakpoint]);
            if (initial === true) {
              _.currentSlide = _.options.initialSlide;
            }
            _.refresh(initial);
          }
          triggerBreakpoint = targetBreakpoint;
        }
      } else {
        if (_.activeBreakpoint !== null) {
          _.activeBreakpoint = null;
          _.options = _.originalSettings;
          if (initial === true) {
            _.currentSlide = _.options.initialSlide;
          }
          _.refresh(initial);
          triggerBreakpoint = targetBreakpoint;
        }
      }

      // only trigger breakpoints during an actual break. not on initialize.
      if( !initial && triggerBreakpoint !== false ) {
        _.$slider.trigger('breakpoint', [_, triggerBreakpoint]);
      }
    }

  };

  Slick.prototype.changeSlide = function(event, dontAnimate) {

    var _ = this,
      $target = $(event.currentTarget),
      indexOffset, slideOffset, unevenOffset;

    // If target is a link, prevent default action.
    if($target.is('a')) {
      event.preventDefault();
    }

    // If target is not the <li> element (ie: a child), find the <li>.
    if(!$target.is('li')) {
      $target = $target.closest('li');
    }

    unevenOffset = (_.slideCount % _.options.slidesToScroll !== 0);
    indexOffset = unevenOffset ? 0 : (_.slideCount - _.currentSlide) % _.options.slidesToScroll;

    switch (event.data.message) {

      case 'previous':
        slideOffset = indexOffset === 0 ? _.options.slidesToScroll : _.options.slidesToShow - indexOffset;
        if (_.slideCount > _.options.slidesToShow) {
          _.slideHandler(_.currentSlide - slideOffset, false, dontAnimate);
        }
        break;

      case 'next':
        slideOffset = indexOffset === 0 ? _.options.slidesToScroll : indexOffset;
        if (_.slideCount > _.options.slidesToShow) {
          _.slideHandler(_.currentSlide + slideOffset, false, dontAnimate);
        }
        break;

      case 'index':
        var index = event.data.index === 0 ? 0 :
          event.data.index || $target.index() * _.options.slidesToScroll;

        _.slideHandler(_.checkNavigable(index), false, dontAnimate);
        $target.children().trigger('focus');
        break;

      default:
        return;
    }

  };

  Slick.prototype.checkNavigable = function(index) {

    var _ = this,
      navigables, prevNavigable;

    navigables = _.getNavigableIndexes();
    prevNavigable = 0;
    if (index > navigables[navigables.length - 1]) {
      index = navigables[navigables.length - 1];
    } else {
      for (var n in navigables) {
        if (index < navigables[n]) {
          index = prevNavigable;
          break;
        }
        prevNavigable = navigables[n];
      }
    }

    return index;
  };

  Slick.prototype.cleanUpEvents = function() {

    var _ = this;

    if (_.options.dots && _.$dots !== null) {

      $('li', _.$dots)
        .off('click.slick', _.changeSlide)
        .off('mouseenter.slick', $.proxy(_.interrupt, _, true))
        .off('mouseleave.slick', $.proxy(_.interrupt, _, false));

      if (_.options.accessibility === true) {
        _.$dots.off('keydown.slick', _.keyHandler);
      }
    }

    _.$slider.off('focus.slick blur.slick');

    if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
      _.$prevArrow && _.$prevArrow.off('click.slick', _.changeSlide);
      _.$nextArrow && _.$nextArrow.off('click.slick', _.changeSlide);

      if (_.options.accessibility === true) {
        _.$prevArrow && _.$prevArrow.off('keydown.slick', _.keyHandler);
        _.$nextArrow && _.$nextArrow.off('keydown.slick', _.keyHandler);
      }
    }

    _.$list.off('touchstart.slick mousedown.slick', _.swipeHandler);
    _.$list.off('touchmove.slick mousemove.slick', _.swipeHandler);
    _.$list.off('touchend.slick mouseup.slick', _.swipeHandler);
    _.$list.off('touchcancel.slick mouseleave.slick', _.swipeHandler);

    _.$list.off('click.slick', _.clickHandler);

    $(document).off(_.visibilityChange, _.visibility);

    _.cleanUpSlideEvents();

    if (_.options.accessibility === true) {
      _.$list.off('keydown.slick', _.keyHandler);
    }

    if (_.options.focusOnSelect === true) {
      $(_.$slideTrack).children().off('click.slick', _.selectHandler);
    }

    $(window).off('orientationchange.slick.slick-' + _.instanceUid, _.orientationChange);

    $(window).off('resize.slick.slick-' + _.instanceUid, _.resize);

    $('[draggable!=true]', _.$slideTrack).off('dragstart', _.preventDefault);

    $(window).off('load.slick.slick-' + _.instanceUid, _.setPosition);

  };

  Slick.prototype.cleanUpSlideEvents = function() {

    var _ = this;

    _.$list.off('mouseenter.slick', $.proxy(_.interrupt, _, true));
    _.$list.off('mouseleave.slick', $.proxy(_.interrupt, _, false));

  };

  Slick.prototype.cleanUpRows = function() {

    var _ = this, originalSlides;

    if(_.options.rows > 1) {
      originalSlides = _.$slides.children().children();
      originalSlides.removeAttr('style');
      _.$slider.empty().append(originalSlides);
    }

  };

  Slick.prototype.clickHandler = function(event) {

    var _ = this;

    if (_.shouldClick === false) {
      event.stopImmediatePropagation();
      event.stopPropagation();
      event.preventDefault();
    }

  };

  Slick.prototype.destroy = function(refresh) {

    var _ = this;

    _.autoPlayClear();

    _.touchObject = {};

    _.cleanUpEvents();

    $('.slick-cloned', _.$slider).detach();

    if (_.$dots) {
      _.$dots.remove();
    }

    if ( _.$prevArrow && _.$prevArrow.length ) {

      _.$prevArrow
        .removeClass('slick-disabled slick-arrow slick-hidden')
        .removeAttr('aria-hidden aria-disabled tabindex')
        .css('display','');

      if ( _.htmlExpr.test( _.options.prevArrow )) {
        _.$prevArrow.remove();
      }
    }

    if ( _.$nextArrow && _.$nextArrow.length ) {

      _.$nextArrow
        .removeClass('slick-disabled slick-arrow slick-hidden')
        .removeAttr('aria-hidden aria-disabled tabindex')
        .css('display','');

      if ( _.htmlExpr.test( _.options.nextArrow )) {
        _.$nextArrow.remove();
      }
    }


    if (_.$slides) {

      _.$slides
        .removeClass('slick-slide slick-active slick-center slick-visible slick-current')
        .removeAttr('aria-hidden')
        .removeAttr('data-slick-index')
        .each(function(){
          $(this).attr('style', $(this).data('originalStyling'));
        });

      _.$slideTrack.children(this.options.slide).detach();

      _.$slideTrack.detach();

      _.$list.detach();

      _.$slider.append(_.$slides);
    }

    _.cleanUpRows();

    _.$slider.removeClass('slick-slider');
    _.$slider.removeClass('slick-initialized');
    _.$slider.removeClass('slick-dotted');

    _.unslicked = true;

    if(!refresh) {
      _.$slider.trigger('destroy', [_]);
    }

  };

  Slick.prototype.disableTransition = function(slide) {

    var _ = this,
      transition = {};

    transition[_.transitionType] = '';

    if (_.options.fade === false) {
      _.$slideTrack.css(transition);
    } else {
      _.$slides.eq(slide).css(transition);
    }

  };

  Slick.prototype.fadeSlide = function(slideIndex, callback) {

    var _ = this;

    if (_.cssTransitions === false) {

      _.$slides.eq(slideIndex).css({
        zIndex: _.options.zIndex
      });

      _.$slides.eq(slideIndex).animate({
        opacity: 1
      }, _.options.speed, _.options.easing, callback);

    } else {

      _.applyTransition(slideIndex);

      _.$slides.eq(slideIndex).css({
        opacity: 1,
        zIndex: _.options.zIndex
      });

      if (callback) {
        setTimeout(function() {

          _.disableTransition(slideIndex);

          callback.call();
        }, _.options.speed);
      }

    }

  };

  Slick.prototype.fadeSlideOut = function(slideIndex) {

    var _ = this;

    if (_.cssTransitions === false) {

      _.$slides.eq(slideIndex).animate({
        opacity: 0,
        zIndex: _.options.zIndex - 2
      }, _.options.speed, _.options.easing);

    } else {

      _.applyTransition(slideIndex);

      _.$slides.eq(slideIndex).css({
        opacity: 0,
        zIndex: _.options.zIndex - 2
      });

    }

  };

  Slick.prototype.filterSlides = Slick.prototype.slickFilter = function(filter) {

    var _ = this;

    if (filter !== null) {

      _.$slidesCache = _.$slides;

      _.unload();

      _.$slideTrack.children(this.options.slide).detach();

      _.$slidesCache.filter(filter).appendTo(_.$slideTrack);

      _.reinit();

    }

  };

  Slick.prototype.focusHandler = function() {

    var _ = this;

    _.$slider
      .off('focus.slick blur.slick')
      .on('focus.slick blur.slick', '*', function(event) {

        event.stopImmediatePropagation();
        var $sf = $(this);

        setTimeout(function() {

          if( _.options.pauseOnFocus ) {
            _.focussed = $sf.is(':focus');
            _.autoPlay();
          }

        }, 0);

      });
  };

  Slick.prototype.getCurrent = Slick.prototype.slickCurrentSlide = function() {

    var _ = this;
    return _.currentSlide;

  };

  Slick.prototype.getDotCount = function() {

    var _ = this;

    var breakPoint = 0;
    var counter = 0;
    var pagerQty = 0;

    if (_.options.infinite === true) {
      if (_.slideCount <= _.options.slidesToShow) {
        ++pagerQty;
      } else {
        while (breakPoint < _.slideCount) {
          ++pagerQty;
          breakPoint = counter + _.options.slidesToScroll;
          counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
        }
      }
    } else if (_.options.centerMode === true) {
      pagerQty = _.slideCount;
    } else if(!_.options.asNavFor) {
      pagerQty = 1 + Math.ceil((_.slideCount - _.options.slidesToShow) / _.options.slidesToScroll);
    }else {
      while (breakPoint < _.slideCount) {
        ++pagerQty;
        breakPoint = counter + _.options.slidesToScroll;
        counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
      }
    }

    return pagerQty - 1;

  };

  Slick.prototype.getLeft = function(slideIndex) {

    var _ = this,
      targetLeft,
      verticalHeight,
      verticalOffset = 0,
      targetSlide,
      coef,
      slidesHeightsArray = [],
      newslidesHeightsArray = [];

    for(var i = 0; i < _.$slides.length; i++) {
      slidesHeightsArray[i] = _.$slides[i].clientHeight;
    }

    _.slideOffset = 0;
    verticalHeight = _.$slides.first().outerHeight(true);

    if (_.options.infinite === true) {
      if (_.slideCount > _.options.slidesToShow) {
        _.slideOffset = (_.slideWidth * _.options.slidesToShow) * -1;
        coef = -1

        if (_.options.vertical === true && _.options.centerMode === true) {
          if (_.options.slidesToShow === 2) {
            coef = -1.5;
          } else if (_.options.slidesToShow === 1) {
            coef = -2;
          }
        }

        if (_.options.vertical === true && _.options.infinite === true) {
          verticalHeight = _.$slides.last().outerHeight(true);
        }

        verticalOffset = (verticalHeight * _.options.slidesToShow) * coef;
      }
      if (_.slideCount % _.options.slidesToScroll !== 0) {
        if (slideIndex + _.options.slidesToScroll > _.slideCount && _.slideCount > _.options.slidesToShow) {
          if (slideIndex > _.slideCount) {
            _.slideOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * _.slideWidth) * -1;
            verticalOffset = ((_.options.slidesToShow - (slideIndex - _.slideCount)) * verticalHeight) * -1;
          } else {
            _.slideOffset = ((_.slideCount % _.options.slidesToScroll) * _.slideWidth) * -1;
            verticalOffset = ((_.slideCount % _.options.slidesToScroll) * verticalHeight) * -1;
          }
        }
      }
    } else {
      if (slideIndex + _.options.slidesToShow > _.slideCount) {
        _.slideOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * _.slideWidth;
        verticalOffset = ((slideIndex + _.options.slidesToShow) - _.slideCount) * verticalHeight;
      }
    }

    if (_.slideCount <= _.options.slidesToShow) {
      _.slideOffset = 0;
      verticalOffset = 0;
    }

    if (_.options.centerMode === true && _.slideCount <= _.options.slidesToShow) {
      _.slideOffset = ((_.slideWidth * Math.floor(_.options.slidesToShow)) / 2) - ((_.slideWidth * _.slideCount) / 2);
    } else if (_.options.centerMode === true && _.options.infinite === true) {
      _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2) - _.slideWidth;
    } else if (_.options.centerMode === true) {
      _.slideOffset = 0;
      _.slideOffset += _.slideWidth * Math.floor(_.options.slidesToShow / 2);
    }

    if (_.options.vertical === false) {
      targetLeft = ((slideIndex * _.slideWidth) * -1) + _.slideOffset;
    } else {
      newslidesHeightsArray = slidesHeightsArray.slice(0, slideIndex);

      var total = newslidesHeightsArray.length !== 0 ? newslidesHeightsArray.reduce(function(a, b) {
        return a + b;
      }) : 0;

      targetLeft = (total * -1) + verticalOffset;
    }

    if (_.options.variableWidth === true) {

      if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
        targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
      } else {
        targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow);
      }

      if (_.options.rtl === true) {
        if (targetSlide[0]) {
          targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
        } else {
          targetLeft =  0;
        }
      } else {
        targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
      }

      if (_.options.centerMode === true) {
        if (_.slideCount <= _.options.slidesToShow || _.options.infinite === false) {
          targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex);
        } else {
          targetSlide = _.$slideTrack.children('.slick-slide').eq(slideIndex + _.options.slidesToShow + 1);
        }

        if (_.options.rtl === true) {
          if (targetSlide[0]) {
            targetLeft = (_.$slideTrack.width() - targetSlide[0].offsetLeft - targetSlide.width()) * -1;
          } else {
            targetLeft =  0;
          }
        } else {
          targetLeft = targetSlide[0] ? targetSlide[0].offsetLeft * -1 : 0;
        }

        targetLeft += (_.$list.width() - targetSlide.outerWidth()) / 2;
      }
    }

    return targetLeft;

  };

  Slick.prototype.getOption = Slick.prototype.slickGetOption = function(option) {

    var _ = this;

    return _.options[option];

  };

  Slick.prototype.getNavigableIndexes = function() {

    var _ = this,
      breakPoint = 0,
      counter = 0,
      indexes = [],
      max;

    if (_.options.infinite === false) {
      max = _.slideCount;
    } else {
      breakPoint = _.options.slidesToScroll * -1;
      counter = _.options.slidesToScroll * -1;
      max = _.slideCount * 2;
    }

    while (breakPoint < max) {
      indexes.push(breakPoint);
      breakPoint = counter + _.options.slidesToScroll;
      counter += _.options.slidesToScroll <= _.options.slidesToShow ? _.options.slidesToScroll : _.options.slidesToShow;
    }

    return indexes;

  };

  Slick.prototype.getSlick = function() {

    return this;

  };

  Slick.prototype.getSlideCount = function() {

    var _ = this,
      slidesTraversed, swipedSlide, centerOffset;

    centerOffset = _.options.centerMode === true ? _.slideWidth * Math.floor(_.options.slidesToShow / 2) : 0;

    if (_.options.swipeToSlide === true) {
      _.$slideTrack.find('.slick-slide').each(function(index, slide) {
        if (slide.offsetLeft - centerOffset + ($(slide).outerWidth() / 2) > (_.swipeLeft * -1)) {
          swipedSlide = slide;
          return false;
        }
      });

      slidesTraversed = Math.abs($(swipedSlide).attr('data-slick-index') - _.currentSlide) || 1;

      return slidesTraversed;

    } else {
      return _.options.slidesToScroll;
    }

  };

  Slick.prototype.goTo = Slick.prototype.slickGoTo = function(slide, dontAnimate) {

    var _ = this;

    _.changeSlide({
      data: {
        message: 'index',
        index: parseInt(slide)
      }
    }, dontAnimate);

  };

  Slick.prototype.init = function(creation) {

    var _ = this;

    if (!$(_.$slider).hasClass('slick-initialized')) {

      $(_.$slider).addClass('slick-initialized');

      _.buildRows();
      _.buildOut();
      _.setProps();
      _.startLoad();
      _.loadSlider();
      _.initializeEvents();
      _.updateArrows();
      _.updateDots();
      _.checkResponsive(true);
      _.focusHandler();

    }

    if (creation) {
      _.$slider.trigger('init', [_]);
    }

    if (_.options.accessibility === true) {
      _.initADA();
    }

    if ( _.options.autoplay ) {

      _.paused = false;
      _.autoPlay();

    }

  };

  Slick.prototype.initADA = function() {
    var _ = this,
      numDotGroups = Math.ceil(_.slideCount / _.options.slidesToShow),
      tabControlIndexes = _.getNavigableIndexes().filter(function(val) {
        return (val >= 0) && (val < _.slideCount);
      });

    _.$slides.add(_.$slideTrack.find('.slick-cloned')).attr({
      'aria-hidden': 'true',
      'tabindex': '-1'
    }).find('a, input, button, select').attr({
      'tabindex': '-1'
    });

    if (_.$dots !== null) {
      _.$slides.not(_.$slideTrack.find('.slick-cloned')).each(function(i) {
        var slideControlIndex = tabControlIndexes.indexOf(i);

        $(this).attr({
          'role': 'tabpanel',
          'id': 'slick-slide' + _.instanceUid + i,
          'tabindex': -1
        });

        if (slideControlIndex !== -1) {
          $(this).attr({
            'aria-describedby': 'slick-slide-control' + _.instanceUid + slideControlIndex
          });
        }
      });

      _.$dots.attr('role', 'tablist').find('li').each(function(i) {
        var mappedSlideIndex = tabControlIndexes[i];

        $(this).attr({
          'role': 'presentation'
        });

        $(this).find('button').first().attr({
          'role': 'tab',
          'id': 'slick-slide-control' + _.instanceUid + i,
          'aria-controls': 'slick-slide' + _.instanceUid + mappedSlideIndex,
          'aria-label': (i + 1) + ' of ' + numDotGroups,
          'aria-selected': null,
          'tabindex': '-1'
        });

      }).eq(_.currentSlide).find('button').attr({
        'aria-selected': 'true',
        'tabindex': '0'
      }).end();
    }

    for (var i=_.currentSlide, max=i+_.options.slidesToShow; i < max; i++) {
      _.$slides.eq(i).attr('tabindex', 0);
    }

    _.activateADA();

  };

  Slick.prototype.initArrowEvents = function() {

    var _ = this;

    if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {
      _.$prevArrow
        .off('click.slick')
        .on('click.slick', {
          message: 'previous'
        }, _.changeSlide);
      _.$nextArrow
        .off('click.slick')
        .on('click.slick', {
          message: 'next'
        }, _.changeSlide);

      if (_.options.accessibility === true) {
        _.$prevArrow.on('keydown.slick', _.keyHandler);
        _.$nextArrow.on('keydown.slick', _.keyHandler);
      }
    }

  };

  Slick.prototype.initDotEvents = function() {

    var _ = this;

    if (_.options.dots === true) {
      $('li', _.$dots).on('click.slick', {
        message: 'index'
      }, _.changeSlide);

      if (_.options.accessibility === true) {
        _.$dots.on('keydown.slick', _.keyHandler);
      }
    }

    if ( _.options.dots === true && _.options.pauseOnDotsHover === true ) {

      $('li', _.$dots)
        .on('mouseenter.slick', $.proxy(_.interrupt, _, true))
        .on('mouseleave.slick', $.proxy(_.interrupt, _, false));

    }

  };

  Slick.prototype.initSlideEvents = function() {

    var _ = this;

    if ( _.options.pauseOnHover ) {

      _.$list.on('mouseenter.slick', $.proxy(_.interrupt, _, true));
      _.$list.on('mouseleave.slick', $.proxy(_.interrupt, _, false));

    }

  };

  Slick.prototype.initializeEvents = function() {

    var _ = this;

    _.initArrowEvents();

    _.initDotEvents();
    _.initSlideEvents();

    _.$list.on('touchstart.slick mousedown.slick', {
      action: 'start'
    }, _.swipeHandler);
    _.$list.on('touchmove.slick mousemove.slick', {
      action: 'move'
    }, _.swipeHandler);
    _.$list.on('touchend.slick mouseup.slick', {
      action: 'end'
    }, _.swipeHandler);
    _.$list.on('touchcancel.slick mouseleave.slick', {
      action: 'end'
    }, _.swipeHandler);

    _.$list.on('click.slick', _.clickHandler);

    $(document).on(_.visibilityChange, $.proxy(_.visibility, _));

    if (_.options.accessibility === true) {
      _.$list.on('keydown.slick', _.keyHandler);
    }

    if (_.options.focusOnSelect === true) {
      $(_.$slideTrack).children().on('click.slick', _.selectHandler);
    }

    $(window).on('orientationchange.slick.slick-' + _.instanceUid, $.proxy(_.orientationChange, _));

    $(window).on('resize.slick.slick-' + _.instanceUid, $.proxy(_.resize, _));

    $('[draggable!=true]', _.$slideTrack).on('dragstart', _.preventDefault);

    $(window).on('load.slick.slick-' + _.instanceUid, _.setPosition);
    $(_.setPosition);

  };

  Slick.prototype.initUI = function() {

    var _ = this;

    if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

      _.$prevArrow.show();
      _.$nextArrow.show();

    }

    if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

      _.$dots.show();

    }

  };

  Slick.prototype.keyHandler = function(event) {

    var _ = this;
    //Dont slide if the cursor is inside the form fields and arrow keys are pressed
    if(!event.target.tagName.match('TEXTAREA|INPUT|SELECT')) {
      if (event.keyCode === 37 && _.options.accessibility === true) {
        _.changeSlide({
          data: {
            message: _.options.rtl === true ? 'next' :  'previous'
          }
        });
      } else if (event.keyCode === 39 && _.options.accessibility === true) {
        _.changeSlide({
          data: {
            message: _.options.rtl === true ? 'previous' : 'next'
          }
        });
      }
    }

  };

  Slick.prototype.lazyLoad = function() {

    var _ = this,
      loadRange, cloneRange, rangeStart, rangeEnd;

    function loadImages(imagesScope) {

      $('img[data-lazy]', imagesScope).each(function() {

        var image = $(this),
          imageSource = $(this).attr('data-lazy'),
          imageSrcSet = $(this).attr('data-srcset'),
          imageSizes  = $(this).attr('data-sizes') || _.$slider.attr('data-sizes'),
          imageToLoad = document.createElement('img');

        imageToLoad.onload = function() {

          image
            .animate({ opacity: 0 }, 100, function() {

              if (imageSrcSet) {
                image
                  .attr('srcset', imageSrcSet );

                if (imageSizes) {
                  image
                    .attr('sizes', imageSizes );
                }
              }

              image
                .attr('src', imageSource)
                .animate({ opacity: 1 }, 200, function() {
                  image
                    .removeAttr('data-lazy data-srcset data-sizes')
                    .removeClass('slick-loading');
                });
              _.$slider.trigger('lazyLoaded', [_, image, imageSource]);
            });

        };

        imageToLoad.onerror = function() {

          image
            .removeAttr( 'data-lazy' )
            .removeClass( 'slick-loading' )
            .addClass( 'slick-lazyload-error' );

          _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);

        };

        imageToLoad.src = imageSource;

      });

    }

    if (_.options.centerMode === true) {
      if (_.options.infinite === true) {
        rangeStart = _.currentSlide + (_.options.slidesToShow / 2 + 1);
        rangeEnd = rangeStart + _.options.slidesToShow + 2;
      } else {
        rangeStart = Math.max(0, _.currentSlide - (_.options.slidesToShow / 2 + 1));
        rangeEnd = 2 + (_.options.slidesToShow / 2 + 1) + _.currentSlide;
      }
    } else {
      rangeStart = _.options.infinite ? _.options.slidesToShow + _.currentSlide : _.currentSlide;
      rangeEnd = Math.ceil(rangeStart + _.options.slidesToShow);
      if (_.options.fade === true) {
        if (rangeStart > 0) rangeStart--;
        if (rangeEnd <= _.slideCount) rangeEnd++;
      }
    }

    loadRange = _.$slider.find('.slick-slide').slice(rangeStart, rangeEnd);

    if (_.options.lazyLoad === 'anticipated') {
      var prevSlide = rangeStart - 1,
        nextSlide = rangeEnd,
        $slides = _.$slider.find('.slick-slide');

      for (var i = 0; i < _.options.slidesToScroll; i++) {
        if (prevSlide < 0) prevSlide = _.slideCount - 1;
        loadRange = loadRange.add($slides.eq(prevSlide));
        loadRange = loadRange.add($slides.eq(nextSlide));
        prevSlide--;
        nextSlide++;
      }
    }

    loadImages(loadRange);

    if (_.slideCount <= _.options.slidesToShow) {
      cloneRange = _.$slider.find('.slick-slide');
      loadImages(cloneRange);
    } else
    if (_.currentSlide >= _.slideCount - _.options.slidesToShow) {
      cloneRange = _.$slider.find('.slick-cloned').slice(0, _.options.slidesToShow);
      loadImages(cloneRange);
    } else if (_.currentSlide === 0) {
      cloneRange = _.$slider.find('.slick-cloned').slice(_.options.slidesToShow * -1);
      loadImages(cloneRange);
    }

  };

  Slick.prototype.loadSlider = function() {

    var _ = this;

    _.setPosition();

    _.$slideTrack.css({
      opacity: 1
    });

    _.$slider.removeClass('slick-loading');

    _.initUI();

    if (_.options.lazyLoad === 'progressive') {
      _.progressiveLazyLoad();
    }

  };

  Slick.prototype.next = Slick.prototype.slickNext = function() {

    var _ = this;

    _.changeSlide({
      data: {
        message: 'next'
      }
    });

  };

  Slick.prototype.orientationChange = function() {

    var _ = this;

    _.checkResponsive();
    _.setPosition();

  };

  Slick.prototype.pause = Slick.prototype.slickPause = function() {

    var _ = this;

    _.autoPlayClear();
    _.paused = true;

  };

  Slick.prototype.play = Slick.prototype.slickPlay = function() {

    var _ = this;

    _.autoPlay();
    _.options.autoplay = true;
    _.paused = false;
    _.focussed = false;
    _.interrupted = false;

  };

  Slick.prototype.postSlide = function(index) {

    var _ = this;

    if( !_.unslicked ) {

      _.$slider.trigger('afterChange', [_, index]);

      _.animating = false;

      if (_.slideCount > _.options.slidesToShow) {
        _.setPosition();
      }

      _.swipeLeft = null;

      if ( _.options.autoplay ) {
        _.autoPlay();
      }

      if (_.options.accessibility === true) {
        _.initADA();

        if (_.options.focusOnChange) {
          var $currentSlide = $(_.$slides.get(_.currentSlide));
          $currentSlide.attr('tabindex', 0).focus();
        }
      }

    }

  };

  Slick.prototype.prev = Slick.prototype.slickPrev = function() {

    var _ = this;

    _.changeSlide({
      data: {
        message: 'previous'
      }
    });

  };

  Slick.prototype.preventDefault = function(event) {

    event.preventDefault();

  };

  Slick.prototype.progressiveLazyLoad = function( tryCount ) {

    tryCount = tryCount || 1;

    var _ = this,
      $imgsToLoad = $( 'img[data-lazy]', _.$slider ),
      image,
      imageSource,
      imageSrcSet,
      imageSizes,
      imageToLoad;

    if ( $imgsToLoad.length ) {

      image = $imgsToLoad.first();
      imageSource = image.attr('data-lazy');
      imageSrcSet = image.attr('data-srcset');
      imageSizes  = image.attr('data-sizes') || _.$slider.attr('data-sizes');
      imageToLoad = document.createElement('img');

      imageToLoad.onload = function() {

        if (imageSrcSet) {
          image
            .attr('srcset', imageSrcSet );

          if (imageSizes) {
            image
              .attr('sizes', imageSizes );
          }
        }

        image
          .attr( 'src', imageSource )
          .removeAttr('data-lazy data-srcset data-sizes')
          .removeClass('slick-loading');

        if ( _.options.adaptiveHeight === true ) {
          _.setPosition();
        }

        _.$slider.trigger('lazyLoaded', [ _, image, imageSource ]);
        _.progressiveLazyLoad();

      };

      imageToLoad.onerror = function() {

        if ( tryCount < 3 ) {

          /**
           * try to load the image 3 times,
           * leave a slight delay so we don't get
           * servers blocking the request.
           */
          setTimeout( function() {
            _.progressiveLazyLoad( tryCount + 1 );
          }, 500 );

        } else {

          image
            .removeAttr( 'data-lazy' )
            .removeClass( 'slick-loading' )
            .addClass( 'slick-lazyload-error' );

          _.$slider.trigger('lazyLoadError', [ _, image, imageSource ]);

          _.progressiveLazyLoad();

        }

      };

      imageToLoad.src = imageSource;

    } else {

      _.$slider.trigger('allImagesLoaded', [ _ ]);

    }

  };

  Slick.prototype.refresh = function( initializing ) {

    var _ = this, currentSlide, lastVisibleIndex;

    lastVisibleIndex = _.slideCount - _.options.slidesToShow;

    // in non-infinite sliders, we don't want to go past the
    // last visible index.
    if( !_.options.infinite && ( _.currentSlide > lastVisibleIndex )) {
      _.currentSlide = lastVisibleIndex;
    }

    // if less slides than to show, go to start.
    if ( _.slideCount <= _.options.slidesToShow ) {
      _.currentSlide = 0;

    }

    currentSlide = _.currentSlide;

    _.destroy(true);

    $.extend(_, _.initials, { currentSlide: currentSlide });

    _.init();

    if( !initializing ) {

      _.changeSlide({
        data: {
          message: 'index',
          index: currentSlide
        }
      }, false);

    }

  };

  Slick.prototype.registerBreakpoints = function() {

    var _ = this, breakpoint, currentBreakpoint, l,
      responsiveSettings = _.options.responsive || null;

    if ( $.type(responsiveSettings) === 'array' && responsiveSettings.length ) {

      _.respondTo = _.options.respondTo || 'window';

      for ( breakpoint in responsiveSettings ) {

        l = _.breakpoints.length-1;

        if (responsiveSettings.hasOwnProperty(breakpoint)) {
          currentBreakpoint = responsiveSettings[breakpoint].breakpoint;

          // loop through the breakpoints and cut out any existing
          // ones with the same breakpoint number, we don't want dupes.
          while( l >= 0 ) {
            if( _.breakpoints[l] && _.breakpoints[l] === currentBreakpoint ) {
              _.breakpoints.splice(l,1);
            }
            l--;
          }

          _.breakpoints.push(currentBreakpoint);
          _.breakpointSettings[currentBreakpoint] = responsiveSettings[breakpoint].settings;

        }

      }

      _.breakpoints.sort(function(a, b) {
        return ( _.options.mobileFirst ) ? a-b : b-a;
      });

    }

  };

  Slick.prototype.reinit = function() {

    var _ = this;

    _.$slides =
      _.$slideTrack
        .children(_.options.slide)
        .addClass('slick-slide');

    _.slideCount = _.$slides.length;

    if (_.currentSlide >= _.slideCount && _.currentSlide !== 0) {
      _.currentSlide = _.currentSlide - _.options.slidesToScroll;
    }

    if (_.slideCount <= _.options.slidesToShow) {
      _.currentSlide = 0;
    }

    _.registerBreakpoints();

    _.setProps();
    _.setupInfinite();
    _.buildArrows();
    _.updateArrows();
    _.initArrowEvents();
    _.buildDots();
    _.updateDots();
    _.initDotEvents();
    _.cleanUpSlideEvents();
    _.initSlideEvents();

    _.checkResponsive(false, true);

    if (_.options.focusOnSelect === true) {
      $(_.$slideTrack).children().on('click.slick', _.selectHandler);
    }

    _.setSlideClasses(typeof _.currentSlide === 'number' ? _.currentSlide : 0);

    _.setPosition();
    _.focusHandler();

    _.paused = !_.options.autoplay;
    _.autoPlay();

    _.$slider.trigger('reInit', [_]);

  };

  Slick.prototype.resize = function() {

    var _ = this;

    if ($(window).width() !== _.windowWidth) {
      clearTimeout(_.windowDelay);
      _.windowDelay = window.setTimeout(function() {
        _.windowWidth = $(window).width();
        _.checkResponsive();
        if( !_.unslicked ) { _.setPosition(); }
      }, 50);
    }
  };

  Slick.prototype.removeSlide = Slick.prototype.slickRemove = function(index, removeBefore, removeAll) {

    var _ = this;

    if (typeof(index) === 'boolean') {
      removeBefore = index;
      index = removeBefore === true ? 0 : _.slideCount - 1;
    } else {
      index = removeBefore === true ? --index : index;
    }

    if (_.slideCount < 1 || index < 0 || index > _.slideCount - 1) {
      return false;
    }

    _.unload();

    if (removeAll === true) {
      _.$slideTrack.children().remove();
    } else {
      _.$slideTrack.children(this.options.slide).eq(index).remove();
    }

    _.$slides = _.$slideTrack.children(this.options.slide);

    _.$slideTrack.children(this.options.slide).detach();

    _.$slideTrack.append(_.$slides);

    _.$slidesCache = _.$slides;

    _.reinit();

  };

  Slick.prototype.setCSS = function(position) {

    var _ = this,
      positionProps = {},
      x, y;

    if (_.options.rtl === true) {
      position = -position;
    }
    x = _.positionProp == 'left' ? Math.ceil(position) + 'px' : '0px';
    y = _.positionProp == 'top' ? Math.ceil(position) + 'px' : '0px';

    positionProps[_.positionProp] = position;

    if (_.transformsEnabled === false) {
      _.$slideTrack.css(positionProps);
    } else {
      positionProps = {};
      if (_.cssTransitions === false) {
        positionProps[_.animType] = 'translate(' + x + ', ' + y + ')';
        _.$slideTrack.css(positionProps);
      } else {
        positionProps[_.animType] = 'translate3d(' + x + ', ' + y + ', 0px)';
        _.$slideTrack.css(positionProps);
      }
    }

  };

  Slick.prototype.setDimensions = function() {

    var _ = this;

    if (_.options.vertical === false) {
      if (_.options.centerMode === true) {
        _.$list.css({
          padding: ('0px ' + _.options.centerPadding)
        });
      }
    } else {
      _.$list.height(_.$slides.first().outerHeight(true) * _.options.slidesToShow);
      if (_.options.centerMode === true) {
        _.$list.css({
          padding: (_.options.centerPadding + ' 0px')
        });
      }
    }

    _.listWidth = _.$list.width();
    _.listHeight = _.$list.height();


    if (_.options.vertical === false && _.options.variableWidth === false) {
      _.slideWidth = Math.ceil(_.listWidth / _.options.slidesToShow);
      _.$slideTrack.width(Math.ceil((_.slideWidth * _.$slideTrack.children('.slick-slide').length)));

    } else if (_.options.variableWidth === true) {
      _.$slideTrack.width(5000 * _.slideCount);
    } else {
      _.slideWidth = Math.ceil(_.listWidth);
      _.$slideTrack.height(Math.ceil((_.$slides.first().outerHeight(true) * _.$slideTrack.children('.slick-slide').length)));
    }

    var offset = _.$slides.first().outerWidth(true) - _.$slides.first().width();
    if (_.options.variableWidth === false) _.$slideTrack.children('.slick-slide').width(_.slideWidth - offset);

  };

  Slick.prototype.setFade = function() {

    var _ = this,
      targetLeft;

    _.$slides.each(function(index, element) {
      targetLeft = (_.slideWidth * index) * -1;
      if (_.options.rtl === true) {
        $(element).css({
          position: 'relative',
          right: targetLeft,
          top: 0,
          zIndex: _.options.zIndex - 2,
          opacity: 0
        });
      } else {
        $(element).css({
          position: 'relative',
          left: targetLeft,
          top: 0,
          zIndex: _.options.zIndex - 2,
          opacity: 0
        });
      }
    });

    _.$slides.eq(_.currentSlide).css({
      zIndex: _.options.zIndex - 1,
      opacity: 1
    });

  };

  Slick.prototype.setHeight = function() {

    var _ = this;

    if (_.options.slidesToShow === 1 && _.options.adaptiveHeight === true) {
      var targetHeight = _.$slides.eq(_.currentSlide).outerHeight(true);
      _.$list.css('height', targetHeight);
    }

  };

  Slick.prototype.setOption =
    Slick.prototype.slickSetOption = function() {

      /**
       * accepts arguments in format of:
       *
       *  - for changing a single option's value:
       *     .slick("setOption", option, value, refresh )
       *
       *  - for changing a set of responsive options:
       *     .slick("setOption", 'responsive', [{}, ...], refresh )
       *
       *  - for updating multiple values at once (not responsive)
       *     .slick("setOption", { 'option': value, ... }, refresh )
       */

      var _ = this, l, item, option, value, refresh = false, type;

      if( $.type( arguments[0] ) === 'object' ) {

        option =  arguments[0];
        refresh = arguments[1];
        type = 'multiple';

      } else if ( $.type( arguments[0] ) === 'string' ) {

        option =  arguments[0];
        value = arguments[1];
        refresh = arguments[2];

        if ( arguments[0] === 'responsive' && $.type( arguments[1] ) === 'array' ) {

          type = 'responsive';

        } else if ( typeof arguments[1] !== 'undefined' ) {

          type = 'single';

        }

      }

      if ( type === 'single' ) {

        _.options[option] = value;


      } else if ( type === 'multiple' ) {

        $.each( option , function( opt, val ) {

          _.options[opt] = val;

        });


      } else if ( type === 'responsive' ) {

        for ( item in value ) {

          if( $.type( _.options.responsive ) !== 'array' ) {

            _.options.responsive = [ value[item] ];

          } else {

            l = _.options.responsive.length-1;

            // loop through the responsive object and splice out duplicates.
            while( l >= 0 ) {

              if( _.options.responsive[l].breakpoint === value[item].breakpoint ) {

                _.options.responsive.splice(l,1);

              }

              l--;

            }

            _.options.responsive.push( value[item] );

          }

        }

      }

      if ( refresh ) {

        _.unload();
        _.reinit();

      }

    };

  Slick.prototype.setPosition = function() {

    var _ = this;

    _.setDimensions();

    _.setHeight();

    if (_.options.fade === false) {
      _.setCSS(_.getLeft(_.currentSlide));
    } else {
      _.setFade();
    }

    _.$slider.trigger('setPosition', [_]);

  };

  Slick.prototype.setProps = function() {

    var _ = this,
      bodyStyle = document.body.style;

    _.positionProp = _.options.vertical === true ? 'top' : 'left';

    if (_.positionProp === 'top') {
      _.$slider.addClass('slick-vertical');
    } else {
      _.$slider.removeClass('slick-vertical');
    }

    if (bodyStyle.WebkitTransition !== undefined ||
      bodyStyle.MozTransition !== undefined ||
      bodyStyle.msTransition !== undefined) {
      if (_.options.useCSS === true) {
        _.cssTransitions = true;
      }
    }

    if ( _.options.fade ) {
      if ( typeof _.options.zIndex === 'number' ) {
        if( _.options.zIndex < 3 ) {
          _.options.zIndex = 3;
        }
      } else {
        _.options.zIndex = _.defaults.zIndex;
      }
    }

    if (bodyStyle.OTransform !== undefined) {
      _.animType = 'OTransform';
      _.transformType = '-o-transform';
      _.transitionType = 'OTransition';
      if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
    }
    if (bodyStyle.MozTransform !== undefined) {
      _.animType = 'MozTransform';
      _.transformType = '-moz-transform';
      _.transitionType = 'MozTransition';
      if (bodyStyle.perspectiveProperty === undefined && bodyStyle.MozPerspective === undefined) _.animType = false;
    }
    if (bodyStyle.webkitTransform !== undefined) {
      _.animType = 'webkitTransform';
      _.transformType = '-webkit-transform';
      _.transitionType = 'webkitTransition';
      if (bodyStyle.perspectiveProperty === undefined && bodyStyle.webkitPerspective === undefined) _.animType = false;
    }
    if (bodyStyle.msTransform !== undefined) {
      _.animType = 'msTransform';
      _.transformType = '-ms-transform';
      _.transitionType = 'msTransition';
      if (bodyStyle.msTransform === undefined) _.animType = false;
    }
    if (bodyStyle.transform !== undefined && _.animType !== false) {
      _.animType = 'transform';
      _.transformType = 'transform';
      _.transitionType = 'transition';
    }
    _.transformsEnabled = _.options.useTransform && (_.animType !== null && _.animType !== false);
  };


  Slick.prototype.setSlideClasses = function(index) {

    var _ = this,
      centerOffset, allSlides, indexOffset, remainder;

    allSlides = _.$slider
      .find('.slick-slide')
      .removeClass('slick-active slick-center slick-current')
      .attr('aria-hidden', 'true');

    _.$slides
      .eq(index)
      .addClass('slick-current');

    if (_.options.centerMode === true) {

      var evenCoef = _.options.slidesToShow % 2 === 0 ? 1 : 0;

      centerOffset = Math.floor(_.options.slidesToShow / 2);

      if (_.options.infinite === true) {

        if (index >= centerOffset && index <= (_.slideCount - 1) - centerOffset) {
          _.$slides
            .slice(index - centerOffset + evenCoef, index + centerOffset + 1)
            .addClass('slick-active')
            .attr('aria-hidden', 'false');

        } else {

          indexOffset = _.options.slidesToShow + index;
          allSlides
            .slice(indexOffset - centerOffset + 1 + evenCoef, indexOffset + centerOffset + 2)
            .addClass('slick-active')
            .attr('aria-hidden', 'false');

        }

        if (index === 0) {

          allSlides
            .eq(allSlides.length - 1 - _.options.slidesToShow)
            .addClass('slick-center');

        } else if (index === _.slideCount - 1) {

          allSlides
            .eq(_.options.slidesToShow)
            .addClass('slick-center');

        }

      }

      _.$slides
        .eq(index)
        .addClass('slick-center');

    } else {

      if (index >= 0 && index <= (_.slideCount - _.options.slidesToShow)) {

        _.$slides
          .slice(index, index + _.options.slidesToShow)
          .addClass('slick-active')
          .attr('aria-hidden', 'false');

      } else if (allSlides.length <= _.options.slidesToShow) {

        allSlides
          .addClass('slick-active')
          .attr('aria-hidden', 'false');

      } else {

        remainder = _.slideCount % _.options.slidesToShow;
        indexOffset = _.options.infinite === true ? _.options.slidesToShow + index : index;

        if (_.options.slidesToShow == _.options.slidesToScroll && (_.slideCount - index) < _.options.slidesToShow) {

          allSlides
            .slice(indexOffset - (_.options.slidesToShow - remainder), indexOffset + remainder)
            .addClass('slick-active')
            .attr('aria-hidden', 'false');

        } else {

          allSlides
            .slice(indexOffset, indexOffset + _.options.slidesToShow)
            .addClass('slick-active')
            .attr('aria-hidden', 'false');

        }

      }

    }

    if (_.options.lazyLoad === 'ondemand' || _.options.lazyLoad === 'anticipated') {
      _.lazyLoad();
    }
  };

  Slick.prototype.setupInfinite = function() {

    var _ = this,
      i, slideIndex, infiniteCount;

    if (_.options.fade === true) {
      _.options.centerMode = false;
    }

    if (_.options.infinite === true && _.options.fade === false) {

      slideIndex = null;

      if (_.slideCount > _.options.slidesToShow) {

        if (_.options.centerMode === true) {
          infiniteCount = _.options.slidesToShow + 1;
        } else {
          infiniteCount = _.options.slidesToShow;
        }

        for (i = _.slideCount; i > (_.slideCount -
          infiniteCount); i -= 1) {
          slideIndex = i - 1;
          $(_.$slides[slideIndex]).clone(true).attr('id', '')
            .attr('data-slick-index', slideIndex - _.slideCount)
            .prependTo(_.$slideTrack).addClass('slick-cloned');
        }
        for (i = 0; i < infiniteCount  + _.slideCount; i += 1) {
          slideIndex = i;
          $(_.$slides[slideIndex]).clone(true).attr('id', '')
            .attr('data-slick-index', slideIndex + _.slideCount)
            .appendTo(_.$slideTrack).addClass('slick-cloned');
        }
        _.$slideTrack.find('.slick-cloned').find('[id]').each(function() {
          $(this).attr('id', '');
        });

      }

    }

  };

  Slick.prototype.interrupt = function( toggle ) {

    var _ = this;

    if( !toggle ) {
      _.autoPlay();
    }
    _.interrupted = toggle;

  };

  Slick.prototype.selectHandler = function(event) {

    var _ = this;

    var targetElement =
      $(event.target).is('.slick-slide') ?
        $(event.target) :
        $(event.target).parents('.slick-slide');

    var index = parseInt(targetElement.attr('data-slick-index'));

    if (!index) index = 0;

    if (_.slideCount <= _.options.slidesToShow) {

      _.slideHandler(index, false, true);
      return;

    }

    _.slideHandler(index);

  };

  Slick.prototype.slideHandler = function(index, sync, dontAnimate) {

    var targetSlide, animSlide, oldSlide, slideLeft, targetLeft = null,
      _ = this, navTarget;

    sync = sync || false;

    if (_.animating === true && _.options.waitForAnimate === true) {
      return;
    }

    if (_.options.fade === true && _.currentSlide === index) {
      return;
    }

    if (sync === false) {
      _.asNavFor(index);
    }

    targetSlide = index;
    targetLeft = _.getLeft(targetSlide);
    slideLeft = _.getLeft(_.currentSlide);

    _.currentLeft = _.swipeLeft === null ? slideLeft : _.swipeLeft;

    if (_.options.infinite === false && _.options.centerMode === false && (index < 0 || index > _.getDotCount() * _.options.slidesToScroll)) {

      if (_.options.fade === false) {
        targetSlide = _.currentSlide;
        if (dontAnimate !== true) {
          _.animateSlide(slideLeft, function() {
            _.postSlide(targetSlide);
          });
        } else {
          _.postSlide(targetSlide);
        }
      }
      return;
    } else if (_.options.infinite === false && _.options.centerMode === true && (index < 0 || index > (_.slideCount - _.options.slidesToScroll))) {

      if (_.options.fade === false) {
        targetSlide = _.currentSlide;
        if (dontAnimate !== true) {
          _.animateSlide(slideLeft, function() {
            _.postSlide(targetSlide);
          });
        } else {
          _.postSlide(targetSlide);
        }
      }
      return;
    }

    if ( _.options.autoplay ) {
      clearInterval(_.autoPlayTimer);
    }

    if (targetSlide < 0) {
      if (_.slideCount % _.options.slidesToScroll !== 0) {
        animSlide = _.slideCount - (_.slideCount % _.options.slidesToScroll);
      } else {
        animSlide = _.slideCount + targetSlide;
      }
    } else if (targetSlide >= _.slideCount) {
      if (_.slideCount % _.options.slidesToScroll !== 0) {
        animSlide = 0;
      } else {
        animSlide = targetSlide - _.slideCount;
      }
    } else {
      animSlide = targetSlide;
    }

    _.animating = true;

    _.$slider.trigger('beforeChange', [_, _.currentSlide, animSlide]);

    oldSlide = _.currentSlide;
    _.currentSlide = animSlide;

    _.setSlideClasses(_.currentSlide);

    if ( _.options.asNavFor ) {

      navTarget = _.getNavTarget();
      navTarget = navTarget.slick('getSlick');

      if ( navTarget.slideCount <= navTarget.options.slidesToShow ) {
        navTarget.setSlideClasses(_.currentSlide);
      }

    }

    _.updateDots();
    _.updateArrows();

    if (_.options.fade === true) {
      if (dontAnimate !== true) {

        _.fadeSlideOut(oldSlide);

        _.fadeSlide(animSlide, function() {
          _.postSlide(animSlide);
        });

      } else {
        _.postSlide(animSlide);
      }
      _.animateHeight();
      return;
    }

    if (dontAnimate !== true) {
      // if (_.options.vertical === false && dontAnimate !== true) {
      _.animateSlide(targetLeft, function() {
        _.postSlide(animSlide);
      });
    }
    // else if (_.options.vertical === true && dontAnimate !== true) {
    //   _.animateSlide(targetLeft, function() {    //
    //     _.postSlide(_.getLeft(index - 1));
    //   });
    // }
    else {
      _.postSlide(animSlide);
    }

  };

  Slick.prototype.startLoad = function() {

    var _ = this;

    if (_.options.arrows === true && _.slideCount > _.options.slidesToShow) {

      _.$prevArrow.hide();
      _.$nextArrow.hide();

    }

    if (_.options.dots === true && _.slideCount > _.options.slidesToShow) {

      _.$dots.hide();

    }

    _.$slider.addClass('slick-loading');

  };

  Slick.prototype.swipeDirection = function() {

    var xDist, yDist, r, swipeAngle, _ = this;

    xDist = _.touchObject.startX - _.touchObject.curX;
    yDist = _.touchObject.startY - _.touchObject.curY;
    r = Math.atan2(yDist, xDist);

    swipeAngle = Math.round(r * 180 / Math.PI);
    if (swipeAngle < 0) {
      swipeAngle = 360 - Math.abs(swipeAngle);
    }

    if ((swipeAngle <= 45) && (swipeAngle >= 0)) {
      return (_.options.rtl === false ? 'left' : 'right');
    }
    if ((swipeAngle <= 360) && (swipeAngle >= 315)) {
      return (_.options.rtl === false ? 'left' : 'right');
    }
    if ((swipeAngle >= 135) && (swipeAngle <= 225)) {
      return (_.options.rtl === false ? 'right' : 'left');
    }
    if (_.options.verticalSwiping === true) {
      if ((swipeAngle >= 35) && (swipeAngle <= 135)) {
        return 'down';
      } else {
        return 'up';
      }
    }

    return 'vertical';

  };

  Slick.prototype.swipeEnd = function(event) {

    var _ = this,
      slideCount,
      direction;

    _.dragging = false;
    _.swiping = false;

    if (_.scrolling) {
      _.scrolling = false;
      return false;
    }

    _.interrupted = false;
    _.shouldClick = ( _.touchObject.swipeLength > 10 ) ? false : true;

    if ( _.touchObject.curX === undefined ) {
      return false;
    }

    if ( _.touchObject.edgeHit === true ) {
      _.$slider.trigger('edge', [_, _.swipeDirection() ]);
    }

    if ( _.touchObject.swipeLength >= _.touchObject.minSwipe ) {

      direction = _.swipeDirection();

      switch ( direction ) {

        case 'left':
        case 'down':

          slideCount =
            _.options.swipeToSlide ?
              _.checkNavigable( _.currentSlide + _.getSlideCount() ) :
              _.currentSlide + _.getSlideCount();

          _.currentDirection = 0;

          break;

        case 'right':
        case 'up':

          slideCount =
            _.options.swipeToSlide ?
              _.checkNavigable( _.currentSlide - _.getSlideCount() ) :
              _.currentSlide - _.getSlideCount();

          _.currentDirection = 1;

          break;

        default:


      }

      if( direction != 'vertical' ) {

        _.slideHandler( slideCount );
        _.touchObject = {};
        _.$slider.trigger('swipe', [_, direction ]);

      }

    } else {

      if ( _.touchObject.startX !== _.touchObject.curX ) {

        _.slideHandler( _.currentSlide );
        _.touchObject = {};

      }

    }

  };

  Slick.prototype.swipeHandler = function(event) {

    var _ = this;

    if ((_.options.swipe === false) || ('ontouchend' in document && _.options.swipe === false)) {
      return;
    } else if (_.options.draggable === false && event.type.indexOf('mouse') !== -1) {
      return;
    }

    _.touchObject.fingerCount = event.originalEvent && event.originalEvent.touches !== undefined ?
      event.originalEvent.touches.length : 1;

    _.touchObject.minSwipe = _.listWidth / _.options
      .touchThreshold;

    if (_.options.verticalSwiping === true) {
      _.touchObject.minSwipe = _.listHeight / _.options
        .touchThreshold;
    }

    switch (event.data.action) {

      case 'start':
        _.swipeStart(event);
        break;

      case 'move':
        _.swipeMove(event);
        break;

      case 'end':
        _.swipeEnd(event);
        break;

    }

  };

  Slick.prototype.swipeMove = function(event) {

    var _ = this,
      edgeWasHit = false,
      curLeft, swipeDirection, swipeLength, positionOffset, touches, verticalSwipeLength;

    touches = event.originalEvent !== undefined ? event.originalEvent.touches : null;

    if (!_.dragging || _.scrolling || touches && touches.length !== 1) {
      return false;
    }

    curLeft = _.getLeft(_.currentSlide);

    _.touchObject.curX = touches !== undefined ? touches[0].pageX : event.clientX;
    _.touchObject.curY = touches !== undefined ? touches[0].pageY : event.clientY;

    _.touchObject.swipeLength = Math.round(Math.sqrt(
      Math.pow(_.touchObject.curX - _.touchObject.startX, 2)));

    verticalSwipeLength = Math.round(Math.sqrt(
      Math.pow(_.touchObject.curY - _.touchObject.startY, 2)));

    if (!_.options.verticalSwiping && !_.swiping && verticalSwipeLength > 4) {
      _.scrolling = true;
      return false;
    }

    if (_.options.verticalSwiping === true) {
      _.touchObject.swipeLength = verticalSwipeLength;
    }

    swipeDirection = _.swipeDirection();

    if (event.originalEvent !== undefined && _.touchObject.swipeLength > 4) {
      _.swiping = true;
      event.preventDefault();
    }

    positionOffset = (_.options.rtl === false ? 1 : -1) * (_.touchObject.curX > _.touchObject.startX ? 1 : -1);
    if (_.options.verticalSwiping === true) {
      positionOffset = _.touchObject.curY > _.touchObject.startY ? 1 : -1;
    }


    swipeLength = _.touchObject.swipeLength;

    _.touchObject.edgeHit = false;

    if (_.options.infinite === false) {
      if ((_.currentSlide === 0 && swipeDirection === 'right') || (_.currentSlide >= _.getDotCount() && swipeDirection === 'left')) {
        swipeLength = _.touchObject.swipeLength * _.options.edgeFriction;
        _.touchObject.edgeHit = true;
      }
    }

    if (_.options.vertical === false) {
      _.swipeLeft = curLeft + swipeLength * positionOffset;
    } else {
      _.swipeLeft = curLeft + (swipeLength * (_.$list.height() / _.listWidth)) * positionOffset;
    }
    if (_.options.verticalSwiping === true) {
      _.swipeLeft = curLeft + swipeLength * positionOffset;
    }

    if (_.options.fade === true || _.options.touchMove === false) {
      return false;
    }

    if (_.animating === true) {
      _.swipeLeft = null;
      return false;
    }

    _.setCSS(_.swipeLeft);

  };

  Slick.prototype.swipeStart = function(event) {

    var _ = this,
      touches;

    _.interrupted = true;

    if (_.touchObject.fingerCount !== 1 || _.slideCount <= _.options.slidesToShow) {
      _.touchObject = {};
      return false;
    }

    if (event.originalEvent !== undefined && event.originalEvent.touches !== undefined) {
      touches = event.originalEvent.touches[0];
    }

    _.touchObject.startX = _.touchObject.curX = touches !== undefined ? touches.pageX : event.clientX;
    _.touchObject.startY = _.touchObject.curY = touches !== undefined ? touches.pageY : event.clientY;

    _.dragging = true;

  };

  Slick.prototype.unfilterSlides = Slick.prototype.slickUnfilter = function() {

    var _ = this;

    if (_.$slidesCache !== null) {

      _.unload();

      _.$slideTrack.children(this.options.slide).detach();

      _.$slidesCache.appendTo(_.$slideTrack);

      _.reinit();

    }

  };

  Slick.prototype.unload = function() {

    var _ = this;

    $('.slick-cloned', _.$slider).remove();

    if (_.$dots) {
      _.$dots.remove();
    }

    if (_.$prevArrow && _.htmlExpr.test(_.options.prevArrow)) {
      _.$prevArrow.remove();
    }

    if (_.$nextArrow && _.htmlExpr.test(_.options.nextArrow)) {
      _.$nextArrow.remove();
    }

    _.$slides
      .removeClass('slick-slide slick-active slick-visible slick-current')
      .attr('aria-hidden', 'true')
      .css('width', '');

  };

  Slick.prototype.unslick = function(fromBreakpoint) {

    var _ = this;
    _.$slider.trigger('unslick', [_, fromBreakpoint]);
    _.destroy();

  };

  Slick.prototype.updateArrows = function() {

    var _ = this,
      centerOffset;

    centerOffset = Math.floor(_.options.slidesToShow / 2);

    if ( _.options.arrows === true &&
      _.slideCount > _.options.slidesToShow &&
      !_.options.infinite ) {

      _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
      _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

      if (_.currentSlide === 0) {

        _.$prevArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
        _.$nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

      } else if (_.currentSlide >= _.slideCount - _.options.slidesToShow && _.options.centerMode === false) {

        _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
        _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

      } else if (_.currentSlide >= _.slideCount - 1 && _.options.centerMode === true) {

        _.$nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
        _.$prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');

      }

    }

  };

  Slick.prototype.updateDots = function() {

    var _ = this;

    if (_.$dots !== null) {

      _.$dots
        .find('li')
        .removeClass('slick-active')
        .end();

      _.$dots
        .find('li')
        .eq(Math.floor(_.currentSlide / _.options.slidesToScroll))
        .addClass('slick-active');

    }

  };

  Slick.prototype.visibility = function() {

    var _ = this;

    if ( _.options.autoplay ) {

      if ( document[_.hidden] ) {

        _.interrupted = true;

      } else {

        _.interrupted = false;

      }

    }

  };

  $.fn.slick = function() {
    var _ = this,
      opt = arguments[0],
      args = Array.prototype.slice.call(arguments, 1),
      l = _.length,
      i,
      ret;
    for (i = 0; i < l; i++) {
      if (typeof opt == 'object' || typeof opt == 'undefined')
        _[i].slick = new Slick(_[i], opt);
      else
        ret = _[i].slick[opt].apply(_[i].slick, args);
      if (typeof ret != 'undefined') return ret;
    }
    return _;
  };

}));

;/*
* Cube Portfolio - Responsive jQuery Grid Plugin
*
* version: 4.4.0 (1 August, 2018)
* require: jQuery v1.8+
*
* Copyright 2013-2018, Mihai Buricea (http://scriptpie.com/cubeportfolio/live-preview/)
* Licensed under CodeCanyon License (http://codecanyon.net/licenses)
*
*/

!function(s,t,a,r){"use strict";function l(t,e,n){var i=this;if(s.data(t,"cubeportfolio"))throw new Error("cubeportfolio is already initialized. Destroy it before initialize again!");i.obj=t,i.$obj=s(t),s.data(i.obj,"cubeportfolio",i),e&&e.sortToPreventGaps!==r&&(e.sortByDimension=e.sortToPreventGaps,delete e.sortToPreventGaps),i.options=s.extend({},s.fn.cubeportfolio.options,e,i.$obj.data("cbp-options")),i.isAnimating=!0,i.defaultFilter=i.options.defaultFilter,i.registeredEvents=[],i.queue=[],i.addedWrapp=!1,s.isFunction(n)&&i.registerEvent("initFinish",n,!0);var o=i.$obj.children();i.$obj.addClass("cbp"),(0===o.length||o.first().hasClass("cbp-item"))&&(i.wrapInner(i.obj,"cbp-wrapper"),i.addedWrapp=!0),i.$ul=i.$obj.children().addClass("cbp-wrapper"),i.wrapInner(i.obj,"cbp-wrapper-outer"),i.wrapper=i.$obj.children(".cbp-wrapper-outer"),i.blocks=i.$ul.children(".cbp-item"),i.blocksOn=i.blocks,i.wrapInner(i.blocks,"cbp-item-wrapper"),i.plugins={},s.each(l.plugins,function(t,e){var n=e(i);n&&(i.plugins[t]=n)}),i.triggerEvent("afterPlugins"),i.removeAttrAfterStoreData=s.Deferred(),i.loadImages(i.$obj,i.display)}s.extend(l.prototype,{storeData:function(t,a){var r=this;a=a||0,t.each(function(t,e){var n=s(e),i=n.width(),o=n.height();n.data("cbp",{index:a+t,indexInitial:a+t,wrapper:n.children(".cbp-item-wrapper"),widthInitial:i,heightInitial:o,width:i,height:o,widthAndGap:i+r.options.gapVertical,heightAndGap:o+r.options.gapHorizontal,left:null,leftNew:null,top:null,topNew:null,pack:!1})}),this.removeAttrAfterStoreData.resolve()},wrapInner:function(t,e){var n,i,o;if(e=e||"",!(t.length&&t.length<1))for(t.length===r&&(t=[t]),i=t.length-1;0<=i;i--){for(n=t[i],(o=a.createElement("div")).setAttribute("class",e);n.childNodes.length;)o.appendChild(n.childNodes[0]);n.appendChild(o)}},removeAttrImage:function(t){this.removeAttrAfterStoreData.then(function(){t.removeAttribute("width"),t.removeAttribute("height"),t.removeAttribute("style")})},loadImages:function(e,o){var a=this;requestAnimationFrame(function(){var t=e.find("img").map(function(t,e){if(e.hasAttribute("width")&&e.hasAttribute("height")){if(e.style.width=e.getAttribute("width")+"px",e.style.height=e.getAttribute("height")+"px",e.hasAttribute("data-cbp-src"))return null;if(null===a.checkSrc(e))a.removeAttrImage(e);else{var n=s("<img>");n.on("load.cbp error.cbp",function(){s(this).off("load.cbp error.cbp"),a.removeAttrImage(e)}),e.srcset?(n.attr("sizes",e.sizes||"100vw"),n.attr("srcset",e.srcset)):n.attr("src",e.src)}return null}return a.checkSrc(e)}),i=t.length;0!==i?s.each(t,function(t,e){var n=s("<img>");n.on("load.cbp error.cbp",function(){s(this).off("load.cbp error.cbp"),0===--i&&o.call(a)}),e.srcset?(n.attr("sizes",e.sizes),n.attr("srcset",e.srcset)):n.attr("src",e.src)}):o.call(a)})},checkSrc:function(t){var e=t.srcset,n=t.src;if(""===n)return null;var i=s("<img>");e?(i.attr("sizes",t.sizes||"100vw"),i.attr("srcset",e)):i.attr("src",n);var o=i[0];return o.complete&&o.naturalWidth!==r&&0!==o.naturalWidth?null:o},display:function(){var t=this;t.width=t.$obj.outerWidth(),t.triggerEvent("initStartRead"),t.triggerEvent("initStartWrite"),0<t.width&&(t.storeData(t.blocks),t.layoutAndAdjustment()),t.triggerEvent("initEndRead"),t.triggerEvent("initEndWrite"),t.$obj.addClass("cbp-ready"),t.runQueue("delayFrame",t.delayFrame)},delayFrame:function(){var t=this;requestAnimationFrame(function(){t.resizeEvent(),t.triggerEvent("initFinish"),t.isAnimating=!1,t.$obj.trigger("initComplete.cbp")})},resizeEvent:function(){var e=this;l["private"].resize.initEvent({instance:e,fn:function(){e.triggerEvent("beforeResizeGrid");var t=e.$obj.outerWidth();t&&e.width!==t&&(e.width=t,"alignCenter"===e.options.gridAdjustment&&(e.wrapper[0].style.maxWidth=""),e.layoutAndAdjustment(),e.triggerEvent("resizeGrid")),e.triggerEvent("resizeWindow")}})},gridAdjust:function(){var r=this;"responsive"===r.options.gridAdjustment?r.responsiveLayout():(r.blocks.removeAttr("style"),r.blocks.each(function(t,e){var n=s(e).data("cbp"),i=e.getBoundingClientRect(),o=r.columnWidthTruncate(i.right-i.left),a=Math.round(i.bottom-i.top);n.height=a,n.heightAndGap=a+r.options.gapHorizontal,n.width=o,n.widthAndGap=o+r.options.gapVertical}),r.widthAvailable=r.width+r.options.gapVertical),r.triggerEvent("gridAdjust")},layoutAndAdjustment:function(t){t&&(this.width=this.$obj.outerWidth()),this.gridAdjust(),this.layout()},layout:function(){var t=this;t.computeBlocks(t.filterConcat(t.defaultFilter)),"slider"===t.options.layoutMode?(t.sliderLayoutReset(),t.sliderLayout()):(t.mosaicLayoutReset(),t.mosaicLayout()),t.blocksOff.addClass("cbp-item-off"),t.blocksOn.removeClass("cbp-item-off").each(function(t,e){var n=s(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px"}),t.resizeMainContainer()},computeFilter:function(t){this.computeBlocks(t),this.mosaicLayoutReset(),this.mosaicLayout(),this.filterLayout()},filterLayout:function(){this.blocksOff.addClass("cbp-item-off"),this.blocksOn.removeClass("cbp-item-off").each(function(t,e){var n=s(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px"}),this.resizeMainContainer(),this.filterFinish()},filterFinish:function(){this.isAnimating=!1,this.$obj.trigger("filterComplete.cbp"),this.triggerEvent("filterFinish")},computeBlocks:function(t){var e=this;e.blocksOnInitial=e.blocksOn,e.blocksOn=e.blocks.filter(t),e.blocksOff=e.blocks.not(t),e.triggerEvent("computeBlocksFinish",t)},responsiveLayout:function(){var a=this;a.cols=a[s.isArray(a.options.mediaQueries)?"getColumnsBreakpoints":"getColumnsAuto"](),a.columnWidth=a.columnWidthTruncate((a.width+a.options.gapVertical)/a.cols),a.widthAvailable=a.columnWidth*a.cols,"mosaic"===a.options.layoutMode&&a.getMosaicWidthReference(),a.blocks.each(function(t,e){var n,i=s(e).data("cbp"),o=1;"mosaic"===a.options.layoutMode&&(o=a.getColsMosaic(i.widthInitial)),n=a.columnWidth*o-a.options.gapVertical,e.style.width=n+"px",i.width=n,i.widthAndGap=n+a.options.gapVertical,e.style.height=""});var r=[];a.blocks.each(function(t,e){s.each(s(e).find("img").filter("[width][height]"),function(t,e){var i=0;s(e).parentsUntil(".cbp-item").each(function(t,e){var n=s(e).width();if(0<n)return i=n,!1});var n=parseInt(e.getAttribute("width"),10),o=parseInt(e.getAttribute("height"),10),a=parseFloat((n/o).toFixed(10));r.push({el:e,width:i,height:Math.round(i/a)})})}),s.each(r,function(t,e){e.el.width=e.width,e.el.height=e.height,e.el.style.width=e.width+"px",e.el.style.height=e.height+"px"}),a.blocks.each(function(t,e){var n=s(e).data("cbp"),i=e.getBoundingClientRect(),o=Math.round(i.bottom-i.top);n.height=o,n.heightAndGap=o+a.options.gapHorizontal})},getMosaicWidthReference:function(){var i=[];this.blocks.each(function(t,e){var n=s(e).data("cbp");i.push(n.widthInitial)}),i.sort(function(t,e){return t-e}),i[0]?this.mosaicWidthReference=i[0]:this.mosaicWidthReference=this.columnWidth},getColsMosaic:function(t){if(t===this.width)return this.cols;var e=t/this.mosaicWidthReference;return e=.79<=e%1?Math.ceil(e):Math.floor(e),Math.min(Math.max(e,1),this.cols)},getColumnsAuto:function(){if(0===this.blocks.length)return 1;var t=this.blocks.first().data("cbp").widthInitial+this.options.gapVertical;return Math.max(Math.round(this.width/t),1)},getColumnsBreakpoints:function(){var n,t=this,i=t.width;return s.each(t.options.mediaQueries,function(t,e){if(i>=e.width)return n=e,!1}),n||(n=t.options.mediaQueries[t.options.mediaQueries.length-1]),t.triggerEvent("onMediaQueries",n.options),n.cols},columnWidthTruncate:function(t){return Math.floor(t)},resizeMainContainer:function(){var o,t=this,e=Math.max(t.freeSpaces.slice(-1)[0].topStart-t.options.gapHorizontal,0);"alignCenter"===t.options.gridAdjustment&&(o=0,t.blocksOn.each(function(t,e){var n=s(e).data("cbp"),i=n.left+n.width;o<i&&(o=i)}),t.wrapper[0].style.maxWidth=o+"px"),e!==t.height&&(t.obj.style.height=e+"px",t.height!==r&&(l["private"].modernBrowser?t.$obj.one(l["private"].transitionend,function(){t.$obj.trigger("pluginResize.cbp")}):t.$obj.trigger("pluginResize.cbp")),t.height=e),t.triggerEvent("resizeMainContainer")},filterConcat:function(t){return t.replace(/\|/gi,"")},pushQueue:function(t,e){this.queue[t]=this.queue[t]||[],this.queue[t].push(e)},runQueue:function(t,e){var n=this.queue[t]||[];s.when.apply(s,n).then(s.proxy(e,this))},clearQueue:function(t){this.queue[t]=[]},registerEvent:function(t,e,n){this.registeredEvents[t]||(this.registeredEvents[t]=[]),this.registeredEvents[t].push({func:e,oneTime:n||!1})},triggerEvent:function(t,e){var n,i,o=this;if(o.registeredEvents[t])for(n=0,i=o.registeredEvents[t].length;n<i;n++)o.registeredEvents[t][n].func.call(o,e),o.registeredEvents[t][n].oneTime&&(o.registeredEvents[t].splice(n,1),n--,i--)},addItems:function(t,e,i){var o=this;o.wrapInner(t,"cbp-item-wrapper"),o.$ul[i](t.addClass("cbp-item-loading").css({top:"100%",left:0})),l["private"].modernBrowser?t.last().one(l["private"].animationend,function(){o.addItemsFinish(t,e)}):o.addItemsFinish(t,e),o.loadImages(t,function(){if(o.$obj.addClass("cbp-updateItems"),"append"===i)o.storeData(t,o.blocks.length),s.merge(o.blocks,t);else{o.storeData(t);var n=t.length;o.blocks.each(function(t,e){s(e).data("cbp").index=n+t}),o.blocks=s.merge(t,o.blocks)}o.triggerEvent("addItemsToDOM",t),o.triggerEvent("triggerSort"),o.layoutAndAdjustment(!0),o.elems&&l["public"].showCounter.call(o.obj,o.elems)})},addItemsFinish:function(t,e){this.isAnimating=!1,this.$obj.removeClass("cbp-updateItems"),t.removeClass("cbp-item-loading"),s.isFunction(e)&&e.call(this,t),this.$obj.trigger("onAfterLoadMore.cbp",[t])},removeItems:function(t,e){var o=this;o.$obj.addClass("cbp-updateItems"),l["private"].modernBrowser?t.last().one(l["private"].animationend,function(){o.removeItemsFinish(t,e)}):o.removeItemsFinish(t,e),t.each(function(t,i){o.blocks.each(function(t,e){if(i===e){var n=s(e);o.blocks.splice(t,1),l["private"].modernBrowser?(n.one(l["private"].animationend,function(){n.remove()}),n.addClass("cbp-removeItem")):n.remove()}})}),o.blocks.each(function(t,e){s(e).data("cbp").index=t}),o.triggerEvent("triggerSort"),o.layoutAndAdjustment(!0),o.elems&&l["public"].showCounter.call(o.obj,o.elems)},removeItemsFinish:function(t,e){this.isAnimating=!1,this.$obj.removeClass("cbp-updateItems"),s.isFunction(e)&&e.call(this,t)}}),s.fn.cubeportfolio=function(t,e,n){return this.each(function(){if("object"==typeof t||!t)return l["public"].init.call(this,t,e);if(l["public"][t])return l["public"][t].call(this,e,n);throw new Error("Method "+t+" does not exist on jquery.cubeportfolio.js")})},l.plugins={},s.fn.cubeportfolio.constructor=l}(jQuery,window,document),function(l,t,e,n){"use strict";var i=l.fn.cubeportfolio.constructor;l.extend(i.prototype,{mosaicLayoutReset:function(){var n=this;n.blocksAreSorted=!1,n.blocksOn.each(function(t,e){l(e).data("cbp").pack=!1,n.options.sortByDimension&&(e.style.height="")}),n.freeSpaces=[{leftStart:0,leftEnd:n.widthAvailable,topStart:0,topEnd:Math.pow(2,18)}]},mosaicLayout:function(){for(var t=this,e=0,n=t.blocksOn.length;e<n;e++){var i=t.getSpaceIndexAndBlock();if(null===i)return t.mosaicLayoutReset(),t.blocksAreSorted=!0,t.sortBlocks(t.blocksOn,"widthAndGap","heightAndGap",!0),void t.mosaicLayout();t.generateF1F2(i.spaceIndex,i.dataBlock),t.generateG1G2G3G4(i.dataBlock),t.cleanFreeSpaces(),t.addHeightToBlocks()}t.blocksAreSorted&&t.sortBlocks(t.blocksOn,"topNew","leftNew")},getSpaceIndexAndBlock:function(){var t=this,s=null;return l.each(t.freeSpaces,function(i,o){var a=o.leftEnd-o.leftStart,r=o.topEnd-o.topStart;return t.blocksOn.each(function(t,e){var n=l(e).data("cbp");if(!0!==n.pack)return n.widthAndGap<=a&&n.heightAndGap<=r?(n.pack=!0,s={spaceIndex:i,dataBlock:n},n.leftNew=o.leftStart,n.topNew=o.topStart,!1):void 0}),!t.blocksAreSorted&&t.options.sortByDimension&&0<i?(s=null,!1):null===s&&void 0}),s},generateF1F2:function(t,e){var n=this.freeSpaces[t],i={leftStart:n.leftStart+e.widthAndGap,leftEnd:n.leftEnd,topStart:n.topStart,topEnd:n.topEnd},o={leftStart:n.leftStart,leftEnd:n.leftEnd,topStart:n.topStart+e.heightAndGap,topEnd:n.topEnd};this.freeSpaces.splice(t,1),i.leftStart<i.leftEnd&&i.topStart<i.topEnd&&(this.freeSpaces.splice(t,0,i),t++),o.leftStart<o.leftEnd&&o.topStart<o.topEnd&&this.freeSpaces.splice(t,0,o)},generateG1G2G3G4:function(i){var o=this,a=[];l.each(o.freeSpaces,function(t,e){var n=o.intersectSpaces(e,i);null!==n?(o.generateG1(e,n,a),o.generateG2(e,n,a),o.generateG3(e,n,a),o.generateG4(e,n,a)):a.push(e)}),o.freeSpaces=a},intersectSpaces:function(t,e){var n={leftStart:e.leftNew,leftEnd:e.leftNew+e.widthAndGap,topStart:e.topNew,topEnd:e.topNew+e.heightAndGap};if(t.leftStart===n.leftStart&&t.leftEnd===n.leftEnd&&t.topStart===n.topStart&&t.topEnd===n.topEnd)return null;var i=Math.max(t.leftStart,n.leftStart),o=Math.min(t.leftEnd,n.leftEnd),a=Math.max(t.topStart,n.topStart),r=Math.min(t.topEnd,n.topEnd);return o<=i||r<=a?null:{leftStart:i,leftEnd:o,topStart:a,topEnd:r}},generateG1:function(t,e,n){t.topStart!==e.topStart&&n.push({leftStart:t.leftStart,leftEnd:t.leftEnd,topStart:t.topStart,topEnd:e.topStart})},generateG2:function(t,e,n){t.leftEnd!==e.leftEnd&&n.push({leftStart:e.leftEnd,leftEnd:t.leftEnd,topStart:t.topStart,topEnd:t.topEnd})},generateG3:function(t,e,n){t.topEnd!==e.topEnd&&n.push({leftStart:t.leftStart,leftEnd:t.leftEnd,topStart:e.topEnd,topEnd:t.topEnd})},generateG4:function(t,e,n){t.leftStart!==e.leftStart&&n.push({leftStart:t.leftStart,leftEnd:e.leftStart,topStart:t.topStart,topEnd:t.topEnd})},cleanFreeSpaces:function(){this.freeSpaces.sort(function(t,e){return t.topStart>e.topStart?1:t.topStart<e.topStart?-1:t.leftStart>e.leftStart?1:t.leftStart<e.leftStart?-1:0}),this.correctSubPixelValues(),this.removeNonMaximalFreeSpaces()},correctSubPixelValues:function(){var t,e,n,i;for(t=0,e=this.freeSpaces.length-1;t<e;t++)n=this.freeSpaces[t],(i=this.freeSpaces[t+1]).topStart-n.topStart<=1&&(i.topStart=n.topStart)},removeNonMaximalFreeSpaces:function(){var t=this;t.uniqueFreeSpaces(),t.freeSpaces=l.map(t.freeSpaces,function(n,i){return l.each(t.freeSpaces,function(t,e){if(i!==t)return e.leftStart<=n.leftStart&&e.leftEnd>=n.leftEnd&&e.topStart<=n.topStart&&e.topEnd>=n.topEnd?(n=null,!1):void 0}),n})},uniqueFreeSpaces:function(){var e=[];l.each(this.freeSpaces,function(t,n){l.each(e,function(t,e){if(e.leftStart===n.leftStart&&e.leftEnd===n.leftEnd&&e.topStart===n.topStart&&e.topEnd===n.topEnd)return n=null,!1}),null!==n&&e.push(n)}),this.freeSpaces=e},addHeightToBlocks:function(){var o=this;l.each(o.freeSpaces,function(t,i){o.blocksOn.each(function(t,e){var n=l(e).data("cbp");!0===n.pack&&(o.intersectSpaces(i,n)&&-1===i.topStart-n.topNew-n.heightAndGap&&(e.style.height=n.height-1+"px"))})})},sortBlocks:function(t,o,a,r){a=void 0===a?"leftNew":a,r=void 0===r?1:-1,t.sort(function(t,e){var n=l(t).data("cbp"),i=l(e).data("cbp");return n[o]>i[o]?r:n[o]<i[o]?-r:n[a]>i[a]?r:n[a]<i[a]?-r:n.index>i.index?r:n.index<i.index?-r:void 0})}})}(jQuery,window,document),jQuery.fn.cubeportfolio.options={filters:"",search:"",layoutMode:"grid",sortByDimension:!1,drag:!0,auto:!1,autoTimeout:5e3,autoPauseOnHover:!0,showNavigation:!0,showPagination:!0,rewindNav:!0,scrollByPage:!1,defaultFilter:"*",filterDeeplinking:!1,animationType:"fadeOut",gridAdjustment:"responsive",mediaQueries:!1,gapHorizontal:10,gapVertical:10,caption:"pushTop",displayType:"fadeIn",displayTypeSpeed:400,lightboxDelegate:".cbp-lightbox",lightboxGallery:!0,lightboxTitleSrc:"data-title",lightboxCounter:'<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',singlePageDelegate:".cbp-singlePage",singlePageDeeplinking:!0,singlePageStickyNavigation:!0,singlePageCounter:'<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',singlePageAnimation:"left",singlePageCallback:null,singlePageInlineDelegate:".cbp-singlePageInline",singlePageInlineDeeplinking:!1,singlePageInlinePosition:"top",singlePageInlineInFocus:!0,singlePageInlineCallback:null,plugins:{}},function(a,o,r,t){"use strict";var s=a.fn.cubeportfolio.constructor,l=a(o);s["private"]={publicEvents:function(e,n,i){var o=this;o.events=[],o.initEvent=function(t){0===o.events.length&&o.scrollEvent(),o.events.push(t)},o.destroyEvent=function(n){o.events=a.map(o.events,function(t,e){if(t.instance!==n)return t}),0===o.events.length&&l.off(e)},o.scrollEvent=function(){var t;l.on(e,function(){clearTimeout(t),t=setTimeout(function(){a.isFunction(i)&&i.call(o)||a.each(o.events,function(t,e){e.fn.call(e.instance)})},n)})}},checkInstance:function(t){var e=a.data(this,"cubeportfolio");if(!e)throw new Error("cubeportfolio is not initialized. Initialize it before calling "+t+" method!");return e.triggerEvent("publicMethod"),e},browserInfo:function(){var t,e,n=s["private"],i=navigator.appVersion;-1!==i.indexOf("MSIE 8.")?n.browser="ie8":-1!==i.indexOf("MSIE 9.")?n.browser="ie9":-1!==i.indexOf("MSIE 10.")?n.browser="ie10":o.ActiveXObject||"ActiveXObject"in o?n.browser="ie11":/android/gi.test(i)?n.browser="android":/iphone|ipad|ipod/gi.test(i)?n.browser="ios":/chrome/gi.test(i)?n.browser="chrome":n.browser="",void 0!==typeof n.styleSupport("perspective")&&(t=n.styleSupport("transition"),n.transitionend={WebkitTransition:"webkitTransitionEnd",transition:"transitionend"}[t],e=n.styleSupport("animation"),n.animationend={WebkitAnimation:"webkitAnimationEnd",animation:"animationend"}[e],n.animationDuration={WebkitAnimation:"webkitAnimationDuration",animation:"animationDuration"}[e],n.animationDelay={WebkitAnimation:"webkitAnimationDelay",animation:"animationDelay"}[e],n.transform=n.styleSupport("transform"),t&&e&&n.transform&&(n.modernBrowser=!0))},styleSupport:function(t){var e,n="Webkit"+t.charAt(0).toUpperCase()+t.slice(1),i=r.createElement("div");return t in i.style?e=t:n in i.style&&(e=n),i=null,e}},s["private"].browserInfo(),s["private"].resize=new s["private"].publicEvents("resize.cbp",50,function(){if(o.innerHeight==screen.height)return!0})}(jQuery,window,document),function(a,t,e,n){"use strict";var r=a.fn.cubeportfolio.constructor;r["public"]={init:function(t,e){new r(this,t,e)},destroy:function(t){var e=r["private"].checkInstance.call(this,"destroy");e.triggerEvent("beforeDestroy"),a.removeData(this,"cubeportfolio"),e.blocks.removeData("cbp"),e.$obj.removeClass("cbp-ready").removeAttr("style"),e.$ul.removeClass("cbp-wrapper"),r["private"].resize.destroyEvent(e),e.$obj.off(".cbp"),e.blocks.removeClass("cbp-item-off").removeAttr("style"),e.blocks.find(".cbp-item-wrapper").each(function(t,e){var n=a(e),i=n.children();i.length?i.unwrap():n.remove()}),e.destroySlider&&e.destroySlider(),e.$ul.unwrap(),e.addedWrapp&&e.blocks.unwrap(),0===e.blocks.length&&e.$ul.remove(),a.each(e.plugins,function(t,e){"function"==typeof e.destroy&&e.destroy()}),a.isFunction(t)&&t.call(e),e.triggerEvent("afterDestroy")},filter:function(t,e){var n,i=r["private"].checkInstance.call(this,"filter");if(!i.isAnimating){if(i.isAnimating=!0,a.isFunction(e)&&i.registerEvent("filterFinish",e,!0),a.isFunction(t)){if(void 0===(n=t.call(i,i.blocks)))throw new Error("When you call cubeportfolio API `filter` method with a param of type function you must return the blocks that will be visible.")}else{if(i.options.filterDeeplinking){var o=location.href.replace(/#cbpf=(.*?)([#\?&]|$)/gi,"");location.href=o+"#cbpf="+encodeURIComponent(t),i.singlePage&&i.singlePage.url&&(i.singlePage.url=location.href)}i.defaultFilter=t,n=i.filterConcat(i.defaultFilter)}i.triggerEvent("filterStart",n),i.singlePageInline&&i.singlePageInline.isOpen?i.singlePageInline.close("promise",{callback:function(){i.computeFilter(n)}}):i.computeFilter(n)}},showCounter:function(t,e){var n=r["private"].checkInstance.call(this,"showCounter");a.isFunction(e)&&n.registerEvent("showCounterFinish",e,!0),(n.elems=t).each(function(){var t=a(this),e=n.blocks.filter(t.data("filter")).length;t.find(".cbp-filter-counter").text(e)}),n.triggerEvent("showCounterFinish",t)},appendItems:function(t,e){r["public"].append.call(this,t,e)},append:function(t,e){var n=r["private"].checkInstance.call(this,"append"),i=a(t).filter(".cbp-item");n.isAnimating||i.length<1?a.isFunction(e)&&e.call(n,i):(n.isAnimating=!0,n.singlePageInline&&n.singlePageInline.isOpen?n.singlePageInline.close("promise",{callback:function(){n.addItems(i,e,"append")}}):n.addItems(i,e,"append"))},prepend:function(t,e){var n=r["private"].checkInstance.call(this,"prepend"),i=a(t).filter(".cbp-item");n.isAnimating||i.length<1?a.isFunction(e)&&e.call(n,i):(n.isAnimating=!0,n.singlePageInline&&n.singlePageInline.isOpen?n.singlePageInline.close("promise",{callback:function(){n.addItems(i,e,"prepend")}}):n.addItems(i,e,"prepend"))},remove:function(t,e){var n=r["private"].checkInstance.call(this,"remove"),i=a(t).filter(".cbp-item");n.isAnimating||i.length<1?a.isFunction(e)&&e.call(n,i):(n.isAnimating=!0,n.singlePageInline&&n.singlePageInline.isOpen?n.singlePageInline.close("promise",{callback:function(){n.removeItems(i,e)}}):n.removeItems(i,e))},layout:function(t){var e=r["private"].checkInstance.call(this,"layout");e.width=e.$obj.outerWidth(),e.isAnimating||e.width<=0||("alignCenter"===e.options.gridAdjustment&&(e.wrapper[0].style.maxWidth=""),e.storeData(e.blocks),e.layoutAndAdjustment()),a.isFunction(t)&&t.call(e)}}}(jQuery,window,document),function(h,t,b,e){"use strict";var v=h.fn.cubeportfolio.constructor;h.extend(v.prototype,{updateSliderPagination:function(){var t,e,n=this;if(n.options.showPagination){for(t=Math.ceil(n.blocksOn.length/n.cols),n.navPagination.empty(),e=t-1;0<=e;e--)h("<div/>",{"class":"cbp-nav-pagination-item","data-slider-action":"jumpTo"}).appendTo(n.navPagination);n.navPaginationItems=n.navPagination.children()}n.enableDisableNavSlider()},destroySlider:function(){var t=this;"slider"===t.options.layoutMode&&(t.$obj.removeClass("cbp-mode-slider"),t.$ul.removeAttr("style"),t.$ul.off(".cbp"),h(b).off(".cbp"),t.options.auto&&t.stopSliderAuto())},nextSlider:function(t){var e=this;if(e.isEndSlider()){if(!e.isRewindNav())return;e.sliderActive=0}else e.options.scrollByPage?e.sliderActive=Math.min(e.sliderActive+e.cols,e.blocksOn.length-e.cols):e.sliderActive+=1;e.goToSlider()},prevSlider:function(t){var e=this;if(e.isStartSlider()){if(!e.isRewindNav())return;e.sliderActive=e.blocksOn.length-e.cols}else e.options.scrollByPage?e.sliderActive=Math.max(0,e.sliderActive-e.cols):e.sliderActive-=1;e.goToSlider()},jumpToSlider:function(t){var e=this,n=Math.min(t.index()*e.cols,e.blocksOn.length-e.cols);n!==e.sliderActive&&(e.sliderActive=n,e.goToSlider())},jumpDragToSlider:function(t){var e,n,i,o=this,a=0<t;o.options.scrollByPage?(e=o.cols*o.columnWidth,n=o.cols):(e=o.columnWidth,n=1),t=Math.abs(t),i=Math.floor(t/e)*n,20<t%e&&(i+=n),o.sliderActive=a?Math.min(o.sliderActive+i,o.blocksOn.length-o.cols):Math.max(0,o.sliderActive-i),o.goToSlider()},isStartSlider:function(){return 0===this.sliderActive},isEndSlider:function(){return this.sliderActive+this.cols>this.blocksOn.length-1},goToSlider:function(){this.enableDisableNavSlider(),this.updateSliderPosition()},startSliderAuto:function(){var t=this;t.isDrag?t.stopSliderAuto():t.timeout=setTimeout(function(){t.nextSlider(),t.startSliderAuto()},t.options.autoTimeout)},stopSliderAuto:function(){clearTimeout(this.timeout)},enableDisableNavSlider:function(){var t,e,n=this;n.isRewindNav()||(e=n.isStartSlider()?"addClass":"removeClass",n.navPrev[e]("cbp-nav-stop"),e=n.isEndSlider()?"addClass":"removeClass",n.navNext[e]("cbp-nav-stop")),n.options.showPagination&&(t=n.options.scrollByPage?Math.ceil(n.sliderActive/n.cols):n.isEndSlider()?n.navPaginationItems.length-1:Math.floor(n.sliderActive/n.cols),n.navPaginationItems.removeClass("cbp-nav-pagination-active").eq(t).addClass("cbp-nav-pagination-active")),n.customPagination&&(t=n.options.scrollByPage?Math.ceil(n.sliderActive/n.cols):n.isEndSlider()?n.customPaginationItems.length-1:Math.floor(n.sliderActive/n.cols),n.customPaginationItems.removeClass(n.customPaginationClass).eq(t).addClass(n.customPaginationClass))},isRewindNav:function(){return!this.options.showNavigation||!(this.blocksOn.length<=this.cols)&&!!this.options.rewindNav},sliderItemsLength:function(){return this.blocksOn.length<=this.cols},sliderLayout:function(){var i=this;i.blocksOn.each(function(t,e){var n=h(e).data("cbp");n.leftNew=i.columnWidth*t,n.topNew=0,i.sliderFreeSpaces.push({topStart:n.heightAndGap})}),i.getFreeSpacesForSlider(),i.$ul.width(i.columnWidth*i.blocksOn.length-i.options.gapVertical)},getFreeSpacesForSlider:function(){var t=this;t.freeSpaces=t.sliderFreeSpaces.slice(t.sliderActive,t.sliderActive+t.cols),t.freeSpaces.sort(function(t,e){return t.topStart>e.topStart?1:t.topStart<e.topStart?-1:void 0})},updateSliderPosition:function(){var t=this,e=-t.sliderActive*t.columnWidth;v["private"].modernBrowser?t.$ul[0].style[v["private"].transform]="translate3d("+e+"px, 0px, 0)":t.$ul[0].style.left=e+"px",t.getFreeSpacesForSlider(),t.resizeMainContainer()},dragSlider:function(){var n,i,e,o,a,r=this,s=h(b),l=!1,p={},c=!1;function u(t){r.$obj.removeClass("cbp-mode-slider-dragStart"),l=!0,0!==i?(e.one("click.cbp",function(t){return!1}),requestAnimationFrame(function(){r.jumpDragToSlider(i),r.$ul.one(v["private"].transitionend,f)})):f.call(r),s.off(p.move),s.off(p.end)}function d(t){(8<(i=n-g(t).x)||i<-8)&&t.preventDefault(),r.isDrag=!0;var e=o-i;i<0&&i<o?e=(o-i)/5:0<i&&o-i<-a&&(e=(a+o-i)/5-a),v["private"].modernBrowser?r.$ul[0].style[v["private"].transform]="translate3d("+e+"px, 0px, 0)":r.$ul[0].style.left=e+"px"}function f(){if(l=!1,r.isDrag=!1,r.options.auto){if(r.mouseIsEntered)return;r.startSliderAuto()}}function g(t){return void 0!==t.originalEvent&&void 0!==t.originalEvent.touches&&(t=t.originalEvent.touches[0]),{x:t.pageX,y:t.pageY}}r.isDrag=!1,"ontouchstart"in t||0<navigator.maxTouchPoints||0<navigator.msMaxTouchPoints?(p={start:"touchstart.cbp",move:"touchmove.cbp",end:"touchend.cbp"},c=!0):p={start:"mousedown.cbp",move:"mousemove.cbp",end:"mouseup.cbp"},r.$ul.on(p.start,function(t){r.sliderItemsLength()||(c?t:t.preventDefault(),r.options.auto&&r.stopSliderAuto(),l?h(e).one("click.cbp",function(){return!1}):(e=h(t.target),n=g(t).x,i=0,o=-r.sliderActive*r.columnWidth,a=r.columnWidth*(r.blocksOn.length-r.cols),s.on(p.move,d),s.on(p.end,u),r.$obj.addClass("cbp-mode-slider-dragStart")))})},sliderLayoutReset:function(){this.freeSpaces=[],this.sliderFreeSpaces=[]}})}(jQuery,window,document),"function"!=typeof Object.create&&(Object.create=function(t){function e(){}return e.prototype=t,new e}),function(){for(var a=0,t=["moz","webkit"],e=0;e<t.length&&!window.requestAnimationFrame;e++)window.requestAnimationFrame=window[t[e]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[e]+"CancelAnimationFrame"]||window[t[e]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,e){var n=(new Date).getTime(),i=Math.max(0,16-(n-a)),o=window.setTimeout(function(){t(n+i)},i);return a=n+i,o}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(t){clearTimeout(t)})}(),function(i,t,e,n){"use strict";var o=i.fn.cubeportfolio.constructor;function a(e){(this.parent=e).filterLayout=this.filterLayout,e.registerEvent("computeBlocksFinish",function(t){e.blocksOn2On=e.blocksOnInitial.filter(t),e.blocksOn2Off=e.blocksOnInitial.not(t)})}a.prototype.filterLayout=function(){var t=this;function e(){t.blocks.removeClass("cbp-item-on2off cbp-item-off2on cbp-item-on2on").each(function(t,e){var n=i(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px",e.style[o["private"].transform]=""}),t.blocksOff.addClass("cbp-item-off"),t.$obj.removeClass("cbp-animation-"+t.options.animationType),t.filterFinish()}t.$obj.addClass("cbp-animation-"+t.options.animationType),t.blocksOn2On.addClass("cbp-item-on2on").each(function(t,e){var n=i(e).data("cbp");e.style[o["private"].transform]="translate3d("+(n.leftNew-n.left)+"px, "+(n.topNew-n.top)+"px, 0)"}),t.blocksOn2Off.addClass("cbp-item-on2off"),t.blocksOff2On=t.blocksOn.filter(".cbp-item-off").removeClass("cbp-item-off").addClass("cbp-item-off2on").each(function(t,e){var n=i(e).data("cbp");e.style.left=n.leftNew+"px",e.style.top=n.topNew+"px"}),t.blocksOn2Off.length?t.blocksOn2Off.last().data("cbp").wrapper.one(o["private"].animationend,e):t.blocksOff2On.length?t.blocksOff2On.last().data("cbp").wrapper.one(o["private"].animationend,e):t.blocksOn2On.length?t.blocksOn2On.last().one(o["private"].transitionend,e):e(),t.resizeMainContainer()},a.prototype.destroy=function(){var t=this.parent;t.$obj.removeClass("cbp-animation-"+t.options.animationType)},o.plugins.animationClassic=function(t){return!o["private"].modernBrowser||i.inArray(t.options.animationType,["boxShadow","fadeOut","flipBottom","flipOut","quicksand","scaleSides","skew"])<0?null:new a(t)}}(jQuery,window,document),function(o,t,e,n){"use strict";var a=o.fn.cubeportfolio.constructor;function i(t){(this.parent=t).filterLayout=this.filterLayout}i.prototype.filterLayout=function(){var i=this,t=i.$ul[0].cloneNode(!0);function e(){i.wrapper[0].removeChild(t),"sequentially"===i.options.animationType&&i.blocksOn.each(function(t,e){o(e).data("cbp").wrapper[0].style[a["private"].animationDelay]=""}),i.$obj.removeClass("cbp-animation-"+i.options.animationType),i.filterFinish()}t.setAttribute("class","cbp-wrapper-helper"),i.wrapper[0].insertBefore(t,i.$ul[0]),requestAnimationFrame(function(){i.$obj.addClass("cbp-animation-"+i.options.animationType),i.blocksOff.addClass("cbp-item-off"),i.blocksOn.removeClass("cbp-item-off").each(function(t,e){var n=o(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px","sequentially"===i.options.animationType&&(n.wrapper[0].style[a["private"].animationDelay]=60*t+"ms")}),i.blocksOn.length?i.blocksOn.last().data("cbp").wrapper.one(a["private"].animationend,e):i.blocksOnInitial.length?i.blocksOnInitial.last().data("cbp").wrapper.one(a["private"].animationend,e):e(),i.resizeMainContainer()})},i.prototype.destroy=function(){var t=this.parent;t.$obj.removeClass("cbp-animation-"+t.options.animationType)},a.plugins.animationClone=function(t){return!a["private"].modernBrowser||o.inArray(t.options.animationType,["fadeOutTop","slideLeft","sequentially"])<0?null:new i(t)}}(jQuery,window,document),function(a,t,e,n){"use strict";var r=a.fn.cubeportfolio.constructor;function i(t){(this.parent=t).filterLayout=this.filterLayout}i.prototype.filterLayout=function(){var n=this,t=n.$ul.clone(!0,!0);t[0].setAttribute("class","cbp-wrapper-helper"),n.wrapper[0].insertBefore(t[0],n.$ul[0]);var i=t.find(".cbp-item").not(".cbp-item-off");function o(){n.wrapper[0].removeChild(t[0]),n.$obj.removeClass("cbp-animation-"+n.options.animationType),n.blocks.each(function(t,e){a(e).data("cbp").wrapper[0].style[r["private"].animationDelay]=""}),n.filterFinish()}n.blocksAreSorted&&n.sortBlocks(i,"top","left"),i.children(".cbp-item-wrapper").each(function(t,e){e.style[r["private"].animationDelay]=50*t+"ms"}),requestAnimationFrame(function(){n.$obj.addClass("cbp-animation-"+n.options.animationType),n.blocksOff.addClass("cbp-item-off"),n.blocksOn.removeClass("cbp-item-off").each(function(t,e){var n=a(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px",n.wrapper[0].style[r["private"].animationDelay]=50*t+"ms"});var t=n.blocksOn.length,e=i.length;0===t&&0===e?o():t<e?i.last().children(".cbp-item-wrapper").one(r["private"].animationend,o):n.blocksOn.last().data("cbp").wrapper.one(r["private"].animationend,o),n.resizeMainContainer()})},i.prototype.destroy=function(){var t=this.parent;t.$obj.removeClass("cbp-animation-"+t.options.animationType)},r.plugins.animationCloneDelay=function(t){return!r["private"].modernBrowser||a.inArray(t.options.animationType,["3dflip","flipOutDelay","foldLeft","frontRow","rotateRoom","rotateSides","scaleDown","slideDelay","unfold"])<0?null:new i(t)}}(jQuery,window,document),function(i,t,e,n){"use strict";var o=i.fn.cubeportfolio.constructor;function a(t){(this.parent=t).filterLayout=this.filterLayout}a.prototype.filterLayout=function(){var t=this,e=t.$ul[0].cloneNode(!0);function n(){t.wrapper[0].removeChild(e),t.$obj.removeClass("cbp-animation-"+t.options.animationType),t.filterFinish()}e.setAttribute("class","cbp-wrapper-helper"),t.wrapper[0].insertBefore(e,t.$ul[0]),requestAnimationFrame(function(){t.$obj.addClass("cbp-animation-"+t.options.animationType),t.blocksOff.addClass("cbp-item-off"),t.blocksOn.removeClass("cbp-item-off").each(function(t,e){var n=i(e).data("cbp");n.left=n.leftNew,n.top=n.topNew,e.style.left=n.left+"px",e.style.top=n.top+"px"}),t.blocksOn.length?t.$ul.one(o["private"].animationend,n):t.blocksOnInitial.length?i(e).one(o["private"].animationend,n):n(),t.resizeMainContainer()})},a.prototype.destroy=function(){var t=this.parent;t.$obj.removeClass("cbp-animation-"+t.options.animationType)},o.plugins.animationWrapper=function(t){return!o["private"].modernBrowser||i.inArray(t.options.animationType,["bounceBottom","bounceLeft","bounceTop","moveLeft"])<0?null:new a(t)}}(jQuery,window,document),function(t,e,n,i){"use strict";var o=t.fn.cubeportfolio.constructor;function a(t){var e=this,n=t.options;e.parent=t,e.captionOn=n.caption,t.registerEvent("onMediaQueries",function(t){t&&t.hasOwnProperty("caption")?e.captionOn!==t.caption&&(e.destroy(),e.captionOn=t.caption,e.init()):e.captionOn!==n.caption&&(e.destroy(),e.captionOn=n.caption,e.init())}),e.init()}a.prototype.init=function(){var t=this;""!=t.captionOn&&("expand"===t.captionOn||o["private"].modernBrowser||(t.parent.options.caption=t.captionOn="minimal"),t.parent.$obj.addClass("cbp-caption-active cbp-caption-"+t.captionOn))},a.prototype.destroy=function(){this.parent.$obj.removeClass("cbp-caption-active cbp-caption-"+this.captionOn)},o.plugins.caption=function(t){return new a(t)}}(jQuery,window,document),function(l,t,e,n){"use strict";var i=l.fn.cubeportfolio.constructor;function o(s){(this.parent=s).registerEvent("initFinish",function(){s.$obj.on("click.cbp",".cbp-caption-defaultWrap",function(t){if(t.preventDefault(),!s.isAnimating){s.isAnimating=!0;var e=l(this),n=e.next(),i=e.parent(),o={position:"relative",height:n.outerHeight(!0)},a={position:"relative",height:0};if(s.$obj.addClass("cbp-caption-expand-active"),i.hasClass("cbp-caption-expand-open")){var r=a;a=o,o=r,i.removeClass("cbp-caption-expand-open")}n.css(o),s.$obj.one("pluginResize.cbp",function(){s.isAnimating=!1,s.$obj.removeClass("cbp-caption-expand-active"),0===o.height&&(i.removeClass("cbp-caption-expand-open"),n.attr("style",""))}),s.layoutAndAdjustment(!0),n.css(a),requestAnimationFrame(function(){i.addClass("cbp-caption-expand-open"),n.css(o),s.triggerEvent("gridAdjust"),s.triggerEvent("resizeGrid")})}})},!0)}o.prototype.destroy=function(){this.parent.$obj.find(".cbp-caption-defaultWrap").off("click.cbp").parent().removeClass("cbp-caption-expand-active")},i.plugins.captionExpand=function(t){return"expand"!==t.options.caption?null:new o(t)}}(jQuery,window,document),function(e,t,n,i){"use strict";var o=e.fn.cubeportfolio.constructor;function a(n){n.registerEvent("initEndWrite",function(){if(!(n.width<=0)){var t=e.Deferred();n.pushQueue("delayFrame",t),n.blocksOn.each(function(t,e){e.style[o["private"].animationDelay]=t*n.options.displayTypeSpeed+"ms"}),n.$obj.addClass("cbp-displayType-bottomToTop"),n.blocksOn.last().one(o["private"].animationend,function(){n.$obj.removeClass("cbp-displayType-bottomToTop"),n.blocksOn.each(function(t,e){e.style[o["private"].animationDelay]=""}),t.resolve()})}},!0)}o.plugins.displayBottomToTop=function(t){return o["private"].modernBrowser&&"bottomToTop"===t.options.displayType&&0!==t.blocksOn.length?new a(t):null}}(jQuery,window,document),function(n,t,e,i){"use strict";var o=n.fn.cubeportfolio.constructor;function a(e){e.registerEvent("initEndWrite",function(){if(!(e.width<=0)){var t=n.Deferred();e.pushQueue("delayFrame",t),e.obj.style[o["private"].animationDuration]=e.options.displayTypeSpeed+"ms",e.$obj.addClass("cbp-displayType-fadeIn"),e.$obj.one(o["private"].animationend,function(){e.$obj.removeClass("cbp-displayType-fadeIn"),e.obj.style[o["private"].animationDuration]="",t.resolve()})}},!0)}o.plugins.displayFadeIn=function(t){return!o["private"].modernBrowser||"lazyLoading"!==t.options.displayType&&"fadeIn"!==t.options.displayType||0===t.blocksOn.length?null:new a(t)}}(jQuery,window,document),function(n,t,e,i){"use strict";var o=n.fn.cubeportfolio.constructor;function a(e){e.registerEvent("initEndWrite",function(){if(!(e.width<=0)){var t=n.Deferred();e.pushQueue("delayFrame",t),e.obj.style[o["private"].animationDuration]=e.options.displayTypeSpeed+"ms",e.$obj.addClass("cbp-displayType-fadeInToTop"),e.$obj.one(o["private"].animationend,function(){e.$obj.removeClass("cbp-displayType-fadeInToTop"),e.obj.style[o["private"].animationDuration]="",t.resolve()})}},!0)}o.plugins.displayFadeInToTop=function(t){return o["private"].modernBrowser&&"fadeInToTop"===t.options.displayType&&0!==t.blocksOn.length?new a(t):null}}(jQuery,window,document),function(e,t,n,i){"use strict";var o=e.fn.cubeportfolio.constructor;function a(n){n.registerEvent("initEndWrite",function(){if(!(n.width<=0)){var t=e.Deferred();n.pushQueue("delayFrame",t),n.blocksOn.each(function(t,e){e.style[o["private"].animationDelay]=t*n.options.displayTypeSpeed+"ms"}),n.$obj.addClass("cbp-displayType-sequentially"),n.blocksOn.last().one(o["private"].animationend,function(){n.$obj.removeClass("cbp-displayType-sequentially"),n.blocksOn.each(function(t,e){e.style[o["private"].animationDelay]=""}),t.resolve()})}},!0)}o.plugins.displaySequentially=function(t){return o["private"].modernBrowser&&"sequentially"===t.options.displayType&&0!==t.blocksOn.length?new a(t):null}}(jQuery,window,document),function(c,t,e,n){"use strict";var i=c.fn.cubeportfolio.constructor;function o(t){var e=this;e.parent=t,e.filters=c(t.options.filters),e.filterData=[],t.registerEvent("afterPlugins",function(t){e.filterFromUrl(),e.registerFilter()}),t.registerEvent("resetFiltersVisual",function(){var o=t.options.defaultFilter.split("|");e.filters.each(function(t,e){var i=c(e).find(".cbp-filter-item");i.removeClass("cbp-filter-item-active"),c.each(o,function(t,e){var n=i.filter('[data-filter="'+e+'"]');if(n.length)return n.addClass("cbp-filter-item-active"),o.splice(t,1),!1})}),t.defaultFilter=t.options.defaultFilter})}o.prototype.registerFilter=function(){var s=this,l=s.parent,p=l.defaultFilter.split("|");s.wrap=s.filters.find(".cbp-l-filters-dropdownWrap").on({"mouseover.cbp":function(){c(this).addClass("cbp-l-filters-dropdownWrap-open")},"mouseleave.cbp":function(){c(this).removeClass("cbp-l-filters-dropdownWrap-open")}}),s.filters.each(function(t,i){var e=c(i),n="*",o=e.find(".cbp-filter-item"),a={};e.hasClass("cbp-l-filters-dropdown")&&(a.wrap=e.find(".cbp-l-filters-dropdownWrap"),a.header=e.find(".cbp-l-filters-dropdownHeader"),a.headerText=a.header.text()),l.$obj.cubeportfolio("showCounter",o),c.each(p,function(t,e){if(o.filter('[data-filter="'+e+'"]').length)return n=e,p.splice(t,1),!1}),c.data(i,"filterName",n),s.filterData.push(i),s.filtersCallback(a,o.filter('[data-filter="'+n+'"]'),o);var r=i.getAttribute("data-filter-parent");r&&(e.removeClass("cbp-l-subfilters--active"),r===s.parent.defaultFilter&&e.addClass("cbp-l-subfilters--active")),o.on("click.cbp",function(){var t=c(this);if(!t.hasClass("cbp-filter-item-active")&&!l.isAnimating){s.filtersCallback(a,t,o),c.data(i,"filterName",t.data("filter"));var e=c.map(s.filterData,function(t,e){var n=c(t),i=t.getAttribute("data-filter-parent");i&&(i===c.data(s.filterData[0],"filterName")?n.addClass("cbp-l-subfilters--active"):(n.removeClass("cbp-l-subfilters--active"),c.data(t,"filterName","*"),n.find(".cbp-filter-item").removeClass("cbp-filter-item-active")));var o=c.data(t,"filterName");return""!==o&&"*"!==o?o:null});e.length<1&&(e=["*"]);var n=e.join("|");l.defaultFilter!==n&&l.$obj.cubeportfolio("filter",n)}})})},o.prototype.filtersCallback=function(t,e,n){c.isEmptyObject(t)||(t.wrap.trigger("mouseleave.cbp"),t.headerText?t.headerText="":t.header.html(e.html())),n.removeClass("cbp-filter-item-active"),e.addClass("cbp-filter-item-active")},o.prototype.filterFromUrl=function(){var t=/#cbpf=(.*?)([#\?&]|$)/gi.exec(location.href);null!==t&&(this.parent.defaultFilter=decodeURIComponent(t[1]))},o.prototype.destroy=function(){this.filters.find(".cbp-filter-item").off(".cbp"),this.wrap.off(".cbp")},i.plugins.filters=function(t){return""===t.options.filters?null:new o(t)}}(jQuery,window,document),function(o,t,e,n){"use strict";function i(i){var e=i.options.gapVertical,n=i.options.gapHorizontal;i.registerEvent("onMediaQueries",function(t){i.options.gapVertical=t&&t.hasOwnProperty("gapVertical")?t.gapVertical:e,i.options.gapHorizontal=t&&t.hasOwnProperty("gapHorizontal")?t.gapHorizontal:n,i.blocks.each(function(t,e){var n=o(e).data("cbp");n.widthAndGap=n.width+i.options.gapVertical,n.heightAndGap=n.height+i.options.gapHorizontal})})}o.fn.cubeportfolio.constructor.plugins.changeGapOnMediaQueries=function(t){return new i(t)}}(jQuery,window,document),function(a,t,e,n){"use strict";var i={},o=a.fn.cubeportfolio.constructor;function r(t){var e=this;e.parent=t,e.options=a.extend({},i,e.parent.options.plugins.inlineSlider),e.runInit(),t.registerEvent("addItemsToDOM",function(){e.runInit()})}function s(t){var e=this;t.hasClass("cbp-slider-inline-ready")||(t.addClass("cbp-slider-inline-ready"),e.items=t.find(".cbp-slider-wrapper").children(".cbp-slider-item"),e.active=e.items.filter(".cbp-slider-item--active").index(),e.total=e.items.length-1,e.updateLeft(),t.find(".cbp-slider-next").on("click.cbp",function(t){t.preventDefault(),e.active<e.total?(e.active++,e.updateLeft()):e.active===e.total&&(e.active=0,e.updateLeft())}),t.find(".cbp-slider-prev").on("click.cbp",function(t){t.preventDefault(),0<e.active?(e.active--,e.updateLeft()):0===e.active&&(e.active=e.total,e.updateLeft())}))}s.prototype.updateLeft=function(){var n=this;n.items.removeClass("cbp-slider-item--active"),n.items.eq(n.active).addClass("cbp-slider-item--active"),n.items.each(function(t,e){e.style.left=t-n.active+"00%"})},r.prototype.runInit=function(){var o=this;o.parent.$obj.find(".cbp-slider-inline").not(".cbp-slider-inline-ready").each(function(t,e){var n=a(e),i=n.find(".cbp-slider-item--active").find("img")[0];i.hasAttribute("data-cbp-src")?o.parent.$obj.on("lazyLoad.cbp",function(t,e){e.src===i.src&&new s(n)}):new s(n)})},r.prototype.destroy=function(){this.parent.$obj.find(".cbp-slider-next").off("click.cbp"),this.parent.$obj.find(".cbp-slider-prev").off("click.cbp"),this.parent.$obj.off("lazyLoad.cbp"),this.parent.$obj.find(".cbp-slider-inline").each(function(t,e){var n=a(e);n.removeClass("cbp-slider-inline-ready");var i=n.find(".cbp-slider-item");i.removeClass("cbp-slider-item--active"),i.removeAttr("style"),i.eq(0).addClass("cbp-slider-item--active")})},o.plugins.inlineSlider=function(t){return new r(t)}}(jQuery,window,document),function(a,t,e,n){"use strict";var i={loadingClass:"cbp-lazyload",threshold:400},o=a.fn.cubeportfolio.constructor,r=a(t);function s(t){var e=this;e.parent=t,e.options=a.extend({},i,e.parent.options.plugins.lazyLoad),t.registerEvent("initFinish",function(){e.loadImages(),t.registerEvent("resizeMainContainer",function(){e.loadImages()}),t.registerEvent("filterFinish",function(){e.loadImages()}),o["private"].lazyLoadScroll.initEvent({instance:e,fn:e.loadImages})},!0)}o["private"].lazyLoadScroll=new o["private"].publicEvents("scroll.cbplazyLoad",50),s.prototype.loadImages=function(){var o=this,t=o.parent.$obj.find("img").filter("[data-cbp-src]");0!==t.length&&(o.screenHeight=r.height(),t.each(function(t,e){var n=a(e.parentNode);if(o.isElementInScreen(e)){var i=e.getAttribute("data-cbp-src");null===o.parent.checkSrc(a("<img>").attr("src",i))?(o.removeLazyLoad(e,i),n.removeClass(o.options.loadingClass)):(n.addClass(o.options.loadingClass),a("<img>").on("load.cbp error.cbp",function(){o.removeLazyLoad(e,i,n)}).attr("src",i))}else n.addClass(o.options.loadingClass)}))},s.prototype.removeLazyLoad=function(t,e,n){var i=this;t.src=e,t.removeAttribute("data-cbp-src"),i.parent.removeAttrImage(t),i.parent.$obj.trigger("lazyLoad.cbp",t),n&&(o["private"].modernBrowser?a(t).one(o["private"].transitionend,function(){n.removeClass(i.options.loadingClass)}):n.removeClass(i.options.loadingClass))},s.prototype.isElementInScreen=function(t){var e=t.getBoundingClientRect(),n=e.bottom+this.options.threshold,i=this.screenHeight+n-(e.top-this.options.threshold);return 0<=n&&n<=i},s.prototype.destroy=function(){o["private"].lazyLoadScroll.destroyEvent(this)},o.plugins.lazyLoad=function(t){return new s(t)}}(jQuery,window,document),function(r,a,t,e){"use strict";var i={element:"",action:"click",loadItems:3},s=r.fn.cubeportfolio.constructor;function n(t){var n=this;n.parent=t,n.options=r.extend({},i,n.parent.options.plugins.loadMore),n.loadMore=r(n.options.element).find(".cbp-l-loadMore-link"),0!==n.loadMore.length&&(n.loadItems=n.loadMore.find(".cbp-l-loadMore-loadItems"),"0"===n.loadItems.text()&&n.loadMore.addClass("cbp-l-loadMore-stop"),t.registerEvent("filterStart",function(e){n.populateItems().then(function(){var t=n.items.filter(n.parent.filterConcat(e)).length;0<t?(n.loadMore.removeClass("cbp-l-loadMore-stop"),n.loadItems.html(t)):n.loadMore.addClass("cbp-l-loadMore-stop")})}),n[n.options.action]())}n.prototype.populateItems=function(){var n=this;return n.items?r.Deferred().resolve():(n.items=r(),r.ajax({url:n.loadMore.attr("href"),type:"GET",dataType:"HTML"}).done(function(t){var e=r.map(t.split(/\r?\n/),function(t,e){return r.trim(t)}).join("");0!==e.length&&r.each(r.parseHTML(e),function(t,e){r(e).hasClass("cbp-item")?n.items=n.items.add(e):r.each(e.children,function(t,e){r(e).hasClass("cbp-item")&&(n.items=n.items.add(e))})})}).fail(function(){n.items=null,n.loadMore.removeClass("cbp-l-loadMore-loading")}))},n.prototype.populateInsertItems=function(t){var n=this,i=[],o=n.parent.defaultFilter,a=0;n.items.each(function(t,e){if(a===n.options.loadItems)return!1;o&&"*"!==o?r(e).filter(n.parent.filterConcat(o)).length&&(i.push(e),n.items[t]=null,a++):(i.push(e),n.items[t]=null,a++)}),n.items=n.items.map(function(t,e){return e}),0!==i.length?n.parent.$obj.cubeportfolio("append",i,t):n.loadMore.removeClass("cbp-l-loadMore-loading").addClass("cbp-l-loadMore-stop")},n.prototype.click=function(){var n=this;function e(){n.loadMore.removeClass("cbp-l-loadMore-loading");var t,e=n.parent.defaultFilter;0===(t=e&&"*"!==e?n.items.filter(n.parent.filterConcat(e)).length:n.items.length)?n.loadMore.addClass("cbp-l-loadMore-stop"):n.loadItems.html(t)}n.loadMore.on("click.cbp",function(t){t.preventDefault(),n.parent.isAnimating||n.loadMore.hasClass("cbp-l-loadMore-stop")||(n.loadMore.addClass("cbp-l-loadMore-loading"),n.populateItems().then(function(){n.populateInsertItems(e)}))})},n.prototype.auto=function(){var n=this,i=r(a),o=!1;function t(){if(!o&&!n.loadMore.hasClass("cbp-l-loadMore-stop")){var t=n.loadMore.offset().top-200;i.scrollTop()+i.height()<t||(o=!0,n.populateItems().then(function(){n.populateInsertItems(e)}).fail(function(){o=!1}))}}function e(){var t,e=n.parent.defaultFilter;0===(t=e&&"*"!==e?n.items.filter(n.parent.filterConcat(e)).length:n.items.length)?n.loadMore.removeClass("cbp-l-loadMore-loading").addClass("cbp-l-loadMore-stop"):(n.loadItems.html(t),i.trigger("scroll.loadMore")),o=!1,0===n.items.length&&(s["private"].loadMoreScroll.destroyEvent(n),n.parent.$obj.off("filterComplete.cbp"))}s["private"].loadMoreScroll=new s["private"].publicEvents("scroll.loadMore",100),n.parent.$obj.one("initComplete.cbp",function(){n.loadMore.addClass("cbp-l-loadMore-loading").on("click.cbp",function(t){t.preventDefault()}),s["private"].loadMoreScroll.initEvent({instance:n,fn:function(){n.parent.isAnimating||t()}}),n.parent.$obj.on("filterComplete.cbp",function(){t()}),t()})},n.prototype.destroy=function(){this.loadMore.off(".cbp"),s["private"].loadMoreScroll&&s["private"].loadMoreScroll.destroyEvent(this)},s.plugins.loadMore=function(t){var e=t.options.plugins;return t.options.loadMore&&(e.loadMore||(e.loadMore={}),e.loadMore.element=t.options.loadMore),t.options.loadMoreAction&&(e.loadMore||(e.loadMore={}),e.loadMore.action=t.options.loadMoreAction),e.loadMore&&void 0!==e.loadMore.selector&&(e.loadMore.element=e.loadMore.selector,delete e.loadMore.selector),e.loadMore&&e.loadMore.element?new n(t):null}}(jQuery,window,document),function(u,d,f,t){"use strict";var l=u.fn.cubeportfolio.constructor,c={delay:0},e={init:function(t,e){var o,a=this;if(a.cubeportfolio=t,a.type=e,a.isOpen=!1,a.options=a.cubeportfolio.options,"lightbox"===e&&(a.cubeportfolio.registerEvent("resizeWindow",function(){a.resizeImage()}),a.localOptions=u.extend({},c,a.cubeportfolio.options.plugins.lightbox)),"singlePageInline"!==e){if(a.createMarkup(),"singlePage"===e){if(a.cubeportfolio.registerEvent("resizeWindow",function(){if(a.options.singlePageStickyNavigation){var t=a.contentWrap[0].clientWidth;0<t&&(a.navigationWrap.width(t),a.navigation.width(t))}}),a.options.singlePageDeeplinking){a.url=location.href,"#"===a.url.slice(-1)&&(a.url=a.url.slice(0,-1));p=(l=a.url.split("#cbp=")).shift();if(u.each(l,function(t,i){if(a.cubeportfolio.blocksOn.each(function(t,e){var n=u(e).find(a.options.singlePageDelegate+'[href="'+i+'"]');if(n.length)return o=n,!1}),o)return!1}),o){a.url=p;var n=o,i=n.attr("data-cbp-singlePage"),r=[];i?r=n.closest(u(".cbp-item")).find('[data-cbp-singlePage="'+i+'"]'):a.cubeportfolio.blocksOn.each(function(t,e){var n=u(e);n.not(".cbp-item-off")&&n.find(a.options.singlePageDelegate).each(function(t,e){u(e).attr("data-cbp-singlePage")||r.push(e)})}),a.openSinglePage(r,o[0])}else if(l.length){var s=f.createElement("a");s.setAttribute("href",l[0]),a.openSinglePage([s],s)}}a.localOptions=u.extend({},c,a.cubeportfolio.options.plugins.singlePage)}}else{if(a.height=0,a.createMarkupSinglePageInline(),a.cubeportfolio.registerEvent("resizeGrid",function(){a.isOpen&&a.close()}),a.options.singlePageInlineDeeplinking){a.url=location.href,"#"===a.url.slice(-1)&&(a.url=a.url.slice(0,-1));var l,p=(l=a.url.split("#cbpi=")).shift();u.each(l,function(t,i){if(a.cubeportfolio.blocksOn.each(function(t,e){var n=u(e).find(a.options.singlePageInlineDelegate+'[href="'+i+'"]');if(n.length)return o=n,!1}),o)return!1}),o&&a.cubeportfolio.registerEvent("initFinish",function(){a.openSinglePageInline(a.cubeportfolio.blocksOn,o[0])},!0)}a.localOptions=u.extend({},c,a.cubeportfolio.options.plugins.singlePageInline)}},createMarkup:function(){var r=this,t="";if("singlePage"===r.type&&"left"!==r.options.singlePageAnimation&&(t=" cbp-popup-singlePage-"+r.options.singlePageAnimation),r.wrap=u("<div/>",{"class":"cbp-popup-wrap cbp-popup-"+r.type+t,"data-action":"lightbox"===r.type?"close":""}).on("click.cbp",function(t){if(!r.stopEvents){var e=u(t.target).attr("data-action");r[e]&&(r[e](),t.preventDefault())}}),"singlePage"===r.type?(r.contentWrap=u("<div/>",{"class":"cbp-popup-content-wrap"}).appendTo(r.wrap),"ios"===l["private"].browser&&r.contentWrap.css("overflow","auto"),r.content=u("<div/>",{"class":"cbp-popup-content"}).appendTo(r.contentWrap)):r.content=u("<div/>",{"class":"cbp-popup-content"}).appendTo(r.wrap),u("<div/>",{"class":"cbp-popup-loadingBox"}).appendTo(r.wrap),"ie8"===l["private"].browser&&(r.bg=u("<div/>",{"class":"cbp-popup-ie8bg","data-action":"lightbox"===r.type?"close":""}).appendTo(r.wrap)),"singlePage"===r.type&&!1===r.options.singlePageStickyNavigation?r.navigationWrap=u("<div/>",{"class":"cbp-popup-navigation-wrap"}).appendTo(r.contentWrap):r.navigationWrap=u("<div/>",{"class":"cbp-popup-navigation-wrap"}).appendTo(r.wrap),r.navigation=u("<div/>",{"class":"cbp-popup-navigation"}).appendTo(r.navigationWrap),r.closeButton=u("<div/>",{"class":"cbp-popup-close",title:"Close (Esc arrow key)","data-action":"close"}).appendTo(r.navigation),r.nextButton=u("<div/>",{"class":"cbp-popup-next",title:"Next (Right arrow key)","data-action":"next"}).appendTo(r.navigation),r.prevButton=u("<div/>",{"class":"cbp-popup-prev",title:"Previous (Left arrow key)","data-action":"prev"}).appendTo(r.navigation),"singlePage"===r.type){r.options.singlePageCounter&&(r.counter=u(r.options.singlePageCounter).appendTo(r.navigation),r.counter.text("")),r.content.on("click.cbp",r.options.singlePageDelegate,function(t){t.preventDefault();var e,n,i=r.dataArray.length,o=this.getAttribute("href");for(e=0;e<i;e++)if(r.dataArray[e].url===o){n=e;break}if(void 0===n){var a=f.createElement("a");a.setAttribute("href",o),r.dataArray=[{url:o,element:a}],r.counterTotal=1,r.nextButton.hide(),r.prevButton.hide(),r.singlePageJumpTo(0)}else r.singlePageJumpTo(n-r.current)});var e=!1;try{var n=Object.defineProperty({},"passive",{get:function(){e={passive:!0}}});d.addEventListener("testPassive",null,n),d.removeEventListener("testPassive",null,n)}catch(o){}var i="onwheel"in f.createElement("div")?"wheel":"mousewheel";r.contentWrap[0].addEventListener(i,function(t){t.stopImmediatePropagation()},e)}u(f).on("keydown.cbp",function(t){r.isOpen&&(r.stopEvents||(a&&t.stopImmediatePropagation(),37===t.keyCode?r.prev():39===t.keyCode?r.next():27===t.keyCode&&r.close()))})},createMarkupSinglePageInline:function(){var n=this;n.wrap=u("<div/>",{"class":"cbp-popup-singlePageInline"}).on("click.cbp",function(t){if(!n.stopEvents){var e=u(t.target).attr("data-action");e&&n[e]&&(n[e](),t.preventDefault())}}),n.content=u("<div/>",{"class":"cbp-popup-content"}).appendTo(n.wrap),n.navigation=u("<div/>",{"class":"cbp-popup-navigation"}).appendTo(n.wrap),n.closeButton=u("<div/>",{"class":"cbp-popup-close",title:"Close (Esc arrow key)","data-action":"close"}).appendTo(n.navigation)},destroy:function(){var t=this,e=u("body");u(f).off("keydown.cbp"),e.off("click.cbp",t.options.lightboxDelegate),e.off("click.cbp",t.options.singlePageDelegate),t.content.off("click.cbp",t.options.singlePageDelegate),t.cubeportfolio.$obj.off("click.cbp",t.options.singlePageInlineDelegate),t.cubeportfolio.$obj.off("click.cbp",t.options.lightboxDelegate),t.cubeportfolio.$obj.off("click.cbp",t.options.singlePageDelegate),t.cubeportfolio.$obj.removeClass("cbp-popup-isOpening"),t.cubeportfolio.$obj.find(".cbp-item").removeClass("cbp-singlePageInline-active"),t.wrap.remove()},openLightbox:function(t,e){var s,n,l=this,p=0,c=[];if(!l.isOpen){if(a=!0,l.isOpen=!0,l.stopEvents=!1,l.dataArray=[],(l.current=null)===(s=e.getAttribute("href")))throw new Error("HEI! Your clicked element doesn't have a href attribute.");u.each(t,function(t,e){var n,i=e.getAttribute("href"),o=i,a="isImage";if(-1===u.inArray(i,c)){if(s===i)l.current=p;else if(!l.options.lightboxGallery)return;if(/youtu\.?be/i.test(i)){var r=i.lastIndexOf("v=")+2;1===r&&(r=i.lastIndexOf("/")+1),n=i.substring(r),/autoplay=/i.test(n)||(n+="&autoplay=1"),o="//www.youtube.com/embed/"+(n=n.replace(/\?|&/,"?")),a="isYoutube"}else/vimeo\.com/i.test(i)?(n=i.substring(i.lastIndexOf("/")+1),/autoplay=/i.test(n)||(n+="&autoplay=1"),o="//player.vimeo.com/video/"+(n=n.replace(/\?|&/,"?")),a="isVimeo"):/www\.ted\.com/i.test(i)?(o="http://embed.ted.com/talks/"+i.substring(i.lastIndexOf("/")+1)+".html",a="isTed"):/soundcloud\.com/i.test(i)?(o=i,a="isSoundCloud"):/(\.mp4)|(\.ogg)|(\.ogv)|(\.webm)/i.test(i)?(o=-1!==i.indexOf("|")?i.split("|"):i.split("%7C"),a="isSelfHostedVideo"):/\.mp3$/i.test(i)&&(o=i,a="isSelfHostedAudio");l.dataArray.push({src:o,title:e.getAttribute(l.options.lightboxTitleSrc),type:a}),p++}c.push(i)}),l.counterTotal=l.dataArray.length,1===l.counterTotal?(l.nextButton.hide(),l.prevButton.hide(),l.dataActionImg=""):(l.nextButton.show(),l.prevButton.show(),l.dataActionImg='data-action="next"'),l.wrap.appendTo(f.body),l.scrollTop=u(d).scrollTop(),l.originalStyle=u("html").attr("style"),u("html").css({overflow:"hidden",marginRight:d.innerWidth-u(f).width()}),l.wrap.addClass("cbp-popup-transitionend"),l.wrap.show(),n=l.dataArray[l.current],l[n.type](n)}},openSinglePage:function(t,e){var i,o=this,a=0,r=[];if(!o.isOpen){if(o.cubeportfolio.singlePageInline&&o.cubeportfolio.singlePageInline.isOpen&&o.cubeportfolio.singlePageInline.close(),o.isOpen=!0,o.stopEvents=!1,o.dataArray=[],(o.current=null)===(i=e.getAttribute("href")))throw new Error("HEI! Your clicked element doesn't have a href attribute.");if(u.each(t,function(t,e){var n=e.getAttribute("href");-1===u.inArray(n,r)&&(i===n&&(o.current=a),o.dataArray.push({url:n,element:e}),a++),r.push(n)}),o.counterTotal=o.dataArray.length,1===o.counterTotal?(o.nextButton.hide(),o.prevButton.hide()):(o.nextButton.show(),o.prevButton.show()),o.wrap.appendTo(f.body),o.scrollTop=u(d).scrollTop(),o.contentWrap.scrollTop(0),o.wrap.show(),o.finishOpen=2,o.navigationMobile=u(),o.wrap.one(l["private"].transitionend,function(){u("html").css({overflow:"hidden",marginRight:d.innerWidth-u(f).width()}),o.wrap.addClass("cbp-popup-transitionend"),o.options.singlePageStickyNavigation&&(o.wrap.addClass("cbp-popup-singlePage-sticky"),o.navigationWrap.width(o.contentWrap[0].clientWidth)),o.finishOpen--,o.finishOpen<=0&&o.updateSinglePageIsOpen.call(o)}),"ie8"!==l["private"].browser&&"ie9"!==l["private"].browser||(u("html").css({overflow:"hidden",marginRight:d.innerWidth-u(f).width()}),o.wrap.addClass("cbp-popup-transitionend"),o.options.singlePageStickyNavigation&&(o.navigationWrap.width(o.contentWrap[0].clientWidth),setTimeout(function(){o.wrap.addClass("cbp-popup-singlePage-sticky")},1e3)),o.finishOpen--),o.wrap.addClass("cbp-popup-loading"),o.wrap.offset(),o.wrap.addClass("cbp-popup-singlePage-open"),o.options.singlePageDeeplinking&&(o.url=o.url.split("#cbp=")[0],location.href=o.url+"#cbp="+o.dataArray[o.current].url),u.isFunction(o.options.singlePageCallback)&&o.options.singlePageCallback.call(o,o.dataArray[o.current].url,o.dataArray[o.current].element),"ios"===l["private"].browser){var s=o.contentWrap[0];s.addEventListener("touchstart",function(){var t=s.scrollTop,e=s.scrollHeight,n=t+s.offsetHeight;0===t?s.scrollTop=1:n===e&&(s.scrollTop=t-1)})}}},openSinglePageInline:function(t,e,n){var i,o,a,r=this;if(n=n||!1,r.fromOpen=n,r.storeBlocks=t,r.storeCurrentBlock=e,r.isOpen)return o=r.cubeportfolio.blocksOn.index(u(e).closest(".cbp-item")),void(r.dataArray[r.current].url!==e.getAttribute("href")||r.current!==o?r.cubeportfolio.singlePageInline.close("open",{blocks:t,currentBlock:e,fromOpen:!0}):r.close());if(r.isOpen=!0,r.stopEvents=!1,r.dataArray=[],(r.current=null)===(i=e.getAttribute("href")))throw new Error("HEI! Your clicked element doesn't have a href attribute.");if(a=u(e).closest(".cbp-item")[0],t.each(function(t,e){a===e&&(r.current=t)}),r.dataArray[r.current]={url:i,element:e},u(r.dataArray[r.current].element).parents(".cbp-item").addClass("cbp-singlePageInline-active"),r.counterTotal=t.length,r.wrap.insertBefore(r.cubeportfolio.wrapper),r.topDifference=0,"top"===r.options.singlePageInlinePosition)r.blocksToMove=t,r.top=0;else if("bottom"===r.options.singlePageInlinePosition)r.blocksToMove=u(),r.top=r.cubeportfolio.height;else if("above"===r.options.singlePageInlinePosition){var s=u(t[r.current]).data("cbp").top;r.top=s,t.each(function(t,e){var n=u(e).data("cbp"),i=n.top,o=i+n.heightAndGap;s<=i||o>r.top&&(r.top=o,r.topDifference=r.top-s)}),r.blocksToMove=u(),t.each(function(t,e){if(t!==r.current){var n=u(e).data("cbp");n.top+n.heightAndGap>r.top&&(r.blocksToMove=r.blocksToMove.add(e))}else r.blocksToMove=r.blocksToMove.add(e)}),r.top=Math.max(r.top-r.options.gapHorizontal,0)}else{var l=u(t[r.current]).data("cbp"),p=l.top+l.heightAndGap;r.top=p,r.blocksToMove=u(),t.each(function(t,e){var n=u(e).data("cbp"),i=n.top,o=i+n.height;o<=p||(i>=p-n.height/2?r.blocksToMove=r.blocksToMove.add(e):p<o&&i<p&&(o>r.top&&(r.top=o),o-p>r.topDifference&&(r.topDifference=o-p)))})}if(r.wrap[0].style.height=r.wrap.outerHeight(!0)+"px",r.deferredInline=u.Deferred(),r.options.singlePageInlineInFocus){r.scrollTop=u(d).scrollTop();var c=r.cubeportfolio.$obj.offset().top+r.top-100;r.scrollTop!==c?u("html,body").animate({scrollTop:c},350).promise().then(function(){r.resizeSinglePageInline(),r.deferredInline.resolve()}):(r.resizeSinglePageInline(),r.deferredInline.resolve())}else r.resizeSinglePageInline(),r.deferredInline.resolve();r.cubeportfolio.$obj.addClass("cbp-popup-singlePageInline-open"),r.wrap.css({top:r.top}),r.options.singlePageInlineDeeplinking&&(r.url=r.url.split("#cbpi=")[0],location.href=r.url+"#cbpi="+r.dataArray[r.current].url),u.isFunction(r.options.singlePageInlineCallback)&&r.options.singlePageInlineCallback.call(r,r.dataArray[r.current].url,r.dataArray[r.current].element)},resizeSinglePageInline:function(){var n=this;n.height=0===n.top||n.top===n.cubeportfolio.height?n.wrap.outerHeight(!0):n.wrap.outerHeight(!0)-n.options.gapHorizontal,n.height+=n.topDifference,n.storeBlocks.each(function(t,e){l["private"].modernBrowser?e.style[l["private"].transform]="":e.style.marginTop=""}),n.blocksToMove.each(function(t,e){l["private"].modernBrowser?e.style[l["private"].transform]="translate3d(0px, "+n.height+"px, 0)":e.style.marginTop=n.height+"px"}),n.cubeportfolio.obj.style.height=n.cubeportfolio.height+n.height+"px"},revertResizeSinglePageInline:function(){this.deferredInline=u.Deferred(),this.storeBlocks.each(function(t,e){l["private"].modernBrowser?e.style[l["private"].transform]="":e.style.marginTop=""}),this.cubeportfolio.obj.style.height=this.cubeportfolio.height+"px"},appendScriptsToWrap:function(i){var o=this,a=0,r=function(t){var e=f.createElement("script"),n=t.src;e.type="text/javascript",e.readyState?e.onreadystatechange=function(){"loaded"!=e.readyState&&"complete"!=e.readyState||(e.onreadystatechange=null,i[++a]&&r(i[a]))}:e.onload=function(){i[++a]&&r(i[a])},n?e.src=n:e.text=t.text,o.content[0].appendChild(e)};r(i[0])},updateSinglePage:function(t,e,n){var i,o=this;o.content.addClass("cbp-popup-content").removeClass("cbp-popup-content-basic"),!1===n&&o.content.removeClass("cbp-popup-content").addClass("cbp-popup-content-basic"),o.counter&&(i=u(o.getCounterMarkup(o.options.singlePageCounter,o.current+1,o.counterTotal)),o.counter.text(i.text())),o.fromAJAX={html:t,scripts:e},o.finishOpen--,o.finishOpen<=0&&o.updateSinglePageIsOpen.call(o)},updateSinglePageIsOpen:function(){var t,e=this;e.wrap.addClass("cbp-popup-ready"),e.wrap.removeClass("cbp-popup-loading"),e.content.html(e.fromAJAX.html),e.fromAJAX.scripts&&e.appendScriptsToWrap(e.fromAJAX.scripts),e.fromAJAX={},e.cubeportfolio.$obj.trigger("updateSinglePageStart.cbp"),(t=e.content.find(".cbp-slider")).length?(t.find(".cbp-slider-item").addClass("cbp-item"),e.slider=t.cubeportfolio({layoutMode:"slider",mediaQueries:[{width:1,cols:1}],gapHorizontal:0,gapVertical:0,caption:"",coverRatio:""})):e.slider=null,e.checkForSocialLinks(e.content),e.cubeportfolio.$obj.trigger("updateSinglePageComplete.cbp")},checkForSocialLinks:function(t){this.createFacebookShare(t.find(".cbp-social-fb")),this.createTwitterShare(t.find(".cbp-social-twitter")),this.createGooglePlusShare(t.find(".cbp-social-googleplus")),this.createPinterestShare(t.find(".cbp-social-pinterest"))},createFacebookShare:function(t){t.length&&!t.attr("onclick")&&t.attr("onclick","window.open('http://www.facebook.com/sharer.php?u="+encodeURIComponent(d.location.href)+"', '_blank', 'top=100,left=100,toolbar=0,status=0,width=620,height=400'); return false;")},createTwitterShare:function(t){t.length&&!t.attr("onclick")&&t.attr("onclick","window.open('https://twitter.com/intent/tweet?source="+encodeURIComponent(d.location.href)+"&text="+encodeURIComponent(f.title)+"', '_blank', 'top=100,left=100,toolbar=0,status=0,width=620,height=300'); return false;")},createGooglePlusShare:function(t){t.length&&!t.attr("onclick")&&t.attr("onclick","window.open('https://plus.google.com/share?url="+encodeURIComponent(d.location.href)+"', '_blank', 'top=100,left=100,toolbar=0,status=0,width=620,height=450'); return false;")},createPinterestShare:function(t){if(t.length&&!t.attr("onclick")){var e="",n=this.content.find("img")[0];n&&(e=n.src),t.attr("onclick","window.open('http://pinterest.com/pin/create/button/?url="+encodeURIComponent(d.location.href)+"&media="+e+"', '_blank', 'top=100,left=100,toolbar=0,status=0,width=620,height=400'); return false;")}},updateSinglePageInline:function(t,e){var n=this;n.content.html(t),e&&n.appendScriptsToWrap(e),n.cubeportfolio.$obj.trigger("updateSinglePageInlineStart.cbp"),0!==n.localOptions.delay?setTimeout(function(){n.singlePageInlineIsOpen.call(n)},n.localOptions.delay):n.singlePageInlineIsOpen.call(n)},singlePageInlineIsOpen:function(){var e=this;function n(){e.wrap.addClass("cbp-popup-singlePageInline-ready"),e.wrap[0].style.height="",e.resizeSinglePageInline(),e.cubeportfolio.$obj.trigger("updateSinglePageInlineComplete.cbp")}e.cubeportfolio.loadImages(e.wrap,function(){var t=e.content.find(".cbp-slider");t.length?(t.find(".cbp-slider-item").addClass("cbp-item"),t.one("initComplete.cbp",function(){e.deferredInline.done(n)}),t.on("pluginResize.cbp",function(){e.deferredInline.done(n)}),e.slider=t.cubeportfolio({layoutMode:"slider",displayType:"default",mediaQueries:[{width:1,cols:1}],gapHorizontal:0,gapVertical:0,caption:"",coverRatio:""})):(e.slider=null,e.deferredInline.done(n)),e.checkForSocialLinks(e.content)})},isImage:function(t){var e=this;new Image;e.tooggleLoading(!0),e.cubeportfolio.loadImages(u('<div><img src="'+t.src+'"></div>'),function(){e.updateImagesMarkup(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal)),e.tooggleLoading(!1)})},isVimeo:function(t){var e=this;e.updateVideoMarkup(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},isYoutube:function(t){var e=this;e.updateVideoMarkup(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},isTed:function(t){var e=this;e.updateVideoMarkup(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},isSoundCloud:function(t){var e=this;e.updateVideoMarkup(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},isSelfHostedVideo:function(t){var e=this;e.updateSelfHostedVideo(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},isSelfHostedAudio:function(t){var e=this;e.updateSelfHostedAudio(t.src,t.title,e.getCounterMarkup(e.options.lightboxCounter,e.current+1,e.counterTotal))},getCounterMarkup:function(t,e,n){if(!t.length)return"";var i={current:e,total:n};return t.replace(/\{\{current}}|\{\{total}}/gi,function(t){return i[t.slice(2,-2)]})},updateSelfHostedVideo:function(t,e,n){var i;this.wrap.addClass("cbp-popup-lightbox-isIframe");var o='<div class="cbp-popup-lightbox-iframe"><video controls="controls" height="auto" style="width: 100%">';for(i=0;i<t.length;i++)/(\.mp4)/i.test(t[i])?o+='<source src="'+t[i]+'" type="video/mp4">':/(\.ogg)|(\.ogv)/i.test(t[i])?o+='<source src="'+t[i]+'" type="video/ogg">':/(\.webm)/i.test(t[i])&&(o+='<source src="'+t[i]+'" type="video/webm">');o+='Your browser does not support the video tag.</video><div class="cbp-popup-lightbox-bottom">'+(e?'<div class="cbp-popup-lightbox-title">'+e+"</div>":"")+n+"</div></div>",this.content.html(o),this.wrap.addClass("cbp-popup-ready"),this.preloadNearbyImages()},updateSelfHostedAudio:function(t,e,n){this.wrap.addClass("cbp-popup-lightbox-isIframe");var i='<div class="cbp-popup-lightbox-iframe"><div class="cbp-misc-video"><audio controls="controls" height="auto" style="width: 75%"><source src="'+t+'" type="audio/mpeg">Your browser does not support the audio tag.</audio></div><div class="cbp-popup-lightbox-bottom">'+(e?'<div class="cbp-popup-lightbox-title">'+e+"</div>":"")+n+"</div></div>";this.content.html(i),this.wrap.addClass("cbp-popup-ready"),this.preloadNearbyImages()},updateVideoMarkup:function(t,e,n){this.wrap.addClass("cbp-popup-lightbox-isIframe");var i='<div class="cbp-popup-lightbox-iframe"><iframe src="'+t+'" frameborder="0" allowfullscreen scrolling="no"></iframe><div class="cbp-popup-lightbox-bottom">'+(e?'<div class="cbp-popup-lightbox-title">'+e+"</div>":"")+n+"</div></div>";this.content.html(i),this.wrap.addClass("cbp-popup-ready"),this.preloadNearbyImages()},updateImagesMarkup:function(t,e,n){var i=this;i.wrap.removeClass("cbp-popup-lightbox-isIframe");var o='<div class="cbp-popup-lightbox-figure"><img src="'+t+'" class="cbp-popup-lightbox-img" '+i.dataActionImg+' /><div class="cbp-popup-lightbox-bottom">'+(e?'<div class="cbp-popup-lightbox-title">'+e+"</div>":"")+n+"</div></div>";i.content.html(o),i.wrap.addClass("cbp-popup-ready"),i.resizeImage(),i.preloadNearbyImages()},next:function(){this[this.type+"JumpTo"](1)},prev:function(){this[this.type+"JumpTo"](-1)},lightboxJumpTo:function(t){var e,n=this;n.current=n.getIndex(n.current+t),n[(e=n.dataArray[n.current]).type](e)},singlePageJumpTo:function(t){var e=this;e.current=e.getIndex(e.current+t),u.isFunction(e.options.singlePageCallback)&&(e.resetWrap(),e.contentWrap.scrollTop(0),e.wrap.addClass("cbp-popup-loading"),e.slider&&l["private"].resize.destroyEvent(u.data(e.slider[0],"cubeportfolio")),e.options.singlePageCallback.call(e,e.dataArray[e.current].url,e.dataArray[e.current].element),e.options.singlePageDeeplinking&&(location.href=e.url+"#cbp="+e.dataArray[e.current].url))},resetWrap:function(){var t=this;"singlePage"===t.type&&t.options.singlePageDeeplinking&&(location.href=t.url+"#"),"singlePageInline"===t.type&&t.options.singlePageInlineDeeplinking&&(location.href=t.url+"#")},getIndex:function(t){return(t%=this.counterTotal)<0&&(t=this.counterTotal+t),t},close:function(e,t){var n=this;function i(){n.slider&&l["private"].resize.destroyEvent(u.data(n.slider[0],"cubeportfolio")),n.content.html(""),n.wrap.detach(),n.cubeportfolio.$obj.removeClass("cbp-popup-singlePageInline-open cbp-popup-singlePageInline-close"),n.isOpen=!1,"promise"===e&&u.isFunction(t.callback)&&t.callback.call(n.cubeportfolio)}function o(){var t=u(d).scrollTop();n.resetWrap(),u(d).scrollTop(t),n.options.singlePageInlineInFocus&&"promise"!==e?u("html,body").animate({scrollTop:n.scrollTop},350).promise().then(function(){i()}):i()}"singlePageInline"===n.type?"open"===e?(n.wrap.removeClass("cbp-popup-singlePageInline-ready"),u(n.dataArray[n.current].element).closest(".cbp-item").removeClass("cbp-singlePageInline-active"),n.isOpen=!1,n.openSinglePageInline(t.blocks,t.currentBlock,t.fromOpen)):(n.height=0,n.revertResizeSinglePageInline(),n.wrap.removeClass("cbp-popup-singlePageInline-ready"),n.cubeportfolio.$obj.addClass("cbp-popup-singlePageInline-close"),n.cubeportfolio.$obj.find(".cbp-item").removeClass("cbp-singlePageInline-active"),l["private"].modernBrowser?n.wrap.one(l["private"].transitionend,function(){o()}):o()):"singlePage"===n.type?(n.resetWrap(),n.stopScroll=!0,n.wrap.removeClass("cbp-popup-ready cbp-popup-transitionend cbp-popup-singlePage-open cbp-popup-singlePage-sticky"),u("html").css({overflow:"",marginRight:"",position:""}),u(d).scrollTop(n.scrollTop),"ie8"!==l["private"].browser&&"ie9"!==l["private"].browser||(n.slider&&l["private"].resize.destroyEvent(u.data(n.slider[0],"cubeportfolio")),n.content.html(""),n.wrap.detach(),n.isOpen=!1),n.wrap.one(l["private"].transitionend,function(){n.slider&&l["private"].resize.destroyEvent(u.data(n.slider[0],"cubeportfolio")),n.content.html(""),n.wrap.detach(),n.isOpen=!1})):(a=!1,n.originalStyle?u("html").attr("style",n.originalStyle):u("html").css({overflow:"",marginRight:""}),u(d).scrollTop(n.scrollTop),n.slider&&l["private"].resize.destroyEvent(u.data(n.slider[0],"cubeportfolio")),n.content.html(""),n.wrap.detach(),n.isOpen=!1)},tooggleLoading:function(t){this.stopEvents=t,this.wrap[t?"addClass":"removeClass"]("cbp-popup-loading")},resizeImage:function(){if(this.isOpen){var t=this.content.find("img"),e=t.parent(),n=u(d).height()-(e.outerHeight(!0)-e.height())-this.content.find(".cbp-popup-lightbox-bottom").outerHeight(!0);t.css("max-height",n+"px")}},preloadNearbyImages:function(){for(var t=this,e=[t.getIndex(t.current+1),t.getIndex(t.current+2),t.getIndex(t.current+3),t.getIndex(t.current-1),t.getIndex(t.current-2),t.getIndex(t.current-3)],n=e.length-1;0<=n;n--)"isImage"===t.dataArray[e[n]].type&&t.cubeportfolio.checkSrc(t.dataArray[e[n]])}};function n(t){var e=this;!1===(e.parent=t).options.lightboxShowCounter&&(t.options.lightboxCounter=""),!1===t.options.singlePageShowCounter&&(t.options.singlePageCounter=""),t.registerEvent("initStartRead",function(){e.run()},!0)}var a=!1,i=!1,o=!1;n.prototype.run=function(){var r=this,s=r.parent,t=u(f.body);s.lightbox=null,s.options.lightboxDelegate&&!i&&(i=!0,s.lightbox=Object.create(e),s.lightbox.init(s,"lightbox"),t.on("click.cbp",s.options.lightboxDelegate,function(t){t.preventDefault();var e=u(this),i=e.attr("data-cbp-lightbox"),n=r.detectScope(e),o=n.data("cubeportfolio"),a=[];o?o.blocksOn.each(function(t,e){var n=u(e);n.not(".cbp-item-off")&&n.find(s.options.lightboxDelegate).each(function(t,e){i?u(e).attr("data-cbp-lightbox")===i&&a.push(e):a.push(e)})}):a=i?n.find(s.options.lightboxDelegate+"[data-cbp-lightbox="+i+"]"):n.find(s.options.lightboxDelegate),s.lightbox.openLightbox(a,e[0])})),s.singlePage=null,s.options.singlePageDelegate&&!o&&(o=!0,s.singlePage=Object.create(e),s.singlePage.init(s,"singlePage"),t.on("click.cbp",s.options.singlePageDelegate,function(t){t.preventDefault();var e=u(this),i=e.attr("data-cbp-singlePage"),n=r.detectScope(e),o=n.data("cubeportfolio"),a=[];o?o.blocksOn.each(function(t,e){var n=u(e);n.not(".cbp-item-off")&&n.find(s.options.singlePageDelegate).each(function(t,e){i?u(e).attr("data-cbp-singlePage")===i&&a.push(e):a.push(e)})}):a=i?n.find(s.options.singlePageDelegate+"[data-cbp-singlePage="+i+"]"):n.find(s.options.singlePageDelegate),s.singlePage.openSinglePage(a,e[0])})),s.singlePageInline=null,s.options.singlePageInlineDelegate&&(s.singlePageInline=Object.create(e),s.singlePageInline.init(s,"singlePageInline"),s.$obj.on("click.cbp",s.options.singlePageInlineDelegate,function(t){t.preventDefault();var e=u.data(this,"cbp-locked"),n=u.data(this,"cbp-locked",+new Date);(!e||300<n-e)&&s.singlePageInline.openSinglePageInline(s.blocksOn,this)}))},n.prototype.detectScope=function(t){var e,n,i;return(e=t.closest(".cbp-popup-singlePageInline")).length?(i=t.closest(".cbp",e[0])).length?i:e:(n=t.closest(".cbp-popup-singlePage")).length?(i=t.closest(".cbp",n[0])).length?i:n:(i=t.closest(".cbp")).length?i:u(f.body)},n.prototype.destroy=function(){var t=this.parent;u(f.body).off("click.cbp"),o=i=!1,t.lightbox&&t.lightbox.destroy(),t.singlePage&&t.singlePage.destroy(),t.singlePageInline&&t.singlePageInline.destroy()},l.plugins.popUp=function(t){return new n(t)}}(jQuery,window,document),function(s,t,e,n){"use strict";var i=s.fn.cubeportfolio.constructor;function o(t){var n=this;n.parent=t,n.searchInput=s(t.options.search),n.searchInput.each(function(t,e){var n=e.getAttribute("data-search");n||(n="*"),s.data(e,"searchData",{value:e.value,el:n})});var i=null;n.searchInput.on("keyup.cbp paste.cbp",function(t){t.preventDefault();var e=s(this);clearTimeout(i),i=setTimeout(function(){n.runEvent.call(n,e)},350)}),n.searchNothing=n.searchInput.siblings(".cbp-search-nothing").detach(),n.searchNothingHeight=null,n.searchNothingHTML=n.searchNothing.html(),n.searchInput.siblings(".cbp-search-icon").on("click.cbp",function(t){t.preventDefault(),n.runEvent.call(n,s(this).prev().val(""))})}o.prototype.runEvent=function(t){var i=this,o=t.val(),a=t.data("searchData"),r=new RegExp(o,"i");a.value===o||i.parent.isAnimating||(0<(a.value=o).length?t.attr("value",o):t.removeAttr("value"),i.parent.$obj.cubeportfolio("filter",function(t){var e=t.filter(function(t,e){if(-1<s(e).find(a.el).text().search(r))return!0});if(0===e.length&&i.searchNothing.length){var n=i.searchNothingHTML.replace("{{query}}",o);i.searchNothing.html(n),i.searchNothing.appendTo(i.parent.$obj),null===i.searchNothingHeight&&(i.searchNothingHeight=i.searchNothing.outerHeight(!0)),i.parent.registerEvent("resizeMainContainer",function(){i.parent.height=i.parent.height+i.searchNothingHeight,i.parent.obj.style.height=i.parent.height+"px"},!0)}else i.searchNothing.detach();return i.parent.triggerEvent("resetFiltersVisual"),e},function(){t.trigger("keyup.cbp")}))},o.prototype.destroy=function(){this.searchInput.off(".cbp"),this.searchInput.next(".cbp-search-icon").off(".cbp"),this.searchInput.each(function(t,e){s.removeData(e)})},i.plugins.search=function(t){return""===t.options.search?null:new o(t)}}(jQuery,window,document),function(o,t,e,n){"use strict";var i={pagination:"",paginationClass:"cbp-pagination-active"},a=o.fn.cubeportfolio.constructor;function r(t){var e=this;e.parent=t,e.options=o.extend({},i,e.parent.options.plugins.slider);var n=o(e.options.pagination);0<n.length&&(e.parent.customPagination=n,e.parent.customPaginationItems=n.children(),e.parent.customPaginationClass=e.options.paginationClass,e.parent.customPaginationItems.on("click.cbp",function(t){t.preventDefault(),t.stopImmediatePropagation(),t.stopPropagation(),e.parent.sliderStopEvents||e.parent.jumpToSlider(o(this))})),e.parent.registerEvent("gridAdjust",function(){e.sliderMarkup.call(e.parent),e.parent.registerEvent("gridAdjust",function(){e.updateSlider.call(e.parent)})},!0)}r.prototype.sliderMarkup=function(){var i=this;i.sliderStopEvents=!1,i.sliderActive=0,i.$obj.one("initComplete.cbp",function(){i.$obj.addClass("cbp-mode-slider")}),i.nav=o("<div/>",{"class":"cbp-nav"}),i.nav.on("click.cbp","[data-slider-action]",function(t){if(t.preventDefault(),t.stopImmediatePropagation(),t.stopPropagation(),!i.sliderStopEvents){var e=o(this),n=e.attr("data-slider-action");i[n+"Slider"]&&i[n+"Slider"](e)}}),i.options.showNavigation&&(i.controls=o("<div/>",{"class":"cbp-nav-controls"}),i.navPrev=o("<div/>",{"class":"cbp-nav-prev","data-slider-action":"prev"}).appendTo(i.controls),i.navNext=o("<div/>",{"class":"cbp-nav-next","data-slider-action":"next"}).appendTo(i.controls),i.controls.appendTo(i.nav)),i.options.showPagination&&(i.navPagination=o("<div/>",{"class":"cbp-nav-pagination"}).appendTo(i.nav)),(i.controls||i.navPagination)&&i.nav.appendTo(i.$obj),i.updateSliderPagination(),i.options.auto&&(i.options.autoPauseOnHover&&(i.mouseIsEntered=!1,i.$obj.on("mouseenter.cbp",function(t){i.mouseIsEntered=!0,i.stopSliderAuto()}).on("mouseleave.cbp",function(t){i.mouseIsEntered=!1,i.startSliderAuto()})),i.startSliderAuto()),i.options.drag&&a["private"].modernBrowser&&i.dragSlider()},r.prototype.updateSlider=function(){this.updateSliderPosition(),this.updateSliderPagination()},r.prototype.destroy=function(){var t=this;t.parent.customPaginationItems&&t.parent.customPaginationItems.off(".cbp"),(t.parent.controls||t.parent.navPagination)&&(t.parent.nav.off(".cbp"),t.parent.nav.remove())},a.plugins.slider=function(t){return"slider"!==t.options.layoutMode?null:new r(t)}}(jQuery,window,document),function(u,t,e,n){"use strict";var i={element:""},o=u.fn.cubeportfolio.constructor;function a(e){var n=this;n.parent=e,n.options=u.extend({},i,n.parent.options.plugins.sort),n.element=u(n.options.element),0!==n.element.length&&(n.sort="",n.sortBy="string:asc",n.element.on("click.cbp",".cbp-sort-item",function(t){t.preventDefault(),n.target=t.target,u(n.target).hasClass("cbp-l-dropdown-item--active")||e.isAnimating||(n.processSort(),e.$obj.cubeportfolio("filter",e.defaultFilter))}),e.registerEvent("triggerSort",function(){n.target&&(n.processSort(),e.$obj.cubeportfolio("filter",e.defaultFilter))}),n.dropdownWrap=n.element.find(".cbp-l-dropdown-wrap").on({"mouseover.cbp":function(){u(this).addClass("cbp-l-dropdown-wrap--open")},"mouseleave.cbp":function(){u(this).removeClass("cbp-l-dropdown-wrap--open")}}),n.dropdownHeader=n.element.find(".cbp-l-dropdown-header"))}a.prototype.processSort=function(){var o=this,t=o.parent,e=(p=o.target).hasAttribute("data-sort"),n=p.hasAttribute("data-sortBy");if(e&&n)o.sort=p.getAttribute("data-sort"),o.sortBy=p.getAttribute("data-sortBy");else if(e)o.sort=p.getAttribute("data-sort");else{if(!n)return;o.sortBy=p.getAttribute("data-sortBy")}var i=o.sortBy.split(":"),a="string",r=1;if("int"===i[0]?a="int":"float"===i[0]&&(a="float"),"desc"===i[1]&&(r=-1),o.sort){var s=[];t.blocks.each(function(t,e){var n=u(e),i=n.find(o.sort).text();"int"===a&&(i=parseInt(i,10)),"float"===a&&(i=parseFloat(i,10)),s.push({sortText:i,data:n.data("cbp")})}),s.sort(function(t,e){var n=t.sortText,i=e.sortText;return"string"===a&&(n=n.toUpperCase(),i=i.toUpperCase()),n<i?-r:i<n?r:0}),u.each(s,function(t,e){e.data.index=t})}else{var l=[];-1===r&&(t.blocks.each(function(t,e){l.push(u(e).data("cbp").indexInitial)}),l.sort(function(t,e){return e-t})),t.blocks.each(function(t,e){var n=u(e).data("cbp");n.index=-1===r?l[n.indexInitial]:n.indexInitial})}t.sortBlocks(t.blocks,"index"),o.dropdownWrap.trigger("mouseleave.cbp");var p=u(o.target),c=u(o.target).parent();if(c.hasClass("cbp-l-dropdown-list"))o.dropdownHeader.html(p.html()),p.addClass("cbp-l-dropdown-item--active").siblings(".cbp-l-dropdown-item").removeClass("cbp-l-dropdown-item--active");else if(c.hasClass("cbp-l-direction")){0===p.index()?c.addClass("cbp-l-direction--second").removeClass("cbp-l-direction--first"):c.addClass("cbp-l-direction--first").removeClass("cbp-l-direction--second")}},a.prototype.destroy=function(){this.element.off("click.cbp")},o.plugins.sort=function(t){return new a(t)}}(jQuery,window,document);
;/*
* HSCore
* @version: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later
* @author: Grek I/O
* @event-namespace: .HSCore
* @license: Grek I/O Libraries (https://grek.io/licenses)
* Copyright 2020 Grek I/O
*/
'use strict';

$.extend({
	HSCore: {
		init: function () {
			$(document).ready(function () {
				// Botostrap Tootltips
				$('[data-toggle="tooltip"]').tooltip();
				
				// Bootstrap Popovers
				$('[data-toggle="popover"]').popover();
			});
		},
		
		components: {}
	}
});

$.HSCore.init();

;/*
* Slick Carousel wrapper
* @version: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later, Slick v1.8.0
* @author: Grek I/O
* @event-namespace: .HSCore.components.HSSlickCarousel
* @license: Grek I/O Libraries (https://grek.io/licenses)
* Copyright 2020 Grek I/O
*/

;(function ($) {
	'use strict';

	$.HSCore.components.HSSlickCarousel = {
		defaults: {
			infinite: false,
			pauseOnHover: false,
			centerPadding: 0,
			lazyLoad: false,
			prevArrow: null,
			nextArrow: null,

			autoplaySpeed: 3000,
			speed: 300,
			initialDelay: 600,

			isThumbs: false,
			isThumbsProgressCircle: false,
			thumbsProgressContainer: null,
			thumbsProgressOptions: {
				color: '#000',
				width: 4
			},

			animationIn: null,
			animationOut: null,

			dotsWithIcon: null,
			dotsFromTitles: null,
			dotsAsProgressLine: false,
			hasDotsHelper: false,

			counterSelector: null,
			counterDivider: '/',
			counterClassMap: {
				current: 'slick-counter-current',
				total: 'slick-counter-total',
				divider: 'slick-counter-divider'
			}
		},

		init: function (el, options) {
			if (!el.length) return;

			var context = this,
				defaults = Object.assign({}, context.defaults),
				dataSettings = el.attr('data-hs-slick-carousel-options') ? JSON.parse(el.attr('data-hs-slick-carousel-options')) : {},
				settings = {
					id: el.attr('id')
				};
			settings = $.extend(defaults, settings, dataSettings);
			settings = $.extend(settings, {
				customPaging: function (slider, i) {
					var title = $(slider.$slides[i]).data('hs-slick-carousel-slide-title');

					if (title && settings.dotsWithIcon) {
						return '<span>' + title + '</span>' + settings.dotsWithIcon;
					} else if (settings.dotsWithIcon) {
						return '<span></span>' + settings.dotsWithIcon;
					} else if (title && settings.dotsFromTitles) {
						return '<span>' + title + '</span>';
					} else if (title && !settings.dotsFromTitles) {
						return '<span></span>' + '<strong class="dot-title">' + title + '</strong>';
					} else {
						return '<span></span>';
					}
				}
			}, options);

			/* Start : object preparation */

			if (el.find('[data-slide-type]').length) {
				context.videoSupport(el);
			}

			el.on('init', function (event, slick) {
				context.transformOff(el, settings, event, slick);
			});

			el.on('init', function (event, slick) {
				context.setCustomAnimation(event, slick);
			});

			if (settings.animationIn && settings.animationOut) {
				el.on('init', function (event, slick) {
					context.setSingleClass(event, slick);
				});
			}

			if (settings.dotsAsProgressLine) {
				el.on('init', function () {
					context.setCustomLineDots(el, settings);
				});
			}

			if (settings.hasDotsHelper) {
				el.on('init', function (el, event, slick) {
					context.setCustomDots(el, event, slick);
				});
			}

			if (settings.isThumbs) {
				if (settings.isThumbsProgressCircle) {
					el.on('init', function (event, slick) {
						context.setCustomProgressCircle(el, settings, event, slick);
					});
				}

				$('#' + settings.id).on('click', '.slick-slide', function (e) {
					e.stopPropagation();

					context.goToTargetSlide($(this), settings);
				});
			}

			el.on('init', function (event, slick) {
				context.setCustomCurrentClass(el, event, slick);
			});

			el.on('init', function (event, slick) {
				context.setInitialCustomAnimation(event, slick);
			});

			if (settings.counterSelector) {
				el.on('init', function (event, slick) {
					context.setCounter(settings, event, slick);
				});
			}

			/* End : object preparation */

			var newSlick = el.slick(settings);

			/* Start : custom functionality implementation */

			if ($(settings.asNavFor)[0] && $(settings.asNavFor)[0].dataset.hsSlickCarouselOptions ? JSON.parse($(settings.asNavFor)[0].dataset.hsSlickCarouselOptions).isThumbsProgress : false) {
				context.setInitialDelay(el, settings);
			}

			el.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				context.setCustomClasses(el, event, slick, currentSlide, nextSlide);
			});

			if (settings.counterSelector) {
				el.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
					context.counting(settings, event, slick, currentSlide, nextSlide);
				});
			}

			el.on('afterChange', function (event, slick) {
				context.setCustomAnimation(event, slick);
			});

			if (settings.animationIn && settings.animationOut) {
				el.on('afterChange', function (event, slick, currentSlide, nextSlide) {
					context.animationIn(settings, event, slick, currentSlide, nextSlide);
				});

				el.on('beforeChange', function (event, slick, currentSlide) {
					context.animationOut(settings, event, slick, currentSlide);
				});

				el.on('setPosition', function (event, slick) {
					context.setPosition(settings, event, slick);
				});
			}

			/* End : custom functionality implementation */

			return newSlick;
		},

		// ----- Start : Preparation -----

		transformOff: function (el, params, event, slick) {
			var settings = params;

			$(slick.$slides).css('height', 'auto');

			if (settings.isThumbs && settings.slidesToShow >= $(slick.$slides).length) {
				el.addClass('slick-transform-off');
			}
		},

		setCustomAnimation: function (event, slick) {
			var slide = $(slick.$slides)[slick.currentSlide],
				animatedElements = $(slide).find('[data-hs-slick-carousel-animation]');

			$(animatedElements).each(function () {
				var animationIn = $(this).data('hs-slick-carousel-animation'),
					animationDelay = $(this).data('hs-slick-carousel-animation-delay'),
					animationDuration = $(this).data('hs-slick-carousel-animation-duration');

				$(this).css({
					'animation-delay': animationDelay + 'ms',
					'animation-duration': animationDuration + 'ms'
				});

				$(this).addClass('animated ' + animationIn).css({
					opacity: 1
				});
			});
		},

		setInitialCustomAnimation: function (event, slick) {
			var slide = $(slick.$slides)[0],
				animatedElements = $(slide).find('[data-hs-slick-carousel-animation]');

			$(animatedElements).each(function () {
				var animationIn = $(this).data('hs-slick-carousel-animation');

				$(this).addClass('animated ' + animationIn).css('opacity', 1);
			});
		},

		setSingleClass: function (event, slick) {
			$(slick.$slides).addClass('single-slide');
		},

		setCustomDots: function (el) {
			var $dots = el.find('.js-dots');

			if (!$dots.length) return;

			$dots.append('<span class="dots-helper"></span>');
		},

		setCustomLineDots: function (el, params) {
			var $dots = el.find('[class="' + params.dotsClass + '"]'),
				$dotsItems = $dots.find('li');

			if (!$dots.length) return;

			setTimeout(function () {
				el.addClass('slick-line-dots-ready');
			});

			$dotsItems.each(function () {
				$(this).append('<span class="dot-line"><span class="dot-line-helper" style="transition-duration: ' + (params.autoplaySpeed + params.speed) + 'ms;"></span></span>');
			});
		},

		setCustomProgressCircle: function (el, params, event, slick) {
			var settings = params,
				thumbProgressElLength = 0,
				style = '<style type="text/css"></style>',
				$style = $(style);

			$(slick.$slides).each(function (i) {
				var $el = $('<span class="slick-thumb-progress"><svg version="1.1" viewBox="0 0 160 160"><path class="slick-thumb-progress__path" d="M 79.98452083651917 4.000001576345426 A 76 76 0 1 1 79.89443752470656 4.0000733121155605 Z"></path></svg></span>'),
					$path = $el.find('svg path');
				thumbProgressElLength = parseInt($path[0].getTotalLength());

				$(slick.$slides[i]).children(settings.thumbsProgressContainer).append($el);
			});

			$style.text('.slick-thumb-progress .slick-thumb-progress__path {' +
				'opacity: 0;' +
				'fill: transparent;' +
				'stroke: '+ settings.thumbsProgressOptions.color +';' +
			  'stroke-width: ' + settings.thumbsProgressOptions.width + ';' +
				'stroke-dashoffset: ' + thumbProgressElLength + ';' +
				'stroke-dashoffset: 0px;' +
				'}' +
				'.slick-current .slick-thumb-progress .slick-thumb-progress__path {' +
				'opacity: 1;' +
				'-webkit-animation: ' + (slick.options.autoplaySpeed + slick.options.speed) + 'ms linear 0ms forwards dash;' +
				'-moz-animation: ' + (slick.options.autoplaySpeed + slick.options.speed) + 'ms linear 0ms forwards dash;' +
				'-o-animation: ' + (slick.options.autoplaySpeed + slick.options.speed) + 'ms linear 0ms forwards dash;' +
				'animation: ' + (slick.options.autoplaySpeed + slick.options.speed) + 'ms linear 0ms forwards dash;' +
				'}' +
				'@-webkit-keyframes dash {' +
				'from {stroke-dasharray: 0 ' + thumbProgressElLength + ';} ' +
				'to {stroke-dasharray: ' + thumbProgressElLength + ' ' + thumbProgressElLength + ';}' +
				'}' +
				'@-moz-keyframes dash {' +
				'from {stroke-dasharray: 0 ' + thumbProgressElLength + ';} ' +
				'to {stroke-dasharray: ' + thumbProgressElLength + ' ' + thumbProgressElLength + ';}' +
				'}' +
				'@-moz-keyframes dash {' +
				'from {stroke-dasharray: 0 ' + thumbProgressElLength + ';} ' +
				'to {stroke-dasharray: ' + thumbProgressElLength + ' ' + thumbProgressElLength + ';}' +
				'}' +
				'@keyframes dash {' +
				'from {stroke-dasharray: 0 ' + thumbProgressElLength + ';} ' +
				'to {stroke-dasharray: ' + thumbProgressElLength + ' ' + thumbProgressElLength + ';}' +
				'}'
			);

			$style.appendTo(el);
		},

		goToTargetSlide: function (el, params) {
			//Variables
			var settings = params,
				i = el.data('slick-index');

			if ($('#' + settings.id).slick('slickCurrentSlide') !== i) {
				$('#' + settings.id).slick('slickGoTo', i);
			}
		},

		setCustomCurrentClass: function (el) {
			var $dots = el.find('.js-dots');

			if (!$dots.length) return;

			$($dots[0].children[0]).addClass('slick-current');
		},

		setCounter: function (params, event, slick) {
			var settings = params;

			$(settings.counterSelector).html('<span class="' + settings.counterClassMap.current + '">1</span><span class="' + settings.counterClassMap.divider + '">' + settings.counterDivider + '</span><span class="' + settings.counterClassMap.total + '">' + slick.slideCount + '</span>');
		},

		// ----- End : Preparation -----

		// ----- Start : Custom functionality -----

		setInitialDelay: function (el, params) {
			var settings = params;

			el.slick('slickPause');

			setTimeout(function () {
				el.slick('slickPlay');
			}, settings.initialDelay);
		},

		setCustomClasses: function (el, event, slider, currentSlide, nextSlide) {
			var nxtSlide = $(slider.$slides)[nextSlide],
				slide = $(slider.$slides)[currentSlide],
				$dots = el.find('.js-dots'),
				animatedElements = $(nxtSlide).find('[data-hs-slick-carousel-animation]'),
				otherElements = $(slide).find('[data-hs-slick-carousel-animation]');

			$(otherElements).each(function () {
				var animationIn = $(this).data('hs-slick-carousel-animation');

				$(this).removeClass('animated ' + animationIn);
			});

			$(animatedElements).each(function () {
				$(this).css({
					opacity: 0
				});
			});

			if (!$dots.length) return;

			if (currentSlide > nextSlide) {
				$($dots[0].children).removeClass('slick-active-right');

				$($dots[0].children[nextSlide]).addClass('slick-active-right');
			} else {
				$($dots[0].children).removeClass('slick-active-right');
			}

			$($dots[0].children).removeClass('slick-current');

			setTimeout(function () {
				$($dots[0].children[nextSlide]).addClass('slick-current');
			}, .25);
		},

		animationIn: function (params, event, slick, currentSlide, nextSlide) {
			var settings = params;

			$(slick.$slides).removeClass('animated set-position ' + settings.animationIn + ' ' + settings.animationOut);
		},

		animationOut: function (params, event, slick, currentSlide) {
			var settings = params;

			$(slick.$slides[currentSlide]).addClass('animated ' + settings.animationOut);
		},

		setPosition: function (params, event, slick) {
			var settings = params;

			$(slick.$slides[slick.currentSlide]).addClass('animated set-position ' + settings.animationIn);
		},

		counting: function (params, event, slick, currentSlide, nextSlide) {
			var settings = params,
				i = (nextSlide ? nextSlide : 0) + 1;

			$(settings.counterSelector).html('<span class="' + settings.counterClassMap.current + '">' + i + '</span><span class="' + settings.counterClassMap.divider + '">' + settings.counterDivider + '</span><span class="' + settings.counterClassMap.total + '">' + slick.slideCount + '</span>');
		},

		videoSupport: function (carousel) {
			if (!carousel.length) return;

			carousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				var slideType = $(slick.$slides[currentSlide]).data('slide-type'),
					player = $(slick.$slides[currentSlide]).find('iframe').get(0),
					command;

				if (slideType === 'vimeo') {
					command = {
						"method": "pause",
						"value": "true"
					}
				} else if (slideType === 'youtube') {
					command = {
						"event": "command",
						"func": "pauseVideo"
					}
				} else {
					return false;
				}

				if (player !== undefined) {
					player.contentWindow.postMessage(JSON.stringify(command), '*');
				}
			});
		},

		initTextAnimation: function (carousel, textAnimationSelector) {
			if (!window.TextFx || !window.anime || !carousel.length) return;

			var $text = carousel.find(textAnimationSelector);

			if (!$text.length) return;

			$text.each(function (i, el) {
				var $this = $(el);

				if (!$this.data('TextFx')) {
					$this.data('TextFx', new TextFx($this.get(0)));
				}
			});

			carousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				var targets = slick.$slider
					.find('.slick-track')
					.children();

				var currentTarget = targets.eq(currentSlide),
					nextTarget = targets.eq(nextSlide);

				currentTarget = currentTarget.find(textAnimationSelector);
				nextTarget = nextTarget.find(textAnimationSelector);

				if (currentTarget.length) {
					currentTarget.data('TextFx').hide(currentTarget.data('effect') ? currentTarget.data('effect') : 'fx1');
				}

				if (nextTarget.length) {
					nextTarget.data('TextFx').show(nextTarget.data('effect') ? nextTarget.data('effect') : 'fx1');
				}
			});
		}

		// ----- End : Custom functionality -----
	};

})(jQuery);

;/*
* Cubeportfolio wrapper
* @version: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later, Cube Portfolio v4.4.0
* @author: Grek I/O
* @event-namespace: .HSCore.components.HSCubeportfolio
* @license: Grek I/O Libraries (https://grek.io/licenses)
* Copyright 2020 Grek I/O
*/

;(function ($) {
	'use strict';

	$.HSCore.components.HSCubeportfolio = {
		defaults: {
			defaultFilter: '*',
			displayTypeSpeed: 100,
			sortToPreventGaps: true,
			lightboxGallery: true,
			singlePageInlineInFocus: true,
			singlePageDeeplinking: true,
			singlePageStickyNavigation: true,
			gridAdjustment: 'responsive',
			displayType: 'sequentially',
			singlePageInlinePosition: 'below',
			lightboxTitleSrc: 'data-title',
			lightboxDelegate: '.cbp-lightbox',
			singlePageInlineDelegate: '.cbp-singlePageInline',
			singlePageDelegate: '.cbp-singlePage',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
			appendItems: '<div class="logo cbp-item">my awesome content to append to plugin</div> <div class="logo cbp-item">my second awesome content to append to plugin</div>',
			singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
			mediaQueries: [{
				width: 1500,
				cols: 3
			}, {
				width: 1100,
				cols: 3
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2,
				options: {
					caption: '',
					gapHorizontal: 10,
					gapVertical: 10
				}
			}],
			caption: 'overlayBottomAlong'
		},

		init: function (el, options) {
			if (!el.length) return;

			var context = this,
				$el = $(el),
				defaults = Object.assign({}, context.defaults),
				dataSettings = $el.attr('data-hs-cbp-options') ? JSON.parse($el.attr('data-hs-cbp-options')) : {},
				settings = {
					singlePageInlineCallback: function (url) {
						var t = this;

						$.ajax({
							url: url,
							type: 'GET',
							dataType: 'html',
							timeout: 30000
						}).done(function (result) {
							t.updateSinglePageInline(result);
						}).fail(function () {
							t.updateSinglePageInline('AJAX Error! Please refresh the page!');
						});
					},
					singlePageCallback: function (url) {
						var t = this;

						$.ajax({
							url: url,
							type: 'GET',
							dataType: 'html',
							timeout: 10000
						}).done(function (result) {
							t.updateSinglePage(result);
						}).fail(function () {
							t.updateSinglePage('AJAX Error! Please refresh the page!');
						});
					}
				};
			settings = $.extend(defaults, settings, dataSettings, options);

			/* Start : Init */

			var newCubeportfolio = el.cubeportfolio(settings);

			/* End : Init */

			return newCubeportfolio;
		}

	};

})(jQuery);

;/*
* Layout wrapper
* @version: 1.0.0 (Mon, 21 Dec 2020)
* @requires: jQuery v3.0 or later
* @author: Grek I/O
* @event-namespace: .HSCore.components.Layout
* @license: Grek I/O Libraries (https://grek.io/licenses)
* Copyright 2020 Grek I/O
*/

function showLoader() {
	$( '#loader' ).remove();
	$( 'body' ).append ( '<div id="loader" role="status"></div>' );
};
function hideLoader() {
	$( '#loader' ).fadeOut ( 'slow', function() {
		$( '#loader' ).remove();
	});
};
function showPreloader() {
	$( '#preloader' ).remove();
	$( 'body' ).append ( '<div id="preloader"><div id="loader" role="status"></div></div>' );
};
function hidePreloader() {
	$( '#preloader' ).fadeOut ( 'slow', function() {
		$( '#preloader' ).remove();
	});
};
function writeCookie ( key, value, days ) {
	var date = new Date();
	days = days || 365;
	date.setTime ( + date + ( days * 86400000 ) );
	window.document.cookie = key + "=" + value + "; expires=" + date.toGMTString() + "; path=/";
	return value;
};
function readCookie ( key ) {
	var keyEQ = key + "=";
	var ca = document.cookie.split ( ';' );
	for ( var i = 0; i < ca.length; i++ ) {
		var c = ca[i];
		while ( c.charAt(0)==' ') c = c.substring ( 1, c.length );
		if ( c.indexOf(keyEQ) == 0 ) return c.substring ( keyEQ.length, c.length );
	}
	return null;
};
function eraseCookie ( key ) {   
	document.cookie = key+'=; Max-Age=-99999999;';  
};