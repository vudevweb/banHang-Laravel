<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\PostCategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\Ajax\LocationController;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index')->middleware(AuthMiddleware::class);
Route::get('/admin/login', [AuthController::class, 'login']) -> name('admin.login')->middleware(LoginMiddleware::class);
Route::post('/admin/do-login',[AuthController::class, 'doLogin']) -> name('admin.doLogin');
Route::get('/admin/do-logout',[AuthController::class, 'doLogout']) -> name('admin.doLogout');

Route::group(['prefix' => 'admin/user', 'middleware' => 'auth'], function() {
    Route::get('/', [UserController::class, 'index'])->name('admin.user');
    Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('update', [UserController::class, 'update'])->name('admin.user.update');
});

// quản lý bài viết
Route::group(['prefix' => 'admin/post', 'middleware' => 'auth'], function() {
    Route::get('/', [PostController::class, 'index'])->name('admin.post');
    Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::post('update/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');
});

// quản lý danh mục bài viết
Route::group(['prefix' => 'admin/post-category', 'middleware' => 'auth'], function() {
    Route::get('/', [PostCategoryController::class, 'index'])->name('admin.post-category');
    Route::post('store', [PostCategoryController::class, 'store'])->name('admin.post-category.store');
    Route::get('delete/{id}', [PostCategoryController::class, 'delete'])->name('admin.post-category.delete');
    Route::get('edit/{id}', [PostCategoryController::class, 'edit'])->name('admin.post-category.edit');
    Route::post('update/{id}', [PostCategoryController::class, 'update'])->name('admin.post-category.update');
});

// AJAX
Route::get('ajax/location/getDistrict', [LocationController::class, 'getDistrict'])->name('ajax.location.getDistrict');
Route::get('ajax/location/getWard', [LocationController::class, 'getWard'])->name('ajax.location.getWard');
Route::get('ajax/location/getLocations', [LocationController::class, 'getLocations'])->name('ajax.location.getLocations');

// ckeditor
Route::any('/ckfinder/connector', 'CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', 'CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
