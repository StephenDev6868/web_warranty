@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/assurances.css')" :generalClass="$name">
    <div class="main-assurances">
        <div class="main-assurances-tab">
            <div class="container-custom">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#assurance">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#assurance1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#assurance2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-assurances-content tab-content">
            <div class="main-assurances-content-program tab-pane container active" id="assurance">
                <div class="main-assurances-content-program-plan">
                    <div class="container-custom">
                        <div class="main-assurances-content-program-plan-box">
                            <div class="main-assurances-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold">Độ tuổi</th>
                                            <th class="hd hd-info hd-5-bold">Số tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">30 - 39 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">300.000.000đ</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">40 - 59 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">200.000.000đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-assurances-content-program-plan-box_item">
                                <h1 class="hd hd-1 hd-intro text-left">Kế hoạch hỗ trợ</h1>
                                <p class="hd hd-5 hd-intro text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                    survived not only five centuries, <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-QA">
                    <div class="container-custom">
                        <div id="accordion" style="margin: 76px 0">
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Các điều khoản của chương trình
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapseOne" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Yêu cầu về sức khoẻ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse2" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Phạm vi bảo vệ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse3" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Quy tác dành cho khách hàng
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse4" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Phạm vi hỗ trợ của chương trình đối với các bệnh nặng, nghiêm trọng với 99 bệnh hiểm nghèo + khối u ác tính + các bệnh hiếm gặp cụ thể, hỗ trợ tối đa là 30 vạn nhân dân tệ. Phạm vi hỗ trợ đối với chương trình chống ung thư dành cho người mắc bệnh mãn tính và chống ung thư cho người già tối đa nhận được 10 vạn tệ. Tử vong và tàn tật do tai nạn khi di chuyển bằng phương tiện đang vận hành liên quan đến nước Việt Nam bao gồm: máy bay hàng không dân dụng, tàu khách, phương tiện vận tải đường sắt (tàu điện ngầm, đường sắt), phương tiện chở khách (xe bus, xe bus đường dài, xe điện, taxi, nền tảng và các dịch vụ gọi xe trực tuyến) đã được chính phủ đăng ký và phê duyệt cho mục đích hoạt động, hỗ trợ cao nhất lên tới 100 vạn nhân dân. 
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Uỷ nhiệm chi
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse5" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Đáp ứng các yêu cầu về sức khoẻ hoặc quy tắc hỗ trợ khi bị tai nạn giao thông công cộng, về bệnh tật hoặc thương tật do tai nạn nằm trong phạm vi hỗ trợ. Các loại bệnh hoặc là bị thương do tai nạn có trong phạm vi bảo vệ sẽ có hiệu lực. Bạn có thể đăng ký hỗ trợ sau khi kiểm tra sức khoẻ hoặc bị trấn thương do tai nạn. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-doc">
                    <div class="container-custom">
                        <h3 class="hd hd-info hd-4 text-left">Tài liệu tham khảo</h3>

                        <div class="doc-show">
                            <a href="" class="doc-show_item">
                                <img src ="{{ asset('icons/doc_1.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_2.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_3.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-listPeople">
                    <div class="container-custom">
                        <h1 class="hd hd-1 hd-intro">Danh sách người hỗ trợ</h1>
                        <div class="main-assurances-content-program-listPeople">
                            <div id="detail" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#detail" data-slide-to="0" class="active"></li>
                                    <li data-target="#detail" data-slide-to="1"></li>
                                    <li data-target="#detail" data-slide-to="2"></li>
                                </ul>
                                <div class="main-assurances-content-program-listPeople-slider carousel-inner">
                                    <div class="carousel-item active">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="main-assurances-content-program tab-pane container " id="assurance1">
                <div class="main-assurances-content-program-plan">
                    <div class="container-custom">
                        <div class="main-assurances-content-program-plan-box">
                            <div class="main-assurances-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold">Độ tuổi</th>
                                            <th class="hd hd-info hd-5-bold">Số tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">30 - 39 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">300.000.000đ</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">40 - 59 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">200.000.000đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-assurances-content-program-plan-box_item">
                                <h1 class="hd hd-1 hd-intro text-left">Kế hoạch hỗ trợ</h1>
                                <p class="hd hd-5 hd-intro text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                    survived not only five centuries, <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-QA">
                    <div class="container-custom">
                        <div id="accordion" style="margin: 76px 0">
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Các điều khoản của chương trình
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapseOne" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Yêu cầu về sức khoẻ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse2" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Phạm vi bảo vệ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse3" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Quy tác dành cho khách hàng
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse4" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Phạm vi hỗ trợ của chương trình đối với các bệnh nặng, nghiêm trọng với 99 bệnh hiểm nghèo + khối u ác tính + các bệnh hiếm gặp cụ thể, hỗ trợ tối đa là 30 vạn nhân dân tệ. Phạm vi hỗ trợ đối với chương trình chống ung thư dành cho người mắc bệnh mãn tính và chống ung thư cho người già tối đa nhận được 10 vạn tệ. Tử vong và tàn tật do tai nạn khi di chuyển bằng phương tiện đang vận hành liên quan đến nước Việt Nam bao gồm: máy bay hàng không dân dụng, tàu khách, phương tiện vận tải đường sắt (tàu điện ngầm, đường sắt), phương tiện chở khách (xe bus, xe bus đường dài, xe điện, taxi, nền tảng và các dịch vụ gọi xe trực tuyến) đã được chính phủ đăng ký và phê duyệt cho mục đích hoạt động, hỗ trợ cao nhất lên tới 100 vạn nhân dân. 
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Uỷ nhiệm chi
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse5" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Đáp ứng các yêu cầu về sức khoẻ hoặc quy tắc hỗ trợ khi bị tai nạn giao thông công cộng, về bệnh tật hoặc thương tật do tai nạn nằm trong phạm vi hỗ trợ. Các loại bệnh hoặc là bị thương do tai nạn có trong phạm vi bảo vệ sẽ có hiệu lực. Bạn có thể đăng ký hỗ trợ sau khi kiểm tra sức khoẻ hoặc bị trấn thương do tai nạn. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-doc">
                    <div class="container-custom">
                        <h3 class="hd hd-info hd-4 text-left">Tài liệu tham khảo</h3>

                        <div class="doc-show">
                            <a href="" class="doc-show_item">
                                <img src ="{{ asset('icons/doc_1.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_2.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_3.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-listPeople">
                    <div class="container-custom">
                        <h1 class="hd hd-1 hd-intro">Danh sách người hỗ trợ</h1>
                        <div class="main-assurances-content-program-listPeople">
                            <div id="detail" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#detail" data-slide-to="0" class="active"></li>
                                    <li data-target="#detail" data-slide-to="1"></li>
                                    <li data-target="#detail" data-slide-to="2"></li>
                                </ul>
                                <div class="main-assurances-content-program-listPeople-slider carousel-inner">
                                    <div class="carousel-item active">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="main-assurances-content-program tab-pane container " id="assurance2">
                <div class="main-assurances-content-program-plan">
                    <div class="container-custom">
                        <div class="main-assurances-content-program-plan-box">
                            <div class="main-assurances-content-program-plan-box_item">
                                <img srcset="{{ asset('images/plan_support.png') }} 2x" alt="">
                                <table class="table table-manual">
                                    <thead>
                                        <tr>
                                            <th class="hd hd-info hd-5-bold">Độ tuổi</th>
                                            <th class="hd hd-info hd-5-bold">Số tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">30 - 39 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">300.000.000đ</td>
                                        </tr>
                                        <tr>
                                            <td class="hd hd-intro hd-5-bold">40 - 59 tuổi</td>
                                            <td class="hd hd-intro hd-5-bold">200.000.000đ</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="main-assurances-content-program-plan-box_item">
                                <h1 class="hd hd-1 hd-intro text-left">Kế hoạch hỗ trợ</h1>
                                <p class="hd hd-5 hd-intro text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                                    survived not only five centuries, <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    <br> <br>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-QA">
                    <div class="container-custom">
                        <div id="accordion" style="margin: 76px 0">
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Các điều khoản của chương trình
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapseOne" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Yêu cầu về sức khoẻ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse2" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Phạm vi bảo vệ
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse3" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Quy tác dành cho khách hàng
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse4" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Phạm vi hỗ trợ của chương trình đối với các bệnh nặng, nghiêm trọng với 99 bệnh hiểm nghèo + khối u ác tính + các bệnh hiếm gặp cụ thể, hỗ trợ tối đa là 30 vạn nhân dân tệ. Phạm vi hỗ trợ đối với chương trình chống ung thư dành cho người mắc bệnh mãn tính và chống ung thư cho người già tối đa nhận được 10 vạn tệ. Tử vong và tàn tật do tai nạn khi di chuyển bằng phương tiện đang vận hành liên quan đến nước Việt Nam bao gồm: máy bay hàng không dân dụng, tàu khách, phương tiện vận tải đường sắt (tàu điện ngầm, đường sắt), phương tiện chở khách (xe bus, xe bus đường dài, xe điện, taxi, nền tảng và các dịch vụ gọi xe trực tuyến) đã được chính phủ đăng ký và phê duyệt cho mục đích hoạt động, hỗ trợ cao nhất lên tới 100 vạn nhân dân. 
                                    </div>
                                </div>
                            </div>
                            <div class="main-assurances-content-program-QA_item">
                                <div class="title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                        Uỷ nhiệm chi
                                        <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                    </a>
                                    
                                </div>
                                <div id="collapse5" class="body collapse show">
                                    <div class="body-content hd hd-5 hd-intro">
                                        Đáp ứng các yêu cầu về sức khoẻ hoặc quy tắc hỗ trợ khi bị tai nạn giao thông công cộng, về bệnh tật hoặc thương tật do tai nạn nằm trong phạm vi hỗ trợ. Các loại bệnh hoặc là bị thương do tai nạn có trong phạm vi bảo vệ sẽ có hiệu lực. Bạn có thể đăng ký hỗ trợ sau khi kiểm tra sức khoẻ hoặc bị trấn thương do tai nạn. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-doc">
                    <div class="container-custom">
                        <h3 class="hd hd-info hd-4 text-left">Tài liệu tham khảo</h3>

                        <div class="doc-show">
                            <a href="" class="doc-show_item">
                                <img src ="{{ asset('icons/doc_1.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_2.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                            <a href="" class="doc-show_item">
                                <img src="{{ asset('icons/doc_3.svg') }}" alt="">
                                <p class="hd hd-5 hd-intro">Quy tắc bảo hiểm</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="main-assurances-content-program-listPeople">
                    <div class="container-custom">
                        <h1 class="hd hd-1 hd-intro">Danh sách người hỗ trợ</h1>
                        <div class="main-assurances-content-program-listPeople">
                            <div id="detail" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#detail" data-slide-to="0" class="active"></li>
                                    <li data-target="#detail" data-slide-to="1"></li>
                                    <li data-target="#detail" data-slide-to="2"></li>
                                </ul>
                                <div class="main-assurances-content-program-listPeople-slider carousel-inner">
                                    <div class="carousel-item active">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <h3 class="hd hd-4 hd-secondary">Chị Phạm Thanh Hoa - 59 tuổi - bệnh máu trắng</h3>
                                        <div class="main-assurances-content-program-listPeople-slider_item">
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/calendar.svg" class="icon-bg icon-bg-calendar" alt="">
                                                <h5 class="hd hd-info hd-5">Ngày tham gia</h5>
                                                <h2 class="hd hd-info hd-3">10/11/2019</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/piggy-bank.svg" class="icon-bg icon-bg-bank" alt="">
                                                <h5 class="hd hd-info hd-5">Số tiền đã phân chia</h5>
                                                <h2 class="hd hd-info hd-3">500.000.000đ</h2>
                                            </div>
                                            <div class="main-assurances-content-program-listPeople-slider_item-box">
                                                <img src="./assets/icons/cash.svg" class="icon-bg icon-bg-cash" alt="">
                                                <h5 class="hd hd-info hd-5">Đã nhận hỗ trợ</h5>
                                                <h2 class="hd hd-info hd-3">50.000.000đ</h2>
                                            </div>
                                        </div>
                                        <a href="./public-divided-detail.html">
                                            <button class="btn btnc btnc-large btnc-secondary">Xem chi tiết</button>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    <div class="main-banner-register">
        <p class="hd hd-5 hd-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
        <a href="{{ route('register-program') }}" class="hd hd-5 hd-primary">
            <button class="btn btn btnc btnc-banner btnc-info">Đăng ký tham gia chương trình</button>
        </a>
    </div>
</x-PrimaryLayout>