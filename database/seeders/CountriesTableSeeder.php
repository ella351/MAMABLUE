<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Philippines', 'code' => 'PH', 'continent' => 'Asia', 'population' => 113900000],
            ['name' => 'Japan', 'code' => 'JP', 'continent' => 'Asia', 'population' => 125800000],
            ['name' => 'China', 'code' => 'CN', 'continent' => 'Asia', 'population' => 1412000000],
            ['name' => 'India', 'code' => 'IN', 'continent' => 'Asia', 'population' => 1393000000],
            ['name' => 'South Korea', 'code' => 'KR', 'continent' => 'Asia', 'population' => 51780000],
            ['name' => 'Thailand', 'code' => 'TH', 'continent' => 'Asia', 'population' => 69950000],
            ['name' => 'Vietnam', 'code' => 'VN', 'continent' => 'Asia', 'population' => 98160000],
            ['name' => 'Malaysia', 'code' => 'MY', 'continent' => 'Asia', 'population' => 32700000],
            ['name' => 'Indonesia', 'code' => 'ID', 'continent' => 'Asia', 'population' => 273500000],
            ['name' => 'Singapore', 'code' => 'SG', 'continent' => 'Asia', 'population' => 5700000],

            // Europe
            ['name' => 'Germany', 'code' => 'DE', 'continent' => 'Europe', 'population' => 83240000],
            ['name' => 'France', 'code' => 'FR', 'continent' => 'Europe', 'population' => 67800000],
            ['name' => 'United Kingdom', 'code' => 'GB', 'continent' => 'Europe', 'population' => 68200000],
            ['name' => 'Italy', 'code' => 'IT', 'continent' => 'Europe', 'population' => 60300000],
            ['name' => 'Spain', 'code' => 'ES', 'continent' => 'Europe', 'population' => 47350000],

            // Africa
            ['name' => 'Nigeria', 'code' => 'NG', 'continent' => 'Africa', 'population' => 206100000],
            ['name' => 'Egypt', 'code' => 'EG', 'continent' => 'Africa', 'population' => 104100000],
            ['name' => 'South Africa', 'code' => 'ZA', 'continent' => 'Africa', 'population' => 60040000],
            ['name' => 'Kenya', 'code' => 'KE', 'continent' => 'Africa', 'population' => 53770000],
            ['name' => 'Ethiopia', 'code' => 'ET', 'continent' => 'Africa', 'population' => 114900000],

            // North America
            ['name' => 'United States', 'code' => 'US', 'continent' => 'North America', 'population' => 331900000],
            ['name' => 'Canada', 'code' => 'CA', 'continent' => 'North America', 'population' => 38010000],
            ['name' => 'Mexico', 'code' => 'MX', 'continent' => 'North America', 'population' => 128900000],
            ['name' => 'Cuba', 'code' => 'CU', 'continent' => 'North America', 'population' => 11300000],
            ['name' => 'Jamaica', 'code' => 'JM', 'continent' => 'North America', 'population' => 2961000],

            // South America
            ['name' => 'Brazil', 'code' => 'BR', 'continent' => 'South America', 'population' => 213000000],
            ['name' => 'Argentina', 'code' => 'AR', 'continent' => 'South America', 'population' => 45190000],
            ['name' => 'Chile', 'code' => 'CL', 'continent' => 'South America', 'population' => 19120000],
            ['name' => 'Colombia', 'code' => 'CO', 'continent' => 'South America', 'population' => 50880000],
            ['name' => 'Peru', 'code' => 'PE', 'continent' => 'South America', 'population' => 32970000],

            // Oceania
            ['name' => 'Australia', 'code' => 'AU', 'continent' => 'Oceania', 'population' => 25690000],
            ['name' => 'New Zealand', 'code' => 'NZ', 'continent' => 'Oceania', 'population' => 5084000],
            ['name' => 'Fiji', 'code' => 'FJ', 'continent' => 'Oceania', 'population' => 896000],
            ['name' => 'Papua New Guinea', 'code' => 'PG', 'continent' => 'Oceania', 'population' => 9120000],
            ['name' => 'Samoa', 'code' => 'WS', 'continent' => 'Oceania', 'population' => 198000],

            // Middle East (Asia)
            ['name' => 'Saudi Arabia', 'code' => 'SA', 'continent' => 'Asia', 'population' => 35340000],
            ['name' => 'United Arab Emirates', 'code' => 'AE', 'continent' => 'Asia', 'population' => 9990000],
            ['name' => 'Qatar', 'code' => 'QA', 'continent' => 'Asia', 'population' => 2880000],
            ['name' => 'Israel', 'code' => 'IL', 'continent' => 'Asia', 'population' => 9200000],
            ['name' => 'Turkey', 'code' => 'TR', 'continent' => 'Asia/Europe', 'population' => 84300000],

            // More Asia
            ['name' => 'Pakistan', 'code' => 'PK', 'continent' => 'Asia', 'population' => 220900000],
            ['name' => 'Bangladesh', 'code' => 'BD', 'continent' => 'Asia', 'population' => 166300000],
            ['name' => 'Sri Lanka', 'code' => 'LK', 'continent' => 'Asia', 'population' => 21400000],
            ['name' => 'Nepal', 'code' => 'NP', 'continent' => 'Asia', 'population' => 29140000],
            ['name' => 'Myanmar', 'code' => 'MM', 'continent' => 'Asia', 'population' => 54410000],

            // Extra Europe to make 50
            ['name' => 'Sweden', 'code' => 'SE', 'continent' => 'Europe', 'population' => 10400000],
            ['name' => 'Norway', 'code' => 'NO', 'continent' => 'Europe', 'population' => 5420000],
            ['name' => 'Poland', 'code' => 'PL', 'continent' => 'Europe', 'population' => 37950000],
            ['name' => 'Ukraine', 'code' => 'UA', 'continent' => 'Europe', 'population' => 41400000],
            ['name' => 'Greece', 'code' => 'GR', 'continent' => 'Europe', 'population' => 10420000],
        ]);
    }
}
