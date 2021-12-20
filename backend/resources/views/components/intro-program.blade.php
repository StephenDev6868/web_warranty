<div class="main-intro">
    <div class="container-custom">
        <h1 class="hd hd-1 hd-intro">Chương trình bảo hiểm</h1>
        <div class="main-intro-box">
            @foreach($programs as $program)
                <div class="card" style="width: 580px;">
                    <img class="card-img-top" srcset="{{asset('images/chuong_trinh_'. ((int) $loop->index + 1) .'.png')}} 2x" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title hd-4">{{ $program['title'] }}</h5>
                        <p class="card-text">{{ $program['content']  }}</p>
                        <a href="{{ route('assurance') }}" >
                            <button class="btn btnc btnc-large btnc-secondary-outline">
                                Xem chi tiết
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@section('handle-js')
    <script src="{{asset('js/main-intro.js')}}"></script>
@endsection
