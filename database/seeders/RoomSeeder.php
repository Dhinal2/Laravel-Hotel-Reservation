<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomsData = [
            [
                'room_name' => 'Standard Room',
                'room_no' => '101',
                'room_type' => 'Single',
                'room_rate' => 100.00,
                'agent_rate' => 80.00, // 20% off
                'room_status' => 'available',
            ],
            [
                'room_name' => 'Standard Room',
                'room_no' => '102',
                'room_type' => 'Single',
                'room_rate' => 100.00,
                'agent_rate' => 80.00,
                'room_status' => 'available',
            ],
            [
                'room_name' => 'Deluxe Room',
                'room_no' => '201',
                'room_type' => 'Double',
                'room_rate' => 180.00,
                'agent_rate' => 144.00, // 20% off
                'room_status' => 'available',
            ],
            [
                'room_name' => 'Deluxe Room',
                'room_no' => '202',
                'room_type' => 'Double',
                'room_rate' => 180.00,
                'agent_rate' => 144.00,
                'room_status' => 'available',
            ],
            [
                'room_name' => 'Family Suite',
                'room_no' => '301',
                'room_type' => 'Suite',
                'room_rate' => 300.00,
                'agent_rate' => 240.00, // 20% off
                'room_status' => 'available',
            ],
        ];

        foreach ($roomsData as $roomData) {
            Room::create($roomData);
        }

        $this->command->info('Initial rooms data seeded successfully!');
    }
}
