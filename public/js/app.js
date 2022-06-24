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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\resources\\js\\app.js: Unexpected token (2:0)\n\n\u001b[0m \u001b[90m 1 |\u001b[39m \u001b[36mconst\u001b[39m { \u001b[36mdefault\u001b[39m\u001b[33m:\u001b[39m \u001b[33mAxios\u001b[39m } \u001b[33m=\u001b[39m require(\u001b[32m'axios'\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 2 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 3 |\u001b[39m \u001b[36mconst\u001b[39m { defaultsDeep } \u001b[33m=\u001b[39m require(\u001b[32m'lodash'\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 4 |\u001b[39m \u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5 |\u001b[39m \u001b[36mconst\u001b[39m { map } \u001b[33m=\u001b[39m require(\u001b[32m'lodash'\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n    at instantiate (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:358:12)\n    at Parser.raise (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:3341:19)\n    at Parser.unexpected (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:3379:16)\n    at Parser.parseExprAtom (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:13118:22)\n    at Parser.parseExprSubscripts (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12643:23)\n    at Parser.parseUpdate (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12622:21)\n    at Parser.parseMaybeUnary (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12593:23)\n    at Parser.parseMaybeUnaryOrPrivate (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12387:61)\n    at Parser.parseExprOps (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12394:23)\n    at Parser.parseMaybeConditional (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12364:23)\n    at Parser.parseMaybeAssign (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12316:21)\n    at Parser.parseExpressionBase (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12252:23)\n    at C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12246:39\n    at Parser.allowInAnd (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:14341:16)\n    at Parser.parseExpression (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:12246:17)\n    at Parser.parseStatementContent (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:14781:23)\n    at Parser.parseStatement (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:14638:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:15281:25)\n    at Parser.parseBlockBody (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:15272:10)\n    at Parser.parseProgram (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:14556:10)\n    at Parser.parseTopLevel (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:14543:25)\n    at Parser.parse (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:16506:10)\n    at parse (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\parser\\lib\\index.js:16558:38)\n    at parser (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\core\\lib\\parser\\index.js:52:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:87:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\@babel\\core\\lib\\transform.js:25:41)\n    at transform.next (<anonymous>)\n    at step (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\gensync\\index.js:261:32)\n    at C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\gensync\\index.js:273:13\n    at async.call.result.err.err (C:\\Users\\Alessandro\\OneDrive\\Desktop\\progetto finale\\bdev-project\\node_modules\\gensync\\index.js:223:11)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Alessandro\OneDrive\Desktop\progetto finale\bdev-project\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\Alessandro\OneDrive\Desktop\progetto finale\bdev-project\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });