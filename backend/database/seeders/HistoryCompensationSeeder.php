<?php

namespace Database\Seeders;

use App\Models\HistoryCompensation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryCompensationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('history_compensations')->truncate();
        HistoryCompensation::factory()->count(30)->create();
    }
}
