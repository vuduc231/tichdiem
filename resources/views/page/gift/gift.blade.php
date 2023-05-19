@extends('template.master')
@section('title', 'Đổi quà')

@php
    usort($thongTinQuaTang, function($a, $b) {
        return $a['valuePromotion'] <=> $b['valuePromotion'];
    });
@endphp

@section('main_section')
<!-- ======= EXCHANGE GIFT ======= -->
<section class="exchange_gift pb-5 pt-5">
    <div class="container">
        <div class="breadcumb_wrapper mb-3 d-block text-center">
            <div class="breadcumb_title">Đổi quà</div>
        </div>

        <div class="card overflow-hidden mb-3">
            <div class="card-body">
                <div class="gift_scroll-heading">
                    Điểm của bạn: <strong class="text-danger">{{ Session::get('user')['data']['totalPoint'] ?? '' }}</strong>
                </div>
                <div class="gift_scroll-wrapper">
                    <div class="gift_scroll-list">
                        @foreach($thongTinQuaTang as $value)
                        <div class="gift_scroll-items">
                            <div class="gift_scroll-progress">
                                <div class="gift_scroll-top">
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="gift_scroll-value-wrapper">
                                        <div class="gift_scroll-value">
                                            {{ $value['valuePromotion'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="gift_scroll-bottom">
                                    <div class="gift_scroll-img">
                                        <img class="gift_scroll-img--hasBox" src="{{ $value['image'] }}" alt="{{ $value['name'] }}" />
                                    </div>
                                    <!-- <div class="gift_scroll-showDetail">
                                        <img src="/assets/img/items.webp" alt="" />
                                        <div class="gift_scroll-showDetail--title">
                                            <span>Phần quà: Bộ gồm 2 quyển tập tô cho bé</span>
                                        </div>
                                    </div> -->
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="gift_scroll-notice">* Kéo sang phải để xem thêm.</div>
                <div class="gift_scroll-notice--withMobile">* Vuốt sang phải để xem thêm.</div>
            </div>
        </div>

        <div class="card overflow-hidden mb-3">
            <div class="card-body card-body_home">
                <div class="exchange_gift-wrapper">
                    @foreach($thongTinQuaTang as $value)
                    <div class="exchange_gift-items">
                        <div class="exchange_gift-left">
                            <div class="exchange_gift-img">
                                <img src="{{ $value['image'] }}" alt="{{ $value['name'] }}" />
                            </div>
                        </div>
                        <div class="exchange_gift-right">
                            <div class="exchange_gift-title">{{ $value['name'] }}</div>
                            <div class="exchange_gift-values">{{ Session::get('user')['data']['totalPoint'] ?? '' }}/<strong>{{ $value['valuePromotion'] }}</strong></div>
                            <div class="exchange_gift-progress">
                                <div class="progress">
                                    <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 100%"
                                        aria-valuenow="100"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    ></div>
                                </div>
                            </div>
                            <div class="exchange_gift-actions">
                                <button class="btn btn-danger">Đổi quà</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= END EXCHANGE GIFT ======= -->
@endsection