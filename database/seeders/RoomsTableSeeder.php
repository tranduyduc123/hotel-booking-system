<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('rooms')->insert([
                'room_number' => $faker->unique()->numberBetween(100, 999),
                'type' => $faker->randomElement(['single', 'double', 'suite']),
                'price' => $faker->numberBetween(50000, 200000), // Giá phòng (VND)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
