<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Country;
=======
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
<<<<<<< HEAD
    protected $model = Country::class;

=======
>>>>>>> 9869a01e7514b1db08f7ba7b364e762bf5e67bfc
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
