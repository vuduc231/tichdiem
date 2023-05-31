<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $apiServices;

    public function __construct(ApiServices $apiServices)
    {
        $this->apiServices = $apiServices;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('page.contact.contact');
    }

    public function contactApi(Request $request)
    {
        try {
            $contact = $this->apiServices->contact($request->name,$request->phone,$request->email,$request->comment,);
            alert()->success('Gửi yêu cầu đổi mật khẩu thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!')->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
            return redirect()->back();
            
        } catch (Exception $e) {

            $errorMsg = "Có lỗi xảy ra!";
            error_log($e->getMessage());
            //if 401 or 404 is in error message
            if (strpos($e->getMessage(), '401') !== false || strpos($e->getMessage(), '404') !== false) {
                $errorMsg = "Không thành công!";
            } else {
                $errorMsg = $e->getMessage();
            }
            //return back with login error
            return back()->with('contactError', $errorMsg);
        }
    }
}

