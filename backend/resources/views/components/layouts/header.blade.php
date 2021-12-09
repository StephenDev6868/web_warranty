<header class="header">
    <div class="container-custom">
        <div class="header__content">
            <ul class="header__content__contact">
                <div class="header__content__contact--item">
                    <img srcset="{{ asset('icons/Calling.svg')}}" alt="">
                    <p>1900.988.965 | 0906.060.784</p> 
                </div>
                <div class="header__content__contact--item">
                    <img srcset="{{ asset('icons/Message.svg')}}" alt="">
                    <p>webtuongho@vics.vn</p> 
                </div>
            </ul>
            <div class="header__content__action">
                <a href="./register-program.html">
                    <button class="btn btnc btnc-primary">Đăng ký</button>
                </a>
                <a href="#">
                    <button class="btn btnc btnc-secondary" data-toggle="modal" data-target="#signIn">Đăng nhập</button>
                </a>
            </div>
            <div class="header__content__user d-none">
                <div class="header__content__user-notification dropdown">
                    <img src="{{ asset('icons/notification.svg') }}" class="dropdown-toggle" data-toggle="dropdown" alt="">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <p class="hd hd-5 hd-intro text-notify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        </a>
                        <a class="dropdown-item" href="#">
                            <p class="hd hd-5 hd-intro text-notify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        </a>
                        <a class="dropdown-item" href="#">
                            <p class="hd hd-5 hd-intro text-notify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        </a>
                        <a class="dropdown-item" href="#">
                            <p class="hd hd-5 hd-intro text-notify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        </a>
                        <a class="dropdown-item" href="#">
                            <p class="hd hd-5 hd-intro text-notify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        </a>
                    </div>
                </div>
                <div class="header__content__user-name">
                    <div class="money text-right">
                        <p class="hd hd-5 hd-intro">Xin chào, Hạnh Lê</p>
                        <div class="money-cash">
                            <img src="{{ asset('icons/dolar.svg') }}" alt="">
                            <p class="hd hd-5-bold hd-gold">30.000 xu</p>
                        </div>
                    </div>
                    <div class="avatar">
                        <p class="text-center">H</p>
                    </div>   
                </div>
                <div class="header__content__user-page dropdown">
                    <img src="{{ asset('icons/arrow_qa.svg') }}" class="dropdown-toggle" data-toggle="dropdown" alt="">
                    <div class="dropdown-menu">
                        <a class="hd hd-5 hd-intro dropdown-item" href="{{ route('my-program') }}">Chương trình của tôi</a>
                        <a class="hd hd-5 hd-intro dropdown-item" href="{{ route('my-wallet') }}">Ví của tôi</a>
                        <a class="hd hd-5 hd-intro dropdown-item" href="{{ route('devide-user') }}">Công khai phân chia</a>
                        <a class="hd hd-5 hd-intro dropdown-item" href="{{ route('register-receive') }}">Đăng ký nhận hỗ trợ</a>
                        <a class="hd hd-5 hd-intro dropdown-item" href="{{ route('history-compensation-zero') }}">Quyền lợi</a>
                        <a class="hd hd-5 hd-secondary dropdown-item" href="" id="signOut">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>