<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\RegistrasiSiswaController;
use App\Http\Controllers\TiketController;
use App\Models\phones;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', [Coba::class, 'index']);

Route::get('/hello', function () {
    echo '<h1>Hello World </h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::GET('registrasi', [RegistrasiSiswaController::class,'regis']);
Route::POST('registrasi', [RegistrasiSiswaController::class,'store']);

Route::GET('/tiket', [TiketController::class,'index']);
Route::POST('/tiket', [TiketController::class,'store']);
Route::GET('/show_data', [TiketController::class,'show']);

Route::GET('/tiket/one', [PhonesController::class,'relasiOneToOne']);

Route::GET('/tiket/data', [TiketController::class,'relasiOneToMany']);

Route::get('/Fathan', function () {
        date_default_timezone_set("Asia/Jakarta");
            $hour = date ('h');
            if ($hour >= 4 && $hour <= 11){
                $Selamat = "Selamat pagi, ";
            } elseif ($hour >= 12 && $hour <= 3){
                $Selamat = "Selamat siang, ";
            } elseif ($hour >=4 && $hour <= 6){
                $Selamat = "Selamat sore, ";
            } elseif ($hour >= 7 && $hour <= 3){
                $Selamat = "Selamat malam, ";
            }
        return '<h1>'.$Selamat.'Fathan</h1>' ;
    });



