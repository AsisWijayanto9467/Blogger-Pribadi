<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/contact", [ContactController::class, "index"])->name("contact");
Route::get("/materi", [MateriController::class, "index"])->name("materi");
Route::get("/pembelajaran", [PembelajaranController::class, "index"])->name("pembelajaran");
Route::get("/tentang", [TentangController::class, "index"])->name("tentang");
