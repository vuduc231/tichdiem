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
                $errorMsg = "Vui lòng xác nhận thông tin";
                return back()->with('giftError', $errorMsg);
            }
            $type = Session::get('type');
            $request->merge(['type' => $type]);
            $changeGift = $this->apiServices->changeGift($request->customer_id, $request->gift_id, $request->type);
            // dd($changeGift); 
            
            Session::forget('type');
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
            $changeInfo = $this->apiServices->changeInfo($request->name, $request->email, $request->address);
            Session::put('type', $type);
            // dd($changeInfo);
            return redirect()->route('gift.list');
        } catch (\Exception $e) {
            // Xử lý ngoại lệ
            $errorMsg = $e->getMessage();
            // dd($errorMsg);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}

