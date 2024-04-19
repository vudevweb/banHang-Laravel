<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware(AuthMiddleware::class);
Route::get('/admin/login', [AuthController::class, 'login']) -> name('admin.login')->middleware(LoginMiddleware::class);
Route::post('/admin/do-login',[AuthController::class, 'doLogin']) -> name('admin.doLogin');
Route::get('/admin/do-logout',[AuthController::class, 'doLogout']) -> name('admin.doLogout');

Route::group(['prefix' => 'admin/user'], function() {
    Route::get('/', [UserController::class, 'index'])->name('admin.user')->middleware(AuthMiddleware::class);
    Route::get('create', [UserController::class, 'create'])->name('admin.user.create')->middleware(AuthMiddleware::class);
});

