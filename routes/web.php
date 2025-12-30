<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransWebhookController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handle']);

Route::post('/events/{event}/buy', [PaymentController::class, 'create']);
