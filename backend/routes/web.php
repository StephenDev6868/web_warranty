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

Route::get('/', function () {
    return view('components.home');
})->name('home');

Route::get('/about', function () {
    return view('components.about');
})->name('about');

Route::get('/assurances', function () {
    return view('components.assurance');
})->name('assurance');

Route::get('/public-divided', function () {
    return view('components.public-divided');
})->name('public-divided');

Route::get('/public-divided-full', function () {
    return view('components.public-divided-full');
})->name('public-divided-full');

Route::get('/public-divided-detail', function () {
    return view('components.public-divided-detail');
})->name('public-divided-detail');

Route::get('/supporter', function () {
    return view('components.supporter');
})->name('supporter');

Route::get('/register-program', function () {
    return view('components.register-program');
})->name('register-program');

Route::get('/register-program-step-one', function () {
    return view('components.register-program-step-one');
})->name('register-program-step-one');

Route::get('/register-program-step-two', function () {
    return view('components.register-program-step-two');
})->name('register-program-step-two');

Route::get('/my-program', function () {
    return view('components.my-program');
})->name('my-program');

Route::get('/my-wallet', function () {
    return view('components.my-wallet');
})->name('my-wallet');

Route::get('/my-wallet-trade-history', function () {
    return view('components.my-wallet-trade-history');
})->name('my-wallet-trade-history');

Route::get('/devide-user', function () {
    return view('components.devide-user');
})->name('devide-user');

Route::get('/register-receive', function () {
    return view('components.register-receive');
})->name('register-receive');

Route::get('/history-compensation-zero', function () {
    return view('components.history-compensation-zero');
})->name('history-compensation-zero');

Route::get('/history-compensation-one', function () {
    return view('components.history-compensation-one');
})->name('history-compensation-one');

Route::get('/history-compensation-two', function () {
    return view('components.history-compensation-two');
})->name('history-compensation-two');

Route::get('/history-compensation-three', function () {
    return view('components.history-compensation-three');
})->name('history-compensation-three');
