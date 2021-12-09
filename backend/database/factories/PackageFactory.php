<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
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
            'package_name' => 'Gói hỗ trợ '. $this->faker->numberBetween(50000, 500000),
            'amount' => $this->faker->numberBetween(50000, 500000)
        ];
    }
}
