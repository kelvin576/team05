<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('hello',[TestController::class,'HelloWorld']);

Route::post('register',[AuthController::class,'register']);

Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    //查詢所有遊戲
    Route::get('games',[GamesController::class, 'api_games']);
    //修改指定遊戲
    Route::patch('games',[GamesController::class, 'api_update']);
    //刪除指定遊戲
    Route::delete('games',[GamesController::class,'api_delete']);
    //查詢所有類別
    Route::get('genres',[GenresController::class, 'api_genres']);
    //修改指定類別
    Route::patch('genres',[GenresController::class,'api_update']);
    //刪除指定類別
    Route::delete('genres',[GenresController::class,'api_delete']);




});
