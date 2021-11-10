/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/my-program.js ***!
  \************************************/
$(document).ready(function () {
  $('dt').click(function () {
    var iconToggle = $(this).children('.icon');
    iconToggle.toggleClass('see-full');
    var ddFirst = $(this).nextAll(':first');
    ddFirst.toggleClass('see-full');
  });
});
/******/ })()
;