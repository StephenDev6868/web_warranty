<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QAController;
use App\Http\Controllers\NewsControler;

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


Route::post('login', [\App\Http\Controllers\AdminController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [\App\Http\Controllers\AdminController::class, 'logout']);

    Route::group(['prefix' => 'admins'], function () {
        Route::get('', [\App\Http\Controllers\AdminController::class, 'index']);
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('', [\App\Http\Controllers\UserController::class, 'index']);
        Route::delete('/{user}', [\App\Http\Controllers\UserController::class, 'destroy']);
        Route::get('/{user}', [\App\Http\Controllers\UserController::class, 'show']);
        Route::put('/{user}', [\App\Http\Controllers\UserController::class, 'store']);
    });
    Route::group(['prefix' => 'qas'], function () {
        Route::get('', [QAController::class, 'index']);
        Route::get('{id}', [QAController::class, 'show']);
        Route::put('{id}', [QAController::class, 'update']);
        Route::post('', [QAController::class, 'store']);
        Route::delete('{id}', [QAController::class, 'destroy']);
    });
    Route::group(['prefix' => 'news'], function () {
        Route::post('search', [NewsControler::class, 'search']);
        Route::get('{id}/detail', [NewsControler::class, 'show']);
        Route::put('{id}/update', [NewsControler::class, 'update']);
        Route::post('create', [NewsControler::class, 'create']);
        Route::delete('{id}/delete', [NewsControler::class, 'destroy']);
    });
});
