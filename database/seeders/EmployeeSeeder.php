<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'test1',
                'email' => 'test1@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test2',
                'email' => 'test2@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test3',
                'email' => 'test3@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test4',
                'email' => 'test4@mail.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($employees as $employee)
        {
            Employee::create($employee);
        }
    }
}
