<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RuleController;
use App\Http\Controllers\Api\PrivacyController;
use App\Http\Controllers\Api\TermsController;
use App\Http\Controllers\Api\GiftController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\ContactController;

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
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginApi'])->name('loginApi');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerApi'])->name('registerApi');
Route::post('/logout', [AuthController::class, 'logout']);

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Privacy
Route::get('/chinh-sach-bao-mat', [PrivacyController::class, 'index'])->name('privacy');

// Terms
Route::get('/dieu-khoan-su-dung', [TermsController::class, 'index'])->name('terms');

// Rule
Route::get('/the-le', [RuleController::class, 'index'])->name('rule');

// Gift
Route::get('/doi-qua', [GiftController::class, 'index'])->name('gift')->middleware('auth.login:user');

// History
Route::get('/lich-su-doi-qua', [HistoryController::class, 'index'])->name('history')->middleware('auth.login:user');

// Contact
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');