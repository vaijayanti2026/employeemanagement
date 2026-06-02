<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employee::create([
            'first_name' => 'Alexander',
            'last_name' => 'Wright',
            'email' => 'alexander.wright@company.com',
            'phone' => '+1 (555) 234-5678',
            'position' => 'Lead Software Architect',
            'salary' => 125000.00,
            'date_of_joining' => '2022-03-15'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Sophia',
            'last_name' => 'Martinez',
            'email' => 'sophia.martinez@company.com',
            'phone' => '+1 (555) 345-6789',
            'position' => 'Senior UI/UX Designer',
            'salary' => 95000.00,
            'date_of_joining' => '2023-01-10'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Marcus',
            'last_name' => 'Chen',
            'email' => 'marcus.chen@company.com',
            'phone' => '+1 (555) 456-7890',
            'position' => 'Full Stack Developer',
            'salary' => 88000.00,
            'date_of_joining' => '2024-05-18'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Elena',
            'last_name' => 'Rostova',
            'email' => 'elena.rostova@company.com',
            'phone' => '+1 (555) 567-8901',
            'position' => 'HR Operations Manager',
            'salary' => 78000.00,
            'date_of_joining' => '2021-08-01'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'David',
            'last_name' => 'Kim',
            'email' => 'david.kim@company.com',
            'phone' => '+1 (555) 678-9012',
            'position' => 'DevOps Engineer',
            'salary' => 105000.00,
            'date_of_joining' => '2023-11-05'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Olivia',
            'last_name' => 'Taylor',
            'email' => 'olivia.taylor@company.com',
            'phone' => '+1 (555) 789-0123',
            'position' => 'Product Owner',
            'salary' => 110000.00,
            'date_of_joining' => '2022-10-22'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Ryan',
            'last_name' => 'Hansen',
            'email' => 'ryan.hansen@company.com',
            'phone' => '+1 (555) 890-1234',
            'position' => 'QA Automation Lead',
            'salary' => 85000.00,
            'date_of_joining' => '2024-02-12'
        ]);

        \App\Models\Employee::create([
            'first_name' => 'Amira',
            'last_name' => 'Farah',
            'email' => 'amira.farah@company.com',
            'phone' => '+1 (555) 901-2345',
            'position' => 'Data Analyst',
            'salary' => 82000.00,
            'date_of_joining' => '2025-01-20'
        ]);
    }
}
