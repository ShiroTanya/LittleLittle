<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CheckoutController;

//EVENT
Route::get('/event', [EventController::class, 'index']);
Route::get('/details-event/{event_slug}',[EventController::class, 'details_event']);


Route::get('/home', [TicketController::class, 'show_ticket']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/send-contact',[ContactController::class, 'send_contact']);


//CHECKOUT
Route::get('/checkout/',[CheckoutController::class, 'show_order'])->name('show_order');
Route::get('/checkout-page', [CheckoutController::class, 'checkout_page'])->name('checkout_page');


Route::post('/checkout-success',[CheckoutController::class, 'checkout_success']);
Route::post('/order',[CheckoutController::class, 'send_order']);


//Route::get('/print-order/{checkout_code}','OrderController@print_order');
Route::get('/print-ticket/{order_code}', [CheckoutController::class, 'print_ticket']);


//QR
Route::get('/qr-details', [CheckoutController::class, 'qr_details'])->name('qr_details');

