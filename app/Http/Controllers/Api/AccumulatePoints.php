<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        return view('page.accumulatePoints.accumulatePoints');
    }

    public function accumulatePointApi(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'nullable',
                'phone' => 'nullable',
                'email' => 'nullable',
                'messenger' => 'nullable',
            ]);

            $accumulatePoint = $this->apiServices->accumulatePoint($data);
            if ($contact) {
                $successMsg = "Data has been successfully submitted.";
                return redirect()->route('contact')->with('success', $successMsg);
            } else {
                $errorMsg = "Failed to submit the data.";
                return back()->with('contactError', $errorMsg);
            }
            
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

