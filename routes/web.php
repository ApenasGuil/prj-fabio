<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;
use App\Http\Controllers\DirectorController;

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
    Route::get('/star_attach', [StarController::class, 'star_attach'])->name('star.attach');
    Route::get('/star_detach', [StarController::class, 'detach'])->name('star.detach');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('diretores', 'DirectorController')->names('director')->parameters(['diretores' => 'director']);
    Route::get('/director_detach', [DirectorController::class, 'detach'])->name('director.detach');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('linguas', 'LanguageController')->names('language')->parameters(['linguas' => 'language']);
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('generos', 'GenreController')->names('genre')->parameters(['generos' => 'genre']);
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::resource('paises', 'CountryController')->names('country')->parameters(['paises' => 'country']);
});
