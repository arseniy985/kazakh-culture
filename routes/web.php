<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {return view('main');})->name('main');
Route::get('/about-me', function () {return view('about');})->name('about');
Route::get('/support', function () {return view('support');})->name('support');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');



Route::get('/support', function () {
    return view('support');
})->name('support');

Route::post('/support/submit', function (Illuminate\Http\Request $request) {

    return back()->with('success', 'Ваше сообщение отправлено!');
})->name('support.submit');

Route::get('/support/report', function () {
    return view('report');
})->name('support.report');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/productss', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard'); // Пример страницы для авторизованных пользователей
    })->name('dashboard');
});


