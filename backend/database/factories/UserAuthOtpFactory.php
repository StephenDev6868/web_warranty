<?php

namespace Database\Factories;

use App\Models\UserAuthOtp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserAuthOtpFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAuthOtp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'          => rand(1, 100),
            'phone_nums'       => (string) '090' . rand(1000000, 9999999),
            'verified_code'    => rand(100000, 999999),
            'status'           => rand(1, 3),
            'expired_at'       => now(),
        ];
    }
}
