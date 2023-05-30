<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AccumulatePoints extends Controller
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
    public function index(Request $request, $promotion_id, $product_id, $special_code)
    {
        if (!$product_id || !$promotion_id) {
            return redirect('/the-le');
        }
        $product = $this->apiServices->product($product_id);
        // dd($product);
            
        return view('page.accumulatePoints.accumulatePoints')
        // ->with('infoQr', $infoQr)
        ->with('promotion_id', $promotion_id)
        ->with('special_code', $special_code)
        ->with('product', $product);
    }

    public function accumulatePointApi(Request $request)
    {
        try {
            $userId = Session::get('getUser');
            $request->user = $userId['id'];
        
            $request->special_code = $request->input('special_code');
            $request->specialCode = $request->input('special_code');
            $request->product_id = $request->input('product_id');
            
            $infoQr = $this->apiServices->infoQr($request->specialCode);
            $accumulatePoint = $this->apiServices->accumulatePoint($request->special_code, $request->user, $request->product_id, $request->promotion_id);
            // dd($accumulatePoint);
            // dd($infoQr);
            if (empty($infoQr)) {
                $errorMsg = "Mã đã được kích hoạt, vui lòng thử lại";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                return redirect()->back();
            } else if ($request->specialCode !== $request->input('special_code')) {
                $errorMsg = "Mã đã được kích hoạt, vui lòng thử lại";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                return redirect()->back();
            } else if ($infoQr['status'] === 0) {
                $errorMsg = "Mã đã được kích hoạt, vui lòng thử lại";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                return redirect()->back();
            } else if($accumulatePoint === 'Vượt quá giới hạn quét trong tháng!') {
                $errorMsg = "Vượt quá giới hạn quét trong tháng!";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                return redirect()->back();
            } else {
                $accumulatePoint = $this->apiServices->accumulatePoint($request->special_code, $request->user, $request->product_id, $request->promotion_id);
                alert()->success("Tích điểm thành công!")->timerProgressBar()->autoClose(5000)->showConfirmButton('Xác nhận');
                return redirect()->back();
            }
            // dd($infoQr['status']);
            
            // dd($infoQr);
        } catch (Exception $e) {
            $errorMsg = "Có lỗi xảy ra!";
            error_log($e->getMessage());
        
            if (strpos($e->getMessage(), '401') !== false || strpos($e->getMessage(), '404') !== false) {
                $errorMsg = "Không thành công!";
            } else {
                $errorMsg = $e->getMessage();
            }
        
            return back()->with('contactError', $errorMsg);
        }
    }

}

