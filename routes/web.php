<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Store;
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

// routes that do not require Auth
Route::get('/', [Store\HomeController::class, 'index'])->name('store.home');

// Routes for home page ajax request
Route::post('/filter_product', [Store\HomeController::class, 'filter'])->name('store.filter');
Route::get('/all_product', [Store\HomeController::class, 'all'])->name('store.all');
Route::get('/order_by', [Store\HomeController::class, 'orderby'])->name('store.orderby');
// Routes for ajax request ends here


Route::get('/products/{product_id}', [Store\ProductController::class, 'show'])->name('store.products.view');
Route::get('/categories/{category_id}', [Store\CategoryController::class, 'display'])->name('store.category.view');
Route::get('/shop', [Store\ProductController::class, 'index'])->name('store.shop');
Route::get('/shop/brands/{brand_id}', [Store\BrandController::class, 'show'])->name('store.shop.brands.show');
Route::get('/coupons', [Store\CouponController::class, 'show'])->name('store.coupon.show');


// cart routes
Route::get('/cart', [Store\CartController::class, 'show'])->name('store.carts.show');
Route::post('/cart', [Store\CartController::class, 'store'])->name('store.carts.store');
Route::patch('/cart', [Store\CartController::class, 'update'])->name('store.carts.patch');
Route::get('/cart/remove/{id}', [Store\CartController::class, 'delete'])->name('store.carts.delete');
Route::post('/cart/apply/coupon', [Store\CartController::class, 'apply'])->name('store.coupon.apply');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



        /* Store routes that do not require authentication or authorization */
        // Route::get('/', [Store\StoreController::class, 'home'])->name('home');
        // Route::get('/products/{product_id}', [Store\ProductController::class, 'show'])->name('store.products.view');
        // Route::get('/categories/{category_id}', [Store\CategoryController::class, 'display'])->name('store.category.view');
        // Route::get('/shop', [Store\ProductController::class, 'display'])->name('store.shop');
        // Route::get('/shop/brands', [Store\BrandController::class, 'display'])->name('store.shop.brands.display');
        // Route::get('/shop/brands/{brand_id}', [Store\BrandController::class, 'show'])->name('store.shop.brands.show');
        // Route::get('/coupons', [Store\CouponController::class, 'show'])->name('store.coupon.show');
require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';
require __DIR__.'/admin.php';