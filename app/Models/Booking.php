<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'guest_id', 'check_in_date', 'check_out_date', 'price', 'adults', 'kids'
    ];

    // A booking can have many rooms (many-to-many relationship)
    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'booking_room', 'booking_id', 'room_id')
                    ->withPivot('quantity')  // Access the quantity booked for each room type
                    ->withTimestamps();
    }
}

