<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;
Route::get('/', [PageController::class, 'index'])->name('index');

use App\Http\Controllers\BookController;
Route::get('/book', [BookController::class, 'show'])->name('book');

use App\Http\Controllers\AuthorController;
Route::get('/Author', [AuthorController::class, 'show'])->name('Author');

use App\Http\Controllers\BookliberyController;
Route::get('/booklibrary', function () {
    return view('booklibrary');
})->name('booklibrary');

use App\Http\Controllers\BookPricingController;
Route::get('/bookpricing', [BookPricingController::class, 'create'])->name('bookpricing');
Route::post('/bookpricing', [BookPricingController::class, 'store'])->name('bookpricing.store');


use App\Http\Controllers\Bookpurchasecontroller;
Route::get('/bookpurchase', [Bookpurchasecontroller::class, 'create'])->name('bookpurchase');
Route::post('/bookpurchase', [Bookpurchasecontroller::class, 'store'])->name('store');


use App\Http\Controllers\CustomerOrderController;
Route::get('/customer-order', [CustomerOrderController::class, 'create'])->name('customer-order');
Route::post('/customer-order', [CustomerOrderController::class, 'store'])->name('customer_order.store');

use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

