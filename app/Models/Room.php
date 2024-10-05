<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_type', 'price', 'status'
    ];

    // A room can be associated with many bookings (many-to-many relationship)
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_room', 'room_id', 'booking_id')
                    ->withPivot('quantity')  // Access the quantity booked for this room
                    ->withTimestamps();
    }
}
