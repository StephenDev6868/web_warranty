<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompensationFactory extends Factory
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
            'province_id' => $this->faker->numberBetween(1, 50),
            'compensation_doc_id' => $this->faker->numberBetween(1, 50),
            'compensation_package' => 'Gói hỗ trợ '. $this->faker->numberBetween(50000, 500000),
            'treatment_type' => $this->faker->numberBetween(1, 3),
            'date_start' => $this->faker->date('Y-m-d', 'now'),
            'date_end' => $this->faker->date('Y-m-d', 'now'),
            'hospital' => $this->faker->city() . ' Hospital',
            'disease' => 'Benh ' . $this->faker->word()
        ];
    }
}
