<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RuleController;
use App\Http\Controllers\Api\PrivacyController;
use App\Http\Controllers\Api\TermsController;
use App\Http\Controllers\Api\GiftController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\AccumulatePoints;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Login & Register & Logout
Route::get('/dang-nhap', [AuthController::class, 'index'])->name('login');
Route::post('/dang-nhap', [AuthController::class, 'loginApi'])->name('loginApi');
Route::get('/dang-ky', [AuthController::class, 'register'])->name('register');
Route::post('/dang-ky', [AuthController::class, 'registerApi'])->name('registerApi');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Privacy
Route::get('/chinh-sach-bao-mat', [PrivacyController::class, 'index'])->name('privacy');

// Terms
Route::get('/dieu-khoan-su-dung', [TermsController::class, 'index'])->name('terms');

// Rule
Route::get('/the-le', [RuleController::class, 'index'])->name('rule');

// Gift
Route::group(['middleware' => 'auth.login:user'], function () {
    Route::get('/doi-qua', [GiftController::class, 'index'])->name('gift.list');
    Route::post('/doi-qua/changeGift', [GiftController::class, 'changeGift'])->name('gift.change');
    Route::post('/doi-qua/update', [GiftController::class, 'changeInfo'])->name('gift.info');
});
    
// History
Route::get('/lich-su-doi-qua', [HistoryController::class, 'index'])->name('history')->middleware('auth.login:user');

// Accumulate Points
Route::group(['middleware' => 'auth.login:user'], function () {
    Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}', [AccumulatePoints::class, 'index'])->name('accumulatePoints');
    Route::post('/tichdiem/{promotion_id}/{product_id}/{special_code}', [AccumulatePoints::class, 'accumulatePointApi'])->name('accumulatePointsApi');
});


// Contact
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');
Route::post('/lien-he', [ContactController::class, 'contactApi'])->name('contactApi');

// Route 404 - Xử lý URL không tồn tại
// Route::fallback(function () {
//     return response()->view('404', [], 404);
// });