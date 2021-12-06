@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-3.css')" :generalClass="$name">
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="menu-select d-flex">
        <div class="menu-item menu-account ">
            <a href="{{ route('history-compensation-one') }}">Thông tin chung</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-two') }}">Quá trình giải quyết</a>
        </div>
        <div class="menu-item menu-history active">
            <a href="{{ route('history-compensation-three') }}">Hồ sơ giấy tờ</a>
        </div>
    </div>
    <!-- info -->
    <div class="info">
        <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc-2.png') }}" alt="">
        </a>
        <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc.png') }}" alt="">
        </a>
        <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc-2.png') }}" alt="">
        </a>
        <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc-2.png') }}" alt="">
        </a>
        <a class="info-item" href="#">
            <img src="{{ asset('images/img-doc-2.png') }}" alt="">
        </a>
    </div>
</x-PrimaryLayout>