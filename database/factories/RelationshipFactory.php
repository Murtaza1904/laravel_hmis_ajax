<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RelationshipFactory extends Factory
{
    public function definition()
    {
        $relationship =
        [
            'associate',
            'brother',
            'care_giver',
            'child',
            'handicapped_dependent',
            'life_partner',
            'emergency_contact',
            'employee',
            'employer',
            'extended_family',
            'foster_child',
            'friend',
            'father',
            'grandchild',
            'guardian',
            'grandparent',
            'manager',
            'mother',
            'natural_child',
            'none',
            'other',
            'owner',
            'parent',
            'stepchild',
            'self',
            'sibling',
            'sister',
            'spouse',
            'trainer',
            'unknown',
            'ward_of_court',
        ];
        return [
            'name' => fake()->unique()->randomElement($relationship)
        ];
    }
}
