<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomType::create([
            'name' => 'Standard Single',
            'description' => 'A cozy room with a single bed.',
            'base_price' => 100.00,
            'agent_price' => 80.00,
        ]);

        RoomType::create([
            'name' => 'Deluxe Double',
            'description' => 'A spacious room with a double bed and city view.',
            'base_price' => 180.00,
            'agent_price' => 150.00,
        ]);

        RoomType::create([
            'name' => 'Family Suite',
            'description' => 'A large suite with multiple beds, perfect for families.',
            'base_price' => 300.00,
            'agent_price' => 250.00,
        ]);

        $this->call(RoomTypeSeeder::class);
    }
}
