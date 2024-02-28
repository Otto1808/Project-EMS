<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userDataTwo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //select all from user_data_old table and insert into user model
        $users = \DB::table('user_data_old')->get();
        foreach ($users as $user) {
            \DB::table('user_data_two')->insert([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'address' => $user->address,
                'mobile_number' => $user->mobile_number,
                'designation' => $user->designation,
                'start_from' => $user->start_from,
                'image' => $user->image,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
