<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CompensationController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FieldOperatorController;
use App\Http\Controllers\JobOperatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QAController;
use App\Http\Controllers\NewsControler;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SupporterController;

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
    Route::prefix('provinces')->group(function () {
        Route::get('all', [ProvinceController::class, 'index']);
    });
    Route::prefix('job_operators')->group(function () {
        Route::get('all', [JobOperatorController::class, 'index']);
    });
    Route::prefix('field_operators')->group(function () {
        Route::get('all', [FieldOperatorController::class, 'index']);
    });
    Route::group(['prefix' => 'supporters'], function () {
        Route::post('search', [SupporterController::class, 'search']);
        Route::post('create', [SupporterController::class, 'create']);
        Route::get('{id}/detail', [SupporterController::class, 'show']);
        Route::put('{id}/update', [SupporterController::class, 'update']);
        Route::delete('{id}/delete', [SupporterController::class, 'destroy']);
    });

    Route::prefix('banks')->group(function () {
        Route::get('all', [BankController::class, 'index']);
        Route::post('create', [BankController::class, 'create']);
        Route::get('{id}/detail', [BankController::class, 'show']);
        Route::put('{id}/update', [BankController::class, 'update']);
        Route::delete('{id}/delete', [BankController::class, 'destroy']);
    });
    Route::prefix('diseases')->group(function () {
        Route::get('all', [DiseaseController::class, 'index']);
        Route::post('create', [DiseaseController::class, 'create']);
        Route::get('{id}/detail', [DiseaseController::class, 'show']);
        Route::put('{id}/update', [DiseaseController::class, 'update']);
        Route::delete('{id}/delete', [DiseaseController::class, 'destroy']);
    });

    Route::prefix('program_docs')->group(function () {
        Route::post('search', [DocumentController::class, 'search']);
        Route::post('create', [DocumentController::class, 'create']);
        Route::get('{id}/{program_id}/detail', [DocumentController::class, 'show']);
        Route::put('{id}/{program_id}/update', [DocumentController::class, 'update']);
        Route::delete('{id}/{program_id}/delete', [DocumentController::class, 'destroy']);
        Route::post('{id}/download', [DocumentController::class, 'download']);
    });
    Route::group(['prefix' => 'banners'], function () {
        Route::get('', [\App\Http\Controllers\BannerController::class, 'index']);
        Route::post('', [\App\Http\Controllers\BannerController::class, 'create']);
        Route::post('/{banner}', [\App\Http\Controllers\BannerController::class, 'update']);
        Route::get('/{banner}', [\App\Http\Controllers\BannerController::class, 'show']);
        Route::delete('/{banner}', [\App\Http\Controllers\BannerController::class, 'destroy']);
    });

    Route::group(['prefix' => 'programs'], function () {
        Route::get('/all', [\App\Http\Controllers\ProgramController::class, 'alll']);
        Route::get('', [\App\Http\Controllers\ProgramController::class, 'index']);
        Route::post('', [\App\Http\Controllers\ProgramController::class, 'create']);
        Route::put('/{program}', [\App\Http\Controllers\ProgramController::class, 'update']);
        Route::get('/{program}', [\App\Http\Controllers\ProgramController::class, 'show']);
        Route::delete('/{program}', [\App\Http\Controllers\ProgramController::class, 'destroy']);
    });

    Route::prefix('compensations')->group(function () {
        Route::post('search', [CompensationController::class, 'search']);
        Route::get('{id}/detail', [CompensationController::class, 'show']);
        Route::put('{id}/update', [CompensationController::class, 'update']);
        Route::post('{doc_id}/download', [CompensationController::class, 'download']);
    });
    Route::group(['prefix' => 'transactions'], function () {
        Route::get('', [\App\Http\Controllers\TransactionController::class, 'index']);
        Route::get('/{transaction}', [\App\Http\Controllers\TransactionController::class, 'show']);
        Route::put('/{transaction}', [\App\Http\Controllers\TransactionController::class, 'update']);
    });

    Route::group(['prefix' => 'otps'], function () {
        Route::get('', [\App\Http\Controllers\UserAuthOtpController::class, 'index']);
    });
});
