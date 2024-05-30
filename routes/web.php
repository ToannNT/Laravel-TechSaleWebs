<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\PaymentSuccessController;

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


Route::get('/', [HomeController::class, 'index'])->name('');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/productdetail/{id}', [ProductDetailController::class, 'index'])->name('productdetail');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.submit');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('verify-email/{id}/{token}', [VerificationController::class, 'verify'])->name('verify-email');



Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/orderdetail', [OrderDetailController::class, 'index'])->name('orderdetail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/paymentsuccess', [PaymentSuccessController::class, 'index'])->name('paymentsuccess');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class);
});

// Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::resource('products', ProductController::class);
// });