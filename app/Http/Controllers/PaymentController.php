<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment; // Assuming you have a Payment model
use App\Models\Room; // Assuming you have a Room model
use App\Models\RoomType;
use App\Models\Booking; // tambah
use App\Http\Controllers\BookingController; //tambah
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function show($booking_id)
    {
        // Cari data booking berdasarkan booking_id
        $booking = Booking::find($booking_id);

        // Jika booking tidak ditemukan, kembalikan 404
        if (!$booking) {
            abort(404, 'Booking not found');
        }

        // Ambil detail kamar berdasarkan room_id dari booking
        $roomType = RoomType::where('room_type', $booking->room_id)->firstOrFail(); // Jika tidak ditemukan, akan memunculkan 404

        // Hitung total malam
        $checkInDate = Carbon::parse($booking->check_in_date); // Konversi string ke objek Carbon
        $checkOutDate = Carbon::parse($booking->check_out_date); // Konversi string ke objek Carbon
        $totalNights = abs($checkOutDate->diffInDays($checkInDate)); // Hitung selisih hari

        // Hitung total biaya (misalkan service charge default 300000)
        $serviceCharge = 300000;
        $totalAmount = ($roomType->price * $totalNights * $booking->number_of_rooms) + $serviceCharge; // Total biaya
        
        // Mengirim data booking ke view payment
        //return view('payment', ['booking' => $booking]);
        return view('payment', compact('booking', 'roomType', 'totalNights', 'totalAmount', 'serviceCharge', 'checkInDate', 'checkOutDate'));
    }

    public function create(request $request) 
    {
        // Fetch the booking based on the booking ID passed in the request
        $bookingId = $request->input('id'); //ubah booking_id ->id
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
            'amount' => 'required|numeric', //ubah
        ]);

        // Create a new payment record
        $payment = Payment::create([
            'booking_id' => $request->booking_id,
            'bank' => $request->bank,
            'virtual_account' => $request->virtual_account,
            'amount' => $request->amount, //ubah
        ]);

        //return redirect()->route('success.page')->with('success', 'Payment completed successfully!');
        return view('/myroom');
    }
}
