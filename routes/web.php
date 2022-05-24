<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
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


Route::get('/', [SystemController::class, 'index'])->name('homepage');
Route::get('add-new-movie',[SystemController::class,'addnewmovie'])->name('Addnewmovie');
Route::POST('add-new-movie',[SystemController::class,'Savenewmovie'])->name('savenewmovie');
