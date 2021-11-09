/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/popup.js ***!
  \*******************************/
$(document).ready(function () {
  $('.btnc-sign').click(function () {
    $('#signIn').modal('hide');
    $('#confirmOTP').modal('show');
  });
  $('.btnc-sign-2').click(function () {
    localStorage.setItem('login', true);
    $('#confirmOTP').modal('hide');
    location.reload();
  });
});
/******/ })()
;