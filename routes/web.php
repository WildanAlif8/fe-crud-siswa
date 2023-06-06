<?php

use App\Http\Controllers\SiswaController;
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

Route::get('/',[SiswaController::class,'index']);

Route::get('/add', [SiswaController::class, 'create'])->name('add');
Route::post('/add/send', [SiswaController::class, 'store'])->name('send');
Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [SiswaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [SiswaController::class, 'destroy'])->name('destroy');


