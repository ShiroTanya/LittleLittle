<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CheckoutController;

Route::get('/home', [TicketController::class, 'show_ticket']);


Route::get('/event', [EventController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/details-event/{event_slug}',[EventController::class, 'details_event']);

Route::post('/send-contact',[ContactController::class, 'send_contact']);

Route::post('/order',[CheckoutController::class, 'send_order']);

Route::get('/checkout/',[CheckoutController::class, 'show_order'])->name('show_order');