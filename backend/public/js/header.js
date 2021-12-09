$(document).ready(function () {
    $(window).scroll(function(){
        if ($(window).scrollTop() > 120) {
            $('.header-navigation').addClass('fixed-header');
        }
        else {
            $('.header-navigation').removeClass('fixed-header');
        }
    });

    var pathName = window.location.pathname;
    if (pathName.indexOf('home') > 0) {
        $('#home_page').addClass('active');
    } else if (pathName.indexOf('about') > 0) {
        $('#about_page').addClass('active');
    } else if (pathName.indexOf('assurance') > 0) {
        $('#assurance_page').addClass('active');
    } else if (pathName.indexOf('divided') > 0) {
        $('#divided_page').addClass('active');
    } else {
        $('#support_control_page').addClass('active');
    }
})