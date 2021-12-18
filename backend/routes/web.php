<?php

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

Route::get('/authentication', function () {
    return view('components.user-auth');
})->name('user-auth');

Route::post('/login', [\App\Http\Controllers\User\UserController::class, 'login'])->name('login');
Route::post('/auth-otp', [\App\Http\Controllers\User\UserController::class, 'authOtp'])->name('authOtp');
Route::post('/logout', [\App\Http\Controllers\User\UserController::class, 'logout'])->name('logout');


Route::get('/', [\App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
Route::get('/assurances', [\App\Http\Controllers\User\AssuranceController::class, 'index'])->name('assurance');
Route::get('/about', [\App\Http\Controllers\User\AboutController::class, 'index'])->name('about');

Route::group(['middleware' => 'auth:user'], function () {
    Route::get('/my-wallet', [\App\Http\Controllers\User\WalletControler::class, 'getMyWallet'])->name('my-wallet');
    Route::post('/my-wallet', [\App\Http\Controllers\User\WalletControler::class, 'postMyWallet'])->name('post-my-wallet');
    Route::get('/history-compensation-zero', [\App\Http\Controllers\User\CompensationController::class, 'getCompensationList'])->name('history-compensation-zero');
    Route::get('/history-compensation-one', [\App\Http\Controllers\User\CompensationController::class, 'getCompensationInfo'])->name('history-compensation-one');
    Route::get('/history-compensation-two', [\App\Http\Controllers\User\CompensationController::class, 'getCompensationLog'])->name('history-compensation-two');
    Route::get('/history-compensation-three', [\App\Http\Controllers\User\CompensationController::class, 'getCompensationDocs'])->name('history-compensation-three');
    Route::get('/my-program', [\App\Http\Controllers\User\ProgramController::class, 'getMyProgram'])->name('my-program');
    Route::get('/my-wallet-trade-history', function () {
        return view('components.my-wallet-trade-history');
    })->name('my-wallet-trade-history');
});

Route::get('/register-receive', [\App\Http\Controllers\User\CompensationController::class, 'getRegisterReceive'])->name('register-receive');
Route::post('/register-receive', [\App\Http\Controllers\User\CompensationController::class, 'registerReceive'])->name('post-register-receive');

Route::get('/public-divided', function () {
    return view('components.public-divided');
})->name('public-divided');

Route::get('/public-divided-full', function () {
    return view('components.public-divided-full');
})->name('public-divided-full');

Route::get('/public-divided-detail', function () {
    return view('components.public-divided-detail');
})->name('public-divided-detail');

Route::get('/supporter', [\App\Http\Controllers\User\SupporterController::class, 'search'])->name('supporter');

Route::get('/register-program/{id}', [\App\Http\Controllers\User\ProgramController::class, 'getRegisterProgram'])->name('register-program');
Route::post('/register-program/{id}', [\App\Http\Controllers\User\ProgramController::class, 'postRegisterProgram'])->name('post-register-program');
Route::get('/register-program-step-one/{id}', [\App\Http\Controllers\User\ProgramController::class, 'getRegisterStep1'])->name('register-program-step-one');
Route::post('/register-program-step-one/{id}', [\App\Http\Controllers\User\ProgramController::class, 'postRegisterStep1'])->name('post-register-program-step-one');
Route::get('/register-program-step-two/{id}', [\App\Http\Controllers\User\ProgramController::class, 'getRegisterStep2'])->name('register-program-step-two');
Route::post('/register-program-step-two/{id}', [\App\Http\Controllers\User\ProgramController::class, 'postRegisterStep2'])->name('post-register-program-step-two');

Route::get('/devide-user', function () {
    return view('components.devide-user');
})->name('devide-user');

Route::post('/download-docs', [\App\Http\Controllers\User\CompensationController::class, 'downloadDocs']);
