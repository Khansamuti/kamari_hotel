<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Models\Room;

Route::get('/', function () {
    return view('index');
});

Route::get('/myroom', function () {
    return view('myroom');
});

Route::get('/receptionist', function () {
    return view('receptionist');
});

Route::get('/guestmain', function () {
    return view('guest-mainpage');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});

Route::get('/aboutus', function () {
    return view('about-us');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/bookingroom', function () {
    return view('booking-room');
});

Route::get('/bookingform', function () {
    // Fetch available rooms from the database (rooms with 'Available' status)
    $rooms = Room::where('status', 'Available')->get();

    // Pass the rooms to the 'booking-form' view
    return view('booking-form', ['rooms' => $rooms]);
});

// Route to show the booking form (e.g., /bookings/create)
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');

// Route to store a new booking (this is the one you are missing)
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Route to view all bookings (optional, for listing bookings)
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

Route::get('/stafflogin', function () {
    return view('staff-login');
});

Route::get('/bookinghistory', function () {
    return view('history');
});

Route::get('/availablerooms', function () {
    $rooms = Room::all(); 
    return view('room-avail', ['rooms' => $rooms]);
})->name('rooms.available');







Route::get('/bookingtable', function () {
    return view('booking-tabel');
});

Route::get('/bookingdetails', function () {
    return view('booking-details');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/pantry', function () {
    return view('pantry');
});

Route::get('/incomingorders', function () {
    return view('incomingorders');
});

Route::get('/foodorder', function () {
    return view('foodorder');
});

Route::get('/management', function () {
    return view('management');
});