<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Doppelherz</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Plugins -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/variables.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
    @yield('style')
</head>

<body>
    <div class="wrapper">
        @include('template.partials.header')

        <main id="main_layout">
            @yield('main_section')
        </main>

        @include('template.partials.footer')
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal_loginRegister">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs mb-3 justify-content-between" id="myTab0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="fs-4 nav-link active" id="home-tab0" data-mdb-toggle="tab"
                                data-mdb-target="#home0" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                                Đăng nhập
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="fs-4 nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">
                                Đăng ký
                            </button>
                        </li>
                    </ul>
                    <div type="button" class="modal_loginRegister-close" data-mdb-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark" style="color: #c42726;"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="tab-content loginRegister_tabs-wrapper" id="myTabContent0">
                        <div class="tab-pane fade show active" id="home0" role="tabpanel"
                            aria-labelledby="home-tab0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="loginRegister_tabs-img">
                                        <img src="{{ asset('/assets/img/Banner-5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column justify-content-center">
                                    <div class="loginRegister_tabs-withForm">
                                        <form action="{{ route('loginApi') }}" method="POST">
                                            @csrf
                                            <div class="position-relative mb-5">
                                                <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" />
                                            </div>
                                            <div class="position-relative mb-5">
                                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center mb-4">
                                                <a class="fs-4 text-danger" href="#">
                                                Quên mật khẩu
                                                </a>
                                            </div>
                                            <div class="position-relative mb-4">
                                                <button type="submit" class="btn btn-danger w-100">Đăng nhập</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="loginRegister_tabs-img">
                                        <img src="{{ asset('/assets/img/Banner-5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column justify-content-center">
                                    <div class="loginRegister_tabs-withForm">
                                        <form action="{{ route('registerApi') }}" method="POST" autocomplete="off">
                                            @csrf
                                           <div class="row">
                                                <div class="col-6 position-relative mb-5">
                                                    <input type="text" name="name" class="form-control" placeholder="Họ và tên">
                                                </div>
                                                <div class="col-6 position-relative mb-5">
                                                    <input type="phone" name="phone" class="form-control" placeholder="Số điện thoại">
                                                </div>
                                           </div>
                                            <div class="col-12 position-relative mb-5">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="row">
                                                <div class="col-6 position-relative mb-5">
                                                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                                                </div>
                                                <div class="col-6 position-relative mb-5">
                                                    <input type="password" name="re-password" class="form-control" placeholder="Xác nhận mật khẩu">
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
                                                <button type="button" class="btn btn-danger w-100">Đăng ký</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Base JS -->
    <script type="text/javascript" src="{{ asset('/assets/js/style.js') }}"></script>

    @yield('scripts')

</body>

</html>
