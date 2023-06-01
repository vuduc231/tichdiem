<div id="navbar">
    <a class="fs-5" href="{{ route('home') }}">
        <img src="{{ secure_asset('/assets/img/home-48.png') }}" alt="">
        <div>Trang chủ</div>
    </a>
    <a class="fs-5" href="{{ route('rule') }}">
        <img src="{{ secure_asset('/assets/img/document-48.png') }}" alt="">
        <div>Thể lệ</div>
    </a>
    <a class="fs-5" href="{{ route('history') }}">
        <img src="{{ secure_asset('/assets/img/cart-48.png') }}" alt="">
        <div>Điểm của tôi</div>
    </a>
    <a class="fs-5" href="{{ route('gift.list') }}">
        <img src="{{ secure_asset('/assets/img/gift-48.png') }}" alt="">
        <div>Đổi quà</div>
    </a>
    @if (Session::has('user'))
    <form action="{{ route('logout') }}" method="POST" class="m-0">
        @csrf
        <button class="fs-5 bg-transparent border-0" type="submit">
            <img src="{{ secure_asset('/assets/img/user-48.png') }}" alt="">
            <div style="padding-top: 4px;">Đăng xuất</div>
        </butt>
    </form>
    @else
    <a class="fs-5" href="{{ route('login') }}">
        <img src="{{ secure_asset('/assets/img/user-48.png') }}" alt="">
        <div>Đăng nhập</div>
    </a>
    @endif
</div>
