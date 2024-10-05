<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Assuming you have a Booking model
use Carbon\Carbon; // Import Carbon for date handling

class BookingController extends Controller
{
    public function create()
    {
        return view('bookings.create'); // Adjust this to your view path
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'check_in_date' => 'required|date_format:d-m-Y', // Adjusted validation rule
            'check_out_date' => 'required|date_format:d-m-Y',
            'adults' => 'required|integer|min:1',
            'kids' => 'required|integer|min:0',
            'number_of_rooms' => 'required|integer|min:1',
            'room_id' => 'required|string',
        ]);

        // Convert the date format from d-m-Y to Y-m-d
        $checkInDate = Carbon::createFromFormat('d-m-Y', $request->check_in_date)->format('Y-m-d');
        $checkOutDate = Carbon::createFromFormat('d-m-Y', $request->check_out_date)->format('Y-m-d');

        // Create a new booking with formatted dates
        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'check_in_date' => $checkInDate,
            'check_out_date' => $checkOutDate,
            'adults' => $request->adults,
            'kids' => $request->kids,
            'number_of_rooms' => $request->number_of_rooms,
            'room_id' => $request->room_id,
        ]);

        // Redirect to payment page with success message
        return redirect()->route('payment')->with('success', 'Booking created successfully!');
    }
}
