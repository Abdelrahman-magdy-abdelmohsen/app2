<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test; // Assuming your model is named Test
use Faker\Factory as Faker;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            \App\Models\Employee::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'dob' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years')->format('Y-m-d')
            ]);
        }
    }
}
