<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone_nums'       => '090' . rand(1000000, 9999999),
            'user_name'        => $this->faker->name,
            'email'            => $this->faker->email(),
            'id_card_num'      => rand(1000000000, 9999999999),
            'hi_card_num'      => rand(1000000000, 9999999999),
            'phone_num_parent' => '090' . rand(1000000, 9999999),
            'birthday'         => $this->faker->date(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
