<?php

use Faker\Generator as Faker;

$factory->define(App\Portofolio::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => 'portofolios/' . $faker->image('storage/app/public/portofolios', 800, 600),
        'date' => $faker->date
    ];
});
