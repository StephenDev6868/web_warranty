<?php

namespace Database\Seeders;

use App\Models\Supporter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('supporters')->truncate();
        Supporter::factory()->count(60)->create();
    }
}
