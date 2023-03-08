<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;

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

//Admin routes
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //Category routes

    //Category edit routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'index');
        Route::post('/category', 'store');
        Route::put('/category/{category}', 'update');
    });
    //Category create routes
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::get('/category/{category_id}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('category', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);

    //Edit user routes
    Route::get('/users', [\App\Http\Controllers\Admin\UserEditController::class, 'index']);
    Route::get('/users/edit', [\App\Http\Controllers\Admin\UserEditController::class, 'update']);

    //Brands routes

    Route::get('/brands', [App\Http\Livewire\Admin\Brand\Index::class]);
});
