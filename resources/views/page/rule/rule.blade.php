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
                                <p class="m-0">
                                    Với sứ mệnh “Vì một nền y dược tiên tiến và giàu nhân văn”, Công ty
                                    Cổ phần Mastertran mang đến các sản phẩm Doppelherz chất lượng Số 1
                                    tại Đức, cùng chính sách chăm sóc khách hàng tận tâm. Doppelherz còn
                                    có đội ngũ chuyên gia và nhân viên chăm sóc khách hàng luôn sẵn sàng
                                    giải đáp mọi thắc mắc của khách hàng về các vấn đề sức khỏe và bệnh
                                    lý thường gặp.
                                    <br />
                                    Để khách hàng trải nghiệm những giải pháp chăm sóc sức khỏe hiệu quả
                                    là các sản phẩm Doppelherz, Công ty Cổ phần Mastertran ra mắt chương
                                    trình “Khách hàng thân thiết cùng Doppelherz” như một lời tri ân đặc
                                    biệt gửi đến các khách hàng là người tiêu dùng luôn đồng hành cùng
                                    các sản phẩm của Doppelherz.<br />
                                    Chương trình “Khách hàng thân thiết cùng Doppelherz” được triển khai
                                    trên toàn lãnh thổ Việt Nam, dành cho người tiêu dùng mua sản phẩm
                                    Doppelherz (bao gồm tất cả các sản phẩm của thương hiệu Doppelherz
                                    do Công ty Cổ phần Mastertran (sau đây gọi tắt là “Công ty”) nhập
                                    khẩu chính hãng từ Đức và phân phối tại Việt Nam.
                                    <br />
                                    Chương trình chỉ dành cho người tiêu dùng; các khách hàng là đại lý
                                    phân phối sản phẩm Doppelherz không được tham gia chương trình này
                                    <br />
                                    Thể lệ chương trình được đăng tải và cập nhật thường xuyên trên
                                    website chính thức tichdiem.doppelherz.vn.
                                </p>
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
                                <strong>This is the second item's accordion body.</strong> It is hidden
                                by default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You
                                can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within
                                the <strong>.accordion-body</strong>, though the transition does limit
                                overflow.
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
                                <strong>This is the third item's accordion body.</strong> It is hidden
                                by default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You
                                can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within
                                the <strong>.accordion-body</strong>, though the transition does limit
                                overflow.
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
                                <strong>This is the third item's accordion body.</strong> It is hidden
                                by default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You
                                can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within
                                the <strong>.accordion-body</strong>, though the transition does limit
                                overflow.
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
                                <strong>This is the third item's accordion body.</strong> It is hidden
                                by default, until the collapse plugin adds the appropriate classes that
                                we use to style each element. These classes control the overall
                                appearance, as well as the showing and hiding via CSS transitions. You
                                can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within
                                the <strong>.accordion-body</strong>, though the transition does limit
                                overflow.
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