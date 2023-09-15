<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JpgController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PngController;


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
Route::get('/', [HomeController::class, 'Home'])->name('home');    

Route::prefix('convert')->group(function () {
    Route::get('/jpg-to-png',  [JpgController::class, 'JpgToPng'])->name('jpg-to-png');
    Route::get('/jpg-to-jpeg', [JpgController::class, 'JpgToJPEG'])->name('jpg-to-jpeg');
    Route::get('/jpg-to-webp', [JpgController::class, 'JpgToWEBP'])->name('jpg-to-webp');
    Route::get('/jpg-to-heic', [JpgController::class, 'JpgToHEIC'])->name('jpg-to-heic');
});

Route::prefix('convert')->group(function () {
    Route::get('/png-to-jpg',  [PngController::class, 'PngToJpg'])->name('png-to-jpg');
    Route::get('/png-to-jpeg', [PngController::class, 'PngToJPEG'])->name('png-to-jpeg');
    Route::get('/png-to-webp', [PngController::class, 'PngToWEBP'])->name('png-to-webp');
    Route::get('/png-to-heic', [PngController::class, 'PngToHEIC'])->name('png-to-heic');
});









