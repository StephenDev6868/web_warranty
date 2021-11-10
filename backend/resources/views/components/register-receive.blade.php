@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/register-receive.css')" :generalClass="$name">
    <h2 class="title">Đăng ký nhận hỗ trợ</h2>
    <div class="register-form-wrap">
        <form action="" class="register-form">
            <div class="wrap-input">
                <div class="form-section">
                    <p class="label">Sản phẩm yêu cầu bồi thường <span class="highlight">*</span></p>
                    <p class="input">
                        <select name="" id="">
                            <option value="">Sản phẩm 1</option>
                            <option value="">Sản phẩm 2</option>
                            <option value="">Sản phẩm 3</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Hình thức điều trị <span class="highlight">*</span></p>
                    <p class="input">
                        <select name="" id="">
                            <option value="">Hình thức điều trị 1</option>
                            <option value="">Hình thức điều trị 2</option>
                            <option value="">Hình thức điều trị 3</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Ngày khám/nhập viện<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="date">
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Ngày kết thúc/ ra viện<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="date">
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Tỉnh thành nơi khám chữa bệnh<span class="highlight">*</span></p>
                    <p class="input">
                        <select name="" id="">
                            <option value="">Hà Nội</option>
                            <option value="">Đà Nẵng</option>
                            <option value="">TP Hồ Chí Minh</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Tên cơ sở y tế<span class="highlight">*</span></p>
                    <p class="input">
                        <select name="" id="">
                            <option value="">BV Hà Nội</option>
                            <option value="">BV Đà Nẵng</option>
                            <option value="">BV TP Hồ Chí Minh</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Chẩn đoán bệnh<span class="highlight">*</span></p>
                    <p class="input">
                        <select name="" id="">
                            <option value="">Bệnh A</option>
                            <option value="">Bệnh B</option>
                            <option value="">Bệnh C</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="input">
                        <input type="file" hidden id="uploadFile">
                        <label class="upload-btn" for="uploadFile">
                            <img src="{{ asset('images/upload-img.png') }}" alt="">
                            <span>Tải hồ sơ khám chữa bệnh</span>
                        </label>
                        <label class="file-description">
                            <span class="file-name"><img src="{{ asset('images/pdf-icon.png') }}" alt=""> Hồ sơ bệnh án_Nguyen Hoang Giang.pdf</span>
                            <span class="file-name"><img src="{{ asset('images/image-icon.png') }}" alt=""> image.jpeg</span>
                        </label>
                    </p>
                </div>


            </div>
            <div class="btn-submit-cnt">
                <a href="./history-compensation-0.html">
                    <button class="btn-submit" type="button">Thêm thông tin khám bệnh</button>
                </a>
            </div>
        </form>
    </div>
</x-PrimaryLayout>