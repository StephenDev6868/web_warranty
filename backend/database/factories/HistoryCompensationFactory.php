<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryCompensationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'compensation_id' => $this->faker->numberBetween(1, 50),
            'user_id' => $this->faker->numberBetween(1, 50),
            'notify_date' => $this->faker->date('Y-m-d', 'now'),
            'mount_request' => $this->faker->numberBetween(500000, 5000000),
            'doc_code' => $this->faker->postcode(),
            'assurance_type' => $this->faker->numberBetween(1, 3),
            'mount_pay' => $this->faker->numberBetween(500000, 5000000),
            'reason_reduce' => $this->faker->numberBetween(500000, 5000000),
            'status' => $this->faker->numberBetween(1, 3)
        ];
    }
}
