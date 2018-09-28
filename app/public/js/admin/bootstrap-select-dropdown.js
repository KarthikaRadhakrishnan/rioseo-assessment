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

"use strict";


__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(module) {

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

(function (factory) {
  if (( false ? "undefined" : _typeof(module)) === "object" && _typeof(module.exports) === "object") {
    module.exports = factory(__webpack_require__(4), window, document);
  } else {
    factory(jQuery, window, document);
  }
})(function ($, window, document, undefined) {
  // Assign index numbers to each instance of the plugin
  var index = 0;

  // Create the defaults once
  var pluginName = "selectDropdown",
      defaults = {
    // Behaviour
    maxListLength: 4, // Maximum number of <option> text() values to display within the button.
    hideSelect: true, // Hide the select element.
    multiselectStayOpen: true, // Keep dropdown open on interaction for multiselects.
    search: true, // Wrap the dropdown button in an input group with search form controls.
    observeDomMutations: false, // Respect dynamic changes to the select options.
    maxHeight: '300px', // Make the dropdown scrollable if beyond this height. Set as false to disable.

    // Text.
    textNoneSelected: "None selected",
    textMultipleSelected: "Multiple selected",
    textNoResults: "No results",

    // HTML.
    htmlClear: "Clear search",

    // Classes
    classDropdown: "dropdown",
    classBtnClear: "btn btn-outline-secondary",
    classBtnSearch: "btn btn-primary",
    classMenu: "dropdown-menu",
    classItem: "dropdown-item"

  };

  // The actual plugin constructor
  function Plugin(element, options, index) {
    this.index = index;
    this.element = element;
    this.settings = $.extend({}, defaults, options);
    this._defaults = defaults;
    this._name = pluginName;
    this.init();
  }

  // Avoid Plugin.prototype conflicts
  $.extend(Plugin.prototype, {
    init: function init() {
      var _ = this; // Deep reference to this.
      var $el = $(_.element);
      _.prefix = 'bsd' + _.index + '-'; // Prefix for unique labelling.

      // Properties: Data.
      _.data = {};
      _.data.multiselect = false;
      _.data.preventHideDropdown = false;
      var attrMultiple = $el.attr('multiple');
      if ((typeof attrMultiple === "undefined" ? "undefined" : _typeof(attrMultiple)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && attrMultiple !== false) {
        _.data.multiselect = true;
        if (_.settings.multiselectStayOpen) {
          _.data.preventHideDropdown = true;
        }
      }
      _.data.status = 'initial';
      _.data.indexes = [];
      _.data.lastSearch = null;
      _.data.resultsChanged = false;
      _.data.hoverItem = $();

      // Properties: IDs.
      _.ids = {};
      _.ids.dropdownContainerId = _.prefix + 'container';
      _.ids.dropdownButtonId = _.prefix + 'button';
      _.ids.controlSearchId = _.prefix + 'search';
      _.ids.dropdownItemDeselect = _.prefix + 'deselect';
      _.ids.dropdownItemShowSelected = _.prefix + 'selected';

      // Properties: Selectors.
      _.selectors = {};
      _.selectors.dropdownItemDeselect = 'a#' + _.ids.dropdownItemDeselect;
      _.selectors.dropdownItemShowSelected = 'a#' + _.ids.dropdownItemShowSelected;

      // Properties: Elements.
      _.els = {};
      _.els.button = _.buildButton();
      _.els.buttonClear = _.buildButtonClear();
      _.els.controlSearch = _.buildcontrolSearch();
      _.els.controlDeselect = _.buildDeselectAll();
      _.els.controlSelected = _.buildShowSelected();
      _.els.dropdown = _.buildDropdownMenu();
      _.els.dropdownItemsContainer = _.buildDropdownItemsContainer();
      _.els.dropdownItemNoResults = _.buildDropdownItemNoResults();
      _.els.dropdownItems = _.buildDropdownItems();
      _.els.dropdownOptions = _.els.dropdownItems.filter(function () {
        return _.isOption($(this));
      });

      // Initialise Search.
      if (_.settings.search) {
        var haystack = [];
        var options = {
          keys: ['text'],
          id: 'index'
        };
        _.els.dropdownOptions.each(function (index) {
          haystack[index] = {
            index: $(this).data('index'),
            text: $(this).text()
          };
        });
        _.els.controlSearch.on('keyup', function (e) {

          // Detect cursor up and down.
          if (e.which == 13) {
            // Enter.
            _.toggle(_.els.dropdown.find('.hover').first());
            if (!_.data.preventHideDropdown) {
              _.els.button.dropdown('toggle');
            }
            return;
          } else if (e.which == 38) {
            // Up.
            if (!_.dropdownActive()) {
              _.els.button.dropdown('toggle');
              _.els.controlSearch.focus();
            }
            _.hoverUp();
            return;
          } else if (e.which == 40) {
            // Down.
            if (!_.dropdownActive()) {
              _.els.button.dropdown('toggle');
              _.els.controlSearch.focus();
            }
            _.hoverDown();
            return;
          }

          var s = $(this).val();
          var results = null;
          if ($.trim(s) == '') {
            _.refresh();
            if (_.data.lastSearch !== null) {
              _.data.resultsChanged = true;
              _.data.lastSearch = null;
            }
            return;
          } else {
            var fuse = new Fuse(haystack, options);
            results = fuse.search($(this).val());
          }
          _.data.resultsChanged = true;
          if (results) {
            if (typeof _.data.lastSearch !== null && _.arraysEqual(results, _.data.lastSearch)) {
              _.data.resultsChanged = false;
            }
          } else {
            _.refresh();
            return;
          }
          if (_.data.resultsChanged) {
            _.hoverSet(results[0]);
            _.hide(results);
            _.reorder(results);
            _.resetScroll();
          }
          _.data.lastSearch = results;
        });
      }

      // Handle cut and paste.
      _.els.controlSearch.bind({
        paste: function paste() {
          $(this).trigger('keydown');
        },
        cut: function cut() {
          $(this).trigger('keydown');
        }
      });

      // Build.
      _.setButtonText();
      var $dropdown = _.buildDropdown();
      $dropdown.append(_.els.dropdown);
      _.els.dropdownItemsContainer.append(_.els.dropdownItems);
      if (_.data.multiselect) {
        _.els.dropdown.append(_.els.controlDeselect).append(_.els.controlSelected);
      }
      _.els.dropdown.append(_.els.dropdownItemsContainer);
      $el.after($dropdown);
      if (_.settings.hideSelect) {
        $el.hide();
      }

      // Set/Remove hover
      _.els.controlSearch.on('focus', function () {
        _.hoverSet();
      });
      _.els.controlSearch.on('blur', function () {
        _.hoverRemove();
      });

      // Assign click handler: Select item.
      _.els.dropdownOptions.on('click', function (event) {
        event.preventDefault();
        if (_.data.multiselect && _.settings.multiselectStayOpen) {
          $dropdown.one('hide.bs.dropdown', function (event) {
            event.preventDefault();
          });
        }
        _.toggle($(this));
      });

      // Assign click handler: Deselect all.
      _.els.controlDeselect.on('click', function (event) {
        event.preventDefault();
        $dropdown.one('hide.bs.dropdown', function (event) {
          event.preventDefault();
        });
        if (!$(this).hasClass('disabled')) {
          _.deselectAll();
        }
      });

      // Assign click handler: Show selected.
      _.els.controlSelected.on('click', function (event) {
        event.preventDefault();
        $dropdown.one('hide.bs.dropdown', function (event) {
          event.preventDefault();
        });
        if (!$(this).hasClass('disabled')) {
          _.sortSelected();
        }
      });

      // Assign click handler: Clear search.
      _.els.buttonClear.on('click', function () {
        _.els.controlSearch.val('');
        if (_.dropdownActive()) {
          $dropdown.one('hide.bs.dropdown', function (event) {
            event.preventDefault();
          });
        }
        _.refresh();
      });

      // Assign click handler: No results.
      _.els.dropdownItemNoResults.on('click', function (event) {
        event.preventDefault();
        $dropdown.one('hide.bs.dropdown', function (event) {
          event.preventDefault();
        });
      });

      // On search focus: Toggle dropdown.
      // - Can reliance on setTimeout be removed?
      // - Should we depend on an aria attribute for plugin logic?
      if (_.settings.search) {
        _.els.controlSearch.on('focusin', function () {
          if (_.els.button.attr('aria-expanded') == 'false') {
            _.els.button.dropdown('toggle');
            setTimeout(function () {
              _.els.controlSearch.focus();
            }, 1);
          }
        });
      }

      _.refreshInitialControls();

      // DOM mutation observer
      if (_.settings.observeDomMutations) {
        var config = { childList: true, subtree: true };
        var callback = function callback(mutationsList) {
          var _iteratorNormalCompletion = true;
          var _didIteratorError = false;
          var _iteratorError = undefined;

          try {
            for (var _iterator = mutationsList[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
              var mutation = _step.value;

              if (mutation.type == 'childList') {
                _.refresh();
              }
            }
          } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
          } finally {
            try {
              if (!_iteratorNormalCompletion && _iterator.return) {
                _iterator.return();
              }
            } finally {
              if (_didIteratorError) {
                throw _iteratorError;
              }
            }
          }
        };
        var observer = new MutationObserver(callback);
        observer.observe($el[0], config);
      }
    },
    buildDropdown: function buildDropdown() {
      var _ = this;

      var $dropdown = $('<div>', {
        id: _.ids.dropdownContainerId,
        class: _.settings.classDropdown
      });

      if (_.settings.search) {

        // Build dropdown.
        $dropdown.append($('<div>', {
          class: 'input-group'
        }).append(_.els.controlSearch).append($('<div>', {
          class: 'input-group-append'
        }).append(_.els.buttonClear)).append($('<div>', {
          class: 'input-group-append'
        }).append(_.els.button)));

        // Move dropdown menu to the right.
        _.els.dropdown.addClass('dropdown-menu-right');
      } else {

        // Build dropdown.
        $dropdown.append(_.els.button);
      }

      return $dropdown;
    },
    buildButton: function buildButton() {
      var _ = this;
      return $('<button>', {
        class: _.settings.classBtnSearch + ' dropdown-toggle',
        type: 'button',
        id: _.ids.dropdownButtonId,
        'data-toggle': 'dropdown',
        'data-target': '#' + _.ids.dropdownContainerId,
        'aria-haspopup': 'true',
        'aria-expanded': 'false'
      });
    },
    buildButtonClear: function buildButtonClear() {
      var _ = this;
      return $('<button>', {
        type: 'button',
        class: _.settings.classBtnClear
      }).html(_.settings.htmlClear);
    },
    buildcontrolSearch: function buildcontrolSearch() {
      var _ = this;
      return $('<input>', {
        type: 'text',
        class: 'form-control',
        placeholder: 'Search',
        'aria-label': 'Search',
        'aria-describedby': _.ids.controlSearchId
      });
    },
    buildDropdownMenu: function buildDropdownMenu() {
      var _ = this;
      var $dropdownMenu = $('<div>', {
        class: _.settings.classMenu,
        'aria-labelledby': _.ids.dropdownButtonId
      });
      if (_.settings.maxHeight) {
        $dropdownMenu.css({
          'height': 'auto',
          'max-height': _.settings.maxHeight,
          'overflow-x': 'hidden'
        });
      }
      return $dropdownMenu;
    },
    buildDropdownItemsContainer: function buildDropdownItemsContainer() {
      return $('<div>');
    },
    buildDropdownItems: function buildDropdownItems() {
      var _ = this;
      var $el = $(_.element);
      var s = 0; // Sort index
      var o = 0; // Option index
      var $items = $();
      var $optgroups = $el.find('optgroup');
      if ($optgroups.length) {
        $optgroups.each(function () {
          $items = $items.add(_.buildDropdownHeader($(this).attr('label')).data('index', s));
          s = _.incrementIndex(s);
          $(this).find('option').each(function () {
            $items = $items.add(_.buildDropdownItem($(this)).data('index', s).data('option', o));
            s = _.incrementIndex(s);
            o++;
          });
        });
      } else {
        $el.find('option').each(function (index, value) {
          $items = $items.add(_.buildDropdownItem($(this)).data('index', s).data('option', o));
          s = _.incrementIndex(s);
          o++;
        });
      }
      if (_.settings.search) {
        $items = $items.add(_.els.dropdownItemNoResults);
      }
      return $items;
    },
    incrementIndex: function incrementIndex(index) {
      var _ = this;
      _.data.indexes.push(index.toString());
      index++;
      return index;
    },
    buildDropdownHeader: function buildDropdownHeader(text) {
      return $('<h6>', {
        class: 'dropdown-header',
        text: text
      });
    },
    buildDropdownItem: function buildDropdownItem($option) {
      var _ = this;
      var $dropdownItem = $('<a>', {
        href: '#',
        class: _.settings.classItem,
        text: $option.text()
      });
      if ($option.is(':selected')) {
        $dropdownItem.addClass('active');
      }
      return $dropdownItem;
    },
    buildDropdownItemNoResults: function buildDropdownItemNoResults() {
      var _ = this;
      return $('<span>', {
        class: _.settings.classItem + ' ' + 'text-muted no-results',
        text: _.settings.textNoResults
      }).hide();
    },
    buildDeselectAll: function buildDeselectAll() {
      var _ = this;
      var $deselectItem = $('<a>', {
        href: '#',
        id: _.ids.dropdownItemDeselect,
        class: _.settings.classItem,
        text: 'Deselect all'
      });
      return $deselectItem;
    },
    buildShowSelected: function buildShowSelected() {
      var _ = this;
      var $showSelectedItem = $('<a>', {
        href: '#',
        id: _.ids.dropdownItemShowSelected,
        class: _.settings.classItem,
        text: 'Show selected'
      });
      return $showSelectedItem;
    },
    dropdownActive: function dropdownActive() {
      var _ = this;
      if (_.els.dropdown.hasClass('show')) {
        return true;
      }
      return false;
    },

    /**
     * Check if a dropdown item refers to a select option.
     * @param  {object}  $item jQuery object.
     * @return {Boolean}
     */
    isOption: function isOption($item) {
      var attr = $item.data('option');
      if ((typeof attr === "undefined" ? "undefined" : _typeof(attr)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && attr !== false) {
        return true;
      }
      return false;
    },

    /**
     * Set hover class position.
     *
     * Move the hover class to a designated dropdown option. If the index points
     * to a non-option, the next option will be modified.
     * @param {integer} index Dropdown menu item index.
     */
    hoverSet: function hoverSet(index) {
      var _ = this;
      _.els.dropdownOptions.removeClass('hover');
      if ((typeof index === "undefined" ? "undefined" : _typeof(index)) === (typeof undefined === "undefined" ? "undefined" : _typeof(undefined))) {
        var $item = _.els.dropdownOptions.first();
      } else {
        var $item = _.dropdownItemByIndex(index);
      }
      _.data.hoverItem = $item;
      $item.addClass('hover');
    },
    hoverUp: function hoverUp() {
      var _ = this;
      var current = _.data.hoverItem;
      if ((typeof current === "undefined" ? "undefined" : _typeof(current)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && current.length) {
        var prev = current.prevAll('a:visible').first();
      }
      if ((typeof prev === "undefined" ? "undefined" : _typeof(prev)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && prev.length) {
        current.removeClass('hover');
        prev.addClass('hover');
        _.data.hoverItem = prev;
      }
    },
    hoverDown: function hoverDown() {
      var _ = this;
      var current = _.data.hoverItem;
      if ((typeof current === "undefined" ? "undefined" : _typeof(current)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && current.length) {
        var next = current.nextAll('a:visible').first();
      }
      if ((typeof next === "undefined" ? "undefined" : _typeof(next)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && next.length) {
        current.removeClass('hover');
        next.addClass('hover');
        _.data.hoverItem = next;
      }
    },

    /**
     * Remove hover class from all dropdown options.
     * @return void
     */
    hoverRemove: function hoverRemove() {
      var _ = this;
      _.els.dropdownItems.removeClass('hover').show();
    },
    toggle: function toggle($dropdownItem) {
      var _ = this;
      var $el = $(_.element);
      var itemIndex = $dropdownItem.data('option');
      var $option = $el.find('option').eq(itemIndex);
      if ($option.is(':selected')) {
        $option.prop('selected', false);
        $dropdownItem.removeClass('active');
      } else {
        if (!_.data.multiselect) {
          _.els.dropdownOptions.removeClass('active');
        }
        $option.prop('selected', true);
        $dropdownItem.addClass('active');
      }
      _.setButtonText();
      _.refreshInitialControls();
    },
    deselectAll: function deselectAll() {
      var _ = this;
      var $el = $(_.element);
      _.els.dropdownOptions.each(function () {
        _.deselect($(this));
      });
      if (_.data.status == 'sort-selected') {
        _.refresh();
      }
    },
    deselect: function deselect($dropdownItem) {
      var _ = this;
      var $el = $(_.element);
      var itemIndex = $dropdownItem.data('option');
      var $option = $el.find('option').eq(itemIndex);
      if ($option.is(':selected')) {
        _.toggle($dropdownItem);
      }
    },
    setButtonText: function setButtonText() {
      var _ = this;
      var $el = $(_.element);
      var $btn = _.els.button;
      var selected = $el.val();
      if (selected.length < 1) {
        $btn.text(_.settings.textNoneSelected);
      } else if (selected.length <= _.settings.maxListLength) {
        var textValues = $el.find('option:selected').map(function (i, element) {
          return $(element).text();
        }).get();
        $btn.text(textValues.join(", "));
      } else {
        $btn.text(_.settings.textMultipleSelected);
      }
    },
    refresh: function refresh() {
      var _ = this;
      _.data.status = 'initial';
      _.hoverRemove();
      _.els.dropdownItemNoResults.hide();
      _.sortReset();
      _.showInitialControls();
    },
    hide: function hide(results) {
      var _ = this;
      var notResults = $(_.data.indexes).not(results).get();
      $.each(notResults, function (index, value) {
        _.dropdownItemByIndex(value).hide();
      });
      _.els.button.dropdown('update');
    },
    dropdownItemByIndex: function dropdownItemByIndex(index) {
      var _ = this;
      return _.els.dropdownItems.filter(function () {
        return $(this).data('index') == index;
      });
    },
    hideInitialControls: function hideInitialControls() {
      var _ = this;
      _.els.controlDeselect.hide();
      _.els.controlSelected.hide();
    },
    showInitialControls: function showInitialControls(prepend) {
      prepend = (typeof prepend === "undefined" ? "undefined" : _typeof(prepend)) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) ? prepend : false;
      var _ = this;
      if (prepend) {
        _.els.controlSelected.prependTo(_.els.dropdown);
        _.els.controlDeselect.prependTo(_.els.dropdown);
      }
      _.els.controlSelected.show();
      _.els.controlDeselect.show();
    },
    refreshInitialControls: function refreshInitialControls() {
      var _ = this;
      var $el = $(_.element);
      if (!$el.val() || $el.val().length == 0) {
        _.els.controlDeselect.addClass('disabled');
        _.els.controlSelected.addClass('disabled');
      } else {
        _.els.controlDeselect.removeClass('disabled');
        _.els.controlSelected.removeClass('disabled');
      }
    },

    /**
     * Sort: Reset sort order.
     * @return void
     */
    sortReset: function sortReset() {
      var _ = this;
      for (i = _.els.dropdownItems.length; i >= 0; i--) {
        _.dropdownItemByIndex(i).prependTo(_.els.dropdownItemsContainer);
      }
    },

    /**
     * Sort: Order by array values.
     *
     * Reorder according to an array of index values. The order of the index
     * array is preserved, to make change detection easier elsewhere.
     * @param  {array} indexes Array of index values (strings).
     * @return void
     */
    reorder: function reorder(indexes) {
      var _ = this;
      _.els.dropdownItemNoResults.hide();
      if ((typeof indexes === "undefined" ? "undefined" : _typeof(indexes)) === (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) || indexes.length == 0) {
        _.els.dropdownItemNoResults.show();
        return;
      }
      var indexesReversed = indexes.slice(0); // Clone
      indexesReversed = indexesReversed.reverse();
      $.each(indexesReversed, function (index, value) {
        _.dropdownItemByIndex(value).prependTo(_.els.dropdownItemsContainer);
      });
      _.hideInitialControls();
    },

    /**
     * Sort: Move selected items to the top.
     * @return void
     */
    sortSelected: function sortSelected() {
      var _ = this;
      var $el = $(_.element);
      _.els.dropdownOptions.removeClass('hover');
      $(_.els.dropdown.find('.active').get().reverse()).each(function () {
        $(this).prependTo(_.els.dropdownItemsContainer);
      });
      _.showInitialControls(true);
      _.data.status = 'sort-selected';
      _.resetScroll();
    },

    /**
     * Helper: Reset scroll.
     *
     * Scroll the dropdown menu to the top.
     * @return {[type]} [description]
     */
    resetScroll: function resetScroll() {
      var _ = this;
      _.els.dropdown.animate({
        scrollTop: 0
      }, 50);
    },

    /**
     * Helper: Class to selector.
     *
     * Convert a space separated class list to a selector.
     * @param  {string} classList Space separated list of classes.
     * @return {string}           Selector.
     */
    classListToSelector: function classListToSelector(classList) {
      var selector = classList;
      if (classList.length) {
        var classes = classList.split(/\s+/);
        selector = '.' + classes.join('.');
      }
      return selector;
    },

    /**
     * Helper: Compare two arrays.
     *
     * @see https://stackoverflow.com/questions/3115982/how-to-check-if-two-arrays-are-equal-with-javascript
     */
    arraysEqual: function arraysEqual(a, b) {
      if (a === b) return true;
      if (a == null || b == null) return false;
      if (a.length != b.length) return false;
      for (var i = 0; i < a.length; ++i) {
        if (a[i] !== b[i]) return false;
      }
      return true;
    }
  });

  $.fn[pluginName] = function (options) {
    return this.each(function () {
      if (!$.data(this, "plugin_" + pluginName)) {
        index++;
        $.data(this, "plugin_" + pluginName, new Plugin(this, options, index));
      }
    });
  };
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(3)(module)))

/***/ }),
/* 3 */
/***/ (function(module, exports) {

module.exports = function(module) {
	if(!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if(!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ }),
/* 4 */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ })
/******/ ]);