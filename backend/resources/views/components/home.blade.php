@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/home.css')" :generalClass="$name">
    <x-intro-program></x-intro-program>

    <div class="main-public">
        <div class="container-custom">
            <h1 class="hd hd-info hd-1">Công khai phân chia</h1>
            <h5 class="hd hd-4 hd-info">Tính đến Kỳ 2 tháng 8 năm 2021</h5>
            <div class="main-public-box">
                <div class="main-public-box_item">
                    <h3 class="hd hd-1 hd-primary">4027</h3>
                    <p class="hd hd-4 hd-dark">Số người được hỗ trợ</p>
                </div>
                <div class="main-public-box_item">
                    <h3 class="hd hd-1 hd-primary">8247.6</h3>
                    <p class="hd hd-4 hd-dark">Tổng số người phân chia, hỗ trợ</p>
                </div>
                <div class="main-public-box_item">
                    <h3 class="hd hd-1 hd-primary">3.750.888</h3>
                    <p class="hd hd-4 hd-dark">Tổng số tiền phân chia, hỗ trợ</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-detail">
        <div class="container-custom">
            <h1 class="hd hd-1 hd-intro">Công khai chi tiết</h1>
            <div class="main-detail-content">
                <div id="detail" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#detail" data-slide-to="0" class="active"></li>
                        <li data-target="#detail" data-slide-to="1"></li>
                        <li data-target="#detail" data-slide-to="2"></li>
                    </ul>
                    <div class="main-detail-content-slider carousel-inner">
                        <div class="carousel-item active">
                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                            <div class="main-detail-content-slider_item">
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/calendar.svg') }}" class="icon-bg icon-bg-calendar" alt="">
                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/piggy-bank.svg') }}" class="icon-bg icon-bg-bank" alt="">
                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/cash.svg') }}" class="icon-bg icon-bg-cash" alt="">
                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                </div>
                            </div>
                            <a href="./public-divided-detail.html">
                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                            <div class="main-detail-content-slider_item">
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/calendar.svg') }}" class="icon-bg icon-bg-calendar" alt="">
                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/piggy-bank.svg') }}" class="icon-bg icon-bg-bank" alt="">
                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/cash.svg') }}" class="icon-bg icon-bg-cash" alt="">
                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                </div>
                            </div>
                            <a href="./public-divided-detail.html">
                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                            </a>
                        </div>

                        <div class="carousel-item">
                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                            <div class="main-detail-content-slider_item">
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/calendar.svg') }}" class="icon-bg icon-bg-calendar" alt="">
                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/piggy-bank.svg') }}" class="icon-bg icon-bg-bank" alt="">
                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                </div>
                                <div class="main-detail-content-slider_item-box">
                                    <img src="{{ asset('icons/cash.svg') }}" class="icon-bg icon-bg-cash" alt="">
                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                </div>
                            </div>
                            <a href="./public-divided-detail.html">
                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-news">
        <div class="container-custom">
            <h1 class="hd hd-1 hd-intro">Tin tức</h1>
            <div class="main-news-box">
                @foreach($news as $new)
                    <div class="card" style="width: 375px;">
                        <div class="main-news-box-thumnail">
                            <img class="card-img-top" srcset="{{ asset('upload/' . $new->thumbnail_url) }} 2x" alt="Card image cap">
                            <div class="main-news-box-thumnail_date">
                                {{ $new->created_at  }}
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-left hd-4">{{ $new->title }}</h5>
                            <p class="card-text hd-5 text-left"> {{ $new->preview_content }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-PrimaryLayout>
