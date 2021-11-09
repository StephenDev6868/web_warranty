@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-0.css')" :generalClass="$name">
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="list-data">
        <div class="item-data">
            <div class="row-data row-data-1">
                <a href="{{ route('history-compensation-one') }}">
                    <p class="name left">Lê Tiến Phúc</p>
                    <p class="icon right"><img src="{{ asset('images/arrow-icon.png') }}" alt=""></p>
                </a>
            </div>
            <div class="row-data">
                <p class="left">Ngày thông báo: </p>
                <p class="right">28/05/2021</p>
            </div>
            <div class="row-data">
                <p class="left">Yêu cầu bồi thường: </p>
                <p class="right mount">6.000.000 VNĐ</p>
            </div>
            <div class="row-data status">
                <p class="left">Trạng thái hồ sơ:</p>
                <p class="right success">Đã thanh toán bồi thường</p>
            </div>
        </div>
        <div class="item-data">
            <div class="row-data row-data-1">
                <a href="{{ route('history-compensation-one') }}">
                    <p class="name left">Lê Tiến Phúc</p>
                    <p class="icon right"><img src="{{ asset('images/arrow-icon.png') }}" alt=""></p>
                </a>
            </div>
            <div class="row-data">
                <p class="left">Ngày thông báo: </p>
                <p class="right">28/05/2021</p>
            </div>
            <div class="row-data">
                <p class="left">Yêu cầu bồi thường: </p>
                <p class="right mount">6.000.000 VNĐ</p>
            </div>
            <div class="row-data status">
                <p class="left">Trạng thái hồ sơ:</p>
                <p class="right aproved">Đã duyệt phương án</p>
            </div>
        </div>
        <div class="item-data">
            <div class="row-data row-data-1">
                <a href="{{ route('history-compensation-one') }}">
                    <p class="name left">Lê Tiến Phúc</p>
                    <p class="icon right"><img src="{{ asset('images/arrow-icon.png') }}" alt=""></p>
                </a>
            </div>
            <div class="row-data">
                <p class="left">Ngày thông báo: </p>
                <p class="right">28/05/2021</p>
            </div>
            <div class="row-data">
                <p class="left">Yêu cầu bồi thường: </p>
                <p class="right mount">6.000.000 VNĐ</p>
            </div>
            <div class="row-data status">
                <p class="left">Trạng thái hồ sơ:</p>
                <p class="right reject">Từ chối bồi thường</p>
            </div>
        </div>
    </div>
</x-PrimaryLayout>