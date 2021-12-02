<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HistoryLogFactory extends Factory
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
            'log_date' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->text(),
            'compensation_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
