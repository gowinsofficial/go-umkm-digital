<?php

use App\Http\Controllers\batikmaduraController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    PageController,
    HomeController,
    KulinerMadura,
    BatikMadura,
    MaduraTvController,
    PariwisataMadura,
};

Route::group(["prefix" => "admin", "middleware" => "mustlogin"], function() {

    //write admin routes here...
    Route::resource("/kuliner", KulinerMadura::class);
    Route::resource("/batik", BatikMadura::class);
    Route::resource("/maduratv", MaduraTvController::class);
    Route::resource("/pariwisata", PariwisataMadura::class);

});

//====== AUTH ROUTES
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//====== END AUTH ROUTES


Route::get('/', function () {
    return view('home');
});
Route::get('/kuliner', function () {
    return view('makanan');
});
Route::get('/kuliner-detail', function () {
    return view('detailmakanan');
});
Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/wisata-detail', function () {
    return view('wisatadetail');
});
Route::get('/batik', function () {
    return view('batik');
});
Route::get('/batik-detail', function () {
    return view('wisatadetail');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
