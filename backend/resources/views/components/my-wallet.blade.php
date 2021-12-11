@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/my-wallet.css')" :generalClass="$name">
    <!--  -->
    <div class="menu-select d-flex">
        <div class="menu-item menu-account active">
            <a href="{{ route('my-wallet') }}">Quản lý tài khoản</a>
        </div>
        <div class="menu-item menu-history">
            <a href="{{ route('my-wallet-trade-history')  }}">Lịch sử giao dịch</a>
        </div>
    </div>
    <!-- money-change -->
    <div class="money-change">
        <h3 class="title">Ví của tôi</h3>
        <div class="money-input-container">
            <div class="input-item input-vnd">
                <p class="label">Số lượng VNĐ</p>
                <input type="text" disabled value="{{number_format(optional($total)->vnd_nums)}}">
            </div>
            <div class="input-item icon-change">
                <p class="label">i</p>
                <div class="img-cnt">
                    <img src="{{ asset('images/change-icon.png') }}" alt="">
                </div>
            </div>
            <div class="input-item output-vnd">
                <p class="label">Số lượng xu</p>
                <input type="text" disabled value="{{number_format(optional($total)->coin, 4)}}">
                <p class="note">(quy đổi 1 xu = 100.000 vnđ)</p>
            </div>
        </div>
    </div>
    <div class="bank-account-cnt">
        <!-- charge-info -->

        <div class="charge-info">
            <h3 class="title">Thông tin nạp tiền</h3>
            <div class="info-section">
                <p class="label">Nội dung chuyển khoản</p>
                <p class="content">
                    VICS1100NP9
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Tên tài khoản</p>
                <p class="content">
                    CTY CPTM VA DAU TU VICSCORP
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Số tài khoản</p>
                <p class="content">
                    19030001111888999
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Ngân hàng</p>
                <p class="content">
                    Techcombank
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>

        </div>
        <!-- account-charge -->
        <div class="account-charge">
            <h3 class="title">Nạp tiền vào tài khoản</h3>
            <form class="account-charge-form" method="POST" action="{{route('post-my-wallet')}}">
                @csrf
                {{-- @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach --}}

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="form-section">
                    <p class="label">
                        <label for="">Gửi tiền từ ngân hàng</label>
                    </p>
                    @php
                    @endphp
                    <select name="bank_id">
                        @foreach ($banks as $bank)
                        <option value="{{$bank->id}}">{{$bank->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-section">
                    <p class="label">
                        <label for="">Lượng VNĐ <a href="#" class="detail">Xem giới hạn</a> </label>
                    </p>
                    <p class="mount">
                        <input type="number" name="amount">
                        <span class="unit">VND</span>
                    </p>
                    @error('amount')
                    <div class="error" style="color: #AF3914; margin-top: 10px;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-section">
                    <p class="label">
                        <label for="">Mã giao dịch thành công</label>
                    </p>
                    <input type="text" name="code_transaction_bank">
                </div>
                <p class="btn-contain">
                    <button class="btn-charge">Nạp tiền</button>
                </p>
            </form>
        </div>
        <!-- history -->
        <div class="history-trade">
            <h3 class="title">Lịch sử giao dịch</h3>
            @if (count($histories) > 0)
            <ul class="trade-list">
                @foreach ($histories as $history)
                <li class="trade-item">
                    <p class="code">Mã tham chiếu: {{$history->code_reference}}</p>
                    <p class="date-time">{{date('d-m-Y H:i:s', strtotime( $history->done_at))}}</p>
                    <p class="mount">+ {{number_format( $history->amount)}} VNĐ</p>
                    <p class="status">
                        @switch($history->status)
                        @case(1)
                        <span class="processing">Đang xử lý</span>
                        @break
                        @case(2)
                        <span class="canceled">Đã huỷ</span>
                        @break
                        @case(3)
                        <span class="successed">Thành công</span>
                        @break
                        @endswitch
                    </p>
                </li>
                @endforeach
            </ul>
            @else
            <div class="not-found mt-4">
                <p class="text-center">Bạn chưa có giao dịch nào!</p>
                <img src="/images/img-404.png" alt="" class="w-100 mt-4">
            </div>
            @endif
        </div>
    </div>
</x-PrimaryLayout>
