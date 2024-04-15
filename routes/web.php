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


Route::get('/general-trading/artikel', function () {
    return view('pages.list-artikel');
})->name('list-artikel');

Route::view('detail-product', 'pages.detail-product')->name('detail-product');
Route::view('detail-artikel', 'pages.detail-artikel')->name('detail-artikel');

// Auth

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// End Auth

// Route::get('/general-trading/admin', function () {
//     return view('admin.pages.dashboard');
// })->name('admin-dashboard');

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
Route::get('/general-trading/admin', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('isGuest')->group(function () {
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('signIn');
    Route::post('/sign-in', [AuthController::class, 'auth'])->name('auth.login');
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('signUp');
    Route::post('/sign-up', [AuthController::class, 'register'])->name('auth.register');
});

Route::middleware('isLogin')->prefix('/user')->name('user.')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('index');
    Route::get('/create-user', [AuthController::class, 'user'])->name('create');
    Route::post('/create-user', [AuthController::class, 'createUser'])->name('store');

    Route::get('/edit{id}', [AuthController::class, 'editUser'])->name('edit');
    Route::patch('/update/{id}', [AuthController::class, 'updateUser'])->name('update');
    Route::delete('/delete/{id}', [AuthController::class, 'deleteUser'])->name('destroy');
});
Route::middleware('isLogin')->prefix('/about')->name('about.')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('index');
    Route::get('/create-about', [AboutController::class, 'create'])->name('create');
    Route::post('/create-about', [AboutController::class, 'store'])->name('store');
    Route::get('/edit{id}', [AboutController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [AboutController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [AboutController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/article')->name('article.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create-article', [ArticleController::class, 'create'])->name('create');
    Route::post('/create-article', [ArticleController::class, 'store'])->name('store');
    Route::get('/edit{id}', [ArticleController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [ArticleController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ArticleController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/banner')->name('banner.')->group(function () {
    Route::get('/', [BannerController::class, 'index'])->name('index');
    Route::get('/create-banner', [BannerController::class, 'create'])->name('create');
    Route::post('/create-banner', [BannerController::class, 'store'])->name('store');
    Route::get('/edit{id}', [BannerController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [BannerController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BannerController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::get('/create-cart', [CartController::class, 'create'])->name('create');
    Route::post('/create-cart', [CartController::class, 'store'])->name('store');
    Route::get('/edit{id}', [CartController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [CartController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CartController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/category')->name('category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create-category', [CategoryController::class, 'create'])->name('create');
    Route::post('/create-category', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::get('/create-contact', [ContactController::class, 'create'])->name('create');
    Route::post('/create-contact', [ContactController::class, 'store'])->name('store');
    Route::get('/edit{id}', [ContactController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [ContactController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ContactController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/payment')->name('payment.')->group(function () {
    Route::get('/', [PaymentController::class, 'index'])->name('index');
    Route::get('/create-payment', [PaymentController::class, 'create'])->name('create');
    Route::post('/create-payment', [PaymentController::class, 'store'])->name('store');
    Route::get('/edit{id}', [PaymentController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [PaymentController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PaymentController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/product')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create-product', [ProductController::class, 'create'])->name('create');
    Route::post('/create-product', [ProductController::class, 'store'])->name('store');
    Route::get('/edit{id}', [ProductController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/productgrid')->name('productgrid.')->group(function () {
    Route::get('/', [ProductGridController::class, 'index'])->name('index');
    Route::get('/create-productgrid', [ProductGridController::class, 'create'])->name('create');
    Route::post('/create-productgrid', [ProductGridController::class, 'store'])->name('store');
    Route::get('/edit{id}', [ProductGridController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [ProductGridController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProductGridController::class, 'destroy'])->name('destroy');
});

Route::middleware('isLogin')->prefix('/transaction')->name('transaction.')->group(function () {
    Route::get('/', [TransactionController::class, 'index'])->name('index');
    Route::get('/create-transaction', [TransactionController::class, 'create'])->name('create');
    Route::post('/create-transaction', [TransactionController::class, 'store'])->name('store');
    Route::get('/edit{id}', [TransactionController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TransactionController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TransactionController::class, 'destroy'])->name('destroy');
});
