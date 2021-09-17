<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@icare.com',
                'password' => Hash::make('123456789'),
                'api_token' => 'jLgZBluCqm09UTdL1dTC9bvoCQKEhHYjzmltUvK1ifFW3Ez6wlJXBNJNIiZ2oz8gFn1IKuP29pHYW6zq',
                'role_id' => 1
            ]
        );
        $faker = \Faker\Factory::create();

        // And now, let's create a few Users in our database:
        for ($i = 0; $i < 50; $i++) {
            User::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('123456789'),
                    'role_id' => Role::all()->random()->id,
                    'api_token' => 'jLgZBluCqm09UTdL1dTC9bvoCQKEhHYjzmltUvK1ifFW3Ez6wlJXBNJNIiZ2oz8gFn1IKuP29pHYW6zq',
                ]
            );
        }
    }
}
