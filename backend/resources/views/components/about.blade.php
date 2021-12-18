@php
$name = 'warpper';
@endphp
<x-PrimaryLayout :pathStyle="asset('css/about.css')" :generalClass="$name">
    <div class="main-explanation">
        <div class="main-explanation-tab">
            <div class="container-custom">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#explain">Tìm hiểu về đặc điểm quỹ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#explain1">Tìm hiểu về quy tắc đặc điểm của quỹ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#explain2">Giải đáp câu hỏi thường gặp về quỹ</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-explanation-content tab-content">
            <div class="main-explanation-content-why tab-pane container active" id="explain">
                <div class="container-custom">
                    <h1 class="hd hd-1 hd-intro">Tại sao chọn tương hỗ?</h1>
                    <div class="main-explanation-content_item">
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/hand-heart.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Ngày càng có nhiều người mắc bệnh hiểm nghèo</h3>
                            <p class="hd hd-5 hd-intro">
                                Năm 2020, Việt Nam xếp vị trí 90/185 quốc gia vùng lãnh thổ, với tỷ lệ mắc ung thư là 159,7/100.000 dân, xếp thứ 16 châu Á và đứng thứ 6 tại Đông Nam Á.
                                Theo thống kê của Tổ chức y tế thế giới (WHO), số ca mắc mới ung thư tại Việt Nam không ngừng tăng, từ 68.000 ca năm 2000 lên 126.000 ca năm 2010. Năm 2018, số ca mắc mới tăng lên gần 165.000 ca/86,5 triệu dân.
                                Đến năm 2020, Việt Nam ghi nhận hơn 182.500 ca mới, 122.690 ca tử vong trên tổng số 97,3 triệu dân. Cả nước đang còn 353.000 bệnh nhân sống chung với ung thư.
                            </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/doctor.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4"> Không phải ai cũng có thể tham gia bảo hiểm nhân thọ, bảo hiểm sức khỏe</h3>
                            <p class="hd hd-5 hd-intro">
                                Không phải ai có nhu cầu cũng có thể tham gia bảo hiểm nhân thọ, sức khỏe bởi khi tham gia phải đáp ứng điều kiện. Những người đã có bệnh từ trước sẽ không được mua bảo hiểm hoặc có những ngành nghề không nằm trong nhóm đối tượng được bảo hiểm.
                            </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/care.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Các sản phẩm với chi phí thấp</h3>
                            <p class="hd hd-5 hd-intro">Những nền tảng hỗ trợ này đặc trưng với mô hình tương trợ “một người ốm, mọi người cùng chia sẻ”. Tức là mạng lưới hỗ trợ tương đương với việc xây dựng một nhóm người dùng, tập hợp sức mạnh của tất cả mọi người và giúp các thành viên ốm yếu vượt qua khó khăn. Nếu một thành viên mắc bệnh hiểm nghèo hoặc gặp rủi ro trong cuộc sống, những người khác sẽ chia sẻ tiền hỗ trợ, tương tự, nếu bạn không may gặp phải rủi ro, bạn cũng có thể nhận được khoản hỗ trợ tương ứng.
                                Mạng lưới hỗ trợ lẫn nhau không có đại lý trung gian và liên kết bán hàng, tỷ lệ phí quản lý thấp khoảng 8-10% số tiền hỗ trợ, nếu số lượng người tham gia càng lớn số tiền phân chia sẽ càng nhỏ. Do đó, khi tham gia vào nền tảng hỗ trợ, các chi phí bạn bỏ ra để tham gia các sản phẩm là rất thấp.
                            </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/steel-medica.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4"> Sản phẩm chỉ có chức năng bảo vệ</h3>
                            <p class="hd hd-5 hd-intro">Những sản phẩm nền tảng tương hỗ này áp dụng không phải là sản phẩm bảo hiểm, chúng chỉ có chức năng bảo vệ, không sử dụng vào mục đích tiết kiệm và đầu tư. Mọi người trong cộng đồng sẽ cùng chung tay đóng góp để hỗ trợ các thành viên gặp rủi ro trong cuộc sống. Thủ tục tham gia sản phẩm, quá trình yêu cầu bồi thường, khiếu nại đều nhanh chóng và đơn giản hơn rất nhiều so với tham gia sản phẩm của doanh nghiệp bảo hiểm.
                            </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/bag-medical.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Thời gian tham gia linh hoạt</h3>
                            <p class="hd hd-5 hd-intro">
                                Khác với các sản phẩm bảo hiểm nhân thọ, bạn có thể tham gia nền tảng tương hỗ và tự nguyện chấm dứt việc tham gia vào bất cứ lúc nào, bất cứ giai đoạn nào nếu đảm bảo nghĩa vụ tài chính. Điểm đặc biệt cần lưu ý đối với mô hình tương hỗ này là các thành viên chỉ được hỗ trợ duy nhất 01 lần đối với 01 chương trình. Sau khi nhận được tiền hỗ trợ, tư cách thành viên chỉ được duy trì để thực hiện phân chia tiền hỗ trợ cho các thành viên, không được tham gia các chương trình hỗ trợ khác.
                            </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/care_1.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Dành cho cả phân khúc khách hàng lớn tuổi, có bệnh nền, thu nhập thấp</h3>
                            <p class="hd hd-5 hd-intro">
                                Nếu những khách hàng lớn tuổi, có bệnh nền hoặc thu nhập thấp gặp khó khăn trong việc tham gia sản phẩm bảo hiểm, thì nền tảng hỗ trợ lẫn nhau chính là giải pháp giúp họ có thể được bảo vệ trước những rủi ro xảy ra trong cuộc sống. Sẽ có những chương trình hỗ trợ bệnh ung thư, bệnh hiểm nghèo dành cho người cao tuổi, người mắc bệnh mãn tính. Đối với những người có thu nhập thấp, đây không còn là mối lo đối với họ vì họ chỉ phải bỏ ra một khoản chi phí rất thấp đã có thể tham gia nền tảng hỗ trợ này.
                            </p>
                        </div>
                    </div>
                </div>
                <x-intro-program :programs="$programs"></x-intro-program>
            </div>
            <div class="main-explanation-content-process tab-pane container fade" id="explain1">
                <h1 class="hd hd-1 hd-intro">Quy trình hỗ trợ</h1>
                <div class="main-explanation-content-process_bg">
                </div>
                <div class="container-custom">
                    <p class="">
                        <b style="font-weight: bold;">Bước 1: Hoàn thiện hồ sơ yêu cầu hỗ trợ</b> <br>
                        Khi thành viên của chương trình gặp khó khăn nộp hồ sơ yêu cầu hỗ trợ phù hợp với các điều khoản và điều kiện của chương trình. Trong quá trình hoàn thiện hồ sơ yêu cầu hỗ trợ, thành viên có thể nhờ sự giúp đỡ của thành viên hỗ trợ. Hồ sơ cụ thể sẽ được quy định ở từng chương trình. <br>
                        Thành viên hỗ trợ: Là thành viên của chương trình và tự nguyện hỗ trợ thành viên khác trong quá trình thu thập hồ sơ, giấy tờ và hoàn thiện thủ tục cần thiết để nhận được sự hỗ trợ từ cộng đồng. Thành viên hỗ trợ phải đáp ứng các yêu cầu nhất định và được cộng đồng thành viên tín nhiệm và bình chọn, được nhận thù lao theo thỏa thuận khi hoàn thành công việc.
                    </p>
                    <p class="">
                        <b style="font-weight: bold;">Bước 2: Xác minh thông tin yêu cầu hỗ trợ thông qua Thành viên giám sát</b> <br>
                        Sau khi hồ sơ yêu cầu hỗ trợ được gửi về sẽ trải qua bước xác minh tính chính xác, trung thực của hồ sơ cũng như xem xét hồ sơ có phù hợp với các yêu cầu và điều kiện của chương trình mà người đó tham gia hay không thông qua Thành viên giám sát.<br>
                        Thành viên giám sát: Là thành viên của chương trình và được giao nhiệm vụ đi xác minh thông tin, kiểm tra, rà soát, đánh giá vụ việc để đề xuất cộng đồng có chấp nhận hỗ trợ hay không.<br>
                        Thành viên giám sát phải có tiêu chuẩn nhất định và được một số lượng nhất định thành viên cộng đồng bình chọn. Thành viên giám sát được nhận thù lao theo thoả thuận khi thực hiện công việc được giao.
                    </p>
                    <p class="">
                        <b style="font-weight: bold;">Bước 3: Xác minh thông tin yêu cầu hỗ trợ thông qua Vics-corp</b> <br>
                        Sau khi hồ sơ được hoàn thiện và được xác minh bởi thành viên giám sát, hồ sơ của người yêu cầu hỗ trợ còn phải trải qua bước xác minh của công ty Cổ phần Tư vấn Dịch vụ Bảo hiểm Việt Nam để đảm bảo tính khách quan của từng hồ sơ yêu cầu hỗ trợ.
                    </p>
                    <p class="">
                        <b style="font-weight: bold;">Bước 4. Nhận tiền hỗ trợ</b> <br>
                        Nếu hồ sơ của thành viên đạt được các tiêu chuẩn và điều kiện của chương trình, thành viên sẽ nhận được khoản tiền hỗ trợ của Cộng đồng hỗ trợ vào ngày phân chia của tháng.<br>
                        Ngoài ra, quyết định của các thành viên trong Cộng đồng hỗ trợ là rất quan trọng.<br>
                        Khi có tranh chấp trong quá trình giải quyết Hồ sơ yêu cầu hỗ trợ Cộng đồng hỗ trợ sẽ tổ chức cuộc khảo sát lấy ý kiến từ các thành viên, kết quả khảo sát sẽ là kết quả cuối cùng để sử dụng giải quyết tranh chấp.<br>
                        Cuối mỗi năm sẽ có báo cáo, tổng hợp công việc và định hướng phát triển tiếp theo để gửi đến các thành viên cộng đồng quyết định.<br>
                        Nguyên tắc biểu quyết sẽ được quy định tuỳ từng thời điểm cụ thể.
                    </p>
                </div>
            </div>
            <div class="main-explanation-content-QA tab-pane container fade" id="explain2">
                <div id="accordion" style="margin: 76px 0">
                    @foreach($qaList as $qa)
                        <div class="main-explanation-content-QA_item">
                            <div class="title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->index }}" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                    {{ $qa->question }}
                                    <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                                </a>

                            </div>
                            <div id="collapse{{ $loop->index }}" class="body collapse show">
                                <div class="body-content hd hd-5 hd-intro">
                                    {{ $qa->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-PrimaryLayout>
