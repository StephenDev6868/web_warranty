/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/popup.js ***!
  \*******************************/
$(document).ready(function () {
  $('#btnc-sign-in').click(function (e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('#_token').val()
      }
    });
    e.preventDefault();
    var formData = {
      phone_number: jQuery('#phone_number').val()
    };
    jQuery('#res').append('');
    $.ajax({
      type: 'POST',
      url: 'login',
      data: formData,
      dataType: 'json',
      success: function success(data) {
        jQuery('#signIn').modal('hide');
        jQuery('#confirmOTP').modal('show');
        var myTimer,
            timing = 59;
        jQuery('#timing').html(timing);
        myTimer = setInterval(function () {
          --timing;
          jQuery('#timing').html(timing);

          if (timing === 0) {
            clearInterval(myTimer);
          }
        }, 1000);
      },
      error: function error(errors) {
        var error = '<p class="mt-2 text-danger">' + errors.responseJSON.error + '</p>';
        jQuery('#res').append(error);
      }
    });
  });
  $('#btnc-auth-otp').click(function (e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': jQuery('#_token').val()
      }
    });
    e.preventDefault();
    var formData = {
      phone_number: jQuery('#phone_number').val(),
      otp: jQuery('#otp1').val() + jQuery('#otp2').val() + jQuery('#otp3').val() + jQuery('#otp4').val() + jQuery('#otp5').val() + jQuery('#otp6').val()
    };
    jQuery('#res2').append('');
    $.ajax({
      type: 'POST',
      url: 'auth-otp',
      data: formData,
      dataType: 'json',
      success: function success(data) {
        localStorage.setItem('login_success', true);
        localStorage.setItem('user_info', JSON.stringify(data.data));
        jQuery('#confirmOTP').modal('hide');
        location.reload();
      },
      error: function error(errors) {
        var error = '<p class="mt-2 text-danger">' + errors.responseJSON.error + '</p>';
        jQuery('#res2').append(error);
      }
    });
  });
});
/******/ })()
;