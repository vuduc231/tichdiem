<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $apiServices;

    // public function __construct(ApiServices $apiService)
    // {
    //     $this->apiServices = $apiServices;
    // }
    public function __construct()
    {
        $this->apiServices = new ApiServices();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('token')) {
            return redirect('/');
        }

        return view('login');
    }

    public function loginApi(Request $request)
    {
        $user = $this->apiServices->login($request->phone, $request->password);
        
        $access_token = $user['access_token'];
        // Lưu token vào session
        $request->session()->put('access_token', $access_token);
        // Lưu user vào session
        $request->session()->put('user', $user);

        return redirect('/');
    }

    public function logout(Request $request)
    {

        $request->session()->invalidate();
        //regenerate csrf token
        $request->session()->regenerateToken();
        return redirect('/');
    }

}

