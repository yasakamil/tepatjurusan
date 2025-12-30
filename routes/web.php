<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransWebhookController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handle']);

Route::post('/events/{event}/buy', [PaymentController::class, 'create']);


Route::middleware('guest:member')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:member')
    ->name('logout');
