@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/history-compensation-0.css')" :generalClass="$name">
    @php
    // dd($compensations);
    @endphp
    <h2 class="title">Lịch sử bồi thường</h2>
    <div class="list-data">
        @foreach ($compensations as $compensation)
        <div class="item-data">
            <div class="row-data row-data-1">
                <a href="{{ route('history-compensation-one') }}">
                    <p class="name left">{{$compensation->user_name}}</p>
                    <p class="icon right"><img src="{{ asset('images/arrow-icon.png') }}" alt=""></p>
                </a>
            </div>
            <div class="row-data">
                <p class="left">Ngày thông báo: </p>
                <p class="right">{{date('d-m-Y', strtotime( $compensation->notify_date));}}</p>
            </div>
            <div class="row-data">
                <p class="left">Yêu cầu bồi thường: </p>
                <p class="right mount">{{ number_format($compensation->mount_request) }} VNĐ</p>
            </div>
            <div class="row-data status">
                <p class="left">Trạng thái hồ sơ:</p>
                @switch($compensation->status)
                    @case(1)
                        <p class="right aproved">Đã duyệt phương án</p>
                        @break
                    @case(2)
                        <p class="right reject">Từ chối bồi thường</p>
                        @break
                    @case(3)
                        <p class="right success">Đã thanh toán bồi thường</p>
                        @break
                @endswitch
            </div>
        </div>
        @endforeach
    </div>
</x-PrimaryLayout>