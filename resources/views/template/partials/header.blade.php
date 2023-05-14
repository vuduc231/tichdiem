<header id="header" class="header">
    <div class="container">
        <div class="header_wrapper">
            <div class="header_logo">
                <a href="{{ route('home') }}" class="header_logo-link">
                    <img src="{{ asset('/assets/img/logo.webp') }}" alt="" class="header_logo-img" />
                </a>
            </div>
            <div class="header_menu">
                <ul class="header_menu-list">
                    <div class="close_menu-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <li class="header_menu-items">
                        <a href="{{ route('home') }}" class="header_menu-link">
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="header_menu-items">
                        <a href="{{ route('rule') }}" class="header_menu-link">
                            <span>Thể lệ</span>
                        </a>
                    </li>
                    <li class="header_menu-items">
                        <a href="#" class="header_menu-link header_menu-subbtn">
                            <span class="pe-2">Điều khoản & Chính sách</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="header_submenu-list">
                            <li class="header_submenu-items">
                                <a href="{{ route('terms') }}" class="header_submenu-link">
                                    <span>Điều khoản sử dụng</span>
                                </a>
                            </li>
                            <li class="header_submenu-items">
                                <a href="{{ route('privacy') }}" class="header_submenu-link">
                                    <span>Chính sách bảo mật</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header_menu-items">
                        <a href="#" class="header_menu-link">
                            <span>Đăng nhập/Đăng ký</span>
                        </a>
                    </li>
                    {{-- <li class="header_menu-items">
                        <a href="#" class="header_menu-link header_menu-subbtn">
                            <span class="pe-2">Tài khoản</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="header_submenu-list">
                            <li class="header_submenu-items">
                                <a href="{{ route('history') }}" class="header_submenu-link">
                                    <span>Lịch sử tích điểm</span>
                                </a>
                            </li>
                            <li class="header_submenu-items">
                                <a href="{{ route('gift') }}" class="header_submenu-link">
                                    <span>Đổi quà</span>
                                </a>
                            </li>
                            <li class="header_submenu-items">
                                <a href="#" class="header_submenu-link">
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="open_menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="overlay_menu-btn"></div>
            </div>
            
        </div>
    </div>
</header>