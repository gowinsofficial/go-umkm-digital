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
    BazarUmkm,
    KulinerPageController,
    MaduraTvController,
    PariwisataMadura,
    OjolMadura,
    BrandingUmkm,
    Events,
    MaduraTvPageController,
    WisataPageController,
    OjolMaduraPageController,
    Services,
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
Route::get('/batik-detail/{batik}',[BatikPageController::class, 'show'])->name('wisatapage.show');
Route::get('/Madura-tv',[MaduraTvPageController::class, 'index']);
Route::get('/ojol-madura',[OjolMaduraPageController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
