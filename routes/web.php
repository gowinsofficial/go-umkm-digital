<?php

use App\Http\Controllers\batikmaduraController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    PageController,
    HomeController,
};

Route::group(["prefix" => "u", "middleware" => "mustlogin"], function() {
    Route::get('/data', [PageController::class, 'dataIndex']);
    Route::get('/form', [PageController::class, 'formIndex']);

    //write admin routes here...

});

/**
 * AUTH ROUTES
 */

Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/**
 * ====
 * END AUTH ROUTES
 */

Route::resource('batikmadura',batikmaduraController::class);
Route::resource('admin',adminController::class);


Route::get('/', function () {
    return view('home');
});
Route::get('/kuliner', function () {
    return view('makanan');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
