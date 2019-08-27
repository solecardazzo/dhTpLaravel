<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement($array = array('Remeras', 'Tazas', "Bolsas")),
    ];
});
