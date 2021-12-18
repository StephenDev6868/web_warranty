@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/assurances.css')" :generalClass="$name">
    <div class="main-assurances" style="margin-bottom: 0 !important;">
        <div class="main-assurances-tab">
            <div class="container-custom">
                <ul class="nav nav-pills">
                    @foreach($programs as $program)
                    <li class="nav-item">
                        <a class="{{ $loop->index == 0 ? 'nav-link active' : 'nav-link' }}" data-toggle="pill" href="{{ '#assurance' .  $loop->index}}"> {{ $program->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="main-assurances-content tab-content">
            @foreach($programs as $program)
                <div class="main-assurances-content-program tab-pane container {{ $loop->index == 0 ? 'active' : '' }}" id="{{ 'assurance' .  $loop->index}}">
                    <div class="main-assurances-content-program-plan">
                        <div class="container-custom">
                            <div class="main-assurances-content-program-plan-box">
                                <div class="main-assurances-content-program-plan-box_item">
                                    <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                                    <table class="table table-manual">
                                        <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold">Độ tuổi</th>
                                            <th class="hd hd-info hd-5-bold">Số tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">30 - 39 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">500.000.000đ</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">40 - 59 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">200.000.000đ</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="main-assurances-content-program-plan-box_item">
                                    <h1 class="hd hd-1 hd-intro text-left" style="word-break: break-word;">{{ $program->title }}</h1>
                                    <p class="hd hd-5 hd-intro text-left">
                                        {!! nl2br($program->content) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-assurances-content-program-QA">
                        <div class="container-custom">
                            <div id="accordion" style="margin: 76px 0">
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Các điều khoản của chương trình
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapseOne" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->term) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Trường hợp không được nhận hỗ trợ
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapse2" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->requirement) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Phạm vi hỗ trợ
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapse3" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->protection_range) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Nguyên tắc phân chia tiền hỗ trợ trong mỗi kỳ
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapse4" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->customer_rule) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Thời gian chờ
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapse5" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->time_waiting) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="main-assurances-content-program-QA_item">
                                    <div class="title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                            Phí tham gia chương trình
                                            <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                        </a>

                                    </div>
                                    <div id="collapse5" class="body collapse show">
                                        <div class="body-content hd hd-5 hd-intro">
                                            {!! nl2br($program->fee) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-assurances-content-program-doc">
                        <div class="container-custom">
                            <h3 class="hd hd-info hd-4 text-left">Tài liệu tham khảo</h3>
                            <div class="doc-show">
                                @foreach($program->docs as $doc)
                                    <a href="{{ $doc['file_name'] }}" class="doc-show_item" target="_blank">
                                        <img src ="{{ asset('icons/doc_1.svg') }}" alt="">
                                        <p class="hd hd-5 hd-intro">{{ $doc['name'] ? $doc['name'] : 'Quy tắc bảo hiểm'  }}</p>
                                    </a>
                                @endforeach
{{--                                <a href="" class="doc-show_item">--}}
{{--                                    <img src="{{ asset('icons/doc_2.svg') }}" alt="">--}}
{{--                                    <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>--}}
{{--                                </a>--}}
{{--                                <a href="" class="doc-show_item">--}}
{{--                                    <img src="{{ asset('icons/doc_3.svg') }}" alt="">--}}
{{--                                    <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>

                    <div class="main-assurances-content-program-listPeople">
                        <div class="container-custom">
                            <h1 class="hd hd-1 hd-intro">Danh sách người hỗ trợ</h1>
                            <div class="main-assurances-content-program-listPeople">
                                <div id="detail" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#detail" data-slide-to="0" class="active"></li>
                                        <li data-target="#detail" data-slide-to="1"></li>
                                        <li data-target="#detail" data-slide-to="2"></li>
                                    </ul>
                                    <div class="main-assurances-content-program-listPeople-slider carousel-inner">
                                        <div class="carousel-item active">
                                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                            <div class="main-assurances-content-program-listPeople-slider_item">
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                                </div>
                                            </div>
                                            <a href="{{ route('public-divided-detail') }}">
                                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                            <div class="main-assurances-content-program-listPeople-slider_item">
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                                </div>
                                            </div>
                                            <a href="{{ route('public-divided-detail') }}">
                                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                            </a>
                                        </div>

                                        <div class="carousel-item">
                                            <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                            <div class="main-assurances-content-program-listPeople-slider_item">
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                    <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                    <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                    <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                    <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                                </div>
                                                <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                    <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                    <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                    <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                                </div>
                                            </div>
                                            <a href="{{ route('public-divided-detail') }}">
                                                <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-banner-register" style="margin: 80px 0 0 0;">
                        <p class="hd hd-5 hd-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        <a href="{{ route('register-program', encrypt($program->id)) }}" class="hd hd-5 hd-primary">
                            <button class="btn btn btnc btnc-banner btnc-info">Đăng ký tham gia chương trình</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-PrimaryLayout>
