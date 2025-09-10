<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class DatabaseSeeder extends Seeder
{
   public function run(): void
{
    $this->call(CountriesTableSeeder::class);
}
}
