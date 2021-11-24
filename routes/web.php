<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('filmes', 'MovieController')->names('movie')->parameters(['filmes' => 'movie']);
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('atores', 'StarController')->names('star')->parameters(['atores' => 'star']);
    Route::get('/detach', [StarController::class, 'detach'])->name('star.detach');
});

// Route::group(['namespace' => 'App\Http\Controllers'], function () {
//     Route::resource('diretores', 'DirectorsController')->names('director')->parameters(['diretores' => 'director']);
// });
