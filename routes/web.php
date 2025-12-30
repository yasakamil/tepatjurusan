<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransWebhookController;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handle']);

Route::post('/events/{event}/buy', [PaymentController::class, 'create']);
