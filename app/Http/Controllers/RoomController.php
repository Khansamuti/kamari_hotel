<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getMonthAvailability($request);
        }

        $date = $request->input('date', now()->format('Y-m-d'));
        $roomType = $request->input('room_type');
        $status = $request->input('status');

        $rooms = Room::query()
            ->when($roomType, function ($query) use ($roomType) {
                return $query->where('room_type', $roomType);
            })
            ->when($status, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->whereNotIn('room_id', function ($query) use ($date) {
                $query->select('room_id')
                    ->from('bookings')
                    ->where('check_in_date', '<=', $date)
                    ->where('check_out_date', '>', $date);
            })
            ->get();

        return view('room-avail', compact('rooms'));
    }

    private function getMonthAvailability(Request $request)
    {
        $start = Carbon::parse($request->start)->startOfDay();
        $end = Carbon::parse($request->end)->endOfDay();

        // Get all bookings within the date range
        $bookings = Booking::where(function ($query) use ($start, $end) {
            $query->whereBetween('check_in_date', [$start, $end])
                  ->orWhereBetween('check_out_date', [$start, $end]);
        })->get();

        // Get all rooms
        $rooms = Room::all();

        $events = [];
        for ($date = $start; $date->lte($end); $date->addDay()) {
            $dateStr = $date->format('Y-m-d');
            $availability = [
                'Standard Room' => 0,
                'Elite Room' => 0,
                'Deluxe Room' => 0,
                'Total Available' => 0, // Track total available rooms
            ];

            foreach ($rooms as $room) {
                $isBooked = $bookings->contains(function ($booking) use ($date, $room) {
                    return $booking->room_id === $room->room_id &&
                           $date->between($booking->check_in_date, $booking->check_out_date);
                });

                if (!$isBooked) {
                    // Increment the count for the actual room type from the database
                    $availability[$room->room_type]++;
                    $availability['Total Available']++; // Increment total available count
                }
            }

            $events[] = [
                'start' => $dateStr,
                'title' => 'Available Rooms',
                'extendedProps' => $availability
            ];
        }

        return response()->json($events);
    }

}
