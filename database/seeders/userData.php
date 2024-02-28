<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //generate 10 records for user_data_one table
        for ($i = 0; $i < 10; $i++) {
            \DB::table('user_data_one')->insert([
                'name' => 'User Data One ' . $i,
                'email' => 'user_data_one' . $i . '@gmail.com',
                'password' => bcrypt('password'),
                'address' => 'Address ' . $i,
                'mobile_number' => '1234567890',
                'designation' => 'Designation ' . $i,
                'start_from' => now(),
                'image' => 'image' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
