<?php

namespace Database\Seeders;

use App\Models\FieldOperator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldOperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('field_operators')->truncate();
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 01'
        ]);
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 02'
        ]);
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 03'
        ]);
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 04'
        ]);
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 05'
        ]);
        FieldOperator::factory()->create([
            'name' => 'Phi nhân thọ, nhân thọ 06'
        ]);
    }
}
