<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;

use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('layouts.welcome');
});
Route::get('/register', [AuthController::class, 'registerform'])->name('register');
Route::post('/register', [AuthController::class, 'registersave'])->name('registersave');

Route::get('/login', [AuthController::class, 'loginform'])->name('login');
Route::post('/login', [AuthController::class, 'loginsave'])->name('loginsave');

Route::get('/home', [AuthController::class, 'home'])->name('home');



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
// Route::get('/users', [UserController::class, 'index'])->name('userindex');

Route::get('/admin/dashboard', function () {
    return view('adminpanel.dashboard');
})->name('dashboard');

Route::resource('users', UserController::class);


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/inqury', function () {
    return view('inquiryform');
})->name('inquiryform');

Route::get('/productDetails', function () {
    return view('productdetails');
})->name('productdetails');

// Route::group(['middleware' => 'auth.basic'], function () {
//     Route::prefix('admin')->group(function () {
//         Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
//         Route::get('/users', 'UserController@users')->name('admin.users');
//     });
// });
