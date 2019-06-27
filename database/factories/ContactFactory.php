<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phone,
        'email' => $faker->unique()->safeEmail,
        'cep' => $faker->cep,
        'rua' => $faker->rua,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'uf' => $faker->uf,
        'ibge' => $faker->ibge
    ];
});
