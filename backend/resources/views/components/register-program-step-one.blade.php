@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/register-program-step-2.css')" :generalClass="$name">
    <div class="register-ctn">
        <h2 class="title">Đăng ký chương trình</h2>
        <div class="timeline">
            <ul>
                <li class="step step-1 active complete">
                    <span class="point"></span>
                    <span class="text">Giấy tờ tuỳ thân</span>
                </li>
                <li class="step step-2 coming">
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
            @php
                // dd($step0);
            @endphp
            <form action=""{{route('post-register-program-step-one', $program_id)}} method="POST" enctype="multipart/form-data">
                @csrf
                <p class="note">Vui lòng cung cấp cho chúng tôi hình ảnh thật chân dung của bạn</p>
                <div class="portrait-image">
                    <div class="img-ctn before-imge">
                        <div class="upload-ctn">
                            <div class="left">
                                <img src="{{ asset('images/cccd-before.png') }}" alt="" id="cccd_before_img">
                            </div>
                            <div class="right">
                                <p class="description">Cung cấp hình ảnh chân dung của bạn.</p>

                                <label class="upload-btn" for="cccd_before">
                                    <input type="file" hidden id="cccd_before" img-id="cccd_before_img" name="portrait_image">
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