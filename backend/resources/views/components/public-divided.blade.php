@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/divided.css')" :generalClass="$name">
    <div class="main-divided">
        <h1 class="hd hd-1 hd-intro">Tổng số liệu quỹ</h1>
        <div class="main-divided-index">
            <div class="main-divided-index-search">
                <select class="main-divided-index-search-select form-control">
                    <option>01/ 08/ 2021</option>
                    <option>01/ 09/ 2021</option>
                    <option>01/ 10/ 2021</option>
                    <option>01/ 11/ 2021</option>
                    <option>01/ 12/ 2021</option>
                </select>
            </div>
            <div class="main-divided-index-result">
                <div class="main-divided-index-result-item">
                    <h3 class="hd hd-2 hd-secondary">3569</h3>
                    <p class="hd hd-5 hd-intro">Số người được hỗ trợ</p>
                </div>
                <div class="main-divided-index-result-item">
                    <h3 class="hd hd-2 hd-secondary">459</h3>
                    <p class="hd hd-5 hd-intro">Tổng số tiền phân chia</p>
                </div>
                <div class="main-divided-index-result-item">
                    <h3 class="hd hd-2 hd-secondary">1794</h3>
                    <p class="hd hd-5 hd-intro">Số người tham gia phân chia</p>
                </div>
            </div>
        </div>

        <div class="main-divided-tab">
            <h3 class="hd hd-28 hd-intro">Số liệu chi tiết từng chương trình</h3>
            <div class="container-custom">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#divided">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#divided1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#divided2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-divided-content tab-content">
            <div class="main-divided-content-program tab-pane container active" id="divided">
                <div class="main-divided-content-program-plan">
                    <div class="container-custom">
                        <div class="main-divided-content-program-plan-box">
                            <div class="main-divided-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                            </div>
                            <div class="main-divided-content-program-plan-box_item">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold text-right">Thống kê</th>
                                            <th class="hd hd-info hd-5-bold"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người tham gia chia sẻ</td>
                                            <td class="hd hd-intro hd-5-bold">569 người</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người đã được hỗ trợ</td>
                                            <td class="hd hd-intro hd-5-bold">3459 người</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-divided-content-program-info">
                    <div class="container-custom">
                        <div class="main-divided-content-program-info-cover">
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('public-divided-full') }}">
                            <button class="btn btn btnc-secondary-outline btnc-medium">Xem toàn bộ danh sách</button>
                        </a>
                    </div>
                </div>
                <div class="main-divided-content-program-chart">
                    <div class="container-custom">
                        <div class="main-divided-content-program-chart-box">
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số liệu các bệnh bị mắc chủ yếu</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư phổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư vú</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Nhồi máu cơ tim cấp tính</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư đường ruột</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số bệnh nhân theo độ tuổi</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">0-12 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">13-29 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">30-39 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">trên 40 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-divided-content-program-chart-text">
                            <p class="hd hd-5 hd-intro text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br> <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-divided-content-program tab-pane container " id="divided1">
                <div class="main-divided-content-program-plan">
                    <div class="container-custom">
                        <div class="main-divided-content-program-plan-box">
                            <div class="main-divided-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                            </div>
                            <div class="main-divided-content-program-plan-box_item">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold text-right">Thống kê</th>
                                            <th class="hd hd-info hd-5-bold"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người tham gia chia sẻ</td>
                                            <td class="hd hd-intro hd-5-bold">569 người</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người đã được hỗ trợ</td>
                                            <td class="hd hd-intro hd-5-bold">3459 người</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-divided-content-program-info">
                    <div class="container-custom">
                        <div class="main-divided-content-program-info-cover">
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                        </div>

                        <a href="./public-divied-full.html">
                            <button class="btn btn btnc-secondary-outline btnc-medium">Xem toàn bộ danh sách</button>
                        </a>
                    </div>
                </div>
                <div class="main-divided-content-program-chart">
                    <div class="container-custom">
                        <div class="main-divided-content-program-chart-box">
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số liệu các bệnh bị mắc chủ yếu</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư phổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư vú</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Nhồi máu cơ tim cấp tính</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư đường ruột</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số bệnh nhân theo độ tuổi</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">0-12 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">13-29 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">30-39 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">trên 40 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-divided-content-program-chart-text">
                            <p class="hd hd-5 hd-intro text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br> <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-divided-content-program tab-pane container " id="divided2">
                <div class="main-divided-content-program-plan">
                    <div class="container-custom">
                        <div class="main-divided-content-program-plan-box">
                            <div class="main-divided-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                            </div>
                            <div class="main-divided-content-program-plan-box_item">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold text-right">Thống kê</th>
                                            <th class="hd hd-info hd-5-bold"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người tham gia chia sẻ</td>
                                            <td class="hd hd-intro hd-5-bold">569 người</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người đã được hỗ trợ</td>
                                            <td class="hd hd-intro hd-5-bold">3459 người</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-divided-content-program-info">
                    <div class="container-custom">
                        <div class="main-divided-content-program-info-cover">
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                            <div class="main-divided-content-program-info-cover-list">
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                                <div class="main-divided-content-program-info-cover-list_item">
                                    <a href="{{ route('public-divided-detail') }}" class="title">
                                        <img src="./assets/icons/Profile.svg" alt="">
                                        <h4 class="hd hd-4 hd-secondary text-left">Nguyễn Ngọc Hà </h4>
                                    </a>
                                    <span class="hd hd-5 hd-intro">
                                        59 tuổi,
                                        ngày tham gia 18/10/20201,
                                        đã chia sẻ: 108.000.000 đ
                                    </span>
                                </div>
                            </div>
                        </div>

                        <a href="Xem toàn bộ danh sách">
                            <button class="btn btn btnc-secondary-outline btnc-medium">Xem toàn bộ danh sách</button>
                        </a>
                    </div>
                </div>
                <div class="main-divided-content-program-chart">
                    <div class="container-custom">
                        <div class="main-divided-content-program-chart-box">
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số liệu các bệnh bị mắc chủ yếu</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư phổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư vú</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Nhồi máu cơ tim cấp tính</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">Ung thư đường ruột</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-1" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-divided-content-program-chart-box_item">
                                <h3 class="hd hd-28 hd-intro text-left">Số bệnh nhân theo độ tuổi</h3>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">0-12 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 100%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">13-29 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 80%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">30-39 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 60%"></div>
                                    </div>
                                </div>

                                <div class="skill-bar">
                                    <div class="skill-bar-title">
                                        <p class="hd hd-5-bold hd-intro">trên 40 tuổi</p>
                                        <p class="hd hd-5-bold hd-intro">468</p>
                                    </div>
                                    <div class="skill-bar-cover">
                                        <div class="skill-bar-cover-process-2" style="width : 20%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-divided-content-program-chart-text">
                            <p class="hd hd-5 hd-intro text-left">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br> <br>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-PrimaryLayout>
