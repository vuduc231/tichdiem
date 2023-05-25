<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GiftController extends Controller
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
        $thongTinQuaTang = $this->apiServices->getThongTinQuaTang();
        // dd($thongTinQuaTang);
        return view('page.gift.gift')->with('thongTinQuaTang', $thongTinQuaTang);
    }
    
    public function changeGift(Request $request)
    {
        try {
            if (!Session::get('type')) {
                $errorMsg = "Vui lòng kiểm tra lại thông tin trước khi đổi quà.";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Thử lại');
                return back()->with('giftError', $errorMsg);
            }
            $type = Session::get('type');
            $request->merge(['type' => $type]);
            $changeGift = $this->apiServices->changeGift($request->customer_id, $request->gift_id, $request->type);
            if ($changeGift == "Không đủ điểm thưởng") {
                $errorMsg = $changeGift;
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
            } else {
                alert()->success("Đổi quà thành công, chúng tôi sẽ liên hệ khi hàng được chuyển tới bạn. Xin cảm ơn!")->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                Session::forget('getUser');
                $userId = $request->customer_id;
                $getUserApi = $this->apiServices->getUser($userId);
                $request->session()->put('getUser', $getUserApi);
                Session::forget('type');
            }
            // dd($changeGift); 
            // Session::put('user_name', $request->name);
            
            return redirect()->route('gift.list');
        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            return back()->with('giftError', $errorMsg);
        }
    }

    public function changeInfo(Request $request)
    {
        try {
            $type = $request->input('type');
            Session::put('type', $type);
            $changeInfo = $this->apiServices->changeInfo($request->name, $request->email, $request->address);
            
            $data = Session::get('getUser');
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
            $data['address'] = $request->input('address');
            Session::put('getUser', $data);

            Session::save();
            // dd($changeInfo);
            alert()->success('Xác nhận thông tin thành công')->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
            return redirect()->route('gift.list');
        } catch (\Exception $e) {
            // Xử lý ngoại lệ
            $errorMsg = $e->getMessage();
            // dd($errorMsg);
        }
    }

}

