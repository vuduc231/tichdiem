@extends('template.loginRegister')

@section('title', 'Đăng nhập')

@section('main_section')
<!-- ======= Login ======= -->
<section class="login section_with-img">
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
                        <h1 class="fw-bold">Đăng nhập</h1>
                    </div>
                    <form action="{{ route('loginApi') }}" method="POST">
                        @csrf
                        <div class="position-relative mb-5">
                            <input type="text" required name="phone" class="form-control fs-4" placeholder="Số điện thoại" />
                        </div>
                        <div class="position-relative mb-5">
                            <input type="password" required name="password" class="form-control fs-4" placeholder="Mật khẩu" />
                        </div>
                        <div class="d-flex justify-content-end align-items-center mb-4">
                            <a class="fs-4 text-danger" href="{{ route('contact') }}">
                            Quên mật khẩu
                            </a>
                        </div>
                        <div class="position-relative mb-4">
                            <button type="submit" class="btn btn-danger w-100 fs-4">Đăng nhập</button>
                        </div>
                    </form>
                </div>
                <div class="separator pt-4 pb-4">
                    <div class="line"></div>
                    <p class="fs-4">Hoặc</p>
                    <div class="line"></div>
                </div>
                <div class="text-center fs-4">
                    Bạn chưa có tài khoản? 
                    <a class="font-medium text-danger" href="{{ route('register') }}">Đăng ký ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======= End Login ======= -->
@endsection