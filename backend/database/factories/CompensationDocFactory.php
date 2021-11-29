<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompensationDocFactory extends Factory
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
            'file_name' => $this->faker->image()
        ];
    }
}
