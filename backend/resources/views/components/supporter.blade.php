@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/support.css')" :generalClass="$name">
    <div class="search-form-cnt">
        <form action="" class="search-form">
            <div class="search-select">
                <div class="search-item">
                    <label for="">Công việc</label>
                    <select name="" id="">
                        <option value="">Marketing</option>
                    </select>
                </div>
                <div class="search-item">
                    <label for="">Lĩnh vực hoạt động</label>
                    <select name="" id="">
                        <option value="">Chọn lĩnh vực hoạt động</option>
                    </select>
                </div>
                <div class="search-item">
                    <label for="">Tỉnh thành</label>
                    <select name="" id="">
                        <option value="">Chọn tỉnh thành</option>
                    </select>
                </div>
            </div>
            <div class="search-btn">
                <button>
                    <img src="{{ asset('images/search-icon.png') }}" alt="">
                    <span>Tìm kiếm</span>
                </button>
            </div>
        </form>
        <div class="search-result">
            <ul class="result-list">
                <li class="active">
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
                <li>
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li>
            </ul>
        </div>
        <div class="search-info">
            <div class="avatar">
                <img src="{{ asset('images/avatar.png') }}" alt="">
            </div>
            <div class="info">
                <h3 class="name">LÊ HOÀNG SƠN</h3>
                <div class="ctn-info">
                    <div class="item-info">
                        <p class="title">Quá trình hoạt động</p>
                        <p class="detail">Giám đốc kinh doanh công ty CTA</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Khu vực</p>
                        <p class="detail">Hà Nội, Bắc Ninh</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Lĩnh vực hoạt động</p>
                        <p class="detail">Phi nhân thọ, nhân thọ</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Liên hệ</p>
                        <p class="detail">0989. 577. 880 | lehoangson@gmail.com</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Công việc</p>
                        <p class="detail">Đại lý</p>
                    </div>
                    <div class="item-info">
                        <p class="detail"><a href="">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <img src="{{ asset('images/map.png') }}" alt="">
    </div>
</x-PrimaryLayout>