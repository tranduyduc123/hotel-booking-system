<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/customers',[CustomerController::class,'index'])->name('customers');
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms');
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');

