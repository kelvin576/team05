<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\GenresController;
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
Route::get('games/platforma',[GamesController::class,'platforma'])->name('games.platforma');
Route::get('games/platformb',[GamesController::class,'platformb'])->name('games.platformb');
Route::get('games/platformc',[GamesController::class,'platformc'])->name('games.platformc');
Route::get('games/platformd',[GamesController::class,'platformd'])->name('games.platformd');
Route::get('games/platforme',[GamesController::class,'platforme'])->name('games.platforme');
Route::resource("games",GamesController::class);
Route::resource("genres",GenresController::class);

