<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\MailerTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/email', [EmailController::class, 'processEmail'])->name('email.process');

Route::get('/testemail', [MailerTestController::class, 'index'])->name('email.test');
Route::post('/testemail', [MailerTestController::class, 'sendEmail'])->name('email.send');

require __DIR__ . '/auth.php';
