<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin', function() {
    if(auth()->check()) {
        return to_route('admin.products.list');
    }
    return view('admin.auth');
})->name('admin');

Route::post('/auth', [AuthController::class, 'auth'])->name('auth');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('products')->name('products.')->group(function() {
        Route::get('/', [ProductController::class, 'list'])->name('list');
        Route::get('/create', [ProductController::class, 'createPage'])->name('createPage');
        Route::post('/create', [ProductController::class, 'create'])->name('create');

        Route::get('/edit/{product_id}', [ProductController::class, 'editPage'])->name('editPage');
        Route::post('/edit/{product_id}', [ProductController::class, 'edit'])->name('edit');

        Route::get('/delete/{product_id}', [ProductController::class, 'delete'])->name('delete');
    });

    Route::prefix('warehouse')->name('warehouse.')->group(function() {
        Route::get('/', [WarehouseController::class, 'list'])->name('list');
        Route::get('/delete/{id}', [WarehouseController::class, 'delete'])->name('delete');
        Route::post('/create', [WarehouseController::class, 'create'])->name('create');
    });
    Route::prefix('section')->name('section.')->group(function() {
        Route::get('/', [SettingController::class, 'list'])->name('list');
        Route::post('/save/{id}', [SettingController::class, 'save'])->name('save');
    });
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('/', [CategoryController::class, 'list'])->name('list');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::post('/create', [CategoryController::class, 'create'])->name('create');
    });
});

Route::get('/product/{id}', [ProductController::class, 'get'])->name('productDetails');

Route::get('/about', [PageController::class, 'about'])->name('aboutPage');
Route::get('/partners', [PageController::class, 'partners'])->name('partnersPage');
Route::get('/catalog', [PageController::class, 'catalog'])->name('catalogPage');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contactsPage');

Route::view('/privacy','privacy')->name('privacy');
Route::get('/', [PageController::class, 'home'])->name('home');
