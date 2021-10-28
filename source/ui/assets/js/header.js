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
    } else if (pathName.indexOf('support') > 0) {
        $('#support_control_page').addClass('active');
    } else {
        $('#divided_page').addClass('active');
    }

    // Set info user if sign in
    if (localStorage.getItem('login')) {
        $('.header__content__action').addClass('d-none');
        $('.header__content__user').removeClass('d-none');
    } else {
        $('.header__content__action').removeClass('d-none');
        $('.header__content__user').addClass('d-none');
    }
    // Sign out
    $('#signOut').click(function() {
        localStorage.removeItem('login');
        location.reload();
    })
})