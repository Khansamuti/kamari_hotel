<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Guest;
use Carbon\Carbon; // Import Carbon for date handling
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BookingTableController extends Controller
{
    public function showRoomAvailability(Request $request)
    {
        $selectedDate = $request->input('selected_date', date('Y-m-d')); // Default to today's date if not provided
        $rooms = Room::availableOn($selectedDate); // Assuming this retrieves available rooms for the selected date

        return view('room-avail', [
            'rooms' => $rooms,
            'selectedDate' => $selectedDate // Pass $selectedDate to the view
        ]);
    }

    public function create(Request $request)
    {
        // Ambil room_id dari query parameter jika ada
        $roomId = $request->room_id;

        // Jika room_id tersedia, ambil data kamar berdasarkan ID tersebut
        $room = null;
        $price = 0; // Initialize price variable
        if ($roomId) {
            $room = Room::find($roomId);
            
            // Calculate the price for this room based on the room type
            $roomPrices = [
                'Standard' => 4000000,
                'Elite' => 7000000,
                'Deluxe' => 10000000,
            ];

            // Check if room type exists in the prices array
            if ($room && array_key_exists($room->room_type, $roomPrices)) {
                $price = $roomPrices[$room->room_type];
            }
        }

        // Tampilkan view receptionist-form dengan data kamar dan harga (jika ada)
        return view('receptionist-form', compact('room', 'price'));
    }


    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'adults' => 'required|integer|min:1',
            'kids' => 'required|integer|min:0',
            'number_of_rooms' => 'required|integer|min:1',
            'room_id' => 'required|integer', // Ensure room_id is an integer
        ]);

        $guest = Guest::where('email', $request->email)->first();

        if (!$guest) {
            // If guest does not exist, create a new guest
            $guest = Guest::create([
                'username' => strtolower(str_replace(' ', '_', $validatedData['firstname'] . '_' . $validatedData['lastname'])),
                'password' => bcrypt('default_password'), // Set a default password or handle registration separately
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'address' => 'Nullable', // If not provided, you can leave it empty
                'email' => $request->email,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Format dates using Carbon
        $checkInDate = Carbon::createFromFormat('Y-m-d', $validatedData['check_in_date'])->format('Y-m-d');
        $checkOutDate = Carbon::createFromFormat('Y-m-d', $validatedData['check_out_date'])->format('Y-m-d');

        // Calculate total price using the validated data
        $totalPrice = $this->calculateTotalPrice($validatedData);

        // Check if total price is valid
        if ($totalPrice <= 0) {
            return back()->withErrors(['error' => 'Invalid room selected or price calculation error.']);
        }

        // Create the booking record
        Booking::create([
            'guest_id' => $guest->id,
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'check_in_date' => $checkInDate,
            'check_out_date' => $checkOutDate,
            'price' => $totalPrice,
            'adults' => $validatedData['adults'],
            'kids' => $validatedData['kids'],
            'room_id' => $validatedData['room_id'],
        ]);

        // Redirect back to the availability page with a success message
        return redirect()->route('rooms.availability')->with('message', 'Booking successful!');
    }

    protected function calculateTotalPrice($validatedData)
    {
        // Define room prices based on the room ID
        $roomPrices = [
            '201' => 400000, // Standard Room
            '202' => 400000,
            '203' => 400000, // Standard Room
            '204' => 400000,
            '205' => 400000, // Standard Room
            '206' => 400000,
            '207' => 400000, // Standard Room
            '208' => 400000,
            '209' => 400000, // Standard Room
            '210' => 400000,
            '211' => 400000, // Standard Room
            '212' => 400000,
            '213' => 400000, // Standard Room
            '214' => 400000,
            '215' => 400000,
            // Add all other room IDs in the same format
            '301' => 700000, // Elite Room
            '302' => 700000,
            '303' => 700000, // Elite Room
            '304' => 700000,
            '305' => 700000, // Elite Room
            '306' => 700000,
            '307' => 700000, // Elite Room
            '308' => 700000,
            '309' => 700000, // Elite Room
            '310' => 700000,
            // Add other room IDs for Elite rooms
            '401' => 1000000, // Deluxe Room
            '402' => 1000000,
            '403' => 1000000, // Deluxe Room
            '404' => 1000000,
            '405' => 1000000, // Deluxe Room
            '406' => 1000000,
            '407' => 1000000, // Deluxe Room
            '408' => 1000000,
            // Add other room IDs for Deluxe rooms
        ];

        $roomId = (string) $validatedData['room_id']; // Convert the room_id to a string to match the array keys

        // Check if the room ID exists in the prices array
        if (!array_key_exists($roomId, $roomPrices)) {
            return 0; // Room type not found, return 0 to indicate error
        }

        // Fetch the price for the selected room
        $roomPrice = $roomPrices[$roomId];

        // Calculate the number of nights between check-in and check-out dates
        $checkInDate = new Carbon($validatedData['check_in_date']);
        $checkOutDate = new Carbon($validatedData['check_out_date']);
        $numberOfNights = $checkInDate->diffInDays($checkOutDate);

        // Calculate total price based on the number of rooms and nights
        $totalPrice = $roomPrice * $numberOfNights * $validatedData['number_of_rooms'];

        return $totalPrice;
    }
}
