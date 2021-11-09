@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/my-program.css')" :generalClass="$name">
    <div class="program-joined">
        <h2 class="title">Bạn đã tham gia 2 chương trình</h2>
        <p class="coin">
            <span>Bạn đang có: </span>
            <span class="icon">
                <img src="{{ asset('images/coin-icon.png') }}" alt="">
            </span>
            <span class="coin-mount">30.000 xu</span>
        </p>
    </div>
    <div class="programs-list">
        <div class="program-item active">
            <a href="#">Chương trình bảo hiểm sức khoẻ VIBcarre</a>
        </div>
        <div class="program-item">
            <a href="#">Chương trình 2</a>
        </div>
    </div>
    <div class="program-detail">
        <h3 class="program-title">Bảo hiểm sức khoẻ VIBcare</h3>
        <div class="program-time">
            <p class="date-time-ctn">
                <span class="calendar-icon">
                    <img src="{{ asset('images/calendar.png') }}" alt="">
                </span>
                <span class="date-time">Thời gian bắt đầu: 0:00h ngày 12/11/2020</span>
            </p>
            <p class="date-time-ctn">
                <span class="calendar-icon">
                    <img src="{{ asset('images/calendar.png') }}" alt="">
                </span>
                <span class="date-time">Thời gian kết thúc: 23h59’ ngày 12/11/2021</span>
            </p>
        </div>
        <div class="program-data">
            <div class="data-item">
                <img src="{{ asset('images/image-program.png') }}" alt="">
            </div>
            <div class="data-item">
                <div class="table-data">
                    <div class="row-data row-head">
                        <div class="cell-data">Độ tuổi</div>
                        <div class="cell-data">Số tiền</div>
                    </div>
                    <div class="row-data">
                        <div class="cell-data">30 - 39 tuổi</div>
                        <div class="cell-data">40 - 59 tuổi</div>
                    </div>
                    <div class="row-data">
                        <div class="cell-data">40 - 59 tuổi</div>
                        <div class="cell-data">200.000.000đ</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="program-policy-text">
            <dl>
                <dt>
                    <span class="title">Các điều khoản của chương trình</span>
                    <span class="icon">
                        <img src="{{ asset('images/arrow-circle.png') }}" alt="">
                    </span>
                </dt>
                <dd>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="title">Yêu cầu về sức khoẻ</span>
                    <span class="icon">
                        <img src="{{ asset('images/arrow-circle.png') }}" alt="">
                    </span>
                </dt>
                <dd>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="title">Phạm vi bảo vệ</span>
                    <span class="icon">
                        <img src="{{ asset('images/arrow-circle.png') }}" alt="">
                    </span>
                </dt>
                <dd>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="title">Quy tác dành cho khách hàng</span>
                    <span class="icon">
                        <img src="{{ asset('images/arrow-circle.png') }}" alt="">
                    </span>
                </dt>
                <dd>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book
                </dd>
            </dl>
            <dl>
                <dt>
                    <span class="title">Uỷ nhiệm chi</span>
                    <span class="icon">
                        <img src="{{ asset('images/arrow-circle.png') }}" alt="">
                    </span>
                </dt>
                <dd class="no-border">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries,
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book
                </dd>
            </dl>
        </div>
        <div class="btn-ctn">
            <button class="finish-btn">Kết thúc chương trình</button>
        </div>
    </div>
</x-PrimaryLayout>