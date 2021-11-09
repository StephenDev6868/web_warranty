/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/register-program-step-2.js ***!
  \*************************************************/
$(document).ready(function () {
  // show images
  $("input[type=file]").change(function ($event) {
    var imgId = this.getAttribute('img-id');

    if ($event.target.files[0]) {
      var cccdBeforeSrc = URL.createObjectURL($event.target.files[0]);

      if (imgId) {
        $("#".concat(imgId)).attr('src', cccdBeforeSrc);
      }
    }
  });
});
/******/ })()
;