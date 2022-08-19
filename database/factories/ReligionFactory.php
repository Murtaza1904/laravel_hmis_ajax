<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReligionFactory extends Factory
{

    public function definition()
    {
        $religions = [
            'adventist',
            'african_religions',
            'afro-caribbean_religions',
            'agnosticism',
            'anglican',
            'animism',
            'assembly_of_god',
            'atheism',
            'babi_bahai_faiths',
            'baptist',
            'bon',
            'brethren',
            'cao_dai',
            'celticism',
            'christiannoncatholicnonspecifc',
            'christian_scientist',
            'church_of_christ',
            'church_of_god',
            'confucianism',
            'congregational',
            'cyberculture_religions',
            'disciples_of_christ',
            'divination',
            'eastern_orthodox',
            'episcopalian',
            'evangelical_covenant',
            'fourth_way',
            'free_daism',
            'friends',
            'full_gospel',
            'gnosis',
            'hinduism',
            'humanism',
            'independent',
            'islam',
            'jainism',
            'jehovahs_witnesses',
            'judaism',
            'latter_day_saints',
            'lutheran',
            'mahayana',
            'meditation',
            'messianic_judaism',
            'methodist',
        ];
        return [
            'name' => fake()->unique()->randomElement($religions),
        ];
    }
}
