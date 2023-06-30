<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\NewsController;
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

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/create', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}/edit', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}/delete', [NewsController::class, 'destroy'])->name('news.destroy');
});
