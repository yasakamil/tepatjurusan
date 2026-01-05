<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransWebhookController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('home');

// Event & Article Routes
Route::post('/events/{event}/buy', [PaymentController::class, 'create']);
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event:slug}', [EventController::class, 'show'])->name('events.show');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/event-registration', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/event-registration', [RegistrationController::class, 'store'])->name('registration.store');

// Auth Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');

//Payment Routes
Route::get('/payment/success', function () {
    return view('payments.success');
})->name('events.success');
Route::post('/midtrans/webhook', [MidtransWebhookController::class, 'handle']);

//Email Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth:member')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    // OPTIONAL: update status
    $request->user()->update([
        'status' => 'approved',
    ]);

    return redirect()->route('registration.create');
})->middleware(['auth:member', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi telah dikirim ulang.');
})->middleware(['auth:member', 'throttle:6,1'])->name('verification.send');

Route::get('/event-registration', [RegistrationController::class, 'create'])
    ->middleware(['auth:member', 'verified'])
    ->name('registration.create');