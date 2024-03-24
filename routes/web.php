<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/general-trading/admin/product', function () {
    return view('admin.pages.product');
})->name('admin-product');

Route::get('/general-trading/admin/transaction', function () {
    return view('admin.pages.transaction');
})->name('admin-transaction');

Route::get('/general-trading/admin/about', function () {
    return view('admin.pages.about');
})->name('admin-about');

Route::get('/general-trading/admin/user', function () {
    return view('admin.pages.user');
})->name('admin-user');

Route::get('/general-trading/admin/banner', function () {
    return view('admin.pages.banner');
})->name('admin-banner');

Route::get('/general-trading/admin/category', function () {
    return view('admin.pages.category');
})->name('admin-category');

Route::get('/general-trading/admin/contact', function () {
    return view('admin.pages.contact');
})->name('admin-contact');
