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
    BatikPageController,
    BazarPageController,
    BazarUmkm,
    KulinerPageController,
    MaduraTvController,
    PariwisataMadura,
    OjolMadura,
    BrandingUmkm,
    Events,
    FestivalPageController,
    MaduraTvPageController,
    WisataPageController,
    OjolMaduraPageController,
    Services,
    Article,
    Sales,
};

Route::group(["prefix" => "admin", "middleware" => "mustlogin"], function() {

    //write admin routes here...
    Route::resource("/kuliner", KulinerMadura::class);
    Route::resource("/batik", BatikMadura::class);
    Route::resource("/maduratv", MaduraTvController::class);
    Route::resource("/pariwisata", PariwisataMadura::class);
    Route::resource("/ojol", OjolMadura::class);
    Route::resource("/branding", BrandingUmkm::class);
    Route::resource("/eventship", Events::class);
    Route::resource("/service", Services::class);
    Route::resource("/bazar", BazarUmkm::class);
    Route::resource("/article", Article::class);
    Route::resource("/sale", Sales::class);



});

//====== AUTH ROUTES
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//====== END AUTH ROUTES


Route::get('/', function () {
    return view('home');
});
Route::get('/kuliner', [KulinerPageController::class, 'index']);
Route::get('/kuliner-detail/{kuliner}', [KulinerPageController::class, 'show'])->name('kulinerpage.show');
Route::get('/wisata',[WisataPageController::class, 'index']);
Route::get('/wisata-detail/{pariwisatum}', [WisataPageController::class, 'show'])->name('wisatapage.show');
Route::get('/batik', [BatikPageController::class, 'index']);
Route::get('/batik-detail/{batik}',[BatikPageController::class, 'show'])->name('batikpage.show');
Route::get('/festival', [FestivalPageController::class, 'index']);
Route::get('/festival-detail/{festival}',[FestivalPageController::class, 'show'])->name('festivalpage.show');
Route::get('/bazar', [BazarPageController::class, 'index']);
Route::get('/bazar-detail/{bazar}',[BazarPageController::class, 'show'])->name('bazarpage.show');
Route::get('/Madura-tv',[MaduraTvPageController::class, 'index']);
Route::get('/ojol-madura',[OjolMaduraPageController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
