<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController as PagesController;
use App\Http\Controllers\ComicsController as ComicsController;

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

// route for homepage
Route::get('/', [PagesController::class, 'index'])->name("benvenuto");

Route::resource('comics', ComicsController::class);
