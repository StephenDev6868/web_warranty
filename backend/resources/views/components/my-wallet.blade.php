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
                    <span class="content-copy">VICS1100NP9</span>
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Tên tài khoản</p>
                <p class="content">
                    <span>CTCP TV DICH VU BAO HIEM VIET NAM</span>
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Số tài khoản</p>
                <p class="content">
                    <span>035255366666</span>
                    <label class="copy-ctn">
                        <img src="{{ asset('images/copy-icon.png') }}" alt="">
                        <span class="copy">Sao chép</span>
                    </label>
                </p>
            </div>
            <div class="info-section">
                <p class="label">Ngân hàng</p>
                <p class="content">
                    <span>MB Bank</span>
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
                @if(session()->has('message'))
                    <div class="popup2 modal fade" id="resultCharge">
                        <div class="popup2-dialog modal-dialog">
                            <div class="popup2-dialog-content modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <img src="{{ asset('icons/close.svg') }}" alt="">
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <img src="{{ asset('images/result_charge.svg') }}" alt="">
                                    <div class="popup2-dialog-content-confirm">
                                        <p class="hd hd-5 hd-intro">
                                            Cảm ơn bạn đã tin tưởng và nạp tiền tại ... <br>
                                            Chúng tôi đang xử lý giao dịch của bạn, vui lòng chờ
                                        </p>
                                    </div>
                                    <button class="btn btnc btnc-secondary" style="height: 40px; width: 200px">
                                        <a class="text-white text-bold" href="{{ route('home') }}">Về trang chủ</a>
                                    </button>
                                </div>
                            </div>
                        </div>
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
                        @case(3)
                        <span class="canceled">Đã huỷ</span>
                        @break
                        @case(2)
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
    @if(session()->has('isSuccess'))
        <button hidden class="btn btnc btnc-secondary" data-toggle="modal" data-target="#alertChargeSuccess" id="chargeBtn">Click me</button>
        <div class="popup1 modal fade" id="alertChargeSuccess">
            <div class="popup1-dialog modal-dialog modal-lg">
                <div class="modal-content text-center">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <img src="{{ asset('icons/close.svg') }}" alt="">
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <div class="img-alert-charge">
                            <img class="w-100" src="{{ asset('images/alert-success-charge.png') }}" alt="">
                        </div>
                        <div class="content-alert">
                            <p class="text text-center mb-5">
                                Cảm ơn bạn đã tin tưởng và nạp tiền<br>
                                Chúng tôi đang xử lý giao dịch của bạn, vui lòng chờ 
                            </p>
                            <p class="tbn-cnt mt-3 btn-home-cnt">
                                <a href="{{route('home')}}" class="btn btnc-secondary">Về trang chủ</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                $('#chargeBtn').click();
                }, 2000);
            });
        </script>
    @endif


</x-PrimaryLayout>

<script>
    $(document).ready(function() {
        jQuery('#resultCharge').modal('show');

        $('.copy-ctn').click(function($event) {
            const content = $(this).prev()[0].textContent;
            console.log(content);
            navigator.clipboard.writeText(content).then(function() {
              alert('Đã copy');
            }, function(err) {
            });
        });
    });

</script>
