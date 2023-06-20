<?php

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
    return view('pages.client.index');
})->name('index');

Route::get('tentang-kami', function () {
    return view('pages.client.about');
})->name('about');

Auth::routes();

Route::redirect('/home', '/admin/dashboard');
