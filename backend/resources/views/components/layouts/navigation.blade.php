<div class="navigation">
    <div class="container-custom navigation__content">
        <div class="navigation__content__logo">
            <a href="{{ route('home') }}" class="navigation__content__logo__item">
                <img class="logo" srcset="{{asset('images/logo.png')}} 1x" alt="">                      
            </a>
        </div>

        <div class="navigation__content__menu">
            <ul class="navigation__content__menu__list">
                <li class="navigation__content__menu__list__item">
                    <a href="{{ route('home') }}" class="navigation__content__menu__list__item__link home_page" id="home_page">
                        Trang chủ
                    </a>
                </li>
                <li class="navigation__content__menu__list__item">
                    <a href="{{ route('about') }}" class="navigation__content__menu__list__item__link about_page" id="about_page">
                        Về chúng tôi
                    </a>
                </li>
                <li class="navigation__content__menu__list__item">
                    <a href="{{ route('assurance') }}" class="navigation__content__menu__list__item__link" id="assurance_page">
                        Chương trình bảo hiểm 
                    </a>
                </li>
                <li class="navigation__content__menu__list__item">
                    <a href="{{ route('public-divided') }}" class="navigation__content__menu__list__item__link" id="divided_page">
                        Công khai phân chia
                    </a>
                </li>
                <li class="navigation__content__menu__list__item">
                    <a href="{{ route('supporter') }}" class="navigation__content__menu__list__item__link" id="support_control_page">
                        Hỗ trợ và kiểm soát
                    </a>
                </li>
            </ul>
        </div>

        <div class="navigation__content__openNavbar">
            <i class="fa fa-bars" class="" id="open_navbar"></i>
        </div> 

        <div class="navigation__content__navbarR">
            <ul class="navigation__content__navbarR__list">
                <li class="navigation__content__navbarR__list__item" id="home_nav">
                    <i class="fa fa-close" id="close_page"></i>
                    <a href="{{ route('home') }}" class="navigation__content__navbarR__list__item__link home_page" id="home_pageR">
                        Trang chủ
                    </a>
                </li>
                <li class="navigation__content__navbarR__list__item">
                    <a href="{{ route('about') }}" class="navigation__content__navbarR__list__item__link about_page" id="about_pageR">
                        Về chúng tôi
                    </a>
                </li>
                <li class="navigation__content__navbarR__list__item">
                    <a href="{{ route('assurance') }}" class="navigation__content__navbarR__list__item__link" id="assurance_pageR">
                        Chương trình bảo hiểm 
                    </a>
                </li>
                <li class="navigation__content__navbarR__list__item">
                    <a href="{{ route('public-divided') }}" class="navigation__content__navbarR__list__item__link" id="divided_pageR">
                        Công khai phân chia
                    </a>
                </li>
                <li class="navigation__content__navbarR__list__item">
                    <a href="{{ route('supporter') }}" class="navigation__content__navbarR__list__item__link" id="support_control_pageR">
                        Hỗ trợ và kiểm soát
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>