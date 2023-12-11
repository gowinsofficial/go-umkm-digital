<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    PageController,
    HomeController,
};

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


Route::get('/', [AuthController::class, 'loginIndex']);
Route::get('/data', [PageController::class, 'dataIndex']);
Route::get('/form', [PageController::class, 'formIndex']);

Route::get('/', function () {
    return view('home');
});
Route::get('/kuliner-madura', function () {
    return view('kuliner');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
