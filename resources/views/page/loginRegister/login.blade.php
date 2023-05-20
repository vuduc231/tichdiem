@extends('template.loginRegister')

@section('title', 'Đăng nhập')

@section('main_section')
<!-- ======= Login ======= -->
<section class="login section_with-img">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-xl-5">
                <div class="loginRegister_img m-auto">
                    <img class="d-none d-md-none d-xl-block" src="{{ asset('/assets/img/Banner-5.png') }}" alt="">
                    <img class="d-block d-md-block d-xl-none" src="{{ asset('/assets/img/Banner-6.png') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-4 d-flex flex-column justify-content-center">
                <div class="loginRegister_tabs-withForm">
                    <div class="text-center mb-3">
                        <h1 class="fw-bold">Đăng nhập</h1>
                    </div>
                    @if (session('loginError'))
                        <div class="alert alert-danger text-center fs-5 mb-3">
                            {{ session('loginError') }}
                        </div>
                    @endif
                    <form id="submitForm" action="{{ route('loginApi') }}" method="POST">
                        @csrf
                        <div class="position-relative mb-4">
                            <input type="text" id="phone" name="phone" class="form-control fs-4" placeholder="Số điện thoại" />
                            <span id="phone-error" class="text-danger d-none fs-5"></span>
                        </div>
                        <div class="position-relative mb-4">
                            <input type="password" id="password" name="password" class="form-control fs-4" placeholder="Mật khẩu" />
                            <span id="password-error" class="text-danger d-none fs-5"></span>
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

@section('scripts')
    <script>
        const phoneInput = document.getElementById('phone');
        const passwordInput = document.getElementById('password');

        const phoneError = document.getElementById('phone-error');
        const passwordError = document.getElementById('password-error');

        const submitForm = document.getElementById('submitForm');

        function validateForm() {
            event.preventDefault();
            const phone = phoneInput.value;
            const password = passwordInput.value;

            let hasError = false;

            if (!phone) {
                phoneError.textContent = "Vui lòng nhập số điện thoại.";
                phoneError.classList.remove('d-none');
                hasError = true;
            } else if (isNaN(phone)) {
                phoneError.textContent = "Số điện thoại không đúng định dạng.";
                phoneError.classList.remove('d-none');
                hasError = true;
            } else {
                phoneError.classList.add('d-none');
            }
            if (!password) {
                passwordError.textContent = "Vui lòng nhập mật khẩu.";
                passwordError.classList.remove('d-none');
                hasError = true;
            } else {
                passwordError.classList.add('d-none');
            }

            if (!hasError) {
                
                submitForm.submit();
            }
        }


        phoneInput.addEventListener('keyup', validateForm);
        passwordInput.addEventListener('keyup', validateForm);
        submitForm.addEventListener('submit', validateForm);
    </script>
@endsection