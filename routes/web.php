<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'category'])->name('category');
Route::get('/category/{cat}', [\App\Http\Controllers\CategoryController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [\App\Http\Controllers\SingleProductController::class, 'singleProduct'])->name('singleProduct');
// Корзина
Route::get('/addcart/{id}', [\App\Http\Controllers\CartController::class, 'addCart'])->name('addCart');
Route::get('/removecart/{id}', [\App\Http\Controllers\CartController::class, 'removeCart'])->name('removeCart');
Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'checkOut'])->name('checkOut')->middleware('auth');
Route::middleware('auth')->group( function(){
    Route::post('checkout/makeorder', [\App\Http\Controllers\CheckoutController::class, 'makeOrder'])->name('makeOrder');
    Route::get('checkout/makeorder', [\App\Http\Controllers\CheckoutController::class, 'makeOrder'])->name('makeOrder');
});
// Аккаунт
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'accIndex'])->name('accIndex')->middleware('auth');



Route::get('/welcome', function(){
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
