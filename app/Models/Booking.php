<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', //tambah
        'name',
        'email',
        'phone',
        'check_in_date',
        'check_out_date',
        'adults',
        'kids',
        'number_of_rooms',
        'room_id',
    ];
}
