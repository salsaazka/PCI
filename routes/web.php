<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGridController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionProductController;
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

Route::get('/general-trading', function () {
    return view('pages.landing');
})->name('landing');

Route::get('/general-trading/product', function () {
    return view('pages.list-product');
})->name('list-product');

// Auth

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// End Auth

Route::get('/general-trading/admin', function () {
    return view('admin.pages.dashboard');
})->name('admin-dashboard');

// Route::get('/general-trading/admin/product', function () {
//     return view('admin.pages.product');
// })->name('admin-product');

// Route::get('/general-trading/admin/transaction', function () {
//     return view('admin.pages.transaction');
// })->name('admin-transaction');

// Route::get('/general-trading/admin/about', function () {
//     return view('admin.pages.about');
// })->name('admin-about');

// Route::get('/general-trading/admin/user', function () {
//     return view('admin.pages.user');
// })->name('admin-user');

// Route::get('/general-trading/admin/banner', function () {
//     return view('admin.pages.banner');
// })->name('admin-banner');

// Route::get('/general-trading/admin/category', function () {
//     return view('admin.pages.category');
// })->name('admin-category');

// Route::get('/general-trading/admin/contact', function () {
//     return view('admin.pages.contact');
// })->name('admin-contact');

Route::get('/general-trading/admin/user', [AuthController::class, 'index'])->name('admin-user');

Route::get('/general-trading/admin/about', [AboutController::class, 'index'])->name('admin-about');
Route::get('/create-about', [AboutController::class, 'create'])->name('create');
Route::post('/create-about', [AboutController::class, 'index'])->name('index');
Route::get('/edit{id}', [AboutController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [AboutController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [AboutController::class, 'destroy'])->name('destroy');

Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::get('/create-article', [ArticleController::class, 'create'])->name('create');
Route::post('/create-article', [ArticleController::class, 'index'])->name('index');
Route::get('/edit{id}', [ArticleController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ArticleController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ArticleController::class, 'destroy'])->name('destroy');

Route::get('/general-trading/admin/banner', [BannerController::class, 'index'])->name('admin-banner');
Route::get('/create-banner', [BannerController::class, 'create'])->name('create');
Route::post('/create-banner', [BannerController::class, 'index'])->name('index');
Route::get('/edit{id}', [BannerController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [BannerController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [BannerController::class, 'destroy'])->name('destroy');

Route::get('/', [CartController::class, 'index'])->name('index');
Route::get('/create-cart', [CartController::class, 'create'])->name('create');
Route::post('/create-cart', [CartController::class, 'index'])->name('index');
Route::get('/edit{id}', [CartController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [CartController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('destroy');

Route::get('/general-trading/admin/category', [CategoryController::class, 'index'])->name('admin-category');
Route::get('/create-category', [CategoryController::class, 'create'])->name('create');
Route::post('/create-category', [CategoryController::class, 'index'])->name('index');
Route::get('/edit{id}', [CategoryController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');

Route::get('/general-trading/admin/contact', [ContactController::class, 'index'])->name('admin-contact');
Route::get('/create-contact', [ContactController::class, 'create'])->name('create');
Route::post('/create-contact', [ContactController::class, 'index'])->name('index');
Route::get('/edit{id}', [ContactController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ContactController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('destroy');

Route::get('/', [PaymentController::class, 'index'])->name('index');
Route::get('/create-payment', [PaymentController::class, 'create'])->name('create');
Route::post('/create-payment', [PaymentController::class, 'index'])->name('index');
Route::get('/edit{id}', [PaymentController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [PaymentController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [PaymentController::class, 'destroy'])->name('destroy');


Route::get('/general-trading/admin/product', [ProductController::class, 'index'])->name('admin-product');
Route::get('/create-product', [ProductController::class, 'create'])->name('create');
Route::post('/create-product', [ProductController::class, 'index'])->name('index');
Route::get('/edit{id}', [ProductController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');

Route::get('/', [ProductGridController::class, 'index'])->name('index');
Route::get('/create-productgrid', [ProductGridController::class, 'create'])->name('create');
Route::post('/create-productgrid', [ProductGridController::class, 'index'])->name('index');
Route::get('/edit{id}', [ProductGridController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [ProductGridController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [ProductGridController::class, 'destroy'])->name('destroy');

Route::get('/general-trading/admin/transaction', [TransactionController::class, 'index'])->name('admin-transaction');
Route::get('/create-transaction', [TransactionController::class, 'create'])->name('create');
Route::post('/create-transaction', [TransactionController::class, 'index'])->name('index');
Route::get('/edit{id}', [TransactionController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [TransactionController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [TransactionController::class, 'destroy'])->name('destroy');
