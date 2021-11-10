@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/devide-user.css')" :generalClass="$name">
    <h2 class="title">Công khai phân chia của tôi</h2>
    <div class="summary-data">
        <div class="data-item date">
            <p class="label">Số ngày bảo vệ</p>
            <p class="data">499 ngày</p>
            <img src="{{ asset('images/calendar.png') }}" alt="">
        </div>
        <div class="data-item users">
            <p class="label">Số người phân chia</p>
            <p class="data">117 người</p>
            <img src="{{ asset('images/people.png') }}" alt="">
        </div>
        <div class="data-item money">
            <p class="label">Số tiền giúp đỡ</p>
            <p class="data">50.000.000đ</p>
            <img src="{{ asset('images/cash.png') }}" alt="">
        </div>
    </div>
    <div class="detail-list-data">
        <h3 class="title">Số người hỗ trợ và số tiền phân chia trong từng kỳ</h3>
        <div class="list-data">
            <div class="data-item">
                <div class="left-data">
                    <p class="item-title">
                        <a href="#">
                            Tháng 8/ 2021, 112 người tham gia phân chia
                        </a>
                    </p>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </p>
                </div>
                <div class="right-data">
                    <p class="mount">1.200.000 VNĐ</p>
                </div>
            </div>
            <div class="data-item">
                <div class="left-data">
                    <p class="item-title">
                        <a href="#">
                            Tháng 8/ 2021, 112 người tham gia phân chia
                        </a>
                    </p>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </p>
                </div>
                <div class="right-data">
                    <p class="mount">1.200.000 VNĐ</p>
                </div>
            </div>
            <div class="data-item">
                <div class="left-data">
                    <p class="item-title">
                        <a href="#">
                            Tháng 8/ 2021, 112 người tham gia phân chia
                        </a>
                    </p>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </p>
                </div>
                <div class="right-data">
                    <p class="mount">11.200.000 VNĐ</p>
                </div>
            </div>
            <div class="data-item">
                <div class="left-data">
                    <p class="item-title">
                        <a href="#">
                            Tháng 8/ 2021, 112 người tham gia phân chia
                        </a>
                    </p>
                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. </p>
                </div>
                <div class="right-data">
                    <p class="mount">1.200.000 VNĐ</p>
                </div>
            </div>
        </div>
    </div>
</x-PrimaryLayout>