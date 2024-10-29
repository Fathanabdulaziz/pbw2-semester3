<?php

use App\Http\Controllers\TiketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

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
});


Route::middleware(UserMiddleware::class)->group(function () {
    Route::get('/show_data', [TiketController::class, 'show'])->name('result');
});

// Route::GET('/tiket', [TiketController::class,'index']);
// Route::POST('/tiket', [TiketController::class,'store']);
// Route::GET('/show_data', [TiketController::class,'show']);

require __DIR__.'/auth.php';
