<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Livewire\Admin\Brand\Index as BrandIndex;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


Auth::routes();

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/collections', 'categories');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productView');
    Route::get('/search', 'productSearch');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(CartController::class)->group(function () {
        Route::get('cart', 'index');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::get('checkout', 'index');
    });
    Route::controller(WishlistController::class)->group(function () {
        Route::get('wishlist', 'index');
    });
});

Route::get('/about', [AboutUsController::class, 'index']);
Route::get('/thank-you', [FrontendController::class, 'thankyou']);


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {

    // Dashboard Route
    Route::get('dashboard', [DashboardController::class, 'index']);

    // Category Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
        Route::get('category/{category}/edit/', 'edit');
        Route::put('category/{category}', 'update');
        Route::get('category/delete/{id}', 'destroy');
    });

    // Product Routes
    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'index');
        Route::get('product/create', 'create');
        Route::post('product', 'store');
        Route::get('product/edit/{id}', 'edit');
        Route::put('product/{id}', 'update');
        Route::get('product/delete/{id}', 'destroy');
        Route::get('product-image/delete/{id}', 'destroyImage');
    });

    // Slider Routes
    Route::controller(SliderController::class)->group(function () {
        Route::get('slider', 'index');
        Route::get('slider/create', 'create');
        Route::post('slider', 'store');
        Route::get('slider/edit/{id}', 'edit');
        Route::put('slider/{id}', 'update');
        Route::get('slider/delete/{id}', 'destroy');
    });

    /*
|--------------------------------------------------------------------------
| Livewire Routes
|--------------------------------------------------------------------------
*/
    // Brand Route
    Route::get('brands', BrandIndex::class);
});

/*
|--------------------------------------------------------------------------
| Authentication routes
|-------------------------------------------------------------------------- 
*/
Route::get('http://165.227.161.69/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('http://165.227.161.69/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

/*
|--------------------------------------------------------------------------
| Resending Authentication Email
|--------------------------------------------------------------------------
 */
Route::post('http://165.227.161.69/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Изпратен е линк за потвърждение!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
