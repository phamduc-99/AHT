<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\Checklogin;
use App\Http\Middleware\Checklogout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('frontend.index');
});

Route::get('login',[LoginController::class,'index'])->name('login.index')->middleware(Checklogin::class);
Route::post('login',[LoginController::class,'login'])->name('backend.login');
Route::prefix('admin')->middleware(Checklogout::class)->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    //Category
    Route::resource('category', CategoryController::class)->except(['destroy','show','create']);
    Route::get('category/{category}',[CategoryController::class, 'destroy'])->name('category.destroy');
    //Product
    Route::resource('product', ProductController::class)->except(['destroy','show']);
    Route::get('product/{product}',[ProductController::class, 'destroy'])->name('product.destroy');
    //User
    Route::resource('user', UserController::class)->except(['destroy','show']);
    Route::get('user/{user}',[UserController::class, 'destroy'])->name('user.destroy');
});


