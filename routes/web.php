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

Route::get('/general-trading/admin/user', [AuthController::class, 'index'])->name('admin-user');

Route::prefix('general-trading/admin/about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('admin-about');
    Route::get('/create', [AboutController::class, 'create'])->name('create');
    Route::post('/create', [AboutController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [AboutController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [AboutController::class, 'destroy'])->name('destroy');
});

Route::prefix('general-trading/admin/article')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('admin-article-index');
    Route::get('/create', [ArticleController::class, 'create'])->name('admin-article-create');
    Route::post('/create', [ArticleController::class, 'store'])->name('admin-article-store');
    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('admin-article-edit');
    Route::patch('/update/{id}', [ArticleController::class, 'update'])->name('admin-article-update');
    Route::delete('/delete/{id}', [ArticleController::class, 'destroy'])->name('admin-article-destroy');
});

Route::prefix('general-trading/admin/banner')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('admin-banner');
    Route::get('/create', [BannerController::class, 'create'])->name('create');
    Route::post('/create', [BannerController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [BannerController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BannerController::class, 'destroy'])->name('destroy');
});

// Route::get('/', [CartController::class, 'index'])->name('index');
// Route::get('/create-cart', [CartController::class, 'create'])->name('create');
// Route::post('/create-cart', [CartController::class, 'index'])->name('index');
// Route::get('/edit{id}', [CartController::class, 'edit'])->name('edit');
// Route::patch('/update/{id}', [CartController::class, 'update'])->name('update');
// Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('destroy');

Route::prefix('general-trading/admin/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin-category');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::prefix('general-trading/admin/contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('admin-contact');
    Route::get('/create', [ContactController::class, 'create'])->name('create');
    Route::post('/create', [ContactController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [ContactController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('destroy');
});

Route::prefix('general-trading/admin/payment')->group(function () {
    Route::get('/', [PaymentController::class, 'index'])->name('admin-payment-index');
    Route::get('/create', [PaymentController::class, 'create'])->name('admin-payment-create');
    Route::post('/create', [PaymentController::class, 'store'])->name('admin-payment-store');
    Route::get('/edit/{id}', [PaymentController::class, 'edit'])->name('admin-payment-edit');
    Route::patch('/update/{id}', [PaymentController::class, 'update'])->name('admin-payment-update');
    Route::delete('/delete/{id}', [PaymentController::class, 'destroy'])->name('admin-payment-destroy');
});

Route::prefix('general-trading/admin/product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('admin-product');
    Route::get('/create', [ProductController::class, 'create'])->name('admin-product-create');
    Route::post('/create', [ProductController::class, 'store'])->name('admin-product-store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin-product-edit');
    Route::patch('/update/{id}', [ProductController::class, 'update'])->name('admin-product-update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('admin-product-destroy');
});

// Route::get('/', [ProductGridController::class, 'index'])->name('index');
// Route::get('/create-productgrid', [ProductGridController::class, 'create'])->name('create');
// Route::post('/create-productgrid', [ProductGridController::class, 'index'])->name('index');
// Route::get('/edit{id}', [ProductGridController::class, 'edit'])->name('edit');
// Route::patch('/update/{id}', [ProductGridController::class, 'update'])->name('update');
// Route::delete('/delete/{id}', [ProductGridController::class, 'destroy'])->name('destroy');

Route::prefix('general-trading/admin/transaction')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('admin-transaction');
    Route::get('/create', [TransactionController::class, 'create'])->name('admin-transaction-create');
    Route::post('/create', [TransactionController::class, 'store'])->name('admin-transaction-store');
    Route::get('/edit/{id}', [TransactionController::class, 'edit'])->name('admin-transaction-edit');
    Route::patch('/update/{id}', [TransactionController::class, 'update'])->name('admin-transaction-update');
    Route::delete('/delete/{id}', [TransactionController::class, 'destroy'])->name('admin-transaction-destroy');
});
