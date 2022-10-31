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

Route::get('visitor', [\App\Http\Controllers\VisitorController::class, 'index'])->name('visitor.index');
Route::post('visitor/store', [\App\Http\Controllers\VisitorController::class, 'store'])->name('visitor.store'); 
Route::delete('visitor/delete/{id}', [\App\Http\Controllers\VisitorController::class, 'destroy'])->name('visitor.delete');

Route::get('teacher', [\App\Http\Controllers\TeacherController::class, 'index'])->name('teacher.index');
Route::post('teacher/store', [\App\Http\Controllers\TeacherController::class, 'store'])->name('teacher.store'); 

Route::get('siswa', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
