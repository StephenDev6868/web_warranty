@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/divided_full.css')" :generalClass="$name">
    <div class="main-divided">
        <div class="main-divided-tab">
            <h3 class="hd hd-28 hd-intro">Số liệu chi tiết từng chương trình</h3>
            <div class="container-custom">
                <ul class="nav nav-pills">
                    @foreach($programs as $program)
                        <li class="nav-item">
                            <a class="{{ $loop->index == 0 ? 'nav-link active' : 'nav-link' }}" data-toggle="pill" href="{{'#divided' . $loop->index }}">
                                {{ $program->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="main-divided-content tab-content">
            @foreach($programs as $program)
                <div class="main-divided-content-program tab-pane container {{ $loop->index == 0 ? 'active' : '' }}" id="{{'divided' . $loop->index }}">
                    <div class="main-divided-content-program-plan">
                        <div class="container-custom">
                            <div class="main-divided-content-program-plan-filter">
                                <input type="date" class="form-control" placeholder="MM/DD/YYYYs">
                                <select class="form-control">
                                    <option>Tất cả các loại bệnh</option>
                                    @foreach($disease as $item)
                                        <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="main-divided-content-program-plan-box">
                                <div class="main-divided-content-program-plan-box_item">
                                    <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                                </div>
                                <div class="main-divided-content-program-plan-box_item">
                                    <table class="table table-manual">
                                        <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold text-right">Thống kê</th>
                                            <th class="hd hd-info hd-5-bold"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người tham gia chia sẻ</td>
                                            <td class="hd hd-intro hd-5-bold">{{ $program['count'] }} người</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5">Số người đã được hỗ trợ</td>
                                            <td class="hd hd-intro hd-5-bold">0 người</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-divided-content-program-info">
                        <div class="container-custom">
                            <div class="main-divided-content-program-info-cover">
                                @foreach($program['user'] as $users)
                                    <div class="main-divided-content-program-info-cover-list">
                                        @foreach($users as $item)
                                            <div class="main-divided-content-program-info-cover-list_item" style="width: 30rem;">
                                                <a href="{{ route('public-divided-detail') }}" class="title">
                                                    <img src="{{ asset('icons/Profile.svg') }}" alt="">
                                                    <h4 class="hd hd-4 hd-secondary text-left">{{ $item['user_name'] }}</h4>
                                                </a>
                                                <span class="hd hd-5 hd-intro">
                                                    {{ $item['birthday'] }} tuổi,
                                                    ngày tham gia {{ $item['created_at'] }},
                                                    đã chia sẻ:{{ $item['vnd_nums'] }} đ
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-PrimaryLayout>
