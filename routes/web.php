<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PatientController;


Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::delete('/bookings/{id}', [BookingController::class, 'checkout'])->name('bookings.checkout');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::delete('/bookings/{id}', [BookingController::class, 'checkout'])->name('bookings.checkout');

Route::get('/', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/available', [RoomController::class, 'showAvailableRooms'])->name('rooms.available');
Route::get('/', [RoomController::class, 'index'])->name('home');

Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');


Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::post('/bookings/{id}/checkout', [BookingController::class, 'checkout'])->name('bookings.checkout');

Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');

Route::get('/', [RoomController::class, 'index'])->name('home');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');



Route::get('/', [RoomController::class, 'index'])->name('home');
Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

Route::resource('bookings', BookingController::class);
Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('bookings', [BookingController::class, 'store'])->name('bookings.store');