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
                'amount' => '100',
                'type' => 'Income',
                'category' => 'Salary',
                'description' => 'Monthly Salary',
                'transaction_date' => '2025-03-11'
            ],
            [
                'amount' => '500',
                'type' => 'Expense',
                'category' => 'Food',
                'description' => 'Jollibee',
                'transaction_date' => '2025-03-12'
            ],
        ];

        foreach($transactions as $transaction){
            \App\Models\Transaction::create($transaction);
        }
    }
}
