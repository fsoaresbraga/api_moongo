<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\{
    LoginController
};
use App\Http\Controllers\Api\{
    TaxiController
};


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
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/reset/password', [LoginController::class, 'resetPassword'])->name('reset.password');
Route::post('/verify/token/password', [LoginController::class, 'VerifyTokenResetPassword'])->name('verify.token.reset.password');
Route::post('/create/taxi', [TaxiController::class, 'store'])->name('store.taxi');
