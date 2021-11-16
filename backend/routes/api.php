<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QAController;

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


Route::post('login', [AdminController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', [AdminController::class, 'logout']);
    Route::group(['prefix' => 'admins'], function () {
        Route::get('', [AdminController::class, 'index']);
    });
    Route::group(['prefix' => 'qas'], function () {
        Route::get('', [QAController::class, 'index']);
        Route::get('{id}', [QAController::class, 'show']);
        Route::put('{id}', [QAController::class, 'update']);
        Route::post('', [QAController::class, 'store']);
        Route::delete('{id}', [QAController::class, 'destroy']);
    });
});
