@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Khách hàng thân thiết')
@section('main_section')
    <!-- ======= Slider ======= -->
    <section class="slider_with-img pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-8">
                    <div class="slider_wrapper">
                        <div class="slider_items">
                            <a class="slider_thumb" href="#"
                                style="background-image: url({{ asset('/assets/img/Banner-1.webp') }});"></a>
                        </div>
                        <div class="slider_items">
                            <a class="slider_thumb" href="#"
                                style="background-image: url({{ asset('/assets/img/Banner-1.webp') }});"></a>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="img_item mb-2">
                        <img src="{{ asset('/assets/img/Banner-1.webp') }}" alt="">
                    </div>
                    <div class="img_item mb-2">
                        <img src="{{ asset('/assets/img/new-banner-2.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Slogan ======= -->
    <section class="slogan pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 col-xl-3 mb-3">
                    <div class="slogan_items text-center">
                        <h1>ÁP DỤNG TOÀN QUỐC</h1>
                        <span class="d-block">khi mua sản phẩm Doppelherz</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-xl-3 mb-3">
                    <div class="slogan_items text-center">
                        <h1>NHẬN QUÀ HẤP DẪN</h1>
                        <span class="d-block">khi tích đủ điểm</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-xl-3 mb-3">
                    <div class="slogan_items text-center">
                        <h1>DỄ DÀNG THAO TÁC</h1>
                        <span class="d-block">chỉ với 01 lần quét mã</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-xl-3 mb-3">
                    <div class="slogan_items text-center">
                        <h1>QUÀ TẶNG CHÍNH HÃNG</h1>
                        <span class="d-block">từ CHLB. Đức</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Slogan ======= -->

    <!-- ======= About ======= -->
    <section class="about pb-5">
        <div class="container">
            <div class="card overflow-hidden">
                <div class="card-body card-body_home">
                    <div>
                        <h1 class="about_title">GIỚI THIỆU CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT</h1>
                    </div>
                    <div class="mb-5">
                        <span class="about_desc">Cùng tham gia chương trình <strong>Khách hàng thân thiết cùng
                                Doppelherz</strong>. để tận hưởng những đặc quyền cho riêng mình. Tích điểm tại bất cứ nơi
                            đâu để nhận những phần quà hấp dẫn từ thương hiệu số 1 tại Đức. Hơn thế nữa, Doppelherz ra mắt
                            “Tem tích điểm“ trên mỗi hộp sản phẩm giúp khách hàng tích điểm dễ dàng hơn chỉ với 01 lần quét
                            mã.</span>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-7">
                            <div class="about_detail-wrapper">
                                <p class="about_detail-txt">
                                    <span class="fw-bold">1. Tên chương trình:</span>
                                    Khách hàng thân thiết cùng Doppelherz.
                                </p>
                                <p class="about_detail-txt">
                                    <span class="fw-bold">2. Thời gian áp dụng:</span>
                                    Từ ngày 11/10/2022 đến khi có thông báo mới nhất.
                                </p>
                                <p class="about_detail-txt">
                                    <span class="fw-bold">3. Đối tượng áp dụng:</span>
                                    Tất cả các khách hàng mua sản phẩm Doppelherz tại các hiệu thuốc, nhà thuốc, chuỗi cửa
                                    hàng, sàn thương mại điện tử, website, kênh online.. là đại lý bán hàng, nhà phân phối
                                    chính thức của Doppelherz.
                                </p>
                                <p class="about_detail-txt">
                                    <b>Lưu ý</b>:
                                    Chương trình dành riêng cho người tiêu dùng cuối và không áp dụng cho khách hàng là đại
                                    lý/nhà phân phối chính thức của Doppelherz. Mỗi mã QR chỉ được quét và tích điểm 01 lần
                                    duy nhất cho người tiêu dùng cuối. Công ty sẽ truy cứu trách nhiệm đối với đại lý/nhà
                                    phân phối tham gia chương trình này.
                                </p>

                                <p class="about_detail-txt">
                                    <span class="fw-bold">4. Nội dung chương trình:</span>
                                <ul class="about_detail-list">
                                    <li>
                                        <p>Mặt trong mỗi vỏ hộp sản phẩm Doppelherz sẽ có in 01 “Tem tích điểm”. Khách hàng
                                            quét mã QR của tem, đăng nhập hệ thống tích điểm <a
                                                href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a>, tích lũy
                                            điểm số sau mỗi lần mua sản phẩm, quy đổi quà tương ứng khi đủ điều kiện.</p>
                                    </li>
                                    <li>
                                        <p>Chương trình bắt đầu áp dụng với sản phẩm Aktiv-Meno, các sản phẩm khác sẽ liên
                                            tục được cập nhật trong thời gian sớm nhất.</p>
                                    </li>
                                    <li>
                                        <p>Khách hàng là người tiêu dùng mới khi đăng ký tài khoản trên website <a
                                                href="https://tichdiem.doppelherz.vn/">tichdiem.doppelherz.vn</a> sẽ được
                                            cộng 5 điểm vào tài khoản.</p>
                                    </li>
                                </ul>
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-0 col-xl-5">
                            <div class="about_img" data-mdb-toggle="modal" data-mdb-target="#gift_modal" role="button">
                                <img src="/assets/img/new-banner-5.webp" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="about_slogan card-body card-body_home">
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="about_slogan-wrapper">
                                <div class="about_slogan-img">
                                    <img class="about_slogan-img" src="/assets/img/mk.png" alt="">
                                </div>
                                <div class="about_slogan-txt">
                                    <p>Sản Phẩm</p>
                                    <p>Chính Hãng 100%</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="about_slogan-wrapper">
                                <div class="about_slogan-img">
                                    <img class="about_slogan-img" src="/assets/img/No1.png" alt="">
                                </div>
                                <div class="about_slogan-txt">
                                    <p>Thương Hiệu</p>
                                    <p>Số 1 Tại Đức</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            <div class="about_slogan-wrapper">
                                <div class="about_slogan-img">
                                    <img class="about_slogan-img" src="/assets/img/ship.png" alt="">
                                </div>
                                <div class="about_slogan-txt">
                                    <p>Giao Hàng</p>
                                    <p>Toàn Quốc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ======= End About ======= -->

    <!-- ======= Product ======= -->
    <section class="product pb-5" id="product_woman">
        <div class="container">
            <div class="card">
                <div class="card-body card-body_home">
                    <div class="product_title-wrapper mb-3">
                        <div class="product_title">
                            <span>NHÓM SẢN PHẨM DÀNH CHO PHỤ NỮ</span>
                        </div>
                        <div class="product_seemore">
                            <a href="https://doppelherz.vn/san-pham/" target="_blank" >Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product_with-img">
                                <img src="{{ asset('/assets/img/Banner_Woman.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-8">
                            <div class="row product_slider-wrapper">
                                @foreach($categoryWoman['data'] as $womanValue)
                                <div class="col-md product_slider-items">
                                    <div class="product_slider-content">
                                        <div class="product_slider-img">
                                            <img class="product_slider-thumb" src="{{ $womanValue['image'] }}"
                                                alt="{{ $womanValue['name'] }}">
                                        </div>
                                        <div class="product_slider-title">
                                            <h3>{{ $womanValue['name'] }}</h3>
                                        </div>
                                        <div class="product_slider-action">
                                            <a href="{{ $womanValue['link_product'] }}" target="_blank" class="btn btn-danger">Mua sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product pb-5" id="product_man">
        <div class="container">
            <div class="card">
                <div class="card-body card-body_home">
                    <div class="product_title-wrapper mb-3">
                        <div class="product_title">
                            <span>NHÓM SẢN PHẨM DÀNH CHO NAM GIỚI</span>
                        </div>
                        <div class="product_seemore">
                            <a href="https://doppelherz.vn/san-pham/" target="_blank" >Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product_with-img">
                                <img src="{{ asset('/assets/img/Banner_Man.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-8">
                            <div class="row product_slider-wrapper">
                                @foreach($categoryMen['data'] as $menValue)
                                <div class="col-md product_slider-items">
                                    <div class="product_slider-content">
                                        <div class="product_slider-img">
                                            <img class="product_slider-thumb" src="{{ $menValue['image'] }}"
                                                alt="{{ $menValue['name'] }}">
                                        </div>
                                        <div class="product_slider-title">
                                            <h3>{{ $menValue['name'] }}</h3>
                                        </div>
                                        <div class="product_slider-action">
                                            <a href="{{ $menValue['link_product'] }}" target="_blank" class="btn btn-danger">Mua sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product pb-5" id="product_child">
        <div class="container">
            <div class="card">
                <div class="card-body card-body_home">
                    <div class="product_title-wrapper mb-3">
                        <div class="product_title">
                            <span>NHÓM SẢN PHẨM DÀNH CHO TRẺ EM</span>
                        </div>
                        <div class="product_seemore">
                            <a href="https://doppelherz.vn/san-pham/" target="_blank" >Xem thêm</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product_with-img">
                                <img src="{{ asset('/assets/img/Banner_Child.webp') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-8">
                            <div class="row product_slider-wrapper">
                                @foreach($categoryChild['data'] as $childValue)
                                <div class="col-md product_slider-items">
                                    <div class="product_slider-content">
                                        <div class="product_slider-img">
                                            <img class="product_slider-thumb" src="{{ $childValue['image'] }}"
                                                alt="{{ $childValue['name'] }}">
                                        </div>
                                        <div class="product_slider-title">
                                            <h3>{{ $childValue['name'] }}</h3>
                                        </div>
                                        <div class="product_slider-action">
                                            <a href="{{ $childValue['link_product'] }}" target="_blank" class="btn btn-danger">Mua sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======= End Product ======= -->

    <!-- ======= Catalog ======= -->
    <section class="catelog pb-5" id="catalog">
        <div class="container">
            <div class="card">
                <div class="card-body card-body_home">
                    <div class="row catelog_wrapper">
                        <div class="col-3">
                            <a class="catelog_link" href="#" target="_blank">
                                <img src="/assets/img/1.jpg" alt="" class="catelog_img">
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="catelog_link" href="#" target="_blank">
                                <img src="/assets/img/2.jpg" alt="" class="catelog_img">
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="catelog_link" href="#" target="_blank">
                                <img src="/assets/img/3.jpg" alt="" class="catelog_img">
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="catelog_link" href="#" target="_blank">
                                <img src="/assets/img/4.jpg" alt="" class="catelog_img">
                            </a>
                        </div>
                        <div class="col-3">
                            <a class="catelog_link" href="#" target="_blank">
                                <img src="/assets/img/4.jpg" alt="" class="catelog_img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Catalog ======= -->
@endsection

<!-- Modal -->
<div class="modal fade" id="gift_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal_gift">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="exampleModalLabel">Danh sách phần quà</div>
                <div type="button" class="gift_close" data-mdb-dismiss="modal">
                    <i class="fa-solid fa-xmark" style="color: #c42726;"></i>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($thongTinQuaTang as $value)
                    <div class="col-xl-2 mb-3">
                        <div class="gift_wrapper">
                            <div class="gift_img">
                                <img src="{{ $value['image'] }}" alt="">
                            </div>
                            <div class="gift_title">
                                <h5>{{ $value['name'] }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider_wrapper').slick({
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: true,
                speed: 500,
                cssEase: 'linear'
            });
            $('.catelog_wrapper').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: true,
                speed: 500,
                cssEase: 'linear',
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('.product_slider-wrapper').slick({
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: true,
                speed: 500,
                cssEase: 'linear',
                slidesToShow: 3,
                slidesToScroll: 3,
                rows: 2,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 776,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            rows: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endsection
