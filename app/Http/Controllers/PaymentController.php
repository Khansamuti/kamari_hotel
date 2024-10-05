<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment; // Assuming you have a Payment model
use App\Models\Room; // Assuming you have a Room model
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        // Fetch the booking based on the booking ID passed in the request
        $bookingId = $request->input('booking_id');
        $booking = Booking::findOrFail($bookingId);

        // Get room details based on the room_id from booking
        $room = Room::findOrFail($booking->room_id);

        // Calculate total nights
        $checkInDate = Carbon::parse($booking->check_in_date);
        $checkOutDate = Carbon::parse($booking->check_out_date);
        $totalNights = $checkOutDate->diffInDays($checkInDate);
        
        // Calculate total amount (assuming a default service charge of 300000)
        $serviceCharge = 300000;
        $totalAmount = ($room->price * $totalNights) + $serviceCharge;

        // Pass booking and payment details to the view
        return view('payments.create', compact('booking', 'room', 'totalNights', 'totalAmount', 'serviceCharge'));
    }

    public function store(Request $request)
    {
        // Validate the payment request data
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'bank' => 'required|string|max:255',
            'virtual_account' => 'required|string|max:255',
            'total_amount' => 'required|numeric',
        ]);

        // Create a new payment record
        Payment::create([
            'booking_id' => $request->booking_id,
            'bank' => $request->bank,
            'virtual_account' => $request->virtual_account,
            'total_amount' => $request->total_amount,
        ]);

        return redirect()->route('success.page')->with('success', 'Payment completed successfully!');
    }
}
