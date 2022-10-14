<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/visitor', [App\Http\Controllers\VisitorController::class, 'index'])->name('buku.tamu');
Route::get('/teacher', [App\Http\Controllers\GuruController::class, 'index'])->name('buku.tamu');

