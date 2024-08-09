<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $customers = DB::table('customers')->pluck('id');
        $rooms = DB::table('rooms')->pluck('id');

        foreach (range(1, 10) as $index) {
            DB::table('bookings')->insert([
                'customer_id' => $faker->randomElement($customers),
                'room_id' => $faker->randomElement($rooms),
                'check_in_date' => $faker->date(),
                'check_out_date' => $faker->date(),
                'total_amount' => $faker->numberBetween(100000, 500000), // Tổng số tiền (VND)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
