<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'HomePage'])->name('homepage');
Route::get('/contact-us', [ContactController::class, 'ContactUs'])->name('contact-us');
Route::get('/thank-you', [ContactController::class, 'ThankYou'])->name('thank-you');

Route::post('/mail-sent', [ContactController::class, 'MailSent'])->name('mail-sent');

Route::resource('tickets', TicketController::class);

