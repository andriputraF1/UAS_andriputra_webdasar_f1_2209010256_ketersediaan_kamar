<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        // Membuat kamar reguler
        for ($i = 1; $i <= 7; $i++) {
            Room::create([
                'room_number' => $i,
                'room_level_id' => 1, // Asumsikan 1 adalah ID untuk Reguler
                'is_available' => true,
            ]);
        }

        // Membuat kamar VIP
        for ($i = 8; $i <= 10; $i++) {
            Room::create([
                'room_number' => $i,
                'room_level_id' => 2, // Asumsikan 2 adalah ID untuk VIP
                'is_available' => true,
            ]);
        }
    }
}
