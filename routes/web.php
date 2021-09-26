<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\LoginFrontendController;
use App\Http\Controllers\Frontend\ProductFrontendController;
use App\Http\Middleware\CheckComment;
use App\Http\Middleware\Checklogin;
use App\Http\Middleware\CheckLoginfront;
use App\Http\Middleware\Checklogout;
use App\Http\Middleware\CheckLogoutfront;


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

//Frontend
Route::prefix('/')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('frontend.index');
    Route::get('/login', [LoginFrontendController::class,'index'])->name('user.login');
    Route::post('/login', [LoginFrontendController::class,'login'])->name('user.login');
    Route::get('/logout', [LoginFrontendController::class,'logout'])->name('user.logout');
    Route::post('/register', [LoginFrontendController::class,'register'])->name('user.register');
    //acc
    //Product
    Route::prefix('product')->group(function () {
        Route::get('/{slug}', [ProductFrontendController::class, 'detail'])->name('product.detail');
        Route::get('/', [ProductFrontendController::class, 'all'])->name('product.all');
        Route::get('/cate/{categoryName}', [ProductFrontendController::class, 'show'])->name('product.show');
        Route::middleware(CheckComment::class)->post('/comment/{id}', [ProductFrontendController::class, 'comment'])->name('product.comment');
    });
    //Cart
    Route::group(['prefix' => 'gio-hang'], function() {
        Route::get('/', [CartController::class, 'cart'])->name('cart');
        Route::get('/them-gio-hang/{slug}', [CartController::class, 'addCart'])->name('cart.add');
        Route::post('/them-gio-hang/{slug}', [CartController::class, 'addCart'])->name('cart.add.quantity');
        Route::post('/cap-nhap-gio-hang',[CartController::class, 'updateCart'])->name('cart.update');
        Route::post('/xoa-gio-hang', [CartController::class, 'removeCart'])->name('cart.remove');
        Route::post('/ma-giam-gia', [CartController::class, 'voucher'])->name('cart.voucher');
        Route::middleware(CheckLoginfront::class)->get('/checkout',[CartController::class, 'checkout'])->name('cart.checkout');
        Route::middleware(CheckLogoutfront::class)->get('/checkoutuser',[CartController::class, 'checkoutUser'])->name('cart.checkout.user');
        Route::post('/thanh-toan', [CartController::class, 'payment'])->name('cart.payment');
    });
    
});

//Admin
Route::prefix('admin')->group(function () {
    Route::get('login',[LoginController::class,'index'])->name('admin.login.index')->middleware(Checklogin::class);
    Route::post('login',[LoginController::class,'login'])->name('admin.login');
    Route::middleware(Checklogout::class)->group(function () {
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
        //Order
        Route::get('/order', [OrderController::class, 'orders'])->name('order.index');
        Route::get('/oder/oderdetail/{id}', [OrderController::class, 'detail'])->name('order.detail');
        Route::get('/oder/oderprocess', [OrderController::class, 'processed'])->name('order.process');
        Route::get('/oder/approve/{id}', [OrderController::class, 'approve'])->name('order.approve');
    });
});



