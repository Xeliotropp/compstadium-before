<?php

use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserEditController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/error', [\App\Http\Controllers\ErrorHandlerController::class, 'error404'])->name('error');

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

//Resending the email verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Admin routes
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //Category routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'index');
        Route::post('/category', 'store');
        Route::put('/category/{category}', 'update');
    });
    //Category create routes
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('category', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
    //Category update routes
    Route::get('/category/{category_id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/{category_id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);

    //Edit user routes
    Route::controller(UserEditController::class)->group(function () {
        Route::get('/users', 'index');
        //Route::put('/users/{user}', 'update');
    });
    Route::get('/users', [\App\Http\Controllers\Admin\UserEditController::class, 'index']);
    Route::get('/users/{user_id}/edit', [\App\Http\Controllers\Admin\UserEditController::class, 'edit'])->name('admin.users.edit');

    //Brands routes
    Route::controller(BrandController::class)->group(function () {
        Route::get('/brands', 'index');
        Route::get('/brands/create', 'index');
        Route::post('/brands', 'store');
        Route::put('/brands/{brand}', 'update');
    });
    Route::get('/brands', [App\Http\Livewire\Admin\Brand\Index::class, 'render']);
    Route::get('brands/create', [\App\Http\Controllers\Admin\BrandController::class, 'create']);
    Route::get('/brands/{brand_id}/edit', [\App\Http\Controllers\Admin\BrandController::class, 'edit'])->name('admin.brands.edit');
    Route::put('/brands/{brand_id}/edit', [\App\Http\Controllers\Admin\BrandController::class, 'update']);
    Route::post('brands', [\App\Http\Controllers\Admin\BrandController::class, 'store']);

    //Product routes
    Route::controller(ProductController::class)->group(function () {
        Route::get('products', 'index');
        Route::get('products/create', 'create');
        Route::post('products', 'store');
        Route::get('products/edit/{id}', 'edit');
        Route::put('products/{id}', 'update');
        Route::get('products/delete/{id}', 'destroy');
        Route::get('product-image/delete/{id}', 'destroyImage');
    });
});

//User routes
Route::prefix('profile')->middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [UserDashboardController::class, 'index']);
    //Edit profile routes
    Route::get('orders');
    Route::get('{user_name}/edit', [App\Http\Controllers\Frontend\UserDashboardController::class, 'edit'])->name('frontend.user.edit');
});
Route::get('/cart', [\App\Http\Controllers\Frontend\CartController::class, 'index'])->middleware(['auth']);
