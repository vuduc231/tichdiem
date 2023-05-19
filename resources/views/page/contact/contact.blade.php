@extends('template.master')

@section('title', 'Liên hệ')

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
                        <h1 class="fw-bold">Liên hệ</h1>
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
                        <div class="col-12 position-relative mb-5">
                            <textarea name="" id="" placeholder="Lời nhắn" rows="4" class="form-control fs-4"></textarea>
                        </div>
                        
                        <div class="position-relative mb-3">
                            <button type="button" class="btn btn-danger w-100 fs-4">Gửi lời nhắn</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- ======= End REGISTER ======= -->
@endsection