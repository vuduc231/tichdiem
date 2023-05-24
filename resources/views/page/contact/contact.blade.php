@extends('template.master')

@section('title', 'Liên hệ')

@section('main_section')
    <!-- ======= REGISTER ======= -->
    <section class="register section_with-img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-xl-5">
                    <div class="loginRegister_img m-auto">
                        <img class="d-none d-md-none d-xl-block" src="{{ asset('/assets/img/Banner-5.png') }}" alt="">
                        <img class="d-block d-md-block d-xl-none" src="{{ asset('/assets/img/Banner-6.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-4 d-flex flex-column justify-content-center">
                    <div class="loginRegister_tabs-withForm">
                        <div class="text-center mb-4">
                            <h1 class="fw-bold">Liên hệ</h1>
                        </div>
                        @if (session('contactError'))
                            <div class="alert alert-danger text-center fs-5 mb-3">
                                {{ session('contactError') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="submitForm" action="{{ route('contactApi') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-6 position-relative mb-4">
                                    <input type="text" name="name" id="name" class="form-control fs-4"
                                        placeholder="Họ và tên">
                                    <span id="name-error" class="text-danger d-none fs-5">Vui lòng nhập họ và tên.</span>
                                </div>
                                <div class="col-12 col-md-12 col-xl-6 position-relative mb-4">
                                    <input type="phone" name="phone" id="phone" class="form-control fs-4"
                                        placeholder="Số điện thoại">
                                    <span id="phone-error" class="text-danger d-none fs-5"></span>
                                </div>
                            </div>
                            <div class="col-12 position-relative mb-4">
                                <input type="email" name="email" id="email" class="form-control fs-4"
                                    placeholder="Email">
                                <span id="email-error" class="text-danger d-none fs-5"></span>
                            </div>
                            <div class="col-12 position-relative mb-4">
                                <textarea name="messenger" id="messenger" placeholder="Lời nhắn" rows="4" class="form-control fs-4"></textarea>
                                <span id="messenger-error" class="text-danger d-none fs-5">Vui lòng nhập lời nhắn.</span>
                            </div>

                            <div class="position-relative mb-3">
                                <button type="submit" class="btn btn-danger w-100 fs-4">Gửi lời nhắn</button>
                            </div>
                        </form>
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
        const emailInput = document.getElementById('email');
        const messengerInput = document.getElementById('messenger');

        const nameError = document.getElementById('name-error');
        const phoneError = document.getElementById('phone-error');
        const emailError = document.getElementById('email-error');
        const messengerError = document.getElementById('messenger-error');

        const submitForm = document.getElementById('submitForm');

        function validateForm() {
            event.preventDefault();
            const name = nameInput.value;
            const phone = phoneInput.value;
            const email = emailInput.value;
            const messenger = messengerInput.value;

            let hasError = false;

            if (!name) {
                nameError.classList.remove('d-none');
                hasError = true;
            } else {
                nameError.classList.add('d-none');
            }

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

            if (!email) {
                emailError.textContent = "Vui lòng nhập địa chỉ email.";
                emailError.classList.remove('d-none');
                hasError = true;
            } else if (!isValidEmail(email)) {
                emailError.textContent = "Vui lòng nhập một địa chỉ email hợp lệ.";
                emailError.classList.remove('d-none');
                hasError = true;
            } else {
                emailError.classList.add('d-none');
            }

            if (!messenger) {
                messengerError.classList.remove('d-none');
                hasError = true;
            } else {
                messengerError.classList.add('d-none');
            }

            if (!hasError) {
                
                submitForm.submit();
            }
        }

        function isValidEmail(email) {
            // Regular expression to validate email format
            const emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
            return emailRegex.test(email);
        }

        nameInput.addEventListener('keyup', validateForm);
        phoneInput.addEventListener('keyup', validateForm);
        emailInput.addEventListener('keyup', validateForm);
        messengerInput.addEventListener('keyup', validateForm);
        submitForm.addEventListener('submit', validateForm);
    </script>
@endsection
