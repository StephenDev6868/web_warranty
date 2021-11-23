<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('diseases')->truncate();
        Disease::factory()->create([
            'name' => 'Ung thư phổi',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
        Disease::factory()->create([
            'name' => 'Nhồi máu cơ tim cấp tính',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
        Disease::factory()->create([
            'name' => 'Ung thư vú',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
        Disease::factory()->create([
            'name' => 'Ung thư đường ruột',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
        ]);
    }
}
