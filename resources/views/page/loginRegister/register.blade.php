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
                        <h1 class="fw-bold">Đăng ký tài khoản</h1>
                    </div>
                    @if (session('registerError'))
                        <div class="alert alert-danger text-center fs-5 mb-3">
                            {{ session('registerError') }}
                        </div>
                    @endif
                    <form id="registerForm" action="{{ route('registerApi') }}" method="POST" autocomplete="off">
                        @csrf
                       <div class="row">
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="text" name="name" id="name" class="form-control fs-4" placeholder="Họ và tên">
                                <span id="name-error" class="text-danger d-none fs-5">Vui lòng nhập họ và tên</span>
                            </div>
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="phone" name="phone" id="phone" class="form-control fs-4" placeholder="Số điện thoại">
                                <span id="phone-error" class="text-danger d-none fs-5">Vui lòng nhập số điện thoại</span>
                            </div>
                       </div>
                        <div class="col-12 position-relative mb-5">
                            <input type="email" name="email" class="form-control fs-4" placeholder="Email">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="password" name="password" id="password" class="form-control fs-4" placeholder="Mật khẩu">
                                <span id="password-error" class="text-danger d-none fs-5">Mật khẩu không đủ 6 kí tự</span>
                            </div>
                            <div class="col-12 col-md-12 col-xl-6 position-relative mb-5">
                                <input type="password" name="re-password" id="re-password" class="form-control fs-4" placeholder="Xác nhận mật khẩu">
                                <span id="rePassword-error" class="text-danger d-none fs-5">Mật khẩu và xác nhận mật khẩu không trùng khớp</span>
                            </div>
                        </div>
                        <div class="col-12 position-relative mb-4">
                            <div class="form-check fs-4">
                                <input name="acceptTerms" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked/>
                                <label for="flexCheckDefault" class="form-check-label">
                                    Tôi đồng ý với 
                                    <a class="text-danger fw-bold" href="{{ route('terms') }}">Điều khoản</a> &amp; <a class="text-danger fw-bold" href="{{ route('privacy') }}"> Chính sách bảo mật.</a>
                                </label>
                              </div>
                        </div>
                        
                        <div class="position-relative mb-3">
                            <button type="submit" class="btn btn-danger w-100 fs-4">Đăng ký</button>
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

@section('scripts')
<script>
    const nameInput = document.getElementById('name');
    const phoneInput = document.getElementById('phone');
    const passwordInput = document.getElementById('password');
    const rePasswordInput = document.getElementById('re-password');
    const nameError = document.getElementById('name-error');
    const phoneError = document.getElementById('phone-error');
    const passwordError = document.getElementById('password-error');
    const rePasswordError = document.getElementById('rePassword-error');
    const registerForm = document.getElementById('registerForm');

    function validatePassword() {
        const name = nameInput.value;
        const phone = phoneInput.value;
        const password = passwordInput.value;
        const rePassword = rePasswordInput.value;
        
        let hasError = false;

        if (!name) {
            nameError.classList.remove('d-none');
            hasError = true;
        } else {
            nameError.classList.add('d-none');
        }

        if (!phone || isNaN(phone)) {
            phoneError.classList.remove('d-none');
            hasError = true;
        } else {
            phoneError.classList.add('d-none');
        }

        if (password !== rePassword) {
            rePasswordError.classList.remove('d-none');
            hasError = true;
        } else {
            rePasswordError.classList.add('d-none');
        }

        if (password.length < 6) {
            passwordError.classList.remove('d-none');
            hasError = true;
        } else {
            passwordError.classList.add('d-none');
        }

        if (hasError) {
            event.preventDefault();
        }
    }

    nameInput.addEventListener('keyup', validatePassword);
    phoneInput.addEventListener('keyup', validatePassword);
    rePasswordInput.addEventListener('keyup', validatePassword);
    registerForm.addEventListener('submit', validatePassword);
</script>
@endsection