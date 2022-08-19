<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaritalStatusFactory extends Factory
{
    public function definition()
    {
        $maritalStatus = [
            'Single',
            'Married',
            'Divorced',
            'Widowed',
            'Separated',
            'Domestic Partner',
        ];

        return [
            'name' => fake()->unique()->randomElement($maritalStatus)
        ];
    }
}
