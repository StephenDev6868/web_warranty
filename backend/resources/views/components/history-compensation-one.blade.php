@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-1.css')" :generalClass="$name">
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
    <div class="info">
        <div class="row-info">
            <label for="" class="label">Người thông báo:</label>
            <label for="" class="description">Nguyễn Thị Hạnh</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Ngày thông báo:</label>
            <label for="" class="description">24/12/2020</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Mã hồ sơ:</label>
            <label for="" class="description">11100B886</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Loại hình bảo hiểm:</label>
            <label for="" class="description">Tiếp nhận trực tiếp</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền yêu cầu:</label>
            <label for="" class="description">18.000.000 VNĐ</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền chi trả: </label>
            <label for="" class="description">Đang tính toán</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền giảm:</label>
            <label for="" class="description">Đang tính toán</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Nguyên nhân giảm:</label>
            <label for="" class="description">Không có thông tin</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Trạng thái:</label>
            <label for="" class="description">Hồ sơ đang xử lý</label>
        </div>
    </div>
</x-PrimaryLayout>