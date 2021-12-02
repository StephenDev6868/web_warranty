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
                                {{ $banner->content }} {{ $banner->file_image }}
                            </p>
                            <button class="btn btn btnc btnc-large btnc-secondary">Tìm hiểu về quỹ</button>
                        </div>
                    </div>
                @endforeach
{{--                <div class="carousel-item active">--}}
{{--                    <img class="d-block w-100" src="{{asset('images/banner_1.png')}}" alt="Los Angeles">--}}
{{--                    <div class="container-custom banner__slider__carousel__inner__item__content">--}}
{{--                        <h1 class="hd hd-1 hd-info">Cộng đồng hỗ trợ</h1>--}}
{{--                        <p class="hd hd-5 hd-info banner__slider__carousel__inner__item__content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>--}}
{{--                        <button class="btn btn btnc btnc-large btnc-secondary">Tìm hiểu về quỹ</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block w-100" src="{{asset('images/banner_1.png')}}" alt="Chicago">--}}
{{--                    <div class="container-custom banner__slider__carousel__inner__item__content">--}}
{{--                        <h1 class="hd hd-1 hd-info">Cộng đồng hỗ trợ</h1>--}}
{{--                        <p class="hd hd-5 hd-info banner__slider__carousel__inner__item__content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>--}}
{{--                        <button class="btn btnc btnc-large btnc-secondary">Tìm hiểu về quỹ</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block w-100" src="{{asset('images/banner_1.png')}}" alt="New York">--}}
{{--                        <div class="container-custom banner__slider__carousel__inner__item__content">--}}
{{--                        <h1 class="hd hd-1 hd-info">Cộng đồng hỗ trợ</h1>--}}
{{--                        <p class="hd hd-5 hd-info banner__slider__carousel__inner__item__content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>--}}
{{--                        <button class="btn btnc btnc-large btnc-secondary">Tìm hiểu về quỹ</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
