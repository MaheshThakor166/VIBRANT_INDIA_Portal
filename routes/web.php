<?php
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\InquiryController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\Auth\AuthController as AuthController;

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/search-suggestions', [ProductController::class, 'getSuggestions']);
Route::get('/company/{id}/products', [ProductController::class, 'companyProducts']);
Route::get('/product/{id}', [ProductController::class, 'productDetails']);


Route::get('/register',[AuthController::class , 'register'])->name('register');
Route::post('/register',[AuthController::class,'registerSave'])->name('register.save');
Route::get('/otp-validate',[AuthController::class,'otpValidate'])->name('user.email.validate');
Route::post('/otp-verification',[AuthController::class , 'verifyOtp'])->name('user.otp.verify');
Route::get('/View-otp',[AuthController::class,'otpblade'])->name('viewotp');

Route::post('/otp-resend', [AuthController::class, 'resendOtp'])->name('otp.resend');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Forgot Password Routes
// Route to show the "forgot password" form
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');

// Route to send the password reset link
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
Route::get('/forgot-password/success', function () {
    return view('auth.forgotpassword-success');
})->name('password.success');
// Route to show the password reset form, with the token as a parameter
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
// Route to handle the password reset process
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
// Public Routes
Route::get('/', [ProductController::class, 'userHomePage'])->name('user.home');
Route::get('/home', [AuthController::class, 'home'])->name('home');


// Product Details and Inquiry Routes
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/inquiry/{product}', [ProductController::class, 'inquiry'])->name('inquiry')->middleware('auth');;
Route::get('/innertopcategory', [ProductController::class, 'topCategoryPage'])->name('innertopcategory');
Route::get('/alltrendingcategory', [ProductController::class, 'trendingCategoryPage'])->name('alltrendingcategory');
Route::get('/newarrivalcategory', [ProductController::class, 'newArrivalCategoryPage'])->name('newarrival');
// Inquiry Routes
Route::get('/inquiry', [InquiryController::class, 'create'])->name('inquiryform');
Route::post('/inquiry', [InquiryController::class, 'store']);
// Product Routes
Route::post('/inquiry', [InquiryController::class, 'store']);  // Inquiry Form
Route::get('/inqury', function () {
    return view('inquiryform');
})->name('inquiryform');

// Blog Routes
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogsection');


// Admin Routes
Route::get('/admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::prefix('admin/products')->name('admin.products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/users')->name('admin.users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/inquiry')->name('admin.inquiry.')->group(function () {
        Route::get('/', [InquiryController::class, 'index'])->name('index');
        Route::get('/{id}/edit', [InquiryController::class, 'edit'])->name('edit');
        Route::put('/{id}', [InquiryController::class, 'update'])->name('update');
        Route::delete('/{id}', [InquiryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/blogs')->name('admin.blogs.')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('edit');
        Route::put('/{id}', [BlogController::class, 'update'])->name('update');
        Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
    });
});
