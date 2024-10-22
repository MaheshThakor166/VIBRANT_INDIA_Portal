<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/admin', [AuthController::class, 'adminview'])->name('admin.view');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
// Route::get('/users', [UserController::class, 'index'])->name('userindex');

Route::get('/dashboard', function () {
    return view('adminpanel.dashboard');
})->name('dashboard');

Route::get('/users', [UserController::class, 'index'])->name('userindex');
Route::get('/users/create', [UserController::class, 'create'])->name('usercreate');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

