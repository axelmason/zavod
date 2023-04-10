<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', function() {
        if(auth()->check()) {
            return to_route('admin.products.list');
        }
        return view('admin.auth');
    })->name('home');

    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('products')->name('products.')->group(function() {
        Route::get('/', [ProductController::class, 'list'])->name('list');
        Route::get('/create', [ProductController::class, 'createPage'])->name('createPage');
        Route::post('/create', [ProductController::class, 'create'])->name('create');

        Route::get('/edit/{product_id}', [ProductController::class, 'editPage'])->name('editPage');
        Route::post('/edit/{product_id}', [ProductController::class, 'edit'])->name('edit');

        Route::get('/delete/{product_id}', [ProductController::class, 'delete'])->name('delete');
    });
});

Route::get('/product/{id}', [ProductController::class, 'get'])->name('productDetails');

Route::get('/about', [PageController::class, 'about'])->name('aboutPage');
Route::get('/partners', [PageController::class, 'partners'])->name('partnersPage');
Route::get('/catalog', [PageController::class, 'catalog'])->name('catalogPage');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contactsPage');


Route::get('/', [PageController::class, 'home'])->name('home');
