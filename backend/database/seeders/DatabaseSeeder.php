<?php

namespace Database\Seeders;

use App\Models\News;
use App\View\Components\supporter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OtpSeeder::class);
        // $this->call(TransactionSeeder::class);
        // $this->call(WalletSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(BankSeeder::class);
        // $this->call(DiseaseSeeder::class);
        // $this->call(FieldOperatorSeeder::class);
        // $this->call(JobOperatorSeeder::class);
        // $this->call(ProvinceSeeder::class);
        // $this->call(SupportSeeder::class);
        // \App\Models\User::factory(10)->create();
        //$this->call([
        //    NewsSeeder::class,
        //]);
    }
}
