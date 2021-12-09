<?php

namespace Database\Seeders;

use App\Models\JobOperator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobs_operators')->truncate();
        JobOperator::factory()->count(30)->create();
    }
}
