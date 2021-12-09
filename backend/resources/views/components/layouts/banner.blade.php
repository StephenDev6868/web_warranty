<div class="banner">
    <div class="banner__slider">
        <div id="demo" class="banner__slider__carousel carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="banner__slider__carousel__inner carousel-inner">
                @foreach($banners as $banner)
                    <div class="{{ $loop->index == 0 ? 'carousel-item active' :  'carousel-item' }}">
                        <img class="d-block w-100" src="{{ asset('upload/' . $banner->file_image) }}" alt="Los Angeles">
                        <div class="container-custom banner__slider__carousel__inner__item__content">
                            <h1 class="hd hd-1 hd-info">{{ $banner->title }}</h1>
                            <p class="hd hd-5 hd-info banner__slider__carousel__inner__item__content-text">
                                {{ $banner->content }}
                            </p>
                            <button class="btn btn btnc btnc-large btnc-secondary">
                                <a href="{{ route('about') }}" style="color: white;">
                                    Tìm hiểu về quỹ
                                </a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
