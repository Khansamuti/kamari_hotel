<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
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

Route::get('/bookingroom', function () {
    return view('booking-room');
});

Route::get('/bookingform', function () {
    // Fetch available rooms from the database (rooms with 'Available' status)
    $rooms = Room::where('status', 'Available')->get();

    // Pass the rooms to the 'booking-form' view
    return view('booking-form', ['rooms' => $rooms]);
});

Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create'); // Display form
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store'); // Handle form submission

Route::get('/payment/{bookingId}', [PaymentController::class, 'show'])->name('payment.show'); //tambah

Route::get('/payment', function () {return view('payment');}); //tambah
Route::post('/payment/{bookingId}', [PaymentController::class, 'create'])->name('payment.create'); //ubah get->post
Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/stafflogin', function () {
    return view('staff-login');
});


Route::get('/bookinghistory', function () {
    return view('history');
});

Route::get('/availablerooms', [RoomController::class, 'index'])->name('rooms.availability');

Route::get('/receptionist-form', [BookingTableController::class, 'create'])->name('book.room');
Route::post('/receptionist-form', [BookingTableController::class, 'store'])->name('store.room');

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