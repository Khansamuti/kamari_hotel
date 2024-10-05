<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [201, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [202, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [203, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [204, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [205, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [206, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [207, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [208, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [209, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [210, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [211, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [212, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [213, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [214, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [215, 'Standard Room', 400000.00, 'Available', 'WiFi, TV, AC'],
            [301, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [302, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [303, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [304, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [305, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [306, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [307, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [308, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [309, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [310, 'Elite Room', 700000.00, 'Available', 'WiFi, TV, AC, Mini-Bar'],
            [401, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [402, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [403, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [404, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [405, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [406, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [407, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
            [408, 'Deluxe Room', 1000000.00, 'Available', 'WiFi, TV, AC, Mini-Bar, Sea View'],
        ];

        foreach ($rooms as $room) {
            DB::table('rooms')->insert([
                'room_id' => $room[0],
                'room_type' => $room[1],
                'price' => $room[2],
                'status' => $room[3],
                'facilities' => $room[4],
            ]);
        }
    }
}
