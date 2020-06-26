<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pasien;
use Faker\Generator as Faker;

$factory->define(Pasien::class, function (Faker $faker) {
    return [
        'nik' => $faker->nik(),
        'nama' => $faker->name,
        'jenis_kelamin' => $faker->numberBetween(0,1),
        'tanggal_lahir' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        'no_hp' => $faker->phoneNumber,
        'alamat' => $faker->address
    ];
});
