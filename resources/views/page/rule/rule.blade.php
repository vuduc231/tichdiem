@extends('template.master')
@section('title', 'Thể lệ')
@section('main_section')
<!-- ======= Accordion ======= -->
<section class="accordion pb-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card_title">THỂ LỆ CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT</h1>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="accordion-button"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                            >
                                1. Giới thiệu chung
                            </button>
                        </h2>
                        <div
                            id="collapseOne"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingOne"
                            data-mdb-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <div class="pl-0 pr-0 sm:pl-0 sm:pr-0 md:pl-6 md:pr-6">
                                    <p class="text-justify">
                                        Với sứ mệnh “Vì một nền y dược tiên tiến và giàu nhân văn”, Công ty Cổ phần Mastertran mang đến các sản phẩm
                                        Doppelherz chất lượng Số 1 tại Đức, cùng chính sách chăm sóc khách hàng tận tâm. Doppelherz còn có đội ngũ
                                        chuyên gia và nhân viên chăm sóc khách hàng luôn sẵn sàng giải đáp mọi thắc mắc của khách hàng về các vấn đề sức
                                        khỏe và bệnh lý thường gặp.
                                    </p>
                                    <p class="text-justify">
                                        Để khách hàng trải nghiệm những giải pháp chăm sóc sức khỏe hiệu quả là các sản phẩm Doppelherz, Công ty Cổ phần
                                        Mastertran ra mắt chương trình <b>“Khách hàng thân thiết cùng Doppelherz”</b> như một lời tri ân đặc biệt gửi
                                        đến các khách hàng là người tiêu dùng luôn đồng hành cùng các sản phẩm của Doppelherz.
                                    </p>
                                    <p class="text-justify">
                                        Chương trình <b>“Khách hàng thân thiết cùng Doppelherz”</b> được triển khai trên toàn lãnh thổ Việt Nam, dành
                                        cho người tiêu dùng mua sản phẩm Doppelherz (bao gồm tất cả các sản phẩm của thương hiệu Doppelherz do Công ty
                                        Cổ phần Mastertran (sau đây gọi tắt là “Công ty”) nhập khẩu chính hãng từ Đức và phân phối tại Việt Nam.
                                    </p>
                                    <p class="text-justify">
                                        Chương trình chỉ dành cho người tiêu dùng; các khách hàng là đại lý phân phối sản phẩm Doppelherz không được
                                        tham gia chương trình này
                                    </p>
                                    <p class="text-justify">
                                        Thể lệ chương trình được đăng tải và cập nhật thường xuyên trên website chính thức
                                        <a class="text-primary" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn.</a>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                            >
                                2. Cách thức tham gia chương trình
                            </button>
                        </h2>
                        <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-mdb-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <div class="pl-0 pr-0 sm:pl-0 sm:pr-0 md:pl-6 md:pr-2">
                                    <h3 class="text-base fw-bold mb-3">2.1. Cách thức tích điểm</h3>
                                    <p class="text-justify pb-3">
                                        Mặt trong mỗi vỏ hộp sản phẩm Doppelherz có 01 (một) “Tem tích điểm”, trừ các sản phẩm là quà tặng. Khách hàng
                                        tiến hành tích điểm bằng cách quét mã QR trên “Tem tích điểm” này để truy cập vào website
                                        <a class="text-primary" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a>, sau đó đăng ký tài
                                        khoản/đăng nhập để được tự động kích hoạt mã sản phẩm và tích điểm theo sản phẩm tương ứng. Mỗi Mã số chỉ được
                                        sử dụng tích điểm (01) một lần trong thời hạn Chương trình. Việc tích điểm được thực hiện như sau:
                                    </p>
                                    <p class=" fw-bold pb-3">
                                        (a) Đối với mã sản phẩm được kích hoạt và tích điểm thành công
                                    </p>
                                    <p class="text-justify">
                                        Sau khi khách hàng quét Mã QR và đăng ký/đăng nhập thành công, trang web<a
                                            class="text-primary"
                                            href="https://tichdiem.doppelherz.vn/"
                                        >
                                            tichdiem.doppelherz.vn</a
                                        >
                                        sẽ phản hồi như sau: “Sản phẩm của bạn đã được tích <span class="text-danger fw-bold">xx</span> điểm vào tài
                                        khoản và sẵn sàng để đổi quà. Cảm ơn bạn đã tham gia chương trình.”
                                    </p>
                                    <p class=" fw-bold py-3">
                                        (b) Đối với mã sản phẩm không được kích hoạt và tích điểm thành công:
                                    </p>
                                    <p class="text-justify">
                                        Sau khi khách hàng quét Mã QR và đăng ký/đăng nhập thành công, với Mã QR trùng với Mã số đã đăng ký, trang web
                                        <a class="text-primary" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> sẽ phản hồi như sau:
                                        “Mã tích điểm không chính xác hoặc đã được sử dụng. Vui lòng liên hệ CSKH của Doppelherz qua email
                                        <a href="mailto:info@mastertran.vn" class="text-danger fw-bold">info@mastertran.vn</a> để được hỗ trợ.”
                                    </p>
                                    <h3 class="text-base fw-bold mb-3 mt-3">2.2. Bảng quy đổi tích điểm</h3>
                                    <p class=" fw-bold pb-2 text-base">Quy định tích điểm</p>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3"><p class="text-justify">01 điểm tương đương 5.000đ.</p></li>
                                            <li class="mb-3">
                                                <p class="text-justify">Tích lũy đổi quà tương ứng với số điểm.</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="text-justify pb-2">Chi tiết tham khảo bảng dưới đây:</p>
                                    <div class="table-responsive">
                                        <table class="table mb-4 fs-4">
                                            <thead>
                                                <th class="border p-2 text-center text-xs sm:text-xs md:text-sm">STT</th>
                                                <th class="border p-2 text-center text-xs sm:text-xs md:text-sm">Nhóm sản phẩm</th>
                                                <th class="border p-2 text-left text-xs sm:text-xs md:text-sm">Danh mục sản phẩm</th>
                                                <th class="border p-2 text-center text-xs sm:text-xs md:text-sm">ĐVT</th>
                                                <th class="border p-2 text-center text-xs sm:text-xs md:text-sm">Điểm cho 1 hộp</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">1</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center" rowspan="4">Nhóm 1</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Aktiv Meno</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Optima</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">3</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Vital Pregna</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">A-Z Fizz</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">03 tuýp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">5</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center" rowspan="8">Nhóm 2</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Magnesium Calcium D3</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">6</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">A-Z Depot</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">7</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Coenzyme Q10</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">8</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Omega-3 + Folic axit + B6 + B12</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">9</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Omega-3 Syrup</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">10</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Immune Syrup 150ml</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">11</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Belle Anti-aging</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">12</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Eye Vital Capsules</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">13</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center" rowspan="17">Nhóm 3</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Liver Complex</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">14</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Active Men Plus</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">15</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Thymepect</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">16</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Calciovin</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">17</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder Iron Drops</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">18</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Kinder D3 Drops</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">19</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Haemo Vital</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">20</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Prostacalm</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">21</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Ginkgo + Choline + Vitamin B</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">22</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Belle Hairnakin</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">23</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Hair Plus</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">24</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Joints Ultra</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">25</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Zincodin</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">26</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Vitamin D3 + K2</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">27</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Anti Stress</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">28</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Beauty Collagen</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">27</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">29</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-left">Collagen Max</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">Hộp</td>
                                                    <td class="text-xs sm:text-xs md:text-sm border p-2 text-center">24</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class=" fw-bold pb-2 text-base">Lưu ý:</p>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Điểm tích lũy không có giá trị mua bán, tặng cho, chuyển nhượng hoặc quy đổi thành tiền mặt.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khách hàng có thể xem lịch sử tích lũy điểm tại website
                                                    <a class="text-primary" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn.</a>
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khi khách hàng là người tiêu dùng mua sản phẩm, quét mã QR trên vỏ hộp và được báo lỗi do mã đã sử
                                                    dụng, Công ty sẽ truy xuất ngược lại thông tin điểm bán và đưa ra chính sách bồi thường và hỗ trợ
                                                    tốt nhất đối với người tiêu dùng cũng như đưa ra yêu cầu bồi thường đối với đại lý/nhà phân phối có
                                                    hành vi gian lận trong chương trình.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="text-base fw-bold mb-3 mt-3">2.3. Quy định điều kiện đổi quà</h3>
                                    <p class=" fw-bold pb-2 text-base">Danh sách quà tặng và số điểm tích lũy quy đổi tương ứng</p>
                                    <div class="table-responsive">
                                        <table class="table mb-3 fs-4">
                                            <thead>
                                                <th class="border p-2 text-center">STT</th>
                                                <th class="border p-2 text-left">Quà tặng</th>
                                                <th class="border p-2 text-center">Điểm đổi quà</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border p-2 text-left fw-bold pb-2 text-sm" colspan="3">
                                                        Quà tặng khuyến mãi
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">1</td>
                                                    <td class="border p-2 text-left">Set tập tô cho bé</td>
                                                    <td class="border p-2 text-center">10</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">2</td>
                                                    <td class="border p-2 text-left">Cẩm nang phụ nữ</td>
                                                    <td class="border p-2 text-center">10</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">3</td>
                                                    <td class="border p-2 text-left">Túi đựng đồ đa năng</td>
                                                    <td class="border p-2 text-center">15</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">4</td>
                                                    <td class="border p-2 text-left">Hộp bút cho bé</td>
                                                    <td class="border p-2 text-center">21</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">5</td>
                                                    <td class="border p-2 text-left">Bình sữa cho bé</td>
                                                    <td class="border p-2 text-center">24</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">6</td>
                                                    <td class="border p-2 text-left">Balo thể thao</td>
                                                    <td class="border p-2 text-center">30</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">7</td>
                                                    <td class="border p-2 text-left">Ô gấp cao cấp</td>
                                                    <td class="border p-2 text-center">40</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">8</td>
                                                    <td class="border p-2 text-left">Áo mưa thời trang</td>
                                                    <td class="border p-2 text-center">50</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">9</td>
                                                    <td class="border p-2 text-left">Mũ bảo hiểm cao cấp</td>
                                                    <td class="border p-2 text-center">50</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-left fw-bold pb-2 text-sm" colspan="3">
                                                        Quà tặng là sản phẩm
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">1</td>
                                                    <td class="border p-2 text-left">A-Z Depot</td>
                                                    <td class="border p-2 text-center">68</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">2</td>
                                                    <td class="border p-2 text-left">A-Z Fizz</td>
                                                    <td class="border p-2 text-center">16</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">3</td>
                                                    <td class="border p-2 text-left">Active Men Plus</td>
                                                    <td class="border p-2 text-center">99</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">4</td>
                                                    <td class="border p-2 text-left">Aktiv Meno</td>
                                                    <td class="border p-2 text-center">53</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">5</td>
                                                    <td class="border p-2 text-left">Anti Stress</td>
                                                    <td class="border p-2 text-center">66</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">6</td>
                                                    <td class="border p-2 text-left">Beauty Collagen</td>
                                                    <td class="border p-2 text-center">540</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">7</td>
                                                    <td class="border p-2 text-left">Belle Anti-aging</td>
                                                    <td class="border p-2 text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">8</td>
                                                    <td class="border p-2 text-left">Belle Hairnakin</td>
                                                    <td class="border p-2 text-center">60</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">9</td>
                                                    <td class="border p-2 text-left">Coenzyme Q10</td>
                                                    <td class="border p-2 text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">10</td>
                                                    <td class="border p-2 text-left">Conceptive Men</td>
                                                    <td class="border p-2 text-center">370</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">11</td>
                                                    <td class="border p-2 text-left">Conceptive Women</td>
                                                    <td class="border p-2 text-center">336</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">12</td>
                                                    <td class="border p-2 text-left">Eye Vital</td>
                                                    <td class="border p-2 text-center">68</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">13</td>
                                                    <td class="border p-2 text-left">Ginkgo + Vitamin B + Choline</td>
                                                    <td class="border p-2 text-center">67</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">14</td>
                                                    <td class="border p-2 text-left">Haemo Vital</td>
                                                    <td class="border p-2 text-center">70</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">15</td>
                                                    <td class="border p-2 text-left">Hair Plus</td>
                                                    <td class="border p-2 text-center">108</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">16</td>
                                                    <td class="border p-2 text-left">Joints ULTRA</td>
                                                    <td class="border p-2 text-center">95</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">17</td>
                                                    <td class="border p-2 text-left">Kinder Active D3 Drops</td>
                                                    <td class="border p-2 text-center">46</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">18</td>
                                                    <td class="border p-2 text-left">Kinder Calciovin Liquid</td>
                                                    <td class="border p-2 text-center">90</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">19</td>
                                                    <td class="border p-2 text-left">Kinder Immune 150ml</td>
                                                    <td class="border p-2 text-center">78</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">20</td>
                                                    <td class="border p-2 text-left">Kinder Iron Drops</td>
                                                    <td class="border p-2 text-center">59</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">21</td>
                                                    <td class="border p-2 text-left">Kinder Omega-3 Syrup</td>
                                                    <td class="border p-2 text-center">96</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">22</td>
                                                    <td class="border p-2 text-left">Kinder Optima</td>
                                                    <td class="border p-2 text-center">61</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">23</td>
                                                    <td class="border p-2 text-left">Kinder Thymepect</td>
                                                    <td class="border p-2 text-center">44</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">24</td>
                                                    <td class="border p-2 text-left">Lacta+</td>
                                                    <td class="border p-2 text-center">75</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">25</td>
                                                    <td class="border p-2 text-left">Liver Complex</td>
                                                    <td class="border p-2 text-center">70</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">26</td>
                                                    <td class="border p-2 text-left">Magnesium + Calcium + D3</td>
                                                    <td class="border p-2 text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">27</td>
                                                    <td class="border p-2 text-left">Omega-3 + Folic axit + B6 + B12</td>
                                                    <td class="border p-2 text-center">54</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">28</td>
                                                    <td class="border p-2 text-left">Prostacalm</td>
                                                    <td class="border p-2 text-center">70</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">29</td>
                                                    <td class="border p-2 text-left">Vital Pregna</td>
                                                    <td class="border p-2 text-center">65</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">30</td>
                                                    <td class="border p-2 text-left">Vitamin D3 + K2</td>
                                                    <td class="border p-2 text-center">74</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">31</td>
                                                    <td class="border p-2 text-left">Zincodin</td>
                                                    <td class="border p-2 text-center">43</td>
                                                </tr>
                                                <tr>
                                                    <td class="border p-2 text-center">32</td>
                                                    <td class="border p-2 text-left">Collagen Max</td>
                                                    <td class="border p-2 text-center">480</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class=" fw-bold pb-2 text-base">Lưu ý:</p>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Quà tặng sản phẩm không có giá trị mua bán, quy đổi thành tiền mặt và không được tích điểm.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Mã đổi quà không có giá trị mua bán, tặng, cho, chuyển nhượng và không có giá trị quy đổi thành tiền
                                                    mặt, 01 mã mua hàng chỉ được sử dụng thanh toán trong 01 (một) lần mua hàng. Một đơn hàng có thể
                                                    được áp dụng nhiều mã đổi quà.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="text-base fw-bold mb-3 mt-3">2.4. Khấu trừ/hủy bỏ điểm tích lũy</h3>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Sau khi khách hàng tiến hành đổi quà tặng, Công ty sẽ khấu trừ điểm tích lũy của khách hàng tương
                                                    đương với số điểm quy định đổi quà trong Thể lệ chương trình. Số điểm còn lại sẽ được sử dụng tiếp
                                                    để đổi quà trong thời hạn của chương trình
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khi nghi ngờ khách hàng có hành vi gian lận, Công ty có quyền tạm đóng tài khoản để xác minh. Nếu có
                                                    cơ sở xác định là gian lận thì Công ty có quyền xóa và/hoặc trừ các điểm số đã tích lũy do gian lận
                                                    của khách hàng.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                            >
                                3. THỜI HẠN CHƯƠNG TRÌNH VÀ ĐỔI QUÀ
                            </button>
                        </h2>
                        <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <div class="pl-0 pr-0 sm:pl-0 sm:pr-0 md:pl-6 md:pr-2 fs-4">
                                    <h3 class="text-base fw-bold mb-3">3.1. Thời hạn chương trình và đổi quà</h3>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Chương trình tích lũy bắt đầu có hiệu lực từ 00h00 ngày 11/10/2022 cho đến khi có thông báo mới
                                                    nhất.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khách hàng được tính điểm tích lũy khi đăng ký mở tài khoản thành công và có quét mã tích điểm hợp
                                                    lệ in trong vỏ hộp các sản phẩm của Doppelherz.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Điểm tích lũy của khách hàng được tính theo năm và có thời hạn đổi quà đến hết tháng 3 của năm tiếp
                                                    theo. Riêng năm 2022, điểm tích lũy sẽ được cộng vào cùng năm 2023 và có thời hạn đổi quà là ngày
                                                    31/03/2024. Trong suốt quá trình tích lũy, khách hàng có thể đổi điểm lấy quà vào bất cứ thời điểm
                                                    nào. Điểm đã quy đổi thành quà tặng thành công sẽ tự động giảm trừ khỏi tài khoản tích lũy sau đó.
                                                    Hết thời gian đổi quà, điểm tích lũy của năm đó sẽ không còn hiệu lực và bị trừ khỏi tài khoản.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="text-base fw-bold mb-3">3.2 Cách thức tham gia chương trình</h3>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Cách 1: Đăng ký bằng cách quét mã QR trên vỏ hộp sản phẩm
                                                </p>
                                            </li>
                                            <p class="text-justify mb-3">
                                                Khách hàng quét mã QR trên “Tem tích điểm” được dán ở mặt trong của mỗi vỏ hộp sản phẩm Doppelherz. Sau
                                                khi quét mã trên sản phẩm bằng điện thoại, trình duyệt trong thiết bị của khách hàng sẽ được chuyển tới
                                                trang web <a class="text-danger" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> và
                                                yêu cầu đăng nhập/đăng ký tài khoản.
                                            </p>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Cách 2: Truy cập trực tiếp trang web tichdiem.doppelherz.vn
                                                </p>
                                            </li>
                                            <p class="text-justify mb-3">
                                                Khách hàng quét mã QR của chương trình hoặc truy cập trực tiếp vào trang web
                                                <a class="text-danger" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> bằng điện
                                                thoại thông minh hoặc máy tính và bấm vào nút ĐĂNG KÝ ở góc phải màn hình để đăng ký tài khoản và tham
                                                gia chương trình.
                                            </p>
                                        </ul>
                                    </div>
                                    <h3 class="text-base fw-bold mb-3 mt-3">3.3. Cách thức đổi quà</h3>
                                    <p class="text-justify ">
                                        Khách hàng có thể tiến hành đổi quà tại trang web của chương trình -
                                        <a class="text-danger" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> hoặc gọi vào số
                                        hotline 1800 1770. Cách thức thực hiện như sau:
                                    </p>
                                    <p class="fw-bold pb-3 pt-3">
                                        (a) Bằng cách truy cập trang web
                                        <a class="text-danger" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> và thực hiện theo
                                        trình tự sau:
                                    </p>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    <b>Bước 1: </b> Đăng nhập bằng số điện thoại đã tích điểm cùng mật khẩu.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    <b>Bước 2: </b> Kiểm tra số điểm hiện có tại <b>Lịch sử tích điểm</b>.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    <b>Bước 3: </b> Tại trang <b>Đổi quà</b>, thêm quà tặng đã đủ điểm đổi vào giỏ hàng.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    <b>Bước 4: </b> Xác nhận thông tin giao hàng để nhận quà tặng/sản phẩm.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="text-justify ">
                                        Sau khi hoàn tất trình tự các bước hướng dẫn nêu trên, trang web
                                        <a class="text-danger" href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> sẽ phản hồi như sau:
                                        “Quà tặng của bạn đã được đổi thành công. Cảm ơn bạn đã tham gia chương trình.”
                                    </p>
                                    <br />
                                    <p class="text-justify ">
                                        Trong vòng 24 giờ, bộ phận CSKH của Doppelherz sẽ gọi điện cho khách hàng để xác nhận lại thông tin trước khi
                                        giao hàng.
                                    </p>
                                    <p class="fw-bold pb-3 text-base mt-3">Lưu ý:</p>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Nếu các quà tặng mà khách hàng chọn đã hết hoặc không có sẵn thì khách hàng có thể chọn món quà khác
                                                    có giá trị tương ứng với số điểm tích lũy tại thời điểm đổi quà.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Số điện thoại của khách hàng đã đăng ký sẽ không thể thay đổi được và yêu cầu phải liên hệ qua email
                                                    <span class="text-danger">info@mastertran.vn</span> để được hỗ trợ thay đổi.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="text-base fw-bold mb-3 mt-3">3.4. Cách thức gửi quà</h3>
                                    <div class="ml-[15px]">
                                        <ul class="list-disc ml-3">
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Công ty sẽ gửi quà tặng cho khách hàng qua đường bưu điện trong vòng 30 ngày kể từ ngày xác nhận đổi
                                                    quà thành công.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Sau 30 ngày kể từ ngày khách hàng nhận được xác nhận đổi quà thành công mà không nhận được quà tặng
                                                    thì khách hàng cần liên lạc hotline 1800 1770 để thông báo về việc này và được hỗ trợ tốt nhất.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khách hàng phải kiểm tra chứng từ và quà tặng khi nhận từ nhân viên giao hàng. Trong trường hợp các
                                                    thông tin trong chứng từ không đúng và/hoặc quà tặng bị lỗi, bị hư hỏng, không nguyên vẹn, thì khách
                                                    hàng có quyền trả lại cho nhân viên giao hàng.
                                                </p>
                                            </li>
                                            <li class="mb-3">
                                                <p class="text-justify">
                                                    Khách hàng phải chịu các khoản thuế/phí phát sinh (bao gồm phí ship) theo quy định của pháp luật
                                                    (nếu có) khi nhận quà.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseFour"
                                aria-expanded="false"
                                aria-controls="collapseFour"
                            >
                                4. Hotline
                            </button>
                        </h2>
                        <div
                            id="collapseFour"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <ul class="list-disc ml-3" style="list-style: disc">
                                    <li class="mb-3">
                                        <p class="text-justify">
                                            Mọi thắc mắc liên quan đến thể lệ, thông tin, cách thức tham gia chương trình, kiểm tra điểm, đổi quà…,
                                            khách hàng có thể gọi đến Hotline 1800 1700 để được thông báo, tư vấn và giải đáp.
                                        </p>
                                    </li>
                                    <li class="mb-3">
                                        <p class="text-justify">
                                            Thời gian hoạt động: từ 8h00’ đến 17h00’ – Thứ Hai đến Thứ Sáu, 8h00’ đến 12h00’ Thứ Bảy (trừ ngày Lễ).
                                        </p>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#collapseFive"
                                aria-expanded="false"
                                aria-controls="collapseFive"
                            >
                                5. QUY ĐỊNH KHÁC
                            </button>
                        </h2>
                        <div
                            id="collapseFive"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-mdb-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <ul class="list-disc ml-3"  style="list-style: disc">
                                    <li class="mb-3">
                                        <p class="text-justify">
                                            Khi đồng ý tham gia vào chương trình, khách hàng đã đồng ý cho phép Công ty sử dụng các thông tin do khách
                                            hàng cung cấp, hình ảnh, phát ngôn của khách hàng hoặc người được ủy quyền khi nhận quà tặng, để phục vụ cho
                                            các hoạt động xúc tiến thương mại, marketing, nghiên cứu và các hoạt động chăm sóc khách hàng khác của Công
                                            ty.
                                        </p>
                                    </li>
                                    <li class="mb-3">
                                        <p class="text-justify">
                                            Khách hàng phải giữ lại vỏ hộp có Mã QR và phải cung cấp cho Công ty khi có tranh chấp.
                                        </p>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= End Accordion ======= -->
@endsection