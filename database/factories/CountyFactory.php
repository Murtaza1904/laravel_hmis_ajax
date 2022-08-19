<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountyFactory extends Factory
{
    public function definition()
    {
        $county_list = [
            'ADAIR',
            'ANDREW',
            'ATCHISON',
            'AUDRAIN',
            'BARRY',
        ];
        return [
            'name' => fake()->unique()->randomElement($county_list),
        ];
    }
}
