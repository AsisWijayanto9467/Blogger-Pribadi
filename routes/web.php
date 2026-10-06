<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/contact", [ContactController::class, "index"])->name("contact");
Route::get("/materi", [MateriController::class, "index"])->name("materi");
Route::get("/pembelajaran", [PembelajaranController::class, "index"])->name("pembelajaran");
Route::get("/tentang", [TentangController::class, "index"])->name("tentang");

// Route Modul
Route::prefix('modul')->name('modul.')->group(function () {

    // Kelas 10
    Route::prefix('kelas-10')->name('kelas10.')->group(function () {
        Route::get('/bindo', [ModulController::class, 'kelas10Bindo'])->name('bindo');
        Route::get('/binggris', [ModulController::class, 'kelas10Binggris'])->name('binggris');
        Route::get('/bjawa', [ModulController::class, 'kelas10Bjawa'])->name('bjawa');
        Route::get('/informatika', [ModulController::class, 'kelas10Informatika'])->name('informatika');
        Route::get('/math', [ModulController::class, 'kelas10Math'])->name('math');
        Route::get('/pai', [ModulController::class, 'kelas10Pai'])->name('pai');
        Route::get('/pipas', [ModulController::class, 'kelas10Pipas'])->name('pipas');
        Route::get('/pjok' , [ModulController::class, 'kelas10Pjok'])->name('pjok');
        Route::get('/ppkn', [ModulController::class, 'kelas10Ppkn'])->name('ppkn');
        Route::get('/pplg', [ModulController::class, 'kelas10Pplg'])->name('pplg');
        Route::get('/sejarah', [ModulController::class, 'kelas10Sejarah'])->name('sejarah');
        Route::get('/seni-budaya', [ModulController::class, 'kelas10SeniBudaya'])->name('seni-budaya');
    });

    // Kelas 11
    Route::prefix('kelas-11')->name('kelas11.')->group(function () {
        Route::get('/basis-data', [ModulController::class, 'kelas11BasisData'])->name('basis-data');
        Route::get('/bindo', [ModulController::class, 'kelas11Bindo'])->name('bindo');
        Route::get('/binggris', [ModulController::class, 'kelas11Binggris'])->name('binggris');
        Route::get('/bjawa', [ModulController::class, 'kelas11Bjawa'])->name('bjawa');
        Route::get('/math', [ModulController::class, 'kelas11Math'])->name('math');
        Route::get('/mp-bdj', [ModulController::class, 'kelas11MpBdj'])->name('mp-bdj');
        Route::get('/pai', [ModulController::class, 'kelas11Pai'])->name('pai');
        Route::get('/pjok', [ModulController::class, 'kelas11Pjok'])->name('pjok');
        Route::get('/pkwu', [ModulController::class, 'kelas11Pkwu'])->name('pkwu');
        Route::get('/ppb', [ModulController::class, 'kelas11Ppb'])->name('ppb');
        Route::get('/ppkn', [ModulController::class, 'kelas11Ppkn'])->name('ppkn');
        Route::get('/ptgm', [ModulController::class, 'kelas11Ptgm'])->name('ptgm');
        Route::get('/pw', [ModulController::class, 'kelas11Pw'])->name('pw');
    });

    // Kelas 12
    Route::prefix('kelas-12')->name('kelas12.')->group(function () {
        Route::get('/bindo', [ModulController::class, 'kelas12Bindo'])->name('bindo');
        Route::get('/binggris', [ModulController::class, 'kelas12Binggris'])->name('binggris');
        Route::get('/bjawa', [ModulController::class, 'kelas12Bjawa'])->name('bjawa');
        Route::get('/bk', [ModulController::class, 'kelas12Bk'])->name('bk');
        Route::get('/kk-bd', [ModulController::class, 'kelas12KkBd'])->name('kk-bd');
        Route::get('/kk-ppb', [ModulController::class, 'kelas12KkPpb'])->name('kk-ppb');
        Route::get('/kk-ptgm', [ModulController::class, 'kelas12KkPtgm'])->name('kk-ptgm');
        Route::get('/kk-pw', [ModulController::class, 'kelas12KkPw'])->name('kk-pw');
        Route::get('/math', [ModulController::class, 'kelas12Math'])->name('math');
        Route::get('/mp-si', [ModulController::class, 'kelas12MpSi'])->name('mp-si');
        Route::get('/pai', [ModulController::class, 'kelas12Pai'])->name('pai');
        Route::get('/pkkwu', [ModulController::class, 'kelas12Pikwu'])->name('pkkwu');
        Route::get('/ppkn', [ModulController::class, 'kelas12Ppkn'])->name('ppkn');
    });

});
