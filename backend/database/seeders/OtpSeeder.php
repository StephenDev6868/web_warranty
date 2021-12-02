<?php

namespace Database\Seeders;

use App\Models\UserAuthOtp;
use Illuminate\Database\Seeder;

class OtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserAuthOtp::factory()->count(100)->create();
    }
}
