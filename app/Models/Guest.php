<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests'; // Specify the table name if it’s not the plural form of the model

    protected $fillable = [
        'username', 'password', 'firstname', 'lastname', 'phone', 'address', 'email', 'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
