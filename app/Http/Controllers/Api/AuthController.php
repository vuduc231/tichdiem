<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use App\Services\ApiServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        if ($request->session()->has('access_token')) {
            return redirect()->route('home');
        }

        return view('page.loginRegister.login');
    }

    public function register(Request $request)
    {
        if ($request->session()->has('access_token')) {
            return redirect()->route('home');
        }
        return view('page.loginRegister.register');
    }

    public function loginApi(Request $request)
    {
        try {
            $user = $this->apiServices->login($request->phone, $request->password);
            
            if (isset($user['access_token'])) {
                $access_token = $user['access_token'];
                $userId = $user['data']['id'];
                $getUserApi = $this->apiServices->getUser($userId);
                $request->session()->put('getUser', $getUserApi);
                $request->session()->put('access_token', $access_token);
                $request->session()->put('user', $user);
                
                alert()->success("Đăng nhập thành công",)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');

                if ($returnUrl = session('returnUrl')) {
                    session()->forget('returnUrl');
                    return redirect()->to($returnUrl);
                }
                return redirect()->route('home');
            } else {
                $errorMsg = "Tên đăng nhập hoặc mật khẩu không đúng!";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Thử lại');
                return back()->with('loginError', $errorMsg);
            }
            $request->session()->regenerate();
        } catch (Exception $e) {

            $errorMsg = "Có lỗi xảy ra!";
            error_log($e->getMessage());
            //if 401 or 404 is in error message
            if (strpos($e->getMessage(), '401') !== false || strpos($e->getMessage(), '404') !== false) {
                $errorMsg = "Tên đăng nhập hoặc mật khẩu không đúng!";
            } else {
                $errorMsg = $e->getMessage();
            }
            //return back with login error
            return back()->with('loginError', $errorMsg);
        }
    }

    public function registerApi(Request $request)
    {
        try {
            if (empty($request->name) || empty($request->phone) || empty($request->email) || empty($request->password)) {
                $errorMsg = "Vui lòng điền đầy đủ thông tin!";
                alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
                return back()->with('registerError', $errorMsg);
            }
        
            $user = $this->apiServices->register($request->name, $request->phone, $request->email, $request->password);
        
            if (isset($user['error']) && isset($user['error']['errorInfo']) && $user['error']['errorInfo'][1] == 1062) {
                if (strpos($user['error']['errorInfo'][2], 'customers_phone_unique') !== false) {
                    $errorMsg = "Số điện thoại đã được sử dụng!";
                    alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
                } elseif (strpos($user['error']['errorInfo'][2], 'customers_email_unique') !== false) {
                    $errorMsg = "Địa chỉ email đã được sử dụng!";
                    alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
                } else {
                    $errorMsg = "Có lỗi xảy ra!";
                    alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
                }
                return back()->with('registerError', $errorMsg);
            }
            // dd($user);
            if (isset($user['status_code']) && $user['status_code'] == 200 && isset($user['message'])) {
                $successMsg = $user['message'];
                alert()->success($successMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
                return redirect()->route('login');
            }
        
            // alert()->success("Đăng ký thành công")->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
            // return redirect()->route('login');
        } catch (Exception $e) {
            $errorMsg = "Có lỗi xảy ra!";
            error_log($e->getMessage());
            
            //if 401 or 404 is in error message
            if (strpos($e->getMessage(), '401') !== false || strpos($e->getMessage(), '404') !== false) {
                $errorMsg = "Tên đăng nhập hoặc mật khẩu không đúng định dạng!";
            } else {
                $errorMsg = $e->getMessage();
            }
        
            //return back with register error
            alert()->error($errorMsg)->timerProgressBar()->autoClose(5000)->showConfirmButton('Tiếp tục');
            return back()->with('registerError', $errorMsg);
        }
        
    }

    public function logout(Request $request)
    {

        $request->session()->invalidate();
        //regenerate csrf token
        $request->session()->regenerateToken();
        return redirect('/');
    }

}

