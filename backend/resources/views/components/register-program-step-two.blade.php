@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/register-program-step-3.css')" :generalClass="$name">
    <div class="register-ctn">
        <h2 class="title">Đăng ký chương trình</h2>
        <div class="timeline">
            <ul>
                <li class="step step-1 active complete">
                    <span class="point"></span>
                    <span class="text">Giấy tờ tuỳ thân</span>
                </li>
                <li class="step step-2 complete">
                    <span class="point"></span>
                    <span class="text">Ảnh chân dung</span>
                </li>
                <li class="step step-3 coming">
                    <span class="point"></span>
                    <span class="text">Thông tin cá nhân</span>
                </li>
            </ul>
        </div>
        <div class="form-register">
            <form>
                <div class="form-wrap">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ và tên (*)" name="fullName">
                    </div>
                    <div class="form-group d-flex">
                        <input type="text" class="form-control mr-2" placeholder="Số điện thoại (*)" name="phoneNumber">
                        <input type="text" class="form-control" placeholder="Nhập email" name="email">
                    </div>
                    <div class="form-group d-flex">
                        <select class="form-control mr-2" name="" id="">
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                            <option value="">Khác</option>
                        </select>
                        <input type="date" class="form-control" name="birthDay" placeholder="Ngày sinh">
                    </div>
                    <div class="form-group d-flex">
                        <input type="text" class="form-control mr-2" placeholder="Số CMND/ CCCD" name="cccd">
                        <input type="text" class="form-control" placeholder="Số bảo hiểm y tế" name="bhyt">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Số điện thoại của bố/ mẹ  ( dành cho trẻ em dưới 14 tuổi)" name="phoneForChild">
                    </div>
                    <div class="form-group policy-checkbox">
                        <input type="checkbox" name="policy" id="policy" class="mr-2">
                        <label for="policy">Tôi đồng ý với <a href="#">thoả thuận điều kiện</a> tham gia chương trình của Vicscorp</label>
                    </div>
                    <div class="form-group">
                        <input type="file" name="file" id="file" hidden>
                        <label for="file" class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/upload_file2.svg') }}" alt="" class="mr-2">
                            <span>Tải hồ sơ khám chữa bệnh</span>
                        </label>
                    </div>
                </div>
                
                <div class="btn-continue">
                    <a href="{{ route('my-program') }}">
                        <button class="btn-step-1" type="button">Đăng ký chương trình</button>
                    </a>   
                </div>
            </form>
        </div>
    </div>
</x-PrimaryLayout>