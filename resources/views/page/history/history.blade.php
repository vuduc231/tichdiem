@extends('template.master')
@section('title', 'Lịch sử tích điểm')
@section('main_section')
    <!-- ======= HISTORY ======= -->
    <section class="history pb-3">
        <div class="container">
            <div class="breadcumb_wrapper mb-3">
                <div class="breadcumb_title">Lịch sử tích điểm</div>
                <div class="breadcumb_action">
                    <a href="{{ route('gift') }}" class="btn btn-danger" role="button">Đổi quà ngay</a>
                </div>
            </div>
            <div class="card overflow-hidden">
                <div class="card-body card-body_home">
                    <div class="history_wrapper">
                        <div class="history_company">
                            <div class="history_company-infor">
                                <div class="history_company-infor-title">Doppelherz</div>
                                <div class="history_company-infor-desc">
                                    <p class="mb-1">Tầng 06, tháp A, tòa Central Point số 219 Trung Kính</p>
                                    <p class="mb-1">Phường Yên Hòa, Quận Cầu Giấy, Hà Nội</p>
                                    <p class="mb-1">Email: info@mastertran.vn</p>
                                    <p class="mb-1">SĐT: 18001770</p>
                                </div>
                            </div>
                            <div class="history_company-point text-end">
                                <div class="history_company-point-title mb-3">
                                    Điểm thưởng: <strong class="text-danger">{{ Session::get('user')['data']['totalPoint'] ?? '' }}</strong>
                                </div>
                                <div class="history_company-point-time">Ngày tham gia: {{ \Carbon\Carbon::parse(Session::get('user')['data']['created_at'])->format('d/m/Y') ?? '' }}</div>
                            </div>
                            
                        </div>
                        <div class="history_user col-4 col-md-8 col-xl-4 mb-5">
                            <div class="history_user-title">Thông tin tài khoản</div>
                            <div class="history_user-detail">
                                <div class="history_user-items row">
                                    <div class="history_user-name col-6">Họ và tên:</div>
                                    <div class="history_user-text col-6">{{ Session::get('user')['data']['name'] ?? '' }}</div>
                                </div>
                                <div class="history_user-items row">
                                    <div class="history_user-name col-6">Số điện thoại:</div>
                                    <div class="history_user-text col-6">{{ Session::get('user')['data']['phone'] ?? '' }}</div>
                                </div>
                                <div class="history_user-items row">
                                    <div class="history_user-name col-6">Email:</div>
                                    <div class="history_user-text col-6">{{ Session::get('user')['data']['email'] ?? '' }}</div>
                                </div>
                                <div class="history_user-items row">
                                    <div class="history_user-name col-6">Địa chỉ:</div>
                                    <div class="history_user-text col-6">{{ Session::get('user')['data']['address'] ?? '' }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="history_user-mobile">
                            <div class="history_user-mobile-heading mb-3">
                                Thông tin tích điểm
                            </div>
                            <div class="history_user-mobile-title mb-3">
                                Thông tin khách hàng
                            </div>
                            <div class="history_user-mobile-wrapper">
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/user.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Họ và tên</div>
                                        <div>{{ Session::get('user')['data']['name'] ?? '' }}</div>
                                    </div>
                                </div>
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/phone.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Số điện thoại</div>
                                        <div>{{ Session::get('user')['data']['phone'] ?? '' }}</div>
                                    </div>
                                </div>
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/email.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Email</div>
                                        <div>{{ Session::get('user')['data']['email'] ?? '' }}</div>
                                    </div>
                                </div>
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/address.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Địa chỉ</div>
                                        <div>{{ Session::get('user')['data']['address'] ?? '' }}</div>
                                    </div>
                                </div>
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/calendar.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Ngày tham gia</div>
                                        <div>{{ \Carbon\Carbon::parse(Session::get('user')['data']['created_at'])->format('d/m/Y') ?? '' }}</div>
                                    </div>
                                </div>
                                <div class="history_user-mobile-items align-items-center">
                                    <div class="history_user-mobile-left">
                                        <img src="/assets/img/summary.png" alt="">
                                    </div>
                                    <div class="history_user-mobile-right">
                                        <div>Tổng diểm tích lũy</div>
                                        <div>{{ Session::get('user')['data']['totalPoint'] ?? '' }} điểm</div>
                                    </div>
                                </div>
                            </div>
                            <div class="history_user-mobile-total mb-3">
                                <div class="history_user-mobile-total-text">
                                    <strong>Điểm hiện tại:</strong>
                                </div>
                                <div class="history_user-mobile-total-point">
                                    <strong class="text-danger">{{ Session::get('user')['data']['totalPoint'] ?? '' }} điểm</strong>
                                </div>
                            </div>
                            <div class="history_user-mobile-gift">
                                <a href="/doiqua.html" class="btn btn-danger" role="button">Đổi quà ngay</a>
                            </div>
                        </div>

                        <div class="history_tabs">
                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-5" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1"
                                        role="tab" aria-controls="ex1-tabs-1" aria-selected="true">Lịch sử tích điểm</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2"
                                        role="tab" aria-controls="ex1-tabs-2" aria-selected="false">Lịch sử đổi
                                        quà</a>
                                </li>
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                    aria-labelledby="ex1-tab-1">
                                    <div class="table-responsive">
                                        <div class="custom_table">
                                            <div class="custom_table-top">
                                                <div class="custom_table-heading">
                                                    Sản phẩm
                                                </div>
                                                <div class="custom_table-heading">
                                                    Mã tích điểm
                                                </div>
                                                <div class="custom_table-heading">
                                                    Ngày quét mã
                                                </div>
                                            </div>
                                            <div class="custom_table-middle">
                                                @foreach($historyPoint['history'] as $his)
                                                <div class="custom_table-list">
                                                    <div class="custom_table-items">
                                                        <div class="custom_table-items-title">
                                                            Tên sản phẩm:
                                                        </div>
                                                        <div class="custom_table-items-value">
                                                            {{ $his['product_name'] ?? '' }}
                                                        </div>
                                                    </div>
                                                    <div class="custom_table-items">
                                                        <div class="custom_table-items-title">
                                                            Mã QR:
                                                        </div>
                                                        <div class="custom_table-items-value">
                                                            {{ $his['qr_specialCode'] ?? '' }}
                                                        </div>
                                                    </div>
                                                    <div class="custom_table-items">
                                                        <div class="custom_table-items-title">
                                                            Ngày quét mã:
                                                        </div>
                                                        <div class="custom_table-items-value">
                                                            {{ \Carbon\Carbon::parse($his['created_at'])->format('d/m/Y') ?? '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                    <div class="history_empty">
                                        <img class="history_empty-img"src="/assets/img/empty-order.webp" alt="">
                                        <div class="history_empty-title">Chưa đổi quà</div>
                                    </div>

                                </div>
                            </div>
                            <!-- Tabs content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End HISTORY ======= -->
@endsection
