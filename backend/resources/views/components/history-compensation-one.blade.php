@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-1.css')" :generalClass="$name">
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="menu-select d-flex">
        <div class="menu-item menu-account active">
            <a href="{{ route('history-compensation-one', ['id'=> $id]) }}">Thông tin chung</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-two', ['id'=> $id]) }}">Quá trình giải quyết</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('history-compensation-three', ['id'=> $id]) }}">Hồ sơ giấy tờ</a>
        </div>
    </div>
    <!-- info -->
    <div class="info">
        @php
            // dd($history_compensation);
        @endphp
        <div class="row-info">
            <label for="" class="label">Người thông báo:</label>
            <label for="" class="description">Nguyễn Thị Hạnh</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Ngày thông báo:</label>
            <label for="" class="description">{{date('d-m-Y', strtotime( $history_compensation->notify_date));}}</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Mã hồ sơ:</label>
            <label for="" class="description">{{$history_compensation->doc_code}}</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Loại hình bảo hiểm:</label>
           @if ($history_compensation->assurance_type == 1)
            <label for="" class="description">Tiếp nhận trực tiếp</label>
           @else
           <label for="" class="description">Tiếp nhận gián tiếp</label>
           @endif
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền yêu cầu:</label>
            <label for="" class="description">{{ number_format($history_compensation->mount_request) }} VNĐ</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền chi trả: </label>
            <label for="" class="description">{{number_format($history_compensation->mount_pay)}} VNĐ</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Số tiền giảm:</label>
            <label for="" class="description">{{number_format($history_compensation->mount_request - $history_compensation->mount_pay)}} VNĐ</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Nguyên nhân giảm:</label>
            <label for="" class="description">{{$history_compensation->reason_reduce}}</label>
        </div>
        <div class="row-info">
            <label for="" class="label">Trạng thái:</label>
            @switch($history_compensation->status)
                    @case(1)
                        <label for="" class="description">Hồ sơ đang xử lý</label>
                        @break
                    @case(2)
                        <label for="" class="description">Từ chối bồi thường</label>
                        @break
                    @case(3)
                        <label for="" class="description">Đã thanh toán bồi thường</label>
                        @break
                @endswitch
        </div>
    </div>
</x-PrimaryLayout>