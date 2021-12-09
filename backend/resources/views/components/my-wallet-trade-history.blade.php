@php
    $name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/my-wallet-trade-history.css')" :generalClass="$name">
    <div class="menu-select d-flex">
        <div class="menu-item menu-account">
            <a href="{{ route('my-wallet') }}">Quản lý tài khoản</a>
        </div>
        <div class="menu-item menu-history active">
            <a href="{{ route('my-wallet-trade-history')  }}">Lịch sử giao dịch</a>
        </div>
     </div>
    <div class="trade-history-container">
        <div class="filter">
            <select name="" id="aa">
                <option value="">Tất cả các giao dịch</option>
            </select>
            <input type="date">
        </div>
        <div class="summary">
            <div class="summary-item">
                        <span class="icon">
                            <img src="{{ asset('images/down-arrow.png') }}" alt="">
                        </span>
                <span class="label">Chi:</span>
                <span class="value">12.500.000 VNĐ</span>
            </div>
            <div class="summary-item">
                        <span class="icon">
                            <img src="{{ asset('images/up-arrow.png') }}" alt="">
                        </span>
                <span class="label">Thu</span>
                <span class="value">12.500.000 VNĐ</span>
            </div>

            <div class="summary-item">
                        <span class="icon">
                            <img src="{{ asset('images/wallet.png') }}" alt="">
                        </span>
                <span class="label">Số dư:</span>
                <span class="value">105.000.000 VNĐ</span>
            </div>
        </div>
        <div class="history-list">
            <ul class="list-item">
                <li>
                    <a href="#" class="history-item">
                        <label class="icon-status-ctn down-down">
                            <span class="icon-center">
                                <img src="{{ asset('images/down-arrow.png') }}" alt="">
                            </span>
                            <span class="icon-corner">
                                <img src="{{ asset('images/down-icon-2.png') }}" alt="">
                            </span>
                        </label>
                        <div class="item">
                            <p class="item-title">Phân chia tài khoản tháng 9/2021 theo chương trình 1</p>
                            <span class="date-time">03:35 - 12/09/2021</span>
                        </div>
                        <p class="mount">4.500.000 VNĐ</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="history-item">
                        <label class="icon-status-ctn down-up">
                            <span class="icon-center">
                                <img src="{{ asset('images/down-arrow.png') }}" alt="">
                            </span>
                            <span class="icon-corner">
                                <img src="{{ asset('images/tick-icon.png') }}" alt="">
                            </span>
                        </label>
                        <div class="item">
                            <p class="item-title">Phân chia tài khoản tháng 9/2021 theo chương trình 1</p>
                            <span class="date-time">03:35 - 12/09/2021</span>
                        </div>
                        <p class="mount">4.500.000 VNĐ</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="history-item">
                        <label class="icon-status-ctn up-up">
                            <span class="icon-center">
                                <img src="{{ asset('images/down-arrow.png') }}" alt="">
                            </span>
                            <span class="icon-corner">
                                <img src="{{ asset('images/tick-icon.png') }}" alt="">
                            </span>
                        </label>
                        <div class="item">
                            <p class="item-title">Phân chia tài khoản tháng 9/2021 theo chương trình 1</p>
                            <span class="date-time">03:35 - 12/09/2021</span>
                        </div>
                        <p class="mount">4.500.000 VNĐ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-PrimaryLayout>
