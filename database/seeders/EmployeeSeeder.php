<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['employee_name' => 'John Doe', 'employee_email' => 'john.doe@example.com', 'employee_phone' => '123-456-7890', 'employee_address' => '123 Main St'],
            ['employee_name' => 'Jane Smith', 'employee_email' => 'jane.smith@example.com', 'employee_phone' => '987-654-3210', 'employee_address' => '456 Oak St'],
            ['employee_name' => 'Bob Johnson', 'employee_email' => 'bob.johnson@example.com', 'employee_phone' => '555-123-4567', 'employee_address' => '789 Pine St'],
            ['employee_name' => 'Alice Williams', 'employee_email' => 'alice.williams@example.com', 'employee_phone' => '888-222-3333', 'employee_address' => '101 Elm St'],
            ['employee_name' => 'Charlie Brown', 'employee_email' => 'charlie.brown@example.com', 'employee_phone' => '777-555-4444', 'employee_address' => '202 Cedar St'],
            ['employee_name' => 'Emily Davis', 'employee_email' => 'emily.davis@example.com', 'employee_phone' => '666-999-8888', 'employee_address' => '303 Maple St'],
            ['employee_name' => 'David Miller', 'employee_email' => 'david.miller@example.com', 'employee_phone' => '444-777-1111', 'employee_address' => '404 Birch St'],
            ['employee_name' => 'Grace Jones', 'employee_email' => 'grace.jones@example.com', 'employee_phone' => '222-333-5555', 'employee_address' => '505 Walnut St'],
            ['employee_name' => 'Michael Garcia', 'employee_email' => 'michael.garcia@example.com', 'employee_phone' => '111-888-9999', 'employee_address' => '606 Pineapple St'],
            ['employee_name' => 'Olivia Martinez', 'employee_email' => 'olivia.martinez@example.com', 'employee_phone' => '999-666-4444', 'employee_address' => '707 Cherry St'],
        ];

        foreach ($employees as $employee) {
            \App\Models\employee::create($employee);
        }
    }
}
