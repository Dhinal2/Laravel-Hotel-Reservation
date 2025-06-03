<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class UpdateRoomAgentRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define your desired discount percentage for agents
        $discountPercentage = 0.80; // This means 80% of the base price (a 20% discount)

        // Fetch all rooms and update their agent_rate
        // Using chunk() for large tables to prevent memory issues
        Room::chunk(100, function ($rooms) use ($discountPercentage) {
            foreach ($rooms as $room) {
                // Only update if agent_rate is currently null or 0, or if you want to overwrite
                if (is_null($room->agent_rate) || $room->agent_rate == 0) {
                    $room->agent_rate = $room->room_rate * $discountPercentage;
                    $room->save();
                }
            }
        });

        $this->command->info('Agent rates updated for existing rooms!');
    }
}
