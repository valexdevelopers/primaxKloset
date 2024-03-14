<?php 

use App\Http\Controllers\Admin;

Route::prefix('admin')->middleware(['admin', ])->group(function () {
    Route::get('dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::post('logout', [Admin\DashboardController::class, 'logout'])->name('admin.logout');
    Route::post('filter', [Admin\DashboardController::class, 'filter'])->name('admin.filter');


    // routes below are collections/categories routes
    Route::resource('collection', Admin\CategoryController::class)->except(['show'])->names([
        'index' => 'admin.category.index',
        'create' => 'admin.category.create',
        'store' => 'admin.category.store',
        'edit' => 'admin.category.edit',
        'update' => 'admin.category.update',
        'destroy' => 'admin.category.delete',
        // '' => 'admin.category.'
    ]);
    
    // SUPER ADMIN MIDDLEWARE PROTECTED
    Route::middleware('superAdmin')->group(function () {
        Route::get('/manage/admin', [Admin\AdminController::class, 'index'])->name('admin.admin.index');
        Route::get('/manage/admin/verify/{admin_id}', [Admin\SuperAdminController::class, 'verify'])->name('admin.admin.verify');
        Route::get('/manage/admin/unverify/{admin_id}', [Admin\SuperAdminController::class, 'unverify'])->name('admin.admin.unverify');
        Route::get('/manage/admin/upgrade/{admin_id}', [Admin\SuperAdminController::class, 'upgrade'])->name('admin.admin.upgrade');
        Route::delete('/manage/admin/delete', [Admin\SuperAdminController::class, 'delete'])->name('admin.admin.delete');
        Route::post('/manage/admin/filter', [Admin\AdminController::class, 'filter'])->name('admin.filter');
    });
    

    // Routes below are for product manipulations
    Route::resource('product', Admin\ProductController::class)->names([
        'index' => 'admin.product.index',
        'create' => 'admin.product.create',
        'store' => 'admin.product.store',
        'edit' => 'admin.product.edit',
        'update' => 'admin.product.update',
        'destroy' => 'admin.product.delete',
    ]);

    Route::resource('profile', Admin\ProfileController::class)->only('index', 'edit', 'update', 'destroy')->names([
        'index' => 'admin.profile',
        'edit' => 'admin.profile.edit',
        'update' => 'admin.profile.patch',
        'destroy' => 'admin.profile.destroy',
    ]);



    // Routes below are store front routes
    Route::get('storefront', [Admin\StoreController::class, 'index'])->name('admin.store.index');
    Route::get('/store-banner', [Admin\BannerController::class, 'show'])->name('admin.store-banner');
    Route::get('/store-banner/remove/{banner_id}', [Admin\BannerController::class, 'update'])->name('admin.store-banner.update');
    Route::post('/store-banner', [Admin\BannerController::class, 'create'])->name('admin.store-banner.create');




    // routes to manipulate users
    Route::get('/users', [Admin\UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user_id}', [Admin\UserController::class, 'show'])->name('admin.users.show');



     Route::get('/coupons', [Admin\CouponController::class, 'display'])->name('admin.coupons');
        Route::get('/coupons/new', [Admin\CouponController::class, 'show'])->name('admin.coupon.new');
        Route::post('/coupons/new', [Admin\CouponController::class, 'create'])->name('admin.coupon.create');
        Route::get('/coupons/delete/{coupon_id}', [Admin\CouponController::class, 'delete'])->name('admin.coupon.delete');

        // routes to manipulate coupons
        Route::get('/discount', [Admin\DiscountController::class, 'display'])->name('admin.discount');
        Route::get('/discount/new', [Admin\DiscountController::class, 'show'])->name('admin.discount.new');
        Route::post('/discount/new', [Admin\DiscountController::class, 'create'])->name('admin.discount.create');
        Route::get('/discount/stop/{discount_id}', [Admin\DiscountController::class, 'pause'])->name('admin.discount.stop');
        Route::get('/discount/start/{discount_id}', [Admin\DiscountController::class, 'start'])->name('admin.discount.start');
        Route::get('/discount/delete/{discount_id}', [Admin\DiscountController::class, 'delete'])->name('admin.discount.delete');

//order routes 
Route::get('/orders', [Admin\OrdersController::class, 'display'] )->name('admin.orders.display');
Route::post('/orders/new', [Admin\OrdersController::class, 'create'] )->name('admin.orders.create');
Route::get('/orders/new', [Admin\OrdersController::class, 'add'] )->name('admin.orders.add');
Route::get('/orders/{order_id}', [Admin\OrdersController::class, 'show'] )->name('admin.orders.show');

Route::delete('orders', [Admin\OrdersController::class, 'delete'] )->name('admin.orders.delete');

 //order purchase 
Route::get('/purchase', [Admin\PurchaseController::class, 'display'] )->name('admin.purchase.display');
Route::get('/purchase/{purchase_id}', [Admin\PurchaseController::class, 'show'] )->name('admin.purchase.show');
});


