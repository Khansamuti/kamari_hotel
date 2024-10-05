<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Show the booking form and fetch available rooms from the database.
     */
    public function create()
    {
        // Fetch available rooms from the database (rooms with 'Available' status)
        $rooms = Room::where('status', 'Available')->get();
    
        // Pass the rooms to the view
        return view('bookings.create', compact('rooms'));
    }

    /**
     * Store a new booking in the database.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^\+\d{1,4}\d{7,15}$/',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'adults' => 'required|integer|min:1',
            'kids' => 'required|integer|min:0',
            'number_of_rooms' => 'required|integer|min:1',
            'room_id' => 'required|exists:rooms,room_id',
        ]);

        // Create a new booking
        $booking = Booking::create([
            'guest_id' => $this->getGuestIdFromEmail($validated['email']),
            'check_in_date' => $validated['check_in_date'],
            'check_out_date' => $validated['check_out_date'],
            'price' => $this->calculatePrice($validated['room_id'], $validated['number_of_rooms']),
            'adults' => $validated['adults'],
            'kids' => $validated['kids'],
        ]);

        // Update the room status to 'Booked' for the selected room
        Room::where('room_id', $validated['room_id'])->update(['status' => 'Booked']);

        return redirect()->route('bookings.index')->with('success', 'Booking completed and room status updated!');
    }

    // Logic to fetch or create guest based on email (similar to before)
    private function getGuestIdFromEmail($email)
    {
        $guest = Guest::firstOrCreate(['email' => $email], ['name' => request('name'), 'phone' => request('phone')]);
        return $guest->guest_id;
    }

    // Logic to calculate the price based on room type and number of rooms
    private function calculatePrice($room_id, $number_of_rooms)
    {
        $room = Room::find($room_id);
        return $room ? $room->price * $number_of_rooms : 0;
    }
}
