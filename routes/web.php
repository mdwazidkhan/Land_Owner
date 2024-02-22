<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandController;

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


Route::get('/land',[LandController::class,'index'])->name('land.index');
Route::get('/land/create',[LandController::class,'create'])->name('land.create');
Route::post('/land', [LandController::class, 'store'])->name('land.store');
Route::get('/land/{land}/edit', [LandController::class, 'edit'])->name('land.edit');
Route::put('/land/{land}/update', [LandController::class, 'update'])->name('land.update');
Route::delete('/land/{land}/destroy', [LandController::class, 'destroy'])->name('land.destroy');
