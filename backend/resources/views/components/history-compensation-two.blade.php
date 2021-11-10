@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-2.css')" :generalClass="$name">
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="menu-select d-flex">
        <div class="menu-item menu-account active">
            <a href="{{ route('history-compensation-one') }}">Thông tin chung</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-two') }}">Quá trình giải quyết</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-three') }}">Hồ sơ giấy tờ</a>
        </div>
    </div>
    <!-- info -->
    <div class="info timeline-ctn">
        <!-- processing -->
        <div class="row-info processing">
            <div class="timeline-icon">
                <span class="cnt-1">
                    <span class="cnt-2">
                        <span class="cnt-3">
                            <img src="{{ asset('images/processing.png') }}" alt="">
                        </span>
                    </span>
                </span>
            </div>
            <div class="description">
                <p class="status">Tình trang hiện tại</p>
                <p class="status-detail">Đang xử lý</p>
            </div>
        </div>
        <!-- processed -->
        <div class="row-info processed">
            <div class="timeline-icon">
                <span class="icon-cnt-processed">
                    <img src="{{ asset('images/processed.png') }}" alt="">
                </span>
            </div>
            <div class="description">
                <p class="date-time">20/07/2021 - 14:35:25</p>
                <p class="detail">CPC PHAM ANH xử lý xong yêu cầu</p>
            </div>
        </div>
        <div class="row-info processed">
            <div class="timeline-icon">
                <span class="icon-cnt-processed">
                    <img src="{{ asset('images/processed.png') }}" alt="">
                </span>
            </div>
            <div class="description">
                <p class="date-time">20/07/2021 - 14:35:25</p>
                <p class="detail">CPC PHAM ANH xử lý xong yêu cầu</p>
            </div>
        </div>
        <div class="row-info processed">
            <div class="timeline-icon">
                <span class="icon-cnt-processed">
                    <img src="{{ asset('images/processed.png') }}" alt="">
                </span>
            </div>
            <div class="description">
                <p class="date-time">20/07/2021 - 14:35:25</p>
                <p class="detail">CPC PHAM ANH xử lý xong yêu cầu</p>
                <p class="detail">CPC PHAM ANH xử lý xong yêu cầu</p>
            </div>
        </div>
    </div>
</x-PrimaryLayout>