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
             @if ($errors->any())
                 @foreach ($errors->all() as $error)
                     <div class="alert alert-danger" role="alert">
                         {{ $error }}
                     </div>
                 @endforeach
             @endif
            <form method="POST" action=""{{route('post-register-program-step-two', $program_id)}} enctype="multipart/form-data">
                @csrf
                <div class="form-wrap">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Họ và tên (*)" name="user_name" required>
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" class="form-control mr-2" placeholder="Số điện thoại (*)" name="phone_nums" required>
                        <input type="text" class="form-control" placeholder="Nhập email" name="email">
                    </div>
                    <div class="form-group d-flex">
                        <select class="form-control mr-2" name="sex">
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Khác</option>
                        </select>
                        <input type="date" class="form-control" name="birthday" placeholder="Ngày sinh" required>
                    </div>
                    <div class="form-group d-flex">
                        <input type="number" class="form-control mr-2" placeholder="Số CMND/ CCCD (*)" name="id_card_num" required>
                        <input type="text" class="form-control" placeholder="Số bảo hiểm y tế" name="hi_card_num">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Số điện thoại của bố/ mẹ  ( dành cho trẻ em dưới 14 tuổi)" name="phone_num_parent">
                    </div>
                    <div class="form-group policy-checkbox">
                        <input type="checkbox" name="policy" id="policy" class="mr-2" required>
                        <label for="policy">Tôi đồng ý với <a href="#">thoả thuận điều kiện</a> tham gia chương trình của Vicscorp</label>
                    </div>
                    <div class="form-group">
                        <input type="file" id="file" multiple name="file_data[]" accept=".jpeg,.jpg,.png,.xlsx,.pdf,.docx" hidden>
                        <label for="file" class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('images/upload_file2.svg') }}" alt="" class="mr-2">
                            <span>Tải hồ sơ khám chữa bệnh</span>
                        </label>
                        <label class="file-description" id="file_description">
                        </label>
                    </div>
                </div>
                <div class="btn-continue">
                    <a>
                        <button class="btn-step-1" type="submit" id="sub_btn" disabled>Đăng ký chương trình</button>
                    </a>
                </div>
{{--                @if(session('response'))--}}
{{--                    <h1>DK THANH CONG</h1>--}}
{{--                @endif--}}
            </form>
        </div>
    </div>
</x-PrimaryLayout>

<script>
    $(document).ready(function() {
        console.log( "ready!" );
        $('#file').change(function($event) {
            if($event.target.files.length > 0) {
                $('#file_description').empty();
                let arrFiles = $event.target.files;
                for(let i = 0; i < arrFiles.length; i++) {
                    let elHTML = `<span class="file-name"><img src="{{ asset('images/pdf-icon.png') }}" alt="">${arrFiles[i].name}</span><br/>`;
                    if(arrFiles[i].type === 'image/jpeg') {
                        elHTML = `<span class="file-name"><img src="{{ asset('images/image-icon.png') }}" alt="">${arrFiles[i].name}</span><br/>`;
                    }
                    $('#file_description').append(elHTML);
                }
            }
        });

        $('#policy').change(function($event) {
            if($(this)[0].checked) {
                $('#sub_btn').attr("disabled", false);
            }else {
                $('#sub_btn').attr("disabled", true);
            }
        });
    });


</script>

<style>
    button:disabled{
        opacity: 0.6;
        cursor: not-allowed
    }
</style>
