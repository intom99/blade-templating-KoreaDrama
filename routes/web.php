<?php

use App\Http\Controllers\templateContoller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/movies', [templateContoller::class, 'movie'])->name('template.movie');
Route::get('/casts', [templateContoller::class, 'cast'])->name('template.cast');
Route::get('/directors', [templateContoller::class, 'director'])->name('template.director');
Route::get('/channels', [templateContoller::class, 'channel'])->name('template.channel');
Route::get('/', [templateContoller::class, 'index'])->name('index');
