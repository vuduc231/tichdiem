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
                    Điểm của bạn: <strong class="text-danger">{{ Session::get('getUser')['totalPoint'] ?? '' }}</strong>
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
                            <div class="exchange_gift-values">{{ Session::get('getUser')['totalPoint'] ?? '' }}/<strong>{{ $value['valuePromotion'] }}</strong></div>
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
                                <button class="btn btn-danger px-4" data-mdb-toggle="modal" data-mdb-target="#exchangeGift-{{ $value['id'] }}">Đổi quà</button>
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

{{-- Modal Exhange Gift --}}
@foreach($thongTinQuaTang as $value)
<div class="modal fade" id="exchangeGift-{{ $value['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal_loginRegister">
        <div class="modal-content">
            <div class="modal-header">
                <div type="button" class="modal_loginRegister-close" data-mdb-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark" style="color: #c42726;"></i>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="exchangeGift-wrapper text-center">
                            <div class="mb-1 exchangeGift-heading fs-2 fw-bold">
                                Bạn muốn đổi phần quà này?
                            </div>
                            <div class="mb-1 exchangeGift-title fs-3 text-danger fw-bold">
                                {{ $value['name'] }}
                            </div>
                            <div class="mb-1 exchangeGift-point fs-3 text-danger fw-bold">
                                {{ $value['valuePromotion'] }} điểm
                            </div>
                            <div class="mb-3 exchangeGift-image">
                                <img src="{{ $value['image'] }}" alt="{{ $value['name'] }}" />
                            </div>
                            <div class="mb-3 exchangeGift-warning fs-4 text-danger">
                                Vui lòng kiểm tra lại thông tin trước khi đổi quà.
                            </div>
                            
                            <div class="mb-3 exchangeGift-action d-flex align-items-center justify-content-end">
                                <button class="btn btn-warning p-3 me-3 shadow-1" style="--mdb-btn-bg: #f97316; --mdb-btn-box-shadow: 0 4px 9px -4px #f97316; --mdb-btn-hover-bg: #f97316;--mdb-btn-focus-bg: #f97316;text-transform: none;" data-mdb-toggle="modal" data-mdb-target="#checkInfor-{{ $value['id'] }}">Kiểm tra thông tin</button>
                                <form action="{{ route('gift.change') }}" method="POST" class="m-0">   
                                    @csrf
                                    <input type="hidden" name="gift_id" value="{{ $value['id'] }}">
                                    <input type="hidden" name="customer_id" value="{{ Session::get('getUser')['id'] }}">
                                    <button type="submit" class="btn btn-danger p-3" style="text-transform: none;">Đổi quà</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="checkInfor-{{ $value['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal_loginRegister">
        <div class="modal-content">
            <div class="modal-header">
                <div class="mb-3 exchangeGift-action d-flex align-items-center justify-content-start">
                    <button type="button" class="btn btn-light p-3 fs-5" style="text-transform: none;" data-mdb-toggle="modal" data-mdb-target="#exchangeGift-{{ $value['id'] }}">
                        <i class="fa-solid fa-arrow-left-long"></i>
                        Quay lại
                    </button>
                </div>
                <div type="button" class="modal_loginRegister-close" data-mdb-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark" style="color: #c42726;"></i>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="exchangeGift-wrapper text-center">
                            <div class="mb-3 exchangeGift-heading fs-2 fw-bold">
                                Kiểm tra thông tin
                            </div>
                            <form action="{{ route('gift.info') }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="confirmed">
                                <div class="form-outline mb-4">
                                    <input type="text" id="nameInput" name="name" value="{{ Session::get('getUser')['name'] ?? '' }}" placeholder="Họ và tên" class="form-control p-3 fs-4" />
                                    <label class="form-label pt-0 fs-4" for="nameInput">Họ và tên</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="emailInput" name="email" value="{{ Session::get('getUser')['email'] ?? '' }}" placeholder="Email" class="form-control p-3 fs-4" />
                                    <label class="form-label pt-0 fs-4" for="emailInput">Email</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="phoneInput" readonly value="{{ Session::get('getUser')['phone'] ?? '' }}" placeholder="Số điện thoại" class="form-control p-3 fs-4" />
                                    <label class="form-label pt-0 fs-4" for="phoneInput">Số điện thoại</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="addressInput" name="address" value="{{ Session::get('getUser')['address'] ?? '' }}" placeholder="Địa chỉ" class="form-control p-3 fs-4" />
                                    <label class="form-label pt-0 fs-4" for="addressInput">Địa chỉ</label>
                                </div>

                                <div class="text-center fs-4 mb-3">
                                    <span> Quý khách muốn thay đổi số điện thoại vui lòng liên hệ đến</span>
                                    <br>email: <a href="mailto:info@mastertran.vn" class="text-danger">info@mastertran.vn</a>
                                </div>
                                
                                <div class="mb-3 exchangeGift-action d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-danger p-3" style="text-transform: none;">Xác nhận đổi thông tin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

