<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PurchaseOrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/private', [HomeController::class, 'private']);

// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes for mailing
Route::get('/email', [MailController::class, 'sendWelcome']);

Route::get('/send-purchace-order-notification', [PurchaseOrderController::class, 'sendNotification']);
