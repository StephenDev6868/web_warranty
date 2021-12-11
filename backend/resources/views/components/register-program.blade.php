@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/register-program.css')" :generalClass="$name">
    <div class="register-ctn">
        <h2 class="title">Đăng ký chương trình</h2>
        <div class="timeline">
            <ul>
                <li class="step step-1 active">
                    <span class="point"></span>
                    <span class="text">Giấy tờ tuỳ thân</span>
                </li>
                <li class="step step-2">
                    <span class="point"></span>
                    <span class="text">Ảnh chân dung</span>
                </li>
                <li class="step step-3">
                    <span class="point"></span>
                    <span class="text">Thông tin cá nhân</span>
                </li>
            </ul>
        </div>
        <div class="form-register">
            <form action="{{route('post-register-program', $program_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p class="note">Vui lòng gửi giấy tờ còn hạn, hình gốc không scan hay photocopy.</p>
                <div class="select">
                    <select name="" id="">
                        <option value="">Căn cước</option>
                    </select>
                </div>
                <div class="cccd-image">
                    <div class="img-ctn before-imge">
                        <div class="upload-ctn">
                            <div class="left">
                                <img src="{{ asset('images/cccd-before.png') }}" alt="" id="cccd_before_img">
                            </div>
                            <div class="right">
                                <p class="description">Hình chụp <span>MẶT TRƯỚC</span> tài liệu định dạng</p>

                                <label class="upload-btn" for="cccd_before">
                                    <input type="file" hidden id="cccd_before" img-id="cccd_before_img" name="id_card_image_front" accept="image/*">
                                    <img src="{{ asset('images/upload-img.png') }}" alt="">
                                    <span>Tải lên</span>
                                </label>
                            </div>
                        </div>

                        <div class="btn-camera">
                            <a>
                                <img src="{{ asset('images/camera.svg') }}" alt="">
                                <span>Chụp hình mặt trước</span>
                            </a>
                        </div>
                    </div>
                    <div class="img-ctn after-imge">
                        <div class="upload-ctn">
                            <div class="left">
                                <img src="{{ asset('images/cccd-after.png') }}" alt="" id="cccd_after_img">
                            </div>
                            <div class="right">
                                <p class="description">Hình chụp <span>MẶT SAU</span> tài liệu định dạng</p>
                                <label class="upload-btn" for="cccd_after">
                                    <input type="file" hidden id="cccd_after" img-id="cccd_after_img" name="id_card_image_back" accept="image/*">
                                    <img src="{{ asset('images/upload-img.png') }}" alt="" >
                                    <span>Tải lên</span>
                                </label>
                            </div>
                        </div>
                        <div class="btn-camera">
                            <a>
                                <img src="{{ asset('images/camera.svg') }}" alt="">
                                <span>Chụp hình mặt sau</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn-continue">
                    <a>
                        <button class="btn-step-1" type="submit">Tiếp tục đăng ký</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-PrimaryLayout>