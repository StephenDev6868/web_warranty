<?php

namespace Database\Seeders;

use App\Models\Compensation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompensationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('compensations')->truncate();
        Compensation::factory()->count(30)->create();
    }
}
