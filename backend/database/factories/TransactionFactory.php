<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'                => rand(1, 100),
            'amount'                 => rand(100000, 100000000000),
            'bank_id'                => rand(1, 10),
            'wallet_id'              => rand(1, 20),
            'status'                 => rand(1, 3),
            'type'                   => rand(1, 2),
            'done_at'                => null,
            'code_transaction_bank'  => str::random(8),
            'code_reference'         => str::random(8),
        ];
    }
}
