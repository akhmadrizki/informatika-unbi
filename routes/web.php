<?php

use App\Http\Controllers\Dashboard\StudentController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $image = \App\Models\Pricing::all();
    return view('pages.client.index', compact('image'));
})->name('index');

Route::get('tentang-kami', function () {
    return view('pages.client.about');
})->name('about');

Route::get('kontak', function () {
    return view('pages.client.contact');
})->name('contact');

Route::get('daftar', function () {
    return view('pages.client.daftar');
})->name('daftar');

Route::post('daftar', [StudentController::class, 'store'])->name('daftar.store');

Auth::routes();

Route::redirect('/home', '/admin/dashboard');
