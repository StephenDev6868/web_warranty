@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/divided-detail.css')" :generalClass="$name">
    <div class="main-divided">
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

                <div class="main-divided-content-program-breadcum">
                    <div class="container-custom">
                        <div class="main-divided-content-program-breadcum-info">
                            <p class="hd hd-5-bold hd-secondary">Nguyễn Ngọc Hà</p>
                            <p class="hd hd-5 hd-intro">52 tuổi</p>
                            <p class="hd hd-5 hd-intro">Bệnh ung thư phổi</p>
                        </div>
                    </div>
                </div>

                <div class="main-divided-content-program-show">
                    <div class="container-custom">
                        <div class="hd hd-5-bold hd-info title-patient">Chi tiết bệnh nhân này</div>

                        <h5 class="hd hd-5-bold hd-primary">Kiểm tra khái quát</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Quá trình điều tra</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Tài liệu liên quan</h5>
                        <div class="eviden-doc" id="eviden-doc-1">
                            <div class="eviden-doc-list {{ auth()->guard('user')->check() === false ? 'inactive' : '' }}">
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_2.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                            </div>
                            @if(auth()->guard('user')->check() === false)
                                <div class="eviden-doc-popup-inactive">
                                    <p class="hd hd-5 hd-intro">Để xem chi tiết bệnh án, bạn cần phải đăng nhập, đi tới đăng ký, đăng nhập ngay</p>
                                    <a href="{{ route('assurance') }}">
                                        <button class="btn btnc btnc-secondary-outline">Đăng ký</button>
                                    </a>
                                    <a>
                                        <button class="btn btnc btnc-secondary" data-toggle="modal" data-target="#signIn">Đăng nhập</button>
                                    </a>
                                </div>
                            @endif
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

                <div class="main-divided-content-program-breadcum">
                    <div class="container-custom">
                        <div class="main-divided-content-program-breadcum-info">
                            <p class="hd hd-5-bold hd-secondary">Nguyễn Ngọc Hà</p>
                            <p class="hd hd-5 hd-intro">52 tuổi</p>
                            <p class="hd hd-5 hd-intro">Bệnh ung thư phổi</p>
                        </div>
                    </div>
                </div>

                <div class="main-divided-content-program-show">
                    <div class="container-custom">
                        <div class="hd hd-5-bold hd-info title-patient">Chi tiết bệnh nhân này</div>

                        <h5 class="hd hd-5-bold hd-primary">Kiểm tra khái quát</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Quá trình điều tra</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Tài liệu liên quan</h5>
                        <div class="eviden-doc" id="eviden-doc-2">
                            <div class="eviden-doc-list {{ auth()->guard('user')->check() === false ? 'inactive' : '' }}">
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_2.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                            </div>
                            @if(auth()->guard('user')->check() === false)
                                <div class="eviden-doc-popup-inactive">
                                    <p class="hd hd-5 hd-intro">Để xem chi tiết bệnh án, bạn cần phải đăng nhập, đi tới đăng ký, đăng nhập ngay</p>
                                    <a href="{{ route('assurance') }}">
                                        <button class="btn btnc btnc-secondary-outline">Đăng ký</button>
                                    </a>
                                    <a>
                                        <button class="btn btnc btnc-secondary" data-toggle="modal" data-target="#signIn">Đăng nhập</button>
                                    </a>
                                </div>
                            @endif
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

                <div class="main-divided-content-program-breadcum">
                    <div class="container-custom">
                        <div class="main-divided-content-program-breadcum-info">
                            <p class="hd hd-5-bold hd-secondary">Nguyễn Ngọc Hà</p>
                            <p class="hd hd-5 hd-intro">52 tuổi</p>
                            <p class="hd hd-5 hd-intro">Bệnh ung thư phổi</p>
                        </div>
                    </div>
                </div>

                <div class="main-divided-content-program-show">
                    <div class="container-custom">
                        <div class="hd hd-5-bold hd-info title-patient">Chi tiết bệnh nhân này</div>

                        <h5 class="hd hd-5-bold hd-primary">Kiểm tra khái quát</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Quá trình điều tra</h5>
                        <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>

                        <h5 class="hd hd-5-bold hd-primary">Tài liệu liên quan</h5>
                        <div class="eviden-doc" id="eviden-doc-1">
                            <div class="eviden-doc-list {{ auth()->guard('user')->check() === false ? 'inactive' : '' }}">
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_2.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                                <div class="eviden-doc-list_item">
                                    <img srcset="{{ asset('images/doc_hop_1.png') }} 2x" alt="">
                                </div>
                            </div>
                            @if(auth()->guard('user')->check() === false)
                                <div class="eviden-doc-popup-inactive">
                                    <p class="hd hd-5 hd-intro">Để xem chi tiết bệnh án, bạn cần phải đăng nhập, đi tới đăng ký, đăng nhập ngay</p>
                                    <a href="{{ route('assurance') }}">
                                        <button class="btn btnc btnc-secondary-outline">Đăng ký</button>
                                    </a>
                                    <a>
                                        <button class="btn btnc btnc-secondary" data-toggle="modal" data-target="#signIn">Đăng nhập</button>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-PrimaryLayout>
