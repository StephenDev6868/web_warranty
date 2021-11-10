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
    if (pathName == '/') {
        $('#home_page').addClass('active');
        $('#home_pageR').addClass('active');
    } else if (pathName.indexOf('about') > 0) {
        $('#about_page').addClass('active');
        $('#about_pageR').addClass('active');
    } else if (pathName.indexOf('assurance') > 0) {
        $('#assurance_page').addClass('active');
        $('#assurance_pageR').addClass('active');
    } else if (pathName.indexOf('support') > 0) {
        $('#support_control_page').addClass('active');
        $('#support_control_pageR').addClass('active');
    } else {
        $('#divided_page').addClass('active');
        $('#divided_pageR').addClass('active');
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

    $('#open_navbar').click(function() {
        console.log('23123123123');
        $('.navigation__content__navbarR').addClass('show-navbar');
    })

    $('#close_page').click(function() {
        $('.navigation__content__navbarR').removeClass('show-navbar');
    })
})