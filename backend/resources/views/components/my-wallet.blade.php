@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/my-wallet.css')" :generalClass="$name">
    <!--  -->
    <div class="menu-select d-flex">
        <div class="menu-item menu-account active">
            <a href="./my-wallet.html">Quản lý tài khoản</a>
        </div>
        <div class="menu-item menu-history">
            <a href="./my-wallet-trade-history.html">Lịch sử giao dịch</a>
        </div>
    </div>
    <!-- money-change -->
    <div class="money-change">
        <h3 class="title">Ví của tôi</h3>
        <div class="money-input-container">
            <div class="input-item input-vnd">
                <p class="label">Số lượng VNĐ</p>
                <input type="text">
            </div>
            <div class="input-item icon-change">
                <p class="label">i</p>
                <div class="img-cnt">
                    <img src="{{ asset('images/change-icon.png') }}" alt="">
                </div>
            </div>
            <div class="input-item output-vnd">
                <p class="label">Số lượng xu</p>
                <input type="text">
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
            <form class="account-charge-form">
                <div class="form-section">
                    <p class="label">
                        <label for="">Gửi tiền từ ngân hàng</label>
                    </p>
                    <select name="" id="">
                        <option value="">SCB</option>
                        <option value="">ACB (Ngân hàng Á Châu)</option>
                        <option value="">Techcombank</option>
                        <option value="">Viettinbank</option>
                        <option value="">Agribank</option>
                        <option value="">MB bank</option>
                    </select>
                </div>
                <div class="form-section">
                    <p class="label">
                        <label for="">Lượng VNĐ <a href="#" class="detail">Xem giới hạn</a> </label>
                    </p>
                    <p class="mount">
                        <input type="text">
                        <span class="unit">VND</span>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">
                        <label for="">Mã giao dịch thành công</label>
                    </p>
                    <input type="text">
                </div>
                <p class="btn-contain">
                    <button class="btn-charge">Nạp tiền</button>
                </p>
            </form>
        </div>
        <!-- history -->
        <div class="history-trade">
            <h3 class="title">Lịch sử giao dịch</h3>
            <ul class="trade-list">
                <li class="trade-item">
                    <p class="code">Mã tham chiếu: M52211 P8</p>
                    <p class="date-time">22/09/2021 - 10:06:35</p>
                    <p class="mount">+ 2.000.000 VNĐ</p>
                    <p class="status">
                        <span class="processing">Đang xử lý</span>
                    </p>
                </li>
                <li class="trade-item">
                    <p class="code">Mã tham chiếu: M52211 P8</p>
                    <p class="date-time">22/09/2021 - 10:06:35</p>
                    <p class="mount">+ 2.000.000 VNĐ</p>
                    <p class="status">
                        <span class="canceled">Đã huỷ</span>
                    </p>
                </li>
                <li class="trade-item">
                    <p class="code">Mã tham chiếu: M52211 P8</p>
                    <p class="date-time">22/09/2021 - 10:06:35</p>
                    <p class="mount">+ 2.000.000 VNĐ</p>
                    <p class="status">
                        <span class="successed">Thành công</span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</x-PrimaryLayout>