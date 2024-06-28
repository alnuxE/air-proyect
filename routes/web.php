<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/datos', function () {
    return view('esp32');
})->name('datos');;

Route::get('/graficas', function () {
    return view('graficas');
})->name('graficas');;

Route::get('/principal', function () {
    return view('principal');
})->name('principal');;

Route::get('/controles', function () {
    return view('controles');
})->name('controles');;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
