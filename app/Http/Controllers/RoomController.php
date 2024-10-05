<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function availableRooms(Request $request)
    {
        // Capture search and filter inputs
        $search = $request->input('search');
        $room_type = $request->input('room_type');
        $status = $request->input('status');

        // Query the rooms table and apply filters dynamically
        $rooms = Room::query()
            ->when($search, function ($query, $search) {
                return $query->where('room_id', 'like', "%{$search}%")
                             ->orWhere('room_type', 'like', "%{$search}%");
            })
            ->when($room_type, function ($query, $room_type) {
                return $query->where('room_type', $room_type);
            })
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->get();

        // Return the view with the filtered rooms
        return view('rooms.available', compact('rooms'));
    }
}
