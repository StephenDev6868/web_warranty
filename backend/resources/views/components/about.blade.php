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
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/doctor.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Bảo hiểm y tế cơ bản không thể chi trả cho những bệnh nặng</h3>
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/care.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Kế hoạch hỗ trợ chất lượng cao</h3>
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/steel-medica.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Phạm vi bảo vệ rộng</h3>
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/bag-medical.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Thêm một người bảo vệ, thêm một sự an tâm</h3>
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                        <div class="main-explanation-content_item-box">
                            <img src="{{ asset('icons/care_1.svg') }}" alt="">
                            <h3 class="hd hd-intro hd-4">Bảo vệ cho mình đồng thời giúp đỡ người khác</h3>
                            <p class="hd hd-5 hd-intro">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                </div>
                <x-intro-program></x-intro-program>
            </div>
            <div class="main-explanation-content-process tab-pane container fade" id="explain1">
                <h1 class="hd hd-1 hd-intro">Quy trình hỗ trợ</h1>
                <div class="main-explanation-content-process_bg">
                </div>
                <div class="container-custom">
                    <p class="text-left hd hd-5 hd-intro">
                        What is Lorem Ipsum? <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        <br> Where does it come from? <br> <br>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br> <br> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                    </p>
                </div>
            </div>
            <div class="main-explanation-content-QA tab-pane container fade" id="explain2">
                <div id="accordion" style="margin: 76px 0">
                    <div class="main-explanation-content-QA_item">
                        <div class="title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                Thời gian tương trợ của XiangHuBao là bao lâu?
                                <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                            </a>
                            
                        </div>
                        <div id="collapseOne" class="body collapse show">
                            <div class="body-content hd hd-5 hd-intro">
                                Hỗ trợ về dạng sức khoẻ sẽ có hiệu lực từ 0 giờ ngày hôm sau, sau khi tham gia (sau khi đã vượt qua 90 ngày) và kế hoạch hỗ trợ cho sự cố giao thông sẽ có hiệu lực  từ 0 giờ của ngày thứ 7 kể từ khi tham gia. Miễn là không có sự rút lui khỏi kế hoạch cho đến khi tuổi của các thành viên vượt quá độ tuổi của kế hoạch.
                            </div>
                        </div>
                    </div>
                    <div class="main-explanation-content-QA_item">
                        <div class="title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                Trong thời kỳ công khai tôi rút khỏi kế hoạch vậy trong kỳ đó tôi có bị rút tiền phân chia không?
                                <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                            </a>
                            
                        </div>
                        <div id="collapse2" class="body collapse show">
                            <div class="body-content hd hd-5 hd-intro">
                                Số lượng người tham gia phân chia quỹ hỗ trợ lẫn nhau trong mỗi kỳ sẽ bị khoá một ngày trước khi công bố. Nếu bạn rút khỏi kế hoạch hỗ trợ vào ngày công khai và sau ngày công khai, bạn vẫn cần tham gia phân chia hỗ trợ tại kỳ hiện tại và phí phân bố sẽ được Alipay khấu trừ vào ngày phân chia. Bạn cũng sẽ không cần tham gia phân chia vào kỳ đầu của kỳ tiếp theo
                            </div>
                        </div>
                    </div>
                    <div class="main-explanation-content-QA_item">
                        <div class="title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                Điều kiện xin hỗ trợ lẫn nhau là gì?
                                <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                            </a>
                            
                        </div>
                        <div id="collapse3" class="body collapse show">
                            <div class="body-content hd hd-5 hd-intro">
                                Đáp ứng các yêu cầu về sức khoẻ hoặc quy tắc hỗ trợ khi bị tai nạn giao thông công cộng, về bệnh tật hoặc thương tật do tai nạn nằm trong phạm vi hỗ trợ. Các loại bệnh hoặc là bị thương do tai nạn có trong phạm vi bảo vệ sẽ có hiệu lực. Bạn có thể đăng ký hỗ trợ sau khi kiểm tra sức khoẻ hoặc bị trấn thương do tai nạn. 
                            </div>
                        </div>
                    </div>
                    <div class="main-explanation-content-QA_item">
                        <div class="title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                Phạm vi hỗ trợ lẫn nhau của xianghubao là gì?
                                <img src="{{ asset('icons/arrow_qa.svg') }}" alt="">
                            </a>
                            
                        </div>
                        <div id="collapse4" class="body collapse show">
                            <div class="body-content hd hd-5 hd-intro">
                                Phạm vi hỗ trợ của chương trình đối với các bệnh nặng, nghiêm trọng với 99 bệnh hiểm nghèo + khối u ác tính + các bệnh hiếm gặp cụ thể, hỗ trợ tối đa là 30 vạn nhân dân tệ. Phạm vi hỗ trợ đối với chương trình chống ung thư dành cho người mắc bệnh mãn tính và chống ung thư cho người già tối đa nhận được 10 vạn tệ. Tử vong và tàn tật do tai nạn khi di chuyển bằng phương tiện đang vận hành liên quan đến nước Việt Nam bao gồm: máy bay hàng không dân dụng, tàu khách, phương tiện vận tải đường sắt (tàu điện ngầm, đường sắt), phương tiện chở khách (xe bus, xe bus đường dài, xe điện, taxi, nền tảng và các dịch vụ gọi xe trực tuyến) đã được chính phủ đăng ký và phê duyệt cho mục đích hoạt động, hỗ trợ cao nhất lên tới 100 vạn nhân dân. 
                            </div>
                        </div>
                    </div>
                    <div class="main-explanation-content-QA_item">
                        <div class="title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="title-link hd hd-4 hd-intro" aria-expanded="true">
                                Cách nhận hỗ trợ
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
    </div>
</x-PrimaryLayout>
