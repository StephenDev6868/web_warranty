<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupporterFactory extends Factory
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
            'name' => $this->faker->name,
            'thumbnail' => $this->faker->imageUrl(),
            'process_work' => $this->faker->company,
            'info_contact' => $this->faker->phoneNumber.'|'.$this->faker->email,
            'province_id' => rand(1, 30),
            'field_operator_id' => rand(1, 30),
            'job_id' => rand(1, 30),
        ];
    }
}
