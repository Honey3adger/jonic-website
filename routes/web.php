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
    return view('index');
})->name('home');


Route::get('/app', function () {
    return view('layouts.app');
});

// Route::get('/test', function () {
//     return view('layouts.test');
// });

Route::get('/about', function () {
    return view('errors.503');
})->name('pageNan');

Route::get('/investors', function () {
    return view('errors.503');
})->name('pageNan');

Route::get('/products', function () {
    return view('errors.503');
})->name('pageNan');

