<?php

namespace Database\Seeders;

use App\Models\HistoryLog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('history_logs')->truncate();
        HistoryLog::factory()->count(30)->create();
    }
}
