<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'employee_id' => 1,
                'hours' => 3,
                'status' => FALSE,
            ],
            [
                'employee_id' => 2,
                'hours' => 10,
                'status' => TRUE,
            ],
            [
                'employee_id' => 1,
                'hours' => 6,
                'status' => TRUE,
            ],
        ];

        foreach ($transactions as $transaction)
        {
            Transaction::create($transaction);
        }
    }
}
