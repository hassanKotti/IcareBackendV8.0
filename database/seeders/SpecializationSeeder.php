<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialization::create(
            [
                'name' => 'one',
            ]
        );
        $faker = \Faker\Factory::create();

        // And now, let's create a few Users in our database:
        for ($i = 0; $i < 5; $i++) {
            Specialization::create(
                [
                    'name' => $faker->colorName,
                ]
            );
        }
    }
}
