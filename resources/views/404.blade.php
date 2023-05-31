@extends('template.noHeaderFooter')

@section('title', 'Trang không tồn tại')

@section('main_section')
    <div class="acculatePoint_wrapper">
        <div class="acculatePoint_container">
            <div class="errorPage_content">
                <div class="acculatePoint_body">
                    <div class="errorPage-wrapper text-center">
                        <div class="errorPage-heading">404</div>
                        <div class="errorPage-title">Không tìm thấy trang</div>
                        <p class="errorPage-desc pt-5">
                            Không tìm thấy trang, hoặc hệ thống bị lỗi.<br>
                            Vui lòng thử lại sau hoặc liên hệ với nhãn hàng để được hỗ trợ.
                        </p>

                        <a href="{{ route('home') }}" class="btn btn-danger errorPage-btn px-5">Trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
@endsection
