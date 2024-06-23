<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomLevel;

class RoomLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomLevel::create(['name' => 'VIP']);
        RoomLevel::create(['name' => 'Reguler']);
    }
}

