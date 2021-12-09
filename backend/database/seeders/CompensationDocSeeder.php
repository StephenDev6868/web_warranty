<?php

namespace Database\Seeders;

use App\Models\CompensationDoc;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompensationDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('compensation_docs')->truncate();
        CompensationDoc::factory()->count(30)->create();
    }
}
