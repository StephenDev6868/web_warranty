@php
$name = 'wrapper';
@endphp

<x-PrimaryLayout :pathStyle="asset('css/my-program.css')" :generalClass="$name">
    @php
        $total_programs = count($programs);

        if($total_programs > 0) {
            if($id_detail) {
                foreach ($programs as $key => $value) {
                    if($value->id == Crypt::decrypt($id_detail)) {
                        $program_detail = $value;
                        break;
                    }
                }
            }else {
                $program_detail = $programs[0];
                $id_detail = Crypt::encrypt($program_detail->id);
            }
        }
    @endphp
    <div class="program-joined">
        <h2 class="title">Bạn đã tham gia {{$total_programs}} chương trình</h2>
        <p class="coin">
            <span>Bạn đang có: </span>
            <span class="icon">
                <img src="{{ asset('images/coin-icon.png') }}" alt="">
            </span>
            <span class="coin-mount">{{number_format(optional($wallet)->coin)}} xu</span>
        </p>
    </div>
    <div class="programs-list">
        @if ($total_programs > 0)

            @foreach ($programs as $program)
            {{-- {{ Crypt::encrypt($program->id) .'----'. $id_detail.'<br/>'}} --}}
                <div class="program-item {{$program->id == Crypt::decrypt($id_detail) ? 'active':'xxxx'}}">
                    <a href="{{route('my-program', ['id'=> Crypt::encrypt($program->id)])}}">{{$program->title}}</a>
                </div>
            @endforeach
            {{-- <div class="program-item active">
                <a href="#">Chương trình bảo hiểm sức khoẻ VIBcarre</a>
            </div> --}}
        @endif

    </div>
    @if ($total_programs > 0)
        <div class="program-detail">
            <h3 class="program-title">{{$program_detail->title}}</h3>
            <div class="program-time">
                <p class="date-time-ctn">
                    <span class="calendar-icon">
                        <img src="{{ asset('images/calendar.svg') }}" alt="">
                    </span>
                    <span class="date-time">Thời gian bắt đầu: {{date('H:i', strtotime($program_detail->started_at))}}h ngày {{date('d-m-Y', strtotime($program_detail->started_at))}}</span>
                </p>
                <p class="date-time-ctn">
                    <span class="calendar-icon">
                        <img src="{{ asset('images/calendar.svg') }}" alt="">
                    </span>
                    <span class="date-time">Thời gian kết thúc: {{date('H:i', strtotime($program_detail->end_at))}}h ngày {{date('d-m-Y', strtotime($program_detail->end_at))}}</span>
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
                        {{$program_detail->term}}
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
                        {{$program_detail->requirement}}
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
                        {{$program_detail->protection_range}}
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
                        {{$program_detail->customer_rule}}
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
                        {{$program_detail->time_waiting}}
                    </dd>
                </dl>
            </div>
            <div class="btn-ctn">
                <button class="finish-btn">Kết thúc chương trình</button>
            </div>
        </div>
    @else
        <div class="not-found mt-4">
            <img src="/images/img-404.png" alt="" class="w-100 mt-4">
        </div>
    @endif

</x-PrimaryLayout>
