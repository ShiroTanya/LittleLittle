<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


Route::get('/home', function () {
    return view('home');
});


Route::get('/event', [EventController::class, 'index']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/details-event/{event_slug}',[EventController::class, 'details_event']);