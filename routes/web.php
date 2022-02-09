<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('/list', [BiodataController::class,'index'])->name('list');
Route::get('/add-siswa', [BiodataController::class,'create'])->name('add-siswa');
Route::post('/store_siswa', [BiodataController::class,'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
