<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PricelistController;
use App\Http\Controllers\Dashboard\StudentController;
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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/pricelist', [PricelistController::class, 'index'])->name('pricelist.index');
    Route::post('/pricelist', [PricelistController::class, 'store'])->name('pricelist.store');

    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
});
