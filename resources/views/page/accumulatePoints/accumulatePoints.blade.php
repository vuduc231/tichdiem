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
                                <img class="" src="{{ $product['image'] }}" alt="{{ $product['name'] }}" />
                            </div>
                        </div>
                        <div class="acculatePoint_body-right">
                            <div class="acculatePoint_body-heading-wrapper">
                                <span class="acculatePoint_body-right-text pe-3 text-black">Sản phẩm:</span>
                                {{ $product['name'] }}
                            </div>
                            <div class="acculatePoint_body-desc-wrapper">
                                {!! $product['description'] !!}
                            </div>
                            <div class="acculatePoint_body-term-wrapper">
                                Bằng việc bấm "Tích điểm ngay" tôi đồng ý với <a class="fw-bold" href="{{ route('terms') }}" target="_blank">điều khoản</a> và <a class="fw-bold" href="{{ route('rule') }}" target="_blank">quy định</a> của chương trình
                            </div>

                            <div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="acculatePoint_body-bottom">
                        {{ $special_code }}
                    </div>
                </div>
            </div>
        </div>
        <div class="acculatePoint_actions">
            <form method="POST" action="{{ route('accumulatePointsApi', ['promotion_id' => $promotion_id, 'product_id' => $product['id'], 'special_code' => $special_code]) }}">
                @csrf
                <input type="hidden" name="special_code" value="{{ $special_code }}">
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button type="submit" class="btn btn-danger fs-3 p-4" style="text-transform: none; background-color:#f33444">Tích điểm ngay</button>
            </form>
            
        </div>
    </div>

    
@endsection

@if(session('showHistory'))
    @foreach($getPromotion as $value)
        @if($value['product_id'] == $product['id'])
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Chúc mừng',
                        html: "<div class='fs-5'>Sản phẩm của bạn đã được tích <b class='text-danger'>{{ $value['valueSale'] }}</b> điểm vào tài khoản và sẵn sàng để đổi quà. Cảm ơn bạn đã tham gia chương trình</div>",
                        timerProgressBar: true,
                        timer: 10000,
                        showConfirmButton: true,
                        confirmButtonText: 'Lịch sử tích điểm'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{ route('history') }}';
                        }
                    });
                });
            </script>
        @endif
    @endforeach
@endif