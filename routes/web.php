<?php

use App\Http\Controllers\TiketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Cartcontroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/guest', function () {
    return view('tampilan_guest');
})->name('guest');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/dashboard/show_data', function () {
//     return view('Table');
// })->middleware(['checkAdmin'])->name('result');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/tiket', [TiketController::class,'index']);
    Route::post('/tiket', [TiketController::class,'store']);

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::post('cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::resource('cart', CartController::class);


    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});


Route::middleware(UserMiddleware::class)->group(function () {
    Route::get('/show_data', [TiketController::class, 'show'])->name('result');
});

Route::get('/list-product', [ProductController::class, 'search'])->name('list.product');

Route::post('/payment/midtrans-callback', [PaymentController::class, 'midtransCallback']);

// Route::GET('/tiket', [TiketController::class,'index']);
// Route::POST('/tiket', [TiketController::class,'store']);
// Route::GET('/show_data', [TiketController::class,'show']);

require __DIR__.'/auth.php';
