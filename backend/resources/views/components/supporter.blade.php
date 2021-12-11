@php
$name = 'wrapper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/support.css')" :generalClass="$name">
    @php
        // dd($params);
    @endphp
    <div class="search-form-cnt">
        <form action="{{route('supporter')}}" class="search-form" method="GET">
            {{-- @csrf --}}
            <div class="search-select">
                <div class="search-item">
                    <label for="">Công việc</label>
                    <select name="job_id">
                        <option value="">Chọn công việc</option>
                        @foreach ($jobs as $job)
                            <option value="{{$job->id}}" {{$params['job_id']==$job->id?'selected':''}}>{{$job->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="search-item">
                    <label for="">Lĩnh vực hoạt động</label>
                    <select name="field_id" id="">
                        <option value="">Chọn lĩnh vực hoạt động</option>
                        @foreach ($fields as $field)
                            <option value="{{$field->id}}" {{$params['field_id']==$field->id?'selected':''}}>{{$field->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="search-item">
                    <label for="">Tỉnh thành</label>
                    <select name="province_id" id="">
                        <option value="">Chọn tỉnh thành</option>
                        @foreach ($provinces as $province)
                            <option value="{{$province->id}}" {{$params['province_id']==$province->id?'selected':''}}>{{$province->name}}</option>
                        @endforeach
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
            @php
                $detail = $supporters[0];
            @endphp
            <ul class="result-list">
                {{-- <li class="active">
                    <a href="#">LÊ HOÀNG SƠN</a>
                </li> --}}
                @foreach ($supporters as $key => $supporter)
                    @php
                        if($supporter->id == $params['supporter_id']) {
                            $detail = $supporter;
                        }
                    @endphp
                    <li class="supporter-item {{$supporter->id == $params['supporter_id']?'active':''}} {{($params['supporter_id']=='' && $key==0)?'active': ''}}">
                        <a href="/supporter?job_id={{$params['job_id']}}&field_id={{$params['field_id']}}&province_id={{$params['province_id']}}&supporter_id={{$supporter->id}}">{{$supporter->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="search-info">
            <div class="avatar">
                <img src="{{ $detail->thumbnail }}" alt="">
            </div>
            <div class="info">
                <h3 class="name">{{$detail->name}}</h3>
                <div class="ctn-info">
                    <div class="item-info">
                        <p class="title">Quá trình hoạt động</p>
                        <p class="detail">{{$detail->process_work}}</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Khu vực</p>
                        <p class="detail">{{$detail->province_name}}</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Lĩnh vực hoạt động</p>
                        <p class="detail">{{$detail->field_job_name}}</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Liên hệ</p>
                        <p class="detail">{{$detail->info_contact}}</p>
                    </div>
                    <div class="item-info">
                        <p class="title">Công việc</p>
                        <p class="detail">{{$detail->job_name}}</p>
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