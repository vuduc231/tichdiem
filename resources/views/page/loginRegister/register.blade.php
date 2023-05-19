@extends('template.loginRegister')

@section('title', 'Đăng ký')

@section('main_section')
<!-- ======= REGISTER ======= -->
<section class="register section_with-img">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-6">
                <div class="loginRegister_img m-auto">
                    <img class="d-none d-md-none d-xl-block" src="{{ asset('/assets/img/Banner-5.png') }}" alt="">
                    <img class="d-block d-md-block d-xl-none" src="{{ asset('/assets/img/Banner-6.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-6 d-flex flex-column justify-content-center">
                <div class="loginRegister_tabs-withForm">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">Đăng ký</h1>
                    </div>
                    <form action="{{ route('registerApi') }}" method="POST" autocomplete="off">
                        @csrf
                       <div class="row">
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="text" name="name" class="form-control fs-4" placeholder="Họ và tên">
                            </div>
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="phone" name="phone" class="form-control fs-4" placeholder="Số điện thoại">
                            </div>
                       </div>
                        <div class="col-12 position-relative mb-5">
                            <input type="email" name="email" class="form-control fs-4" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="password" name="password" class="form-control fs-4" placeholder="Mật khẩu">
                            </div>
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="password" name="re-password" class="form-control fs-4" placeholder="Xác nhận mật khẩu">
                            </div>
                        </div>
                        <div class="col-12 position-relative mb-4">
                            <div class="form-check fs-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label for="flexCheckDefault" class="form-check-label">
                                    Tôi đồng ý với 
                                    <a class="text-danger fw-bold" href="{{ route('terms') }}">Điều khoản</a> &amp; <a class="text-danger fw-bold" href="{{ route('privacy') }}"> Chính sách bảo mật.</a>
                                </label>
                              </div>
                        </div>
                        
                        <div class="position-relative mb-3">
                            <button type="button" class="btn btn-danger w-100 fs-4">Đăng ký</button>
                        </div>
                    </form>
                </div>
                <div class="separator pt-4 pb-4">
                    <div class="line"></div>
                    <p class="fs-4">Hoặc</p>
                    <div class="line"></div>
                </div>
                <div class="text-center fs-4">
                    Bạn đã có tài khoản?
                    <a class="font-medium text-danger" href="{{ route('login') }}">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= End REGISTER ======= -->
@endsection