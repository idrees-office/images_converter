<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JpgPngController;
use App\Http\Controllers\ConverterController;


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
    Route::get('/jpg-to-png', [JpgPngController::class, 'JpgToPng'])->name('jpg-to-png');
    Route::get('/jpg-to-jpeg', [ConverterController::class, 'JpgToJPEG'])->name('jpg-to-jpeg');

    Route::get('/jpg-to-webp', [ConverterController::class, 'JpgToWEBP'])->name('jpg-to-webp');

    Route::get('/jpg-to-heic', [ConverterController::class, 'JpgToHEIC'])->name('jpg-to-heic');



});







