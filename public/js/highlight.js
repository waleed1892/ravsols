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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/highlight/highlight.js":
/*!*********************************************!*\
  !*** ./resources/js/highlight/highlight.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
  Highlight.js v11.0.1 (git: 1cf31f015d)
  (c) 2006-2021 Ivan Sagalaev and other contributors
  License: BSD-3-Clause
 */
var hljs = function () {
  'use strict';

  var deepFreezeEs6 = {
    exports: {}
  };

  function deepFreeze(obj) {
    if (obj instanceof Map) {
      obj.clear = obj["delete"] = obj.set = function () {
        throw new Error('map is read-only');
      };
    } else if (obj instanceof Set) {
      obj.add = obj.clear = obj["delete"] = function () {
        throw new Error('set is read-only');
      };
    } // Freeze self


    Object.freeze(obj);
    Object.getOwnPropertyNames(obj).forEach(function (name) {
      var prop = obj[name]; // Freeze prop if it is an object

      if (_typeof(prop) == 'object' && !Object.isFrozen(prop)) {
        deepFreeze(prop);
      }
    });
    return obj;
  }

  deepFreezeEs6.exports = deepFreeze;
  deepFreezeEs6.exports["default"] = deepFreeze;
  var deepFreeze$1 = deepFreezeEs6.exports;
  /** @typedef {import('highlight.js').CompiledMode} CompiledMode */

  /** @implements CallbackResponse */

  var Response = /*#__PURE__*/function () {
    /**
     * @param {CompiledMode} mode
     */
    function Response(mode) {
      _classCallCheck(this, Response);

      // eslint-disable-next-line no-undefined
      if (mode.data === undefined) mode.data = {};
      this.data = mode.data;
      this.isMatchIgnored = false;
    }

    _createClass(Response, [{
      key: "ignoreMatch",
      value: function ignoreMatch() {
        this.isMatchIgnored = true;
      }
    }]);

    return Response;
  }();
  /**
   * @param {string} value
   * @returns {string}
   */


  function escapeHTML(value) {
    return value.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#x27;');
  }
  /**
   * performs a shallow merge of multiple objects into one
   *
   * @template T
   * @param {T} original
   * @param {Record<string,any>[]} objects
   * @returns {T} a single new object
   */


  function inherit$1(original) {
    /** @type Record<string,any> */
    var result = Object.create(null);

    for (var key in original) {
      result[key] = original[key];
    }

    for (var _len = arguments.length, objects = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      objects[_key - 1] = arguments[_key];
    }

    objects.forEach(function (obj) {
      for (var _key2 in obj) {
        result[_key2] = obj[_key2];
      }
    });
    return (
      /** @type {T} */
      result
    );
  }
  /**
   * @typedef {object} Renderer
   * @property {(text: string) => void} addText
   * @property {(node: Node) => void} openNode
   * @property {(node: Node) => void} closeNode
   * @property {() => string} value
   */

  /** @typedef {{kind?: string, sublanguage?: boolean}} Node */

  /** @typedef {{walk: (r: Renderer) => void}} Tree */

  /** */


  var SPAN_CLOSE = '</span>';
  /**
   * Determines if a node needs to be wrapped in <span>
   *
   * @param {Node} node */

  var emitsWrappingTags = function emitsWrappingTags(node) {
    return !!node.kind;
  };
  /**
   *
   * @param {string} name
   * @param {{prefix:string}} options
   */


  var expandScopeName = function expandScopeName(name, _ref) {
    var prefix = _ref.prefix;

    if (name.includes(".")) {
      var pieces = name.split(".");
      return ["".concat(prefix).concat(pieces.shift())].concat(_toConsumableArray(pieces.map(function (x, i) {
        return "".concat(x).concat("_".repeat(i + 1));
      }))).join(" ");
    }

    return "".concat(prefix).concat(name);
  };
  /** @type {Renderer} */


  var HTMLRenderer = /*#__PURE__*/function () {
    /**
     * Creates a new HTMLRenderer
     *
     * @param {Tree} parseTree - the parse tree (must support `walk` API)
     * @param {{classPrefix: string}} options
     */
    function HTMLRenderer(parseTree, options) {
      _classCallCheck(this, HTMLRenderer);

      this.buffer = "";
      this.classPrefix = options.classPrefix;
      parseTree.walk(this);
    }
    /**
     * Adds texts to the output stream
     *
     * @param {string} text */


    _createClass(HTMLRenderer, [{
      key: "addText",
      value: function addText(text) {
        this.buffer += escapeHTML(text);
      }
      /**
       * Adds a node open to the output stream (if needed)
       *
       * @param {Node} node */

    }, {
      key: "openNode",
      value: function openNode(node) {
        if (!emitsWrappingTags(node)) return;
        var scope = node.kind;

        if (node.sublanguage) {
          scope = "language-".concat(scope);
        } else {
          scope = expandScopeName(scope, {
            prefix: this.classPrefix
          });
        }

        this.span(scope);
      }
      /**
       * Adds a node close to the output stream (if needed)
       *
       * @param {Node} node */

    }, {
      key: "closeNode",
      value: function closeNode(node) {
        if (!emitsWrappingTags(node)) return;
        this.buffer += SPAN_CLOSE;
      }
      /**
       * returns the accumulated buffer
      */

    }, {
      key: "value",
      value: function value() {
        return this.buffer;
      } // helpers

      /**
       * Builds a span element
       *
       * @param {string} className */

    }, {
      key: "span",
      value: function span(className) {
        this.buffer += "<span class=\"".concat(className, "\">");
      }
    }]);

    return HTMLRenderer;
  }();
  /** @typedef {{kind?: string, sublanguage?: boolean, children: Node[]} | string} Node */

  /** @typedef {{kind?: string, sublanguage?: boolean, children: Node[]} } DataNode */

  /** @typedef {import('highlight.js').Emitter} Emitter */

  /**  */


  var TokenTree = /*#__PURE__*/function () {
    function TokenTree() {
      _classCallCheck(this, TokenTree);

      /** @type DataNode */
      this.rootNode = {
        children: []
      };
      this.stack = [this.rootNode];
    }

    _createClass(TokenTree, [{
      key: "top",
      get: function get() {
        return this.stack[this.stack.length - 1];
      }
    }, {
      key: "root",
      get: function get() {
        return this.rootNode;
      }
      /** @param {Node} node */

    }, {
      key: "add",
      value: function add(node) {
        this.top.children.push(node);
      }
      /** @param {string} kind */

    }, {
      key: "openNode",
      value: function openNode(kind) {
        /** @type Node */
        var node = {
          kind: kind,
          children: []
        };
        this.add(node);
        this.stack.push(node);
      }
    }, {
      key: "closeNode",
      value: function closeNode() {
        if (this.stack.length > 1) {
          return this.stack.pop();
        } // eslint-disable-next-line no-undefined


        return undefined;
      }
    }, {
      key: "closeAllNodes",
      value: function closeAllNodes() {
        while (this.closeNode()) {
          ;
        }
      }
    }, {
      key: "toJSON",
      value: function toJSON() {
        return JSON.stringify(this.rootNode, null, 4);
      }
      /**
       * @typedef { import("./html_renderer").Renderer } Renderer
       * @param {Renderer} builder
       */

    }, {
      key: "walk",
      value: function walk(builder) {
        // this does not
        return this.constructor._walk(builder, this.rootNode); // this works
        // return TokenTree._walk(builder, this.rootNode);
      }
      /**
       * @param {Renderer} builder
       * @param {Node} node
       */

    }], [{
      key: "_walk",
      value: function _walk(builder, node) {
        var _this = this;

        if (typeof node === "string") {
          builder.addText(node);
        } else if (node.children) {
          builder.openNode(node);
          node.children.forEach(function (child) {
            return _this._walk(builder, child);
          });
          builder.closeNode(node);
        }

        return builder;
      }
      /**
       * @param {Node} node
       */

    }, {
      key: "_collapse",
      value: function _collapse(node) {
        if (typeof node === "string") return;
        if (!node.children) return;

        if (node.children.every(function (el) {
          return typeof el === "string";
        })) {
          // node.text = node.children.join("");
          // delete node.children;
          node.children = [node.children.join("")];
        } else {
          node.children.forEach(function (child) {
            TokenTree._collapse(child);
          });
        }
      }
    }]);

    return TokenTree;
  }();
  /**
    Currently this is all private API, but this is the minimal API necessary
    that an Emitter must implement to fully support the parser.
     Minimal interface:
     - addKeyword(text, kind)
    - addText(text)
    - addSublanguage(emitter, subLanguageName)
    - finalize()
    - openNode(kind)
    - closeNode()
    - closeAllNodes()
    - toHTML()
   */

  /**
   * @implements {Emitter}
   */


  var TokenTreeEmitter = /*#__PURE__*/function (_TokenTree) {
    _inherits(TokenTreeEmitter, _TokenTree);

    var _super = _createSuper(TokenTreeEmitter);

    /**
     * @param {*} options
     */
    function TokenTreeEmitter(options) {
      var _this2;

      _classCallCheck(this, TokenTreeEmitter);

      _this2 = _super.call(this);
      _this2.options = options;
      return _this2;
    }
    /**
     * @param {string} text
     * @param {string} kind
     */


    _createClass(TokenTreeEmitter, [{
      key: "addKeyword",
      value: function addKeyword(text, kind) {
        if (text === "") {
          return;
        }

        this.openNode(kind);
        this.addText(text);
        this.closeNode();
      }
      /**
       * @param {string} text
       */

    }, {
      key: "addText",
      value: function addText(text) {
        if (text === "") {
          return;
        }

        this.add(text);
      }
      /**
       * @param {Emitter & {root: DataNode}} emitter
       * @param {string} name
       */

    }, {
      key: "addSublanguage",
      value: function addSublanguage(emitter, name) {
        /** @type DataNode */
        var node = emitter.root;
        node.kind = name;
        node.sublanguage = true;
        this.add(node);
      }
    }, {
      key: "toHTML",
      value: function toHTML() {
        var renderer = new HTMLRenderer(this, this.options);
        return renderer.value();
      }
    }, {
      key: "finalize",
      value: function finalize() {
        return true;
      }
    }]);

    return TokenTreeEmitter;
  }(TokenTree);
  /**
   * @param {string} value
   * @returns {RegExp}
   * */

  /**
   * @param {RegExp | string } re
   * @returns {string}
   */


  function source(re) {
    if (!re) return null;
    if (typeof re === "string") return re;
    return re.source;
  }
  /**
   * @param {RegExp | string } re
   * @returns {string}
   */


  function lookahead(re) {
    return concat('(?=', re, ')');
  }
  /**
   * @param {...(RegExp | string) } args
   * @returns {string}
   */


  function concat() {
    for (var _len2 = arguments.length, args = new Array(_len2), _key3 = 0; _key3 < _len2; _key3++) {
      args[_key3] = arguments[_key3];
    }

    var joined = args.map(function (x) {
      return source(x);
    }).join("");
    return joined;
  }

  function stripOptionsFromArgs(args) {
    var opts = args[args.length - 1];

    if (_typeof(opts) === 'object' && opts.constructor === Object) {
      args.splice(args.length - 1, 1);
      return opts;
    } else {
      return {};
    }
  }
  /**
   * Any of the passed expresssions may match
   *
   * Creates a huge this | this | that | that match
   * @param {(RegExp | string)[] } args
   * @returns {string}
   */


  function either() {
    for (var _len3 = arguments.length, args = new Array(_len3), _key4 = 0; _key4 < _len3; _key4++) {
      args[_key4] = arguments[_key4];
    }

    var opts = stripOptionsFromArgs(args);
    var joined = '(' + (opts.capture ? "" : "?:") + args.map(function (x) {
      return source(x);
    }).join("|") + ")";
    return joined;
  }
  /**
   * @param {RegExp} re
   * @returns {number}
   */


  function countMatchGroups(re) {
    return new RegExp(re.toString() + '|').exec('').length - 1;
  }
  /**
   * Does lexeme start with a regular expression match at the beginning
   * @param {RegExp} re
   * @param {string} lexeme
   */


  function startsWith(re, lexeme) {
    var match = re && re.exec(lexeme);
    return match && match.index === 0;
  } // BACKREF_RE matches an open parenthesis or backreference. To avoid
  // an incorrect parse, it additionally matches the following:
  // - [...] elements, where the meaning of parentheses and escapes change
  // - other escape sequences, so we do not misparse escape sequences as
  //   interesting elements
  // - non-matching or lookahead parentheses, which do not capture. These
  //   follow the '(' with a '?'.


  var BACKREF_RE = /\[(?:[^\\\]]|\\.)*\]|\(\??|\\([1-9][0-9]*)|\\./; // **INTERNAL** Not intended for outside usage
  // join logically computes regexps.join(separator), but fixes the
  // backreferences so they continue to match.
  // it also places each individual regular expression into it's own
  // match group, keeping track of the sequencing of those match groups
  // is currently an exercise for the caller. :-)

  /**
   * @param {(string | RegExp)[]} regexps
   * @param {{joinWith: string}} opts
   * @returns {string}
   */

  function _rewriteBackreferences(regexps, _ref2) {
    var joinWith = _ref2.joinWith;
    var numCaptures = 0;
    return regexps.map(function (regex) {
      numCaptures += 1;
      var offset = numCaptures;
      var re = source(regex);
      var out = '';

      while (re.length > 0) {
        var match = BACKREF_RE.exec(re);

        if (!match) {
          out += re;
          break;
        }

        out += re.substring(0, match.index);
        re = re.substring(match.index + match[0].length);

        if (match[0][0] === '\\' && match[1]) {
          // Adjust the backreference.
          out += '\\' + String(Number(match[1]) + offset);
        } else {
          out += match[0];

          if (match[0] === '(') {
            numCaptures++;
          }
        }
      }

      return out;
    }).map(function (re) {
      return "(".concat(re, ")");
    }).join(joinWith);
  }
  /** @typedef {import('highlight.js').Mode} Mode */

  /** @typedef {import('highlight.js').ModeCallback} ModeCallback */
  // Common regexps


  var MATCH_NOTHING_RE = /\b\B/;
  var IDENT_RE = '[a-zA-Z]\\w*';
  var UNDERSCORE_IDENT_RE = '[a-zA-Z_]\\w*';
  var NUMBER_RE = '\\b\\d+(\\.\\d+)?';
  var C_NUMBER_RE = '(-?)(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)'; // 0x..., 0..., decimal, float

  var BINARY_NUMBER_RE = '\\b(0b[01]+)'; // 0b...

  var RE_STARTERS_RE = '!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|-|-=|/=|/|:|;|<<|<<=|<=|<|===|==|=|>>>=|>>=|>=|>>>|>>|>|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~';
  /**
  * @param { Partial<Mode> & {binary?: string | RegExp} } opts
  */

  var SHEBANG = function SHEBANG() {
    var opts = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
    var beginShebang = /^#![ ]*\//;

    if (opts.binary) {
      opts.begin = concat(beginShebang, /.*\b/, opts.binary, /\b.*/);
    }

    return inherit$1({
      scope: 'meta',
      begin: beginShebang,
      end: /$/,
      relevance: 0,

      /** @type {ModeCallback} */
      "on:begin": function onBegin(m, resp) {
        if (m.index !== 0) resp.ignoreMatch();
      }
    }, opts);
  }; // Common modes


  var BACKSLASH_ESCAPE = {
    begin: '\\\\[\\s\\S]',
    relevance: 0
  };
  var APOS_STRING_MODE = {
    scope: 'string',
    begin: '\'',
    end: '\'',
    illegal: '\\n',
    contains: [BACKSLASH_ESCAPE]
  };
  var QUOTE_STRING_MODE = {
    scope: 'string',
    begin: '"',
    end: '"',
    illegal: '\\n',
    contains: [BACKSLASH_ESCAPE]
  };
  var PHRASAL_WORDS_MODE = {
    begin: /\b(a|an|the|are|I'm|isn't|don't|doesn't|won't|but|just|should|pretty|simply|enough|gonna|going|wtf|so|such|will|you|your|they|like|more)\b/
  };
  /**
   * Creates a comment mode
   *
   * @param {string | RegExp} begin
   * @param {string | RegExp} end
   * @param {Mode | {}} [modeOptions]
   * @returns {Partial<Mode>}
   */

  var COMMENT = function COMMENT(begin, end) {
    var modeOptions = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
    var mode = inherit$1({
      scope: 'comment',
      begin: begin,
      end: end,
      contains: []
    }, modeOptions);
    mode.contains.push({
      scope: 'doctag',
      // hack to avoid the space from being included. the space is necessary to
      // match here to prevent the plain text rule below from gobbling up doctags
      begin: '[ ]*(?=(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):)',
      end: /(TODO|FIXME|NOTE|BUG|OPTIMIZE|HACK|XXX):/,
      excludeBegin: true,
      relevance: 0
    });
    var ENGLISH_WORD = either( // list of common 1 and 2 letter words in English
    "I", "a", "is", "so", "us", "to", "at", "if", "in", "it", "on", // note: this is not an exhaustive list of contractions, just popular ones
    /[A-Za-z]+['](d|ve|re|ll|t|s|n)/, // contractions - can't we'd they're let's, etc
    /[A-Za-z]+[-][a-z]+/, // `no-way`, etc.
    /[A-Za-z][a-z]{2,}/ // allow capitalized words at beginning of sentences
    ); // looking like plain text, more likely to be a comment

    mode.contains.push({
      // TODO: how to include ", (, ) without breaking grammars that use these for
      // comment delimiters?
      // begin: /[ ]+([()"]?([A-Za-z'-]{3,}|is|a|I|so|us|[tT][oO]|at|if|in|it|on)[.]?[()":]?([.][ ]|[ ]|\))){3}/
      // ---
      // this tries to find sequences of 3 english words in a row (without any
      // "programming" type syntax) this gives us a strong signal that we've
      // TRULY found a comment - vs perhaps scanning with the wrong language.
      // It's possible to find something that LOOKS like the start of the
      // comment - but then if there is no readable text - good chance it is a
      // false match and not a comment.
      //
      // for a visual example please see:
      // https://github.com/highlightjs/highlight.js/issues/2827
      begin: concat(/[ ]+/, // necessary to prevent us gobbling up doctags like /* @author Bob Mcgill */
      '(', ENGLISH_WORD, /[.]?[:]?([.][ ]|[ ])/, '){3}') // look for 3 words in a row

    });
    return mode;
  };

  var C_LINE_COMMENT_MODE = COMMENT('//', '$');
  var C_BLOCK_COMMENT_MODE = COMMENT('/\\*', '\\*/');
  var HASH_COMMENT_MODE = COMMENT('#', '$');
  var NUMBER_MODE = {
    scope: 'number',
    begin: NUMBER_RE,
    relevance: 0
  };
  var C_NUMBER_MODE = {
    scope: 'number',
    begin: C_NUMBER_RE,
    relevance: 0
  };
  var BINARY_NUMBER_MODE = {
    scope: 'number',
    begin: BINARY_NUMBER_RE,
    relevance: 0
  };
  var REGEXP_MODE = {
    // this outer rule makes sure we actually have a WHOLE regex and not simply
    // an expression such as:
    //
    //     3 / something
    //
    // (which will then blow up when regex's `illegal` sees the newline)
    begin: /(?=\/[^/\n]*\/)/,
    contains: [{
      scope: 'regexp',
      begin: /\//,
      end: /\/[gimuy]*/,
      illegal: /\n/,
      contains: [BACKSLASH_ESCAPE, {
        begin: /\[/,
        end: /\]/,
        relevance: 0,
        contains: [BACKSLASH_ESCAPE]
      }]
    }]
  };
  var TITLE_MODE = {
    scope: 'title',
    begin: IDENT_RE,
    relevance: 0
  };
  var UNDERSCORE_TITLE_MODE = {
    scope: 'title',
    begin: UNDERSCORE_IDENT_RE,
    relevance: 0
  };
  var METHOD_GUARD = {
    // excludes method names from keyword processing
    begin: '\\.\\s*' + UNDERSCORE_IDENT_RE,
    relevance: 0
  };
  /**
   * Adds end same as begin mechanics to a mode
   *
   * Your mode must include at least a single () match group as that first match
   * group is what is used for comparison
   * @param {Partial<Mode>} mode
   */

  var END_SAME_AS_BEGIN = function END_SAME_AS_BEGIN(mode) {
    return Object.assign(mode, {
      /** @type {ModeCallback} */
      'on:begin': function onBegin(m, resp) {
        resp.data._beginMatch = m[1];
      },

      /** @type {ModeCallback} */
      'on:end': function onEnd(m, resp) {
        if (resp.data._beginMatch !== m[1]) resp.ignoreMatch();
      }
    });
  };

  var MODES = /*#__PURE__*/Object.freeze({
    __proto__: null,
    MATCH_NOTHING_RE: MATCH_NOTHING_RE,
    IDENT_RE: IDENT_RE,
    UNDERSCORE_IDENT_RE: UNDERSCORE_IDENT_RE,
    NUMBER_RE: NUMBER_RE,
    C_NUMBER_RE: C_NUMBER_RE,
    BINARY_NUMBER_RE: BINARY_NUMBER_RE,
    RE_STARTERS_RE: RE_STARTERS_RE,
    SHEBANG: SHEBANG,
    BACKSLASH_ESCAPE: BACKSLASH_ESCAPE,
    APOS_STRING_MODE: APOS_STRING_MODE,
    QUOTE_STRING_MODE: QUOTE_STRING_MODE,
    PHRASAL_WORDS_MODE: PHRASAL_WORDS_MODE,
    COMMENT: COMMENT,
    C_LINE_COMMENT_MODE: C_LINE_COMMENT_MODE,
    C_BLOCK_COMMENT_MODE: C_BLOCK_COMMENT_MODE,
    HASH_COMMENT_MODE: HASH_COMMENT_MODE,
    NUMBER_MODE: NUMBER_MODE,
    C_NUMBER_MODE: C_NUMBER_MODE,
    BINARY_NUMBER_MODE: BINARY_NUMBER_MODE,
    REGEXP_MODE: REGEXP_MODE,
    TITLE_MODE: TITLE_MODE,
    UNDERSCORE_TITLE_MODE: UNDERSCORE_TITLE_MODE,
    METHOD_GUARD: METHOD_GUARD,
    END_SAME_AS_BEGIN: END_SAME_AS_BEGIN
  });
  /**
  @typedef {import('highlight.js').CallbackResponse} CallbackResponse
  @typedef {import('highlight.js').CompilerExt} CompilerExt
  */
  // Grammar extensions / plugins
  // See: https://github.com/highlightjs/highlight.js/issues/2833
  // Grammar extensions allow "syntactic sugar" to be added to the grammar modes
  // without requiring any underlying changes to the compiler internals.
  // `compileMatch` being the perfect small example of now allowing a grammar
  // author to write `match` when they desire to match a single expression rather
  // than being forced to use `begin`.  The extension then just moves `match` into
  // `begin` when it runs.  Ie, no features have been added, but we've just made
  // the experience of writing (and reading grammars) a little bit nicer.
  // ------
  // TODO: We need negative look-behind support to do this properly

  /**
   * Skip a match if it has a preceding dot
   *
   * This is used for `beginKeywords` to prevent matching expressions such as
   * `bob.keyword.do()`. The mode compiler automatically wires this up as a
   * special _internal_ 'on:begin' callback for modes with `beginKeywords`
   * @param {RegExpMatchArray} match
   * @param {CallbackResponse} response
   */

  function skipIfHasPrecedingDot(match, response) {
    var before = match.input[match.index - 1];

    if (before === ".") {
      response.ignoreMatch();
    }
  }
  /**
   *
   * @type {CompilerExt}
   */


  function scopeClassName(mode, _parent) {
    // eslint-disable-next-line no-undefined
    if (mode.className !== undefined) {
      mode.scope = mode.className;
      delete mode.className;
    }
  }
  /**
   * `beginKeywords` syntactic sugar
   * @type {CompilerExt}
   */


  function beginKeywords(mode, parent) {
    if (!parent) return;
    if (!mode.beginKeywords) return; // for languages with keywords that include non-word characters checking for
    // a word boundary is not sufficient, so instead we check for a word boundary
    // or whitespace - this does no harm in any case since our keyword engine
    // doesn't allow spaces in keywords anyways and we still check for the boundary
    // first

    mode.begin = '\\b(' + mode.beginKeywords.split(' ').join('|') + ')(?!\\.)(?=\\b|\\s)';
    mode.__beforeBegin = skipIfHasPrecedingDot;
    mode.keywords = mode.keywords || mode.beginKeywords;
    delete mode.beginKeywords; // prevents double relevance, the keywords themselves provide
    // relevance, the mode doesn't need to double it
    // eslint-disable-next-line no-undefined

    if (mode.relevance === undefined) mode.relevance = 0;
  }
  /**
   * Allow `illegal` to contain an array of illegal values
   * @type {CompilerExt}
   */


  function compileIllegal(mode, _parent) {
    if (!Array.isArray(mode.illegal)) return;
    mode.illegal = either.apply(void 0, _toConsumableArray(mode.illegal));
  }
  /**
   * `match` to match a single expression for readability
   * @type {CompilerExt}
   */


  function compileMatch(mode, _parent) {
    if (!mode.match) return;
    if (mode.begin || mode.end) throw new Error("begin & end are not supported with match");
    mode.begin = mode.match;
    delete mode.match;
  }
  /**
   * provides the default 1 relevance to all modes
   * @type {CompilerExt}
   */


  function compileRelevance(mode, _parent) {
    // eslint-disable-next-line no-undefined
    if (mode.relevance === undefined) mode.relevance = 1;
  } // allow beforeMatch to act as a "qualifier" for the match
  // the full match begin must be [beforeMatch][begin]


  var beforeMatchExt = function beforeMatchExt(mode, parent) {
    if (!mode.beforeMatch) return; // starts conflicts with endsParent which we need to make sure the child
    // rule is not matched multiple times

    if (mode.starts) throw new Error("beforeMatch cannot be used with starts");
    var originalMode = Object.assign({}, mode);
    Object.keys(mode).forEach(function (key) {
      delete mode[key];
    });
    mode.keywords = originalMode.keywords;
    mode.begin = concat(originalMode.beforeMatch, lookahead(originalMode.begin));
    mode.starts = {
      relevance: 0,
      contains: [Object.assign(originalMode, {
        endsParent: true
      })]
    };
    mode.relevance = 0;
    delete originalMode.beforeMatch;
  }; // keywords that should have no default relevance value


  var COMMON_KEYWORDS = ['of', 'and', 'for', 'in', 'not', 'or', 'if', 'then', 'parent', // common variable name
  'list', // common variable name
  'value' // common variable name
  ];
  var DEFAULT_KEYWORD_SCOPE = "keyword";
  /**
   * Given raw keywords from a language definition, compile them.
   *
   * @param {string | Record<string,string|string[]> | Array<string>} rawKeywords
   * @param {boolean} caseInsensitive
   */

  function compileKeywords(rawKeywords, caseInsensitive) {
    var scopeName = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : DEFAULT_KEYWORD_SCOPE;

    /** @type KeywordDict */
    var compiledKeywords = Object.create(null); // input can be a string of keywords, an array of keywords, or a object with
    // named keys representing scopeName (which can then point to a string or array)

    if (typeof rawKeywords === 'string') {
      compileList(scopeName, rawKeywords.split(" "));
    } else if (Array.isArray(rawKeywords)) {
      compileList(scopeName, rawKeywords);
    } else {
      Object.keys(rawKeywords).forEach(function (scopeName) {
        // collapse all our objects back into the parent object
        Object.assign(compiledKeywords, compileKeywords(rawKeywords[scopeName], caseInsensitive, scopeName));
      });
    }

    return compiledKeywords; // ---

    /**
     * Compiles an individual list of keywords
     *
     * Ex: "for if when while|5"
     *
     * @param {string} scopeName
     * @param {Array<string>} keywordList
     */

    function compileList(scopeName, keywordList) {
      if (caseInsensitive) {
        keywordList = keywordList.map(function (x) {
          return x.toLowerCase();
        });
      }

      keywordList.forEach(function (keyword) {
        var pair = keyword.split('|');
        compiledKeywords[pair[0]] = [scopeName, scoreForKeyword(pair[0], pair[1])];
      });
    }
  }
  /**
   * Returns the proper score for a given keyword
   *
   * Also takes into account comment keywords, which will be scored 0 UNLESS
   * another score has been manually assigned.
   * @param {string} keyword
   * @param {string} [providedScore]
   */


  function scoreForKeyword(keyword, providedScore) {
    // manual scores always win over common keywords
    // so you can force a score of 1 if you really insist
    if (providedScore) {
      return Number(providedScore);
    }

    return commonKeyword(keyword) ? 0 : 1;
  }
  /**
   * Determines if a given keyword is common or not
   *
   * @param {string} keyword */


  function commonKeyword(keyword) {
    return COMMON_KEYWORDS.includes(keyword.toLowerCase());
  }
  /*
   For the reasoning behind this please see:
  https://github.com/highlightjs/highlight.js/issues/2880#issuecomment-747275419
   */

  /**
   * @type {Record<string, boolean>}
   */


  var seenDeprecations = {};
  /**
   * @param {string} message
   */

  var error = function error(message) {
    console.error(message);
  };
  /**
   * @param {string} message
   * @param {any} args
   */


  var warn = function warn(message) {
    var _console;

    for (var _len4 = arguments.length, args = new Array(_len4 > 1 ? _len4 - 1 : 0), _key5 = 1; _key5 < _len4; _key5++) {
      args[_key5 - 1] = arguments[_key5];
    }

    (_console = console).log.apply(_console, ["WARN: ".concat(message)].concat(args));
  };
  /**
   * @param {string} version
   * @param {string} message
   */


  var deprecated = function deprecated(version, message) {
    if (seenDeprecations["".concat(version, "/").concat(message)]) return;
    console.log("Deprecated as of ".concat(version, ". ").concat(message));
    seenDeprecations["".concat(version, "/").concat(message)] = true;
  };
  /* eslint-disable no-throw-literal */

  /**
  @typedef {import('highlight.js').CompiledMode} CompiledMode
  */


  var MultiClassError = new Error();
  /**
   * Renumbers labeled scope names to account for additional inner match
   * groups that otherwise would break everything.
   *
   * Lets say we 3 match scopes:
   *
   *   { 1 => ..., 2 => ..., 3 => ... }
   *
   * So what we need is a clean match like this:
   *
   *   (a)(b)(c) => [ "a", "b", "c" ]
   *
   * But this falls apart with inner match groups:
   *
   * (a)(((b)))(c) => ["a", "b", "b", "b", "c" ]
   *
   * Our scopes are now "out of alignment" and we're repeating `b` 3 times.
   * What needs to happen is the numbers are remapped:
   *
   *   { 1 => ..., 2 => ..., 5 => ... }
   *
   * We also need to know that the ONLY groups that should be output
   * are 1, 2, and 5.  This function handles this behavior.
   *
   * @param {CompiledMode} mode
   * @param {Array<RegExp>} regexes
   * @param {{key: "beginScope"|"endScope"}} opts
   */

  function remapScopeNames(mode, regexes, _ref3) {
    var key = _ref3.key;
    var offset = 0;
    var scopeNames = mode[key];
    /** @type Record<number,boolean> */

    var emit = {};
    /** @type Record<number,string> */

    var positions = {};

    for (var i = 1; i <= regexes.length; i++) {
      positions[i + offset] = scopeNames[i];
      emit[i + offset] = true;
      offset += countMatchGroups(regexes[i - 1]);
    } // we use _emit to keep track of which match groups are "top-level" to avoid double
    // output from inside match groups


    mode[key] = positions;
    mode[key]._emit = emit;
    mode[key]._multi = true;
  }
  /**
   * @param {CompiledMode} mode
   */


  function beginMultiClass(mode) {
    if (!Array.isArray(mode.begin)) return;

    if (mode.skip || mode.excludeBegin || mode.returnBegin) {
      error("skip, excludeBegin, returnBegin not compatible with beginScope: {}");
      throw MultiClassError;
    }

    if (_typeof(mode.beginScope) !== "object" || mode.beginScope === null) {
      error("beginScope must be object");
      throw MultiClassError;
    }

    remapScopeNames(mode, mode.begin, {
      key: "beginScope"
    });
    mode.begin = _rewriteBackreferences(mode.begin, {
      joinWith: ""
    });
  }
  /**
   * @param {CompiledMode} mode
   */


  function endMultiClass(mode) {
    if (!Array.isArray(mode.end)) return;

    if (mode.skip || mode.excludeEnd || mode.returnEnd) {
      error("skip, excludeEnd, returnEnd not compatible with endScope: {}");
      throw MultiClassError;
    }

    if (_typeof(mode.endScope) !== "object" || mode.endScope === null) {
      error("endScope must be object");
      throw MultiClassError;
    }

    remapScopeNames(mode, mode.end, {
      key: "endScope"
    });
    mode.end = _rewriteBackreferences(mode.end, {
      joinWith: ""
    });
  }
  /**
   * this exists only to allow `scope: {}` to be used beside `match:`
   * Otherwise `beginScope` would necessary and that would look weird
     {
      match: [ /def/, /\w+/ ]
      scope: { 1: "keyword" , 2: "title" }
    }
    * @param {CompiledMode} mode
   */


  function scopeSugar(mode) {
    if (mode.scope && _typeof(mode.scope) === "object" && mode.scope !== null) {
      mode.beginScope = mode.scope;
      delete mode.scope;
    }
  }
  /**
   * @param {CompiledMode} mode
   */


  function MultiClass(mode) {
    scopeSugar(mode);

    if (typeof mode.beginScope === "string") {
      mode.beginScope = {
        _wrap: mode.beginScope
      };
    }

    if (typeof mode.endScope === "string") {
      mode.endScope = {
        _wrap: mode.endScope
      };
    }

    beginMultiClass(mode);
    endMultiClass(mode);
  }
  /**
  @typedef {import('highlight.js').Mode} Mode
  @typedef {import('highlight.js').CompiledMode} CompiledMode
  @typedef {import('highlight.js').Language} Language
  @typedef {import('highlight.js').HLJSPlugin} HLJSPlugin
  @typedef {import('highlight.js').CompiledLanguage} CompiledLanguage
  */
  // compilation

  /**
   * Compiles a language definition result
   *
   * Given the raw result of a language definition (Language), compiles this so
   * that it is ready for highlighting code.
   * @param {Language} language
   * @returns {CompiledLanguage}
   */


  function compileLanguage(language) {
    /**
     * Builds a regex with the case sensitivity of the current language
     *
     * @param {RegExp | string} value
     * @param {boolean} [global]
     */
    function langRe(value, global) {
      return new RegExp(source(value), 'm' + (language.case_insensitive ? 'i' : '') + (global ? 'g' : ''));
    }
    /**
      Stores multiple regular expressions and allows you to quickly search for
      them all in a string simultaneously - returning the first match.  It does
      this by creating a huge (a|b|c) regex - each individual item wrapped with ()
      and joined by `|` - using match groups to track position.  When a match is
      found checking which position in the array has content allows us to figure
      out which of the original regexes / match groups triggered the match.
       The match object itself (the result of `Regex.exec`) is returned but also
      enhanced by merging in any meta-data that was registered with the regex.
      This is how we keep track of which mode matched, and what type of rule
      (`illegal`, `begin`, end, etc).
    */


    var MultiRegex = /*#__PURE__*/function () {
      function MultiRegex() {
        _classCallCheck(this, MultiRegex);

        this.matchIndexes = {}; // @ts-ignore

        this.regexes = [];
        this.matchAt = 1;
        this.position = 0;
      } // @ts-ignore


      _createClass(MultiRegex, [{
        key: "addRule",
        value: function addRule(re, opts) {
          opts.position = this.position++; // @ts-ignore

          this.matchIndexes[this.matchAt] = opts;
          this.regexes.push([opts, re]);
          this.matchAt += countMatchGroups(re) + 1;
        }
      }, {
        key: "compile",
        value: function compile() {
          if (this.regexes.length === 0) {
            // avoids the need to check length every time exec is called
            // @ts-ignore
            this.exec = function () {
              return null;
            };
          }

          var terminators = this.regexes.map(function (el) {
            return el[1];
          });
          this.matcherRe = langRe(_rewriteBackreferences(terminators, {
            joinWith: '|'
          }), true);
          this.lastIndex = 0;
        }
        /** @param {string} s */

      }, {
        key: "exec",
        value: function exec(s) {
          this.matcherRe.lastIndex = this.lastIndex;
          var match = this.matcherRe.exec(s);

          if (!match) {
            return null;
          } // eslint-disable-next-line no-undefined


          var i = match.findIndex(function (el, i) {
            return i > 0 && el !== undefined;
          }); // @ts-ignore

          var matchData = this.matchIndexes[i]; // trim off any earlier non-relevant match groups (ie, the other regex
          // match groups that make up the multi-matcher)

          match.splice(0, i);
          return Object.assign(match, matchData);
        }
      }]);

      return MultiRegex;
    }();
    /*
      Created to solve the key deficiently with MultiRegex - there is no way to
      test for multiple matches at a single location.  Why would we need to do
      that?  In the future a more dynamic engine will allow certain matches to be
      ignored.  An example: if we matched say the 3rd regex in a large group but
      decided to ignore it - we'd need to started testing again at the 4th
      regex... but MultiRegex itself gives us no real way to do that.
       So what this class creates MultiRegexs on the fly for whatever search
      position they are needed.
       NOTE: These additional MultiRegex objects are created dynamically.  For most
      grammars most of the time we will never actually need anything more than the
      first MultiRegex - so this shouldn't have too much overhead.
       Say this is our search group, and we match regex3, but wish to ignore it.
         regex1 | regex2 | regex3 | regex4 | regex5    ' ie, startAt = 0
       What we need is a new MultiRegex that only includes the remaining
      possibilities:
         regex4 | regex5                               ' ie, startAt = 3
       This class wraps all that complexity up in a simple API... `startAt` decides
      where in the array of expressions to start doing the matching. It
      auto-increments, so if a match is found at position 2, then startAt will be
      set to 3.  If the end is reached startAt will return to 0.
       MOST of the time the parser will be setting startAt manually to 0.
    */


    var ResumableMultiRegex = /*#__PURE__*/function () {
      function ResumableMultiRegex() {
        _classCallCheck(this, ResumableMultiRegex);

        // @ts-ignore
        this.rules = []; // @ts-ignore

        this.multiRegexes = [];
        this.count = 0;
        this.lastIndex = 0;
        this.regexIndex = 0;
      } // @ts-ignore


      _createClass(ResumableMultiRegex, [{
        key: "getMatcher",
        value: function getMatcher(index) {
          if (this.multiRegexes[index]) return this.multiRegexes[index];
          var matcher = new MultiRegex();
          this.rules.slice(index).forEach(function (_ref4) {
            var _ref5 = _slicedToArray(_ref4, 2),
                re = _ref5[0],
                opts = _ref5[1];

            return matcher.addRule(re, opts);
          });
          matcher.compile();
          this.multiRegexes[index] = matcher;
          return matcher;
        }
      }, {
        key: "resumingScanAtSamePosition",
        value: function resumingScanAtSamePosition() {
          return this.regexIndex !== 0;
        }
      }, {
        key: "considerAll",
        value: function considerAll() {
          this.regexIndex = 0;
        } // @ts-ignore

      }, {
        key: "addRule",
        value: function addRule(re, opts) {
          this.rules.push([re, opts]);
          if (opts.type === "begin") this.count++;
        }
        /** @param {string} s */

      }, {
        key: "exec",
        value: function exec(s) {
          var m = this.getMatcher(this.regexIndex);
          m.lastIndex = this.lastIndex;
          var result = m.exec(s); // The following is because we have no easy way to say "resume scanning at the
          // existing position but also skip the current rule ONLY". What happens is
          // all prior rules are also skipped which can result in matching the wrong
          // thing. Example of matching "booger":
          // our matcher is [string, "booger", number]
          //
          // ....booger....
          // if "booger" is ignored then we'd really need a regex to scan from the
          // SAME position for only: [string, number] but ignoring "booger" (if it
          // was the first match), a simple resume would scan ahead who knows how
          // far looking only for "number", ignoring potential string matches (or
          // future "booger" matches that might be valid.)
          // So what we do: We execute two matchers, one resuming at the same
          // position, but the second full matcher starting at the position after:
          //     /--- resume first regex match here (for [number])
          //     |/---- full match here for [string, "booger", number]
          //     vv
          // ....booger....
          // Which ever results in a match first is then used. So this 3-4 step
          // process essentially allows us to say "match at this position, excluding
          // a prior rule that was ignored".
          //
          // 1. Match "booger" first, ignore. Also proves that [string] does non match.
          // 2. Resume matching for [number]
          // 3. Match at index + 1 for [string, "booger", number]
          // 4. If #2 and #3 result in matches, which came first?

          if (this.resumingScanAtSamePosition()) {
            if (result && result.index === this.lastIndex) ;else {
              // use the second matcher result
              var m2 = this.getMatcher(0);
              m2.lastIndex = this.lastIndex + 1;
              result = m2.exec(s);
            }
          }

          if (result) {
            this.regexIndex += result.position + 1;

            if (this.regexIndex === this.count) {
              // wrap-around to considering all matches again
              this.considerAll();
            }
          }

          return result;
        }
      }]);

      return ResumableMultiRegex;
    }();
    /**
     * Given a mode, builds a huge ResumableMultiRegex that can be used to walk
     * the content and find matches.
     *
     * @param {CompiledMode} mode
     * @returns {ResumableMultiRegex}
     */


    function buildModeRegex(mode) {
      var mm = new ResumableMultiRegex();
      mode.contains.forEach(function (term) {
        return mm.addRule(term.begin, {
          rule: term,
          type: "begin"
        });
      });

      if (mode.terminatorEnd) {
        mm.addRule(mode.terminatorEnd, {
          type: "end"
        });
      }

      if (mode.illegal) {
        mm.addRule(mode.illegal, {
          type: "illegal"
        });
      }

      return mm;
    }
    /** skip vs abort vs ignore
     *
     * @skip   - The mode is still entered and exited normally (and contains rules apply),
     *           but all content is held and added to the parent buffer rather than being
     *           output when the mode ends.  Mostly used with `sublanguage` to build up
     *           a single large buffer than can be parsed by sublanguage.
     *
     *             - The mode begin ands ends normally.
     *             - Content matched is added to the parent mode buffer.
     *             - The parser cursor is moved forward normally.
     *
     * @abort  - A hack placeholder until we have ignore.  Aborts the mode (as if it
     *           never matched) but DOES NOT continue to match subsequent `contains`
     *           modes.  Abort is bad/suboptimal because it can result in modes
     *           farther down not getting applied because an earlier rule eats the
     *           content but then aborts.
     *
     *             - The mode does not begin.
     *             - Content matched by `begin` is added to the mode buffer.
     *             - The parser cursor is moved forward accordingly.
     *
     * @ignore - Ignores the mode (as if it never matched) and continues to match any
     *           subsequent `contains` modes.  Ignore isn't technically possible with
     *           the current parser implementation.
     *
     *             - The mode does not begin.
     *             - Content matched by `begin` is ignored.
     *             - The parser cursor is not moved forward.
     */

    /**
     * Compiles an individual mode
     *
     * This can raise an error if the mode contains certain detectable known logic
     * issues.
     * @param {Mode} mode
     * @param {CompiledMode | null} [parent]
     * @returns {CompiledMode | never}
     */


    function compileMode(mode, parent) {
      var _ref6;

      var cmode =
      /** @type CompiledMode */
      mode;
      if (mode.isCompiled) return cmode;
      [scopeClassName, // do this early so compiler extensions generally don't have to worry about
      // the distinction between match/begin
      compileMatch, MultiClass, beforeMatchExt].forEach(function (ext) {
        return ext(mode, parent);
      });
      language.compilerExtensions.forEach(function (ext) {
        return ext(mode, parent);
      }); // __beforeBegin is considered private API, internal use only

      mode.__beforeBegin = null;
      [beginKeywords, // do this later so compiler extensions that come earlier have access to the
      // raw array if they wanted to perhaps manipulate it, etc.
      compileIllegal, // default to 1 relevance if not specified
      compileRelevance].forEach(function (ext) {
        return ext(mode, parent);
      });
      mode.isCompiled = true;
      var keywordPattern = null;

      if (_typeof(mode.keywords) === "object" && mode.keywords.$pattern) {
        // we need a copy because keywords might be compiled multiple times
        // so we can't go deleting $pattern from the original on the first
        // pass
        mode.keywords = Object.assign({}, mode.keywords);
        keywordPattern = mode.keywords.$pattern;
        delete mode.keywords.$pattern;
      }

      keywordPattern = keywordPattern || /\w+/;

      if (mode.keywords) {
        mode.keywords = compileKeywords(mode.keywords, language.case_insensitive);
      }

      cmode.keywordPatternRe = langRe(keywordPattern, true);

      if (parent) {
        if (!mode.begin) mode.begin = /\B|\b/;
        cmode.beginRe = langRe(mode.begin);
        if (!mode.end && !mode.endsWithParent) mode.end = /\B|\b/;
        if (mode.end) cmode.endRe = langRe(mode.end);
        cmode.terminatorEnd = source(mode.end) || '';

        if (mode.endsWithParent && parent.terminatorEnd) {
          cmode.terminatorEnd += (mode.end ? '|' : '') + parent.terminatorEnd;
        }
      }

      if (mode.illegal) cmode.illegalRe = langRe(
      /** @type {RegExp | string} */
      mode.illegal);
      if (!mode.contains) mode.contains = [];
      mode.contains = (_ref6 = []).concat.apply(_ref6, _toConsumableArray(mode.contains.map(function (c) {
        return expandOrCloneMode(c === 'self' ? mode : c);
      })));
      mode.contains.forEach(function (c) {
        compileMode(
        /** @type Mode */
        c, cmode);
      });

      if (mode.starts) {
        compileMode(mode.starts, parent);
      }

      cmode.matcher = buildModeRegex(cmode);
      return cmode;
    }

    if (!language.compilerExtensions) language.compilerExtensions = []; // self is not valid at the top-level

    if (language.contains && language.contains.includes('self')) {
      throw new Error("ERR: contains `self` is not supported at the top-level of a language.  See documentation.");
    } // we need a null object, which inherit will guarantee


    language.classNameAliases = inherit$1(language.classNameAliases || {});
    return compileMode(
    /** @type Mode */
    language);
  }
  /**
   * Determines if a mode has a dependency on it's parent or not
   *
   * If a mode does have a parent dependency then often we need to clone it if
   * it's used in multiple places so that each copy points to the correct parent,
   * where-as modes without a parent can often safely be re-used at the bottom of
   * a mode chain.
   *
   * @param {Mode | null} mode
   * @returns {boolean} - is there a dependency on the parent?
   * */


  function dependencyOnParent(mode) {
    if (!mode) return false;
    return mode.endsWithParent || dependencyOnParent(mode.starts);
  }
  /**
   * Expands a mode or clones it if necessary
   *
   * This is necessary for modes with parental dependenceis (see notes on
   * `dependencyOnParent`) and for nodes that have `variants` - which must then be
   * exploded into their own individual modes at compile time.
   *
   * @param {Mode} mode
   * @returns {Mode | Mode[]}
   * */


  function expandOrCloneMode(mode) {
    if (mode.variants && !mode.cachedVariants) {
      mode.cachedVariants = mode.variants.map(function (variant) {
        return inherit$1(mode, {
          variants: null
        }, variant);
      });
    } // EXPAND
    // if we have variants then essentially "replace" the mode with the variants
    // this happens in compileMode, where this function is called from


    if (mode.cachedVariants) {
      return mode.cachedVariants;
    } // CLONE
    // if we have dependencies on parents then we need a unique
    // instance of ourselves, so we can be reused with many
    // different parents without issue


    if (dependencyOnParent(mode)) {
      return inherit$1(mode, {
        starts: mode.starts ? inherit$1(mode.starts) : null
      });
    }

    if (Object.isFrozen(mode)) {
      return inherit$1(mode);
    } // no special dependency issues, just return ourselves


    return mode;
  }

  var version = "11.0.1";
  /*
  Syntax highlighting with language autodetection.
  https://highlightjs.org/
  */

  /**
  @typedef {import('highlight.js').Mode} Mode
  @typedef {import('highlight.js').CompiledMode} CompiledMode
  @typedef {import('highlight.js').Language} Language
  @typedef {import('highlight.js').HLJSApi} HLJSApi
  @typedef {import('highlight.js').HLJSPlugin} HLJSPlugin
  @typedef {import('highlight.js').PluginEvent} PluginEvent
  @typedef {import('highlight.js').HLJSOptions} HLJSOptions
  @typedef {import('highlight.js').LanguageFn} LanguageFn
  @typedef {import('highlight.js').HighlightedHTMLElement} HighlightedHTMLElement
  @typedef {import('highlight.js').BeforeHighlightContext} BeforeHighlightContext
  @typedef {import('highlight.js/private').MatchType} MatchType
  @typedef {import('highlight.js/private').KeywordData} KeywordData
  @typedef {import('highlight.js/private').EnhancedMatch} EnhancedMatch
  @typedef {import('highlight.js/private').AnnotatedError} AnnotatedError
  @typedef {import('highlight.js').AutoHighlightResult} AutoHighlightResult
  @typedef {import('highlight.js').HighlightOptions} HighlightOptions
  @typedef {import('highlight.js').HighlightResult} HighlightResult
  */

  var escape = escapeHTML;
  var inherit = inherit$1;
  var NO_MATCH = Symbol("nomatch");
  var MAX_KEYWORD_HITS = 7;
  /**
   * @param {any} hljs - object that is extended (legacy)
   * @returns {HLJSApi}
   */

  var HLJS = function HLJS(hljs) {
    // Global internal variables used within the highlight.js library.

    /** @type {Record<string, Language>} */
    var languages = Object.create(null);
    /** @type {Record<string, string>} */

    var aliases = Object.create(null);
    /** @type {HLJSPlugin[]} */

    var plugins = []; // safe/production mode - swallows more errors, tries to keep running
    // even if a single syntax or parse hits a fatal error

    var SAFE_MODE = true;
    var LANGUAGE_NOT_FOUND = "Could not find the language '{}', did you forget to load/include a language module?";
    /** @type {Language} */

    var PLAINTEXT_LANGUAGE = {
      disableAutodetect: true,
      name: 'Plain text',
      contains: []
    }; // Global options used when within external APIs. This is modified when
    // calling the `hljs.configure` function.

    /** @type HLJSOptions */

    var options = {
      ignoreUnescapedHTML: false,
      noHighlightRe: /^(no-?highlight)$/i,
      languageDetectRe: /\blang(?:uage)?-([\w-]+)\b/i,
      classPrefix: 'hljs-',
      cssSelector: 'pre code',
      languages: null,
      // beta configuration options, subject to change, welcome to discuss
      // https://github.com/highlightjs/highlight.js/issues/1086
      __emitter: TokenTreeEmitter
    };
    /* Utility functions */

    /**
     * Tests a language name to see if highlighting should be skipped
     * @param {string} languageName
     */

    function shouldNotHighlight(languageName) {
      return options.noHighlightRe.test(languageName);
    }
    /**
     * @param {HighlightedHTMLElement} block - the HTML element to determine language for
     */


    function blockLanguage(block) {
      var classes = block.className + ' ';
      classes += block.parentNode ? block.parentNode.className : ''; // language-* takes precedence over non-prefixed class names.

      var match = options.languageDetectRe.exec(classes);

      if (match) {
        var language = getLanguage(match[1]);

        if (!language) {
          warn(LANGUAGE_NOT_FOUND.replace("{}", match[1]));
          warn("Falling back to no-highlight mode for this block.", block);
        }

        return language ? match[1] : 'no-highlight';
      }

      return classes.split(/\s+/).find(function (_class) {
        return shouldNotHighlight(_class) || getLanguage(_class);
      });
    }
    /**
     * Core highlighting function.
     *
     * OLD API
     * highlight(lang, code, ignoreIllegals, continuation)
     *
     * NEW API
     * highlight(code, {lang, ignoreIllegals})
     *
     * @param {string} codeOrLanguageName - the language to use for highlighting
     * @param {string | HighlightOptions} optionsOrCode - the code to highlight
     * @param {boolean} [ignoreIllegals] - whether to ignore illegal matches, default is to bail
     * @param {CompiledMode} [continuation] - current continuation mode, if any
     *
     * @returns {HighlightResult} Result - an object that represents the result
     * @property {string} language - the language name
     * @property {number} relevance - the relevance score
     * @property {string} value - the highlighted HTML code
     * @property {string} code - the original raw code
     * @property {CompiledMode} top - top of the current mode stack
     * @property {boolean} illegal - indicates whether any illegal matches were found
    */


    function highlight(codeOrLanguageName, optionsOrCode, ignoreIllegals, continuation) {
      var code = "";
      var languageName = "";

      if (_typeof(optionsOrCode) === "object") {
        code = codeOrLanguageName;
        ignoreIllegals = optionsOrCode.ignoreIllegals;
        languageName = optionsOrCode.language; // continuation not supported at all via the new API
        // eslint-disable-next-line no-undefined

        continuation = undefined;
      } else {
        // old API
        deprecated("10.7.0", "highlight(lang, code, ...args) has been deprecated.");
        deprecated("10.7.0", "Please use highlight(code, options) instead.\nhttps://github.com/highlightjs/highlight.js/issues/2277");
        languageName = codeOrLanguageName;
        code = optionsOrCode;
      } // https://github.com/highlightjs/highlight.js/issues/3149
      // eslint-disable-next-line no-undefined


      if (ignoreIllegals === undefined) {
        ignoreIllegals = true;
      }
      /** @type {BeforeHighlightContext} */


      var context = {
        code: code,
        language: languageName
      }; // the plugin can change the desired language or the code to be highlighted
      // just be changing the object it was passed

      fire("before:highlight", context); // a before plugin can usurp the result completely by providing it's own
      // in which case we don't even need to call highlight

      var result = context.result ? context.result : _highlight(context.language, context.code, ignoreIllegals, continuation);
      result.code = context.code; // the plugin can change anything in result to suite it

      fire("after:highlight", result);
      return result;
    }
    /**
     * private highlight that's used internally and does not fire callbacks
     *
     * @param {string} languageName - the language to use for highlighting
     * @param {string} codeToHighlight - the code to highlight
     * @param {boolean?} [ignoreIllegals] - whether to ignore illegal matches, default is to bail
     * @param {CompiledMode?} [continuation] - current continuation mode, if any
     * @returns {HighlightResult} - result of the highlight operation
    */


    function _highlight(languageName, codeToHighlight, ignoreIllegals, continuation) {
      var keywordHits = Object.create(null);
      /**
       * Return keyword data if a match is a keyword
       * @param {CompiledMode} mode - current mode
       * @param {string} matchText - the textual match
       * @returns {KeywordData | false}
       */

      function keywordData(mode, matchText) {
        return mode.keywords[matchText];
      }

      function processKeywords() {
        if (!top.keywords) {
          emitter.addText(modeBuffer);
          return;
        }

        var lastIndex = 0;
        top.keywordPatternRe.lastIndex = 0;
        var match = top.keywordPatternRe.exec(modeBuffer);
        var buf = "";

        while (match) {
          buf += modeBuffer.substring(lastIndex, match.index);
          var word = language.case_insensitive ? match[0].toLowerCase() : match[0];
          var data = keywordData(top, word);

          if (data) {
            var _data = _slicedToArray(data, 2),
                kind = _data[0],
                keywordRelevance = _data[1];

            emitter.addText(buf);
            buf = "";
            keywordHits[word] = (keywordHits[word] || 0) + 1;
            if (keywordHits[word] <= MAX_KEYWORD_HITS) relevance += keywordRelevance;

            if (kind.startsWith("_")) {
              // _ implied for relevance only, do not highlight
              // by applying a class name
              buf += match[0];
            } else {
              var cssClass = language.classNameAliases[kind] || kind;
              emitter.addKeyword(match[0], cssClass);
            }
          } else {
            buf += match[0];
          }

          lastIndex = top.keywordPatternRe.lastIndex;
          match = top.keywordPatternRe.exec(modeBuffer);
        }

        buf += modeBuffer.substr(lastIndex);
        emitter.addText(buf);
      }

      function processSubLanguage() {
        if (modeBuffer === "") return;
        /** @type HighlightResult */

        var result = null;

        if (typeof top.subLanguage === 'string') {
          if (!languages[top.subLanguage]) {
            emitter.addText(modeBuffer);
            return;
          }

          result = _highlight(top.subLanguage, modeBuffer, true, continuations[top.subLanguage]);
          continuations[top.subLanguage] =
          /** @type {CompiledMode} */
          result._top;
        } else {
          result = highlightAuto(modeBuffer, top.subLanguage.length ? top.subLanguage : null);
        } // Counting embedded language score towards the host language may be disabled
        // with zeroing the containing mode relevance. Use case in point is Markdown that
        // allows XML everywhere and makes every XML snippet to have a much larger Markdown
        // score.


        if (top.relevance > 0) {
          relevance += result.relevance;
        }

        emitter.addSublanguage(result._emitter, result.language);
      }

      function processBuffer() {
        if (top.subLanguage != null) {
          processSubLanguage();
        } else {
          processKeywords();
        }

        modeBuffer = '';
      }
      /**
       * @param {CompiledMode} mode
       * @param {RegExpMatchArray} match
       */


      function emitMultiClass(scope, match) {
        var i = 1; // eslint-disable-next-line no-undefined

        while (match[i] !== undefined) {
          if (!scope._emit[i]) {
            i++;
            continue;
          }

          var klass = language.classNameAliases[scope[i]] || scope[i];
          var text = match[i];

          if (klass) {
            emitter.addKeyword(text, klass);
          } else {
            modeBuffer = text;
            processKeywords();
            modeBuffer = "";
          }

          i++;
        }
      }
      /**
       * @param {CompiledMode} mode - new mode to start
       * @param {RegExpMatchArray} match
       */


      function startNewMode(mode, match) {
        if (mode.scope && typeof mode.scope === "string") {
          emitter.openNode(language.classNameAliases[mode.scope] || mode.scope);
        }

        if (mode.beginScope) {
          // beginScope just wraps the begin match itself in a scope
          if (mode.beginScope._wrap) {
            emitter.addKeyword(modeBuffer, language.classNameAliases[mode.beginScope._wrap] || mode.beginScope._wrap);
            modeBuffer = "";
          } else if (mode.beginScope._multi) {
            // at this point modeBuffer should just be the match
            emitMultiClass(mode.beginScope, match);
            modeBuffer = "";
          }
        }

        top = Object.create(mode, {
          parent: {
            value: top
          }
        });
        return top;
      }
      /**
       * @param {CompiledMode } mode - the mode to potentially end
       * @param {RegExpMatchArray} match - the latest match
       * @param {string} matchPlusRemainder - match plus remainder of content
       * @returns {CompiledMode | void} - the next mode, or if void continue on in current mode
       */


      function endOfMode(mode, match, matchPlusRemainder) {
        var matched = startsWith(mode.endRe, matchPlusRemainder);

        if (matched) {
          if (mode["on:end"]) {
            var resp = new Response(mode);
            mode["on:end"](match, resp);
            if (resp.isMatchIgnored) matched = false;
          }

          if (matched) {
            while (mode.endsParent && mode.parent) {
              mode = mode.parent;
            }

            return mode;
          }
        } // even if on:end fires an `ignore` it's still possible
        // that we might trigger the end node because of a parent mode


        if (mode.endsWithParent) {
          return endOfMode(mode.parent, match, matchPlusRemainder);
        }
      }
      /**
       * Handle matching but then ignoring a sequence of text
       *
       * @param {string} lexeme - string containing full match text
       */


      function doIgnore(lexeme) {
        if (top.matcher.regexIndex === 0) {
          // no more regexes to potentially match here, so we move the cursor forward one
          // space
          modeBuffer += lexeme[0];
          return 1;
        } else {
          // no need to move the cursor, we still have additional regexes to try and
          // match at this very spot
          resumeScanAtSamePosition = true;
          return 0;
        }
      }
      /**
       * Handle the start of a new potential mode match
       *
       * @param {EnhancedMatch} match - the current match
       * @returns {number} how far to advance the parse cursor
       */


      function doBeginMatch(match) {
        var lexeme = match[0];
        var newMode = match.rule;
        var resp = new Response(newMode); // first internal before callbacks, then the public ones

        var beforeCallbacks = [newMode.__beforeBegin, newMode["on:begin"]];

        for (var _i2 = 0, _beforeCallbacks = beforeCallbacks; _i2 < _beforeCallbacks.length; _i2++) {
          var cb = _beforeCallbacks[_i2];
          if (!cb) continue;
          cb(match, resp);
          if (resp.isMatchIgnored) return doIgnore(lexeme);
        }

        if (newMode.skip) {
          modeBuffer += lexeme;
        } else {
          if (newMode.excludeBegin) {
            modeBuffer += lexeme;
          }

          processBuffer();

          if (!newMode.returnBegin && !newMode.excludeBegin) {
            modeBuffer = lexeme;
          }
        }

        startNewMode(newMode, match);
        return newMode.returnBegin ? 0 : lexeme.length;
      }
      /**
       * Handle the potential end of mode
       *
       * @param {RegExpMatchArray} match - the current match
       */


      function doEndMatch(match) {
        var lexeme = match[0];
        var matchPlusRemainder = codeToHighlight.substr(match.index);
        var endMode = endOfMode(top, match, matchPlusRemainder);

        if (!endMode) {
          return NO_MATCH;
        }

        var origin = top;

        if (top.endScope && top.endScope._wrap) {
          processBuffer();
          emitter.addKeyword(lexeme, top.endScope._wrap);
        } else if (top.endScope && top.endScope._multi) {
          processBuffer();
          emitMultiClass(top.endScope, match);
        } else if (origin.skip) {
          modeBuffer += lexeme;
        } else {
          if (!(origin.returnEnd || origin.excludeEnd)) {
            modeBuffer += lexeme;
          }

          processBuffer();

          if (origin.excludeEnd) {
            modeBuffer = lexeme;
          }
        }

        do {
          if (top.scope && !top.isMultiClass) {
            emitter.closeNode();
          }

          if (!top.skip && !top.subLanguage) {
            relevance += top.relevance;
          }

          top = top.parent;
        } while (top !== endMode.parent);

        if (endMode.starts) {
          startNewMode(endMode.starts, match);
        }

        return origin.returnEnd ? 0 : lexeme.length;
      }

      function processContinuations() {
        var list = [];

        for (var current = top; current !== language; current = current.parent) {
          if (current.scope) {
            list.unshift(current.scope);
          }
        }

        list.forEach(function (item) {
          return emitter.openNode(item);
        });
      }
      /** @type {{type?: MatchType, index?: number, rule?: Mode}}} */


      var lastMatch = {};
      /**
       *  Process an individual match
       *
       * @param {string} textBeforeMatch - text preceding the match (since the last match)
       * @param {EnhancedMatch} [match] - the match itself
       */

      function processLexeme(textBeforeMatch, match) {
        var lexeme = match && match[0]; // add non-matched text to the current mode buffer

        modeBuffer += textBeforeMatch;

        if (lexeme == null) {
          processBuffer();
          return 0;
        } // we've found a 0 width match and we're stuck, so we need to advance
        // this happens when we have badly behaved rules that have optional matchers to the degree that
        // sometimes they can end up matching nothing at all
        // Ref: https://github.com/highlightjs/highlight.js/issues/2140


        if (lastMatch.type === "begin" && match.type === "end" && lastMatch.index === match.index && lexeme === "") {
          // spit the "skipped" character that our regex choked on back into the output sequence
          modeBuffer += codeToHighlight.slice(match.index, match.index + 1);

          if (!SAFE_MODE) {
            /** @type {AnnotatedError} */
            var err = new Error("0 width match regex (".concat(languageName, ")"));
            err.languageName = languageName;
            err.badRule = lastMatch.rule;
            throw err;
          }

          return 1;
        }

        lastMatch = match;

        if (match.type === "begin") {
          return doBeginMatch(match);
        } else if (match.type === "illegal" && !ignoreIllegals) {
          // illegal match, we do not continue processing

          /** @type {AnnotatedError} */
          var _err = new Error('Illegal lexeme "' + lexeme + '" for mode "' + (top.scope || '<unnamed>') + '"');

          _err.mode = top;
          throw _err;
        } else if (match.type === "end") {
          var processed = doEndMatch(match);

          if (processed !== NO_MATCH) {
            return processed;
          }
        } // edge case for when illegal matches $ (end of line) which is technically
        // a 0 width match but not a begin/end match so it's not caught by the
        // first handler (when ignoreIllegals is true)


        if (match.type === "illegal" && lexeme === "") {
          // advance so we aren't stuck in an infinite loop
          return 1;
        } // infinite loops are BAD, this is a last ditch catch all. if we have a
        // decent number of iterations yet our index (cursor position in our
        // parsing) still 3x behind our index then something is very wrong
        // so we bail


        if (iterations > 100000 && iterations > match.index * 3) {
          var _err2 = new Error('potential infinite loop, way more iterations than matches');

          throw _err2;
        }
        /*
        Why might be find ourselves here?  An potential end match that was
        triggered but could not be completed.  IE, `doEndMatch` returned NO_MATCH.
        (this could be because a callback requests the match be ignored, etc)
         This causes no real harm other than stopping a few times too many.
        */


        modeBuffer += lexeme;
        return lexeme.length;
      }

      var language = getLanguage(languageName);

      if (!language) {
        error(LANGUAGE_NOT_FOUND.replace("{}", languageName));
        throw new Error('Unknown language: "' + languageName + '"');
      }

      var md = compileLanguage(language);
      var result = '';
      /** @type {CompiledMode} */

      var top = continuation || md;
      /** @type Record<string,CompiledMode> */

      var continuations = {}; // keep continuations for sub-languages

      var emitter = new options.__emitter(options);
      processContinuations();
      var modeBuffer = '';
      var relevance = 0;
      var index = 0;
      var iterations = 0;
      var resumeScanAtSamePosition = false;

      try {
        top.matcher.considerAll();

        for (;;) {
          iterations++;

          if (resumeScanAtSamePosition) {
            // only regexes not matched previously will now be
            // considered for a potential match
            resumeScanAtSamePosition = false;
          } else {
            top.matcher.considerAll();
          }

          top.matcher.lastIndex = index;
          var match = top.matcher.exec(codeToHighlight); // console.log("match", match[0], match.rule && match.rule.begin)

          if (!match) break;
          var beforeMatch = codeToHighlight.substring(index, match.index);
          var processedCount = processLexeme(beforeMatch, match);
          index = match.index + processedCount;
        }

        processLexeme(codeToHighlight.substr(index));
        emitter.closeAllNodes();
        emitter.finalize();
        result = emitter.toHTML();
        return {
          language: languageName,
          value: result,
          relevance: relevance,
          illegal: false,
          _emitter: emitter,
          _top: top
        };
      } catch (err) {
        if (err.message && err.message.includes('Illegal')) {
          return {
            language: languageName,
            value: escape(codeToHighlight),
            illegal: true,
            relevance: 0,
            _illegalBy: {
              message: err.message,
              index: index,
              context: codeToHighlight.slice(index - 100, index + 100),
              mode: err.mode,
              resultSoFar: result
            },
            _emitter: emitter
          };
        } else if (SAFE_MODE) {
          return {
            language: languageName,
            value: escape(codeToHighlight),
            illegal: false,
            relevance: 0,
            errorRaised: err,
            _emitter: emitter,
            _top: top
          };
        } else {
          throw err;
        }
      }
    }
    /**
     * returns a valid highlight result, without actually doing any actual work,
     * auto highlight starts with this and it's possible for small snippets that
     * auto-detection may not find a better match
     * @param {string} code
     * @returns {HighlightResult}
     */


    function justTextHighlightResult(code) {
      var result = {
        value: escape(code),
        illegal: false,
        relevance: 0,
        _top: PLAINTEXT_LANGUAGE,
        _emitter: new options.__emitter(options)
      };

      result._emitter.addText(code);

      return result;
    }
    /**
    Highlighting with language detection. Accepts a string with the code to
    highlight. Returns an object with the following properties:
     - language (detected language)
    - relevance (int)
    - value (an HTML string with highlighting markup)
    - secondBest (object with the same structure for second-best heuristically
      detected language, may be absent)
       @param {string} code
      @param {Array<string>} [languageSubset]
      @returns {AutoHighlightResult}
    */


    function highlightAuto(code, languageSubset) {
      languageSubset = languageSubset || options.languages || Object.keys(languages);
      var plaintext = justTextHighlightResult(code);
      var results = languageSubset.filter(getLanguage).filter(autoDetection).map(function (name) {
        return _highlight(name, code, false);
      });
      results.unshift(plaintext); // plaintext is always an option

      var sorted = results.sort(function (a, b) {
        // sort base on relevance
        if (a.relevance !== b.relevance) return b.relevance - a.relevance; // always award the tie to the base language
        // ie if C++ and Arduino are tied, it's more likely to be C++

        if (a.language && b.language) {
          if (getLanguage(a.language).supersetOf === b.language) {
            return 1;
          } else if (getLanguage(b.language).supersetOf === a.language) {
            return -1;
          }
        } // otherwise say they are equal, which has the effect of sorting on
        // relevance while preserving the original ordering - which is how ties
        // have historically been settled, ie the language that comes first always
        // wins in the case of a tie


        return 0;
      });

      var _sorted = _slicedToArray(sorted, 2),
          best = _sorted[0],
          secondBest = _sorted[1];
      /** @type {AutoHighlightResult} */


      var result = best;
      result.secondBest = secondBest;
      return result;
    }
    /**
     * Builds new class name for block given the language name
     *
     * @param {HTMLElement} element
     * @param {string} [currentLang]
     * @param {string} [resultLang]
     */


    function updateClassName(element, currentLang, resultLang) {
      var language = currentLang && aliases[currentLang] || resultLang;
      element.classList.add("hljs");
      element.classList.add("language-".concat(language));
    }
    /**
     * Applies highlighting to a DOM node containing code.
     *
     * @param {HighlightedHTMLElement} element - the HTML element to highlight
    */


    function highlightElement(element) {
      /** @type HTMLElement */
      var node = null;
      var language = blockLanguage(element);
      if (shouldNotHighlight(language)) return;
      fire("before:highlightElement", {
        el: element,
        language: language
      }); // we should be all text, no child nodes

      if (!options.ignoreUnescapedHTML && element.children.length > 0) {
        console.warn("One of your code blocks includes unescaped HTML. This is a potentially serious security risk.");
        console.warn("https://github.com/highlightjs/highlight.js/issues/2886");
        console.warn(element);
      }

      node = element;
      var text = node.textContent;
      var result = language ? highlight(text, {
        language: language,
        ignoreIllegals: true
      }) : highlightAuto(text);
      element.innerHTML = result.value;
      updateClassName(element, language, result.language);
      element.result = {
        language: result.language,
        // TODO: remove with version 11.0
        re: result.relevance,
        relevance: result.relevance
      };

      if (result.secondBest) {
        element.secondBest = {
          language: result.secondBest.language,
          relevance: result.secondBest.relevance
        };
      }

      fire("after:highlightElement", {
        el: element,
        result: result,
        text: text
      });
    }
    /**
     * Updates highlight.js global options with the passed options
     *
     * @param {Partial<HLJSOptions>} userOptions
     */


    function configure(userOptions) {
      options = inherit(options, userOptions);
    } // TODO: remove v12, deprecated


    var initHighlighting = function initHighlighting() {
      highlightAll();
      deprecated("10.6.0", "initHighlighting() deprecated.  Use highlightAll() now.");
    }; // TODO: remove v12, deprecated


    function initHighlightingOnLoad() {
      highlightAll();
      deprecated("10.6.0", "initHighlightingOnLoad() deprecated.  Use highlightAll() now.");
    }

    var wantsHighlight = false;
    /**
     * auto-highlights all pre>code elements on the page
     */

    function highlightAll() {
      // if we are called too early in the loading process
      if (document.readyState === "loading") {
        wantsHighlight = true;
        return;
      }

      var blocks = document.querySelectorAll(options.cssSelector);
      blocks.forEach(highlightElement);
    }

    function boot() {
      // if a highlight was requested before DOM was loaded, do now
      if (wantsHighlight) highlightAll();
    } // make sure we are in the browser environment


    if (typeof window !== 'undefined' && window.addEventListener) {
      window.addEventListener('DOMContentLoaded', boot, false);
    }
    /**
     * Register a language grammar module
     *
     * @param {string} languageName
     * @param {LanguageFn} languageDefinition
     */


    function registerLanguage(languageName, languageDefinition) {
      var lang = null;

      try {
        lang = languageDefinition(hljs);
      } catch (error$1) {
        error("Language definition for '{}' could not be registered.".replace("{}", languageName)); // hard or soft error

        if (!SAFE_MODE) {
          throw error$1;
        } else {
          error(error$1);
        } // languages that have serious errors are replaced with essentially a
        // "plaintext" stand-in so that the code blocks will still get normal
        // css classes applied to them - and one bad language won't break the
        // entire highlighter


        lang = PLAINTEXT_LANGUAGE;
      } // give it a temporary name if it doesn't have one in the meta-data


      if (!lang.name) lang.name = languageName;
      languages[languageName] = lang;
      lang.rawDefinition = languageDefinition.bind(null, hljs);

      if (lang.aliases) {
        registerAliases(lang.aliases, {
          languageName: languageName
        });
      }
    }
    /**
     * Remove a language grammar module
     *
     * @param {string} languageName
     */


    function unregisterLanguage(languageName) {
      delete languages[languageName];

      for (var _i3 = 0, _Object$keys = Object.keys(aliases); _i3 < _Object$keys.length; _i3++) {
        var alias = _Object$keys[_i3];

        if (aliases[alias] === languageName) {
          delete aliases[alias];
        }
      }
    }
    /**
     * @returns {string[]} List of language internal names
     */


    function listLanguages() {
      return Object.keys(languages);
    }
    /**
     * @param {string} name - name of the language to retrieve
     * @returns {Language | undefined}
     */


    function getLanguage(name) {
      name = (name || '').toLowerCase();
      return languages[name] || languages[aliases[name]];
    }
    /**
     *
     * @param {string|string[]} aliasList - single alias or list of aliases
     * @param {{languageName: string}} opts
     */


    function registerAliases(aliasList, _ref7) {
      var languageName = _ref7.languageName;

      if (typeof aliasList === 'string') {
        aliasList = [aliasList];
      }

      aliasList.forEach(function (alias) {
        aliases[alias.toLowerCase()] = languageName;
      });
    }
    /**
     * Determines if a given language has auto-detection enabled
     * @param {string} name - name of the language
     */


    function autoDetection(name) {
      var lang = getLanguage(name);
      return lang && !lang.disableAutodetect;
    }
    /**
     * Upgrades the old highlightBlock plugins to the new
     * highlightElement API
     * @param {HLJSPlugin} plugin
     */


    function upgradePluginAPI(plugin) {
      // TODO: remove with v12
      if (plugin["before:highlightBlock"] && !plugin["before:highlightElement"]) {
        plugin["before:highlightElement"] = function (data) {
          plugin["before:highlightBlock"](Object.assign({
            block: data.el
          }, data));
        };
      }

      if (plugin["after:highlightBlock"] && !plugin["after:highlightElement"]) {
        plugin["after:highlightElement"] = function (data) {
          plugin["after:highlightBlock"](Object.assign({
            block: data.el
          }, data));
        };
      }
    }
    /**
     * @param {HLJSPlugin} plugin
     */


    function addPlugin(plugin) {
      upgradePluginAPI(plugin);
      plugins.push(plugin);
    }
    /**
     *
     * @param {PluginEvent} event
     * @param {any} args
     */


    function fire(event, args) {
      var cb = event;
      plugins.forEach(function (plugin) {
        if (plugin[cb]) {
          plugin[cb](args);
        }
      });
    }
    /**
     *
     * @param {HighlightedHTMLElement} el
     */


    function deprecateHighlightBlock(el) {
      deprecated("10.7.0", "highlightBlock will be removed entirely in v12.0");
      deprecated("10.7.0", "Please use highlightElement now.");
      return highlightElement(el);
    }
    /* Interface definition */


    Object.assign(hljs, {
      highlight: highlight,
      highlightAuto: highlightAuto,
      highlightAll: highlightAll,
      highlightElement: highlightElement,
      // TODO: Remove with v12 API
      highlightBlock: deprecateHighlightBlock,
      configure: configure,
      initHighlighting: initHighlighting,
      initHighlightingOnLoad: initHighlightingOnLoad,
      registerLanguage: registerLanguage,
      unregisterLanguage: unregisterLanguage,
      listLanguages: listLanguages,
      getLanguage: getLanguage,
      registerAliases: registerAliases,
      autoDetection: autoDetection,
      inherit: inherit,
      addPlugin: addPlugin
    });

    hljs.debugMode = function () {
      SAFE_MODE = false;
    };

    hljs.safeMode = function () {
      SAFE_MODE = true;
    };

    hljs.versionString = version;

    for (var key in MODES) {
      // @ts-ignore
      if (_typeof(MODES[key]) === "object") {
        // @ts-ignore
        deepFreeze$1(MODES[key]);
      }
    } // merge all the modes/regexes into our main object


    Object.assign(hljs, MODES);
    return hljs;
  }; // export an "instance" of the highlighter


  var HighlightJS = HLJS({});
  var builtIns = /*#__PURE__*/Object.freeze({
    __proto__: null
  });
  var hljs = HighlightJS;

  for (var _i4 = 0, _Object$keys2 = Object.keys(builtIns); _i4 < _Object$keys2.length; _i4++) {
    var key = _Object$keys2[_i4];
    var languageName = key.replace("grmr_", "");
    hljs.registerLanguage(languageName, builtIns[key]);
  }

  return hljs;
}();

if (( false ? undefined : _typeof(exports)) === 'object' && typeof module !== 'undefined') {
  module.exports = hljs;
}

/***/ }),

/***/ 2:
/*!***************************************************!*\
  !*** multi ./resources/js/highlight/highlight.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ravsols\resources\js\highlight\highlight.js */"./resources/js/highlight/highlight.js");


/***/ })

/******/ });