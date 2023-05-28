@extends('template.noHeaderFooter')

@section('title', 'Khách hàng thân thiết')

@section('main_section')
    <div class="acculatePoint_wrapper">
        <div class="acculatePoint_container">
            <div class="acculatePoint_content">
                <div class="acculatePoint_header">
                    <a href="/">
                        <img src="{{ asset('/assets/img/logo.webp') }}" alt="logo" class="acculatePoint_logo" />
                    </a>
                    <div class="acculatePoint_title-top">Cảm ơn quý khách đã tin tưởng sử dụng sản phẩm</div>
                    <div class="acculatePoint_title-bottom">Doppelherz</div>
                    <div class="separator pt-4 pb-4">
                        <div class="line"></div>
                        <p class="fs-1">Thông tin tích điểm</p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="acculatePoint_body">
                    <div class="acculatePoint_body-wrapper">
                        <div class="acculatePoint_body-left">
                            <div class="acculatePoint_body-img">
                                <img class="" src="https://tichdiem.doppelherz.vn/_next/image?url=https%3A%2F%2Fdoppelherz.vn%2Fwp-content%2Fuploads%2F2020%2F12%2FOMGv-front-01.png&w=640&q=75" alt="" />
                            </div>
                        </div>
                        <div class="acculatePoint_body-right">
                            <div class="acculatePoint_body-heading-wrapper">
                                <span class="acculatePoint_body-right-text pe-3 text-black">Sản phẩm:</span>
                                Omega-3 + Folic axit + B6 + B12
                            </div>
                            <div class="acculatePoint_body-desc-wrapper">
                                Giúp cung cấp Omega-3 và vitamin thiết yếu cho cơ thể;
                                Hỗ trợ tăng cường sức khỏe tim mạch và não bộ.
                            </div>
                            <div class="acculatePoint_body-term-wrapper">
                                Bằng việc bấm "Tích điểm ngay" tôi đồng ý với <a class="fw-bold" href="{{ route('terms') }}" target="_blank">điều khoản</a> và <a class="fw-bold" href="{{ route('rule') }}" target="_blank">quy định</a> của chương trình
                            </div>
                        </div>
                    </div>
                    <div class="acculatePoint_body-bottom">
                        NGHNNHLOadsL
                    </div>
                </div>
            </div>
        </div>
        <div class="acculatePoint_actions">
            <form method="POST" action="">
                @csrf
                <button type="button" class="btn btn-danger fs-3 p-4">Tích điểm ngay</button>
            </form>
        </div>
    </div>
@endsection
