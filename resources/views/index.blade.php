@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Khách hàng thân thiết')
@section('main_section')
    <!-- ======= Slider ======= -->
    <section class="slider_with-img pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-8">
                    <div class="slider_wrapper">
                        @foreach($getContentList['data'] as $slider_one)
                            @if ($slider_one['positionContent'] === 'banner_slide_1')
                                <div class="slider_items">
                                    <a class="slider_thumb" href="{{ $slider_one['linkContent'] ?? '#' }}"
                                        style="background-image: url({{ $slider_one['urlContent'] }});"></a>
                                </div>
                            @endif
                        @endforeach

                        @foreach($getContentList['data'] as $slider_two)
                            @if ($slider_two['positionContent'] === 'banner_slide_2')
                                <div class="slider_items">
                                    <a class="slider_thumb" href="{{ $slider_two['linkContent'] ?? '#' }}"
                                        style="background-image: url({{ $slider_two['urlContent'] }});"></a>
                                </div>
                            @endif
                        @endforeach

                        @foreach($getContentList['data'] as $slider_three)
                            @if ($slider_three['positionContent'] === 'banner_slide_3')
                                <div class="slider_items">
                                    <a class="slider_thumb" href="{{ $slider_three['linkContent'] ?? '#' }}"
                                        style="background-image: url({{ $slider_three['urlContent'] }});"></a>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col">
                    @foreach($getContentList['data'] as $bannerSide)
                        @if ($bannerSide['positionContent'] === 'banner_slide_side_1')
                        <div class="img_item mb-3">
                            <img src="{{ $bannerSide['urlContent'] }}" alt="{{ $bannerSide['typeContent'] }}">
                        </div>
                        @endif
                        @if ($bannerSide['positionContent'] === 'banner_slide_side_2')
                        <div class="img_item mb-3">
                            <img src="{{ $bannerSide['urlContent'] }}" alt="{{ $bannerSide['typeContent'] }}">
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Slogan ======= -->
    <section class="slogan pb-5">
        <div class="container">
            <div class="row">
                @foreach($getContentList['data'] as $bannerSub)
                    @if ($bannerSub['positionContent'] === 'banner_uudiem_1')
                    <div class="col-6 col-md-3 col-xl-3 mb-3">
                        <div class="slogan_items text-center">
                            <h1>{{ $bannerSub['typeContent'] }}</h1>
                            <span class="d-block">{!! $bannerSub['descriptionContent'] !!}</span>
                        </div>
                    </div>
                    @endif
                    @if ($bannerSub['positionContent'] === 'banner_uudiem_2')
                    <div class="col-6 col-md-3 col-xl-3 mb-3">
                        <div class="slogan_items text-center">
                            <h1>{{ $bannerSub['typeContent'] }}</h1>
                            <span class="d-block">{!! $bannerSub['descriptionContent'] !!}</span>
                        </div>
                    </div>
                    @endif
                    @if ($bannerSub['positionContent'] === 'banner_uudiem_3')
                    <div class="col-6 col-md-3 col-xl-3 mb-3">
                        <div class="slogan_items text-center">
                            <h1>{{ $bannerSub['typeContent'] }}</h1>
                            <span class="d-block">{!! $bannerSub['descriptionContent'] !!}</span>
                        </div>
                    </div>
                    @endif
                    @if ($bannerSub['positionContent'] === 'banner_uudiem_4')
                    <div class="col-6 col-md-3 col-xl-3 mb-3">
                        <div class="slogan_items text-center">
                            <h1>{{ $bannerSub['typeContent'] }}</h1>
                            <span class="d-block">{!! $bannerSub['descriptionContent'] !!}</span>
                        </div>
                    </div>
                    @endif
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- ======= End Slogan ======= -->

    <!-- ======= About ======= -->
    <section class="about pb-5">
        <div class="container">
            <div class="card overflow-hidden">
                <div class="card-body card-body_home">
                    @foreach($getContentList['data'] as $content)
                        @if ($content['positionContent'] === 'banner_vuong')
                        <div>
                            {{-- <h1 class="about_title">GIỚI THIỆU CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT</h1> --}}
                            <h1 class="about_title">{{ $content['typeContent'] ?? '' }}</h1>
                        </div>
                        
                        <div class="row">
                            {!! $content['descriptionContent'] ?? '' !!}
                            <div class="col-12 col-md-0 col-xl-5">
                                <div class="about_img" data-mdb-toggle="modal" data-mdb-target="#gift_modal" role="button">
                                    <img src="{{ $content['urlContent'] ?? '' }}" alt="">
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="about_slogan card-body card-body_home">
                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-4">
                            @foreach($getContentList['data'] as $bannerDes_one)
                                @if ($bannerDes_one['positionContent'] === 'banner_mota_1')
                                    <div class="about_slogan-wrapper">
                                        <div class="about_slogan-img">
                                            <img class="about_slogan-img" src="{{ $bannerDes_one['urlContent'] ?? '' }}" alt="{{ $bannerDes_one['typeContent'] ?? '' }}">
                                        </div>
                                        <div class="about_slogan-txt">
                                            {!! $bannerDes_one['descriptionContent'] ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            @foreach($getContentList['data'] as $bannerDes_two)
                                @if ($bannerDes_two['positionContent'] === 'banner_mota_2')
                                    <div class="about_slogan-wrapper">
                                        <div class="about_slogan-img">
                                            <img class="about_slogan-img" src="{{ $bannerDes_two['urlContent'] ?? '' }}" alt="{{ $bannerDes_two['typeContent'] ?? '' }}">
                                        </div>
                                        <div class="about_slogan-txt">
                                            {!! $bannerDes_two['descriptionContent'] ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-12 col-md-12 col-xl-4">
                            @foreach($getContentList['data'] as $bannerDes_three)
                                @if ($bannerDes_three['positionContent'] === 'banner_mota_3')
                                    <div class="about_slogan-wrapper">
                                        <div class="about_slogan-img">
                                            <img class="about_slogan-img" src="{{ $bannerDes_three['urlContent'] ?? '' }}" alt="{{ $bannerDes_three['typeContent'] ?? '' }}">
                                        </div>
                                        <div class="about_slogan-txt">
                                            {!! $bannerDes_three['descriptionContent'] ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
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
                        @foreach($getContentList['data'] as $title_woman)
                            @if ($title_woman['positionContent'] === 'banner_nhomsp_1')
                                <div class="product_title">
                                    <span>{{ $title_woman['typeContent'] ?? '#' }}</span>
                                </div>
                                <div class="product_seemore">
                                    <a href="{{ $title_woman['linkContent'] ?? '#' }}" target="_blank" >Xem thêm</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            @foreach($getContentList['data'] as $bannerProduct_woman)
                                @if ($bannerProduct_woman['positionContent'] === 'banner_nhomsp_1')
                                    <div class="product_with-img">
                                        <img src="{{ $bannerProduct_woman['urlContent'] }}" alt="">
                                    </div>
                                @endif
                            @endforeach
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
                        @foreach($getContentList['data'] as $title_man)
                            @if ($title_man['positionContent'] === 'banner_nhomsp_2')
                                <div class="product_title">
                                    <span>{{ $title_man['typeContent'] ?? '#' }}</span>
                                </div>
                                <div class="product_seemore">
                                    <a href="{{ $title_man['linkContent'] ?? '#' }}" target="_blank" >Xem thêm</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            @foreach($getContentList['data'] as $bannerProduct_man)
                                @if ($bannerProduct_man['positionContent'] === 'banner_nhomsp_2')
                                    <div class="product_with-img">
                                        <img src="{{ $bannerProduct_man['urlContent'] }}" alt="">
                                    </div>
                                @endif
                            @endforeach
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
                        @foreach($getContentList['data'] as $title_child)
                            @if ($title_child['positionContent'] === 'banner_nhomsp_3')
                                <div class="product_title">
                                    <span>{{ $title_child['typeContent'] ?? '#' }}</span>
                                </div>
                                <div class="product_seemore">
                                    <a href="{{ $title_child['linkContent'] ?? '#' }}" target="_blank" >Xem thêm</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            @foreach($getContentList['data'] as $bannerProduct_child)
                                @if ($bannerProduct_child['positionContent'] === 'banner_nhomsp_3')
                                    <div class="product_with-img">
                                        <img src="{{ $bannerProduct_child['urlContent'] }}" alt="">
                                    </div>
                                @endif
                            @endforeach
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
                    <div class="catelog_wrapper">
                        @foreach($getContentList['data'] as $bannerQC_one)
                            @if ($bannerQC_one['positionContent'] === 'banner_qc_1')
                                <div class="">
                                    <a class="catelog_link" href="{{ $bannerQC_one['linkContent'] ?? '#' }}" target="_blank">
                                        <img src="{{ $bannerQC_one['urlContent'] ?? '#' }}" alt="" class="catelog_img" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        @foreach($getContentList['data'] as $bannerQC_two)
                            @if ($bannerQC_two['positionContent'] === 'banner_qc_2')
                                <div class="">
                                    <a class="catelog_link" href="{{ $bannerQC_two['linkContent'] ?? '#' }}" target="_blank">
                                        <img src="{{ $bannerQC_two['urlContent'] ?? '#' }}" alt="" class="catelog_img" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        @foreach($getContentList['data'] as $bannerQC_three)
                            @if ($bannerQC_three['positionContent'] === 'banner_qc_3')
                                <div class="">
                                    <a class="catelog_link" href="{{ $bannerQC_three['linkContent'] ?? '#' }}" target="_blank">
                                        <img src="{{ $bannerQC_three['urlContent'] ?? '#' }}" alt="" class="catelog_img" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        @foreach($getContentList['data'] as $bannerQC_four)
                            @if ($bannerQC_four['positionContent'] === 'banner_qc_4')
                                <div class="">
                                    <a class="catelog_link" href="{{ $bannerQC_four['linkContent'] ?? '#' }}" target="_blank">
                                        <img src="{{ $bannerQC_four['urlContent'] ?? '#' }}" alt="" class="catelog_img" />
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End Catalog ======= -->

    <!-- ======= Modal ======= -->
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
                                    <img src="{{ $value['image'] }}" alt="{{ $value['name'] }}">
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

@endsection

@section('scripts')
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('/assets/plugins/slick/slick.min.js') }}"></script>
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
                prevArrow: false,
                nextArrow: false,
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
                            slidesToShow: 2,
                        }
                    }
                ]
            });
            $('.product_slider-wrapper').slick({
                infinite: true,
                // autoplay: true,
                // autoplaySpeed: 3000,
                pauseOnHover: true,
                speed: 500,
                cssEase: 'linear',
                slidesToShow: 3,
                slidesToScroll: 3,
                rows: 2,
                responsive: [
                    {
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
