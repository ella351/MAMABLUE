<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'code' => strtoupper($this->faker->countryCode()),
            'continent' => $this->faker->randomElement([
                'Africa', 'Asia', 'Europe', 'North America', 'South America', 'Oceania', 'Antarctica'
            ]),
            'population' => $this->faker->numberBetween(100000, 1400000000),
        ];
    }
}
