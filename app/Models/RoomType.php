<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

        // Jika nama tabel tidak sesuai konvensi Laravel (bukan 'room_types'), tambahkan ini:
        protected $table = 'room_type'; 

        // Jika tabel tidak memiliki timestamps (created_at, updated_at), tambahkan ini:
        // public $timestamps = false;
    
        // Kolom yang boleh diisi massal
        protected $fillable = ['room_type_id', 'type', 'price'];
}
