@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/register-receive.css')" :generalClass="$name">
    <h2 class="title">Đăng ký nhận hỗ trợ</h2>
    <div class="register-form-wrap">

        <form class="register-form" method="POST" action="{{route('post-register-receive')}}"
            enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
            @endif
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="wrap-input">

                <div class="form-section">
                    <p class="label">Sản phẩm yêu cầu bồi thường <span class="highlight">*</span></p>
                    <p class="input">
                        <select name="package_id">
                            @foreach ($packages as $package)
                            <option value="{{$package->id}}">{{$package->package_name}}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Hình thức điều trị <span class="highlight">*</span></p>
                    <p class="input">
                        <select name="treatment_type" id="">
                            <option value="1">Nội trú</option>
                            <option value="2">Ngoại trú</option>
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Ngày khám/nhập viện<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="date" name="date_start">
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Ngày kết thúc/ ra viện<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="date" name="date_end">
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Tỉnh thành nơi khám chữa bệnh<span class="highlight">*</span></p>
                    <p class="input">
                        <select id="" name="province_id">
                            @foreach ($provinces as $province)
                            <option value="{{$province->id}}">{{$province->name}}</option>
                            @endforeach
                        </select>
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Tên cơ sở y tế<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="text" name="hospital">
                    </p>
                </div>
                <div class="form-section">
                    <p class="label">Chẩn đoán bệnh<span class="highlight">*</span></p>
                    <p class="input">
                        <input type="text" name="disease">
                    </p>
                </div>
                <div class="form-section">
                    <p class="input">
                        <input type="file" hidden id="uploadFile" multiple name="file_data[]">
                        <label class="upload-btn" for="uploadFile">
                            <img src="{{ asset('images/upload-img.png') }}" alt="">
                            <span>Tải hồ sơ khám chữa bệnh</span>
                        </label>
                        <label class="file-description" id="file_description">
                            {{-- <span class="file-name"><img src="{{ asset('images/pdf-icon.png') }}" alt=""> Hồ sơ
                                bệnh
                                án_Nguyen Hoang Giang.pdf</span>
                            <span class="file-name"><img src="{{ asset('images/image-icon.png') }}" alt="">
                                image.jpeg</span> --}}
                        </label>
                    </p>
                </div>


            </div>
            <div class="btn-submit-cnt">
                <a href="{{ route('history-compensation-zero') }}">
                    <button class="btn-submit" type="submit">Thêm thông tin khám bệnh</button>
                </a>
            </div>
        </form>
    </div>
</x-PrimaryLayout>

<script>
    $(document).ready(function() {
        console.log( "ready!" );
        $('#uploadFile').change(function($event) {
            if($event.target.files.length > 0) {
                $('#file_description').empty();
                let arrFiles = $event.target.files;
                for(let i = 0; i < arrFiles.length; i++) {
                    let elHTML = `<span class="file-name"><img src="{{ asset('images/pdf-icon.png') }}" alt="">${arrFiles[i].name}</span>`;
                    if(arrFiles[i].type === 'image/jpeg') {
                        elHTML = `<span class="file-name"><img src="{{ asset('images/image-icon.png') }}" alt="">${arrFiles[i].name}</span>`;
                    }
                    $('#file_description').append(elHTML);
                }
            }
        });
    });
</script>