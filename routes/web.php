<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\PaymentSuccessController;

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', [RegisterController::class, 'index'])->name('dashboard');

// });



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
//verify email
Route::get('verify-email/{id}/{token}', [VerificationController::class, 'verify'])->name('verify-email');
//forgot password
Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot-password.submit');
Route::get('resetpassword/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
Route::post('resetpassword', [ResetPasswordController::class, 'reset'])->name('reset-password.submit');
//Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');



Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/orderdetail/{bill_id}', [OrderDetailController::class, 'index'])->name('orderdetail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
// Có kiểm tra người dùng 
// Route::post('/cart/add', [CartController::class, 'addtocart'])->middleware('auth')->name('addcart.submit');
Route::post('/cart/add', [CartController::class, 'addtocart'])->name('addcart.submit');
Route::post('/cart/update-status', [CartController::class, 'updateStatus'])->name('cart.update-status');
Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.update-quantity');
Route::post('/cart/delete-item', [CartController::class, 'deleteItem'])->name('cart.delete-item');

//payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('paymentsuccess/{ma_hd}', [PaymentSuccessController::class, 'index'])->name('paymentsuccess');
Route::post('/payment', [BillController::class, 'processPayment'])->name('payment.submit');


// ADMIN 
Route::get('admin/login', [\App\Http\Controllers\admin\LoginAdminController::class, 'index'])->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\admin\LoginAdminController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [\App\Http\Controllers\admin\LoginAdminController::class, 'logout'])->name('adminlogout.submit');

//middleware route Admin 
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', \App\Http\Controllers\admin\ProductController::class);
    Route::resource('users', \App\Http\Controllers\admin\UsersController::class);
});

// Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth', 'admin'])->group(function () {
//     Route::resource('products', ProductController::class);
// });