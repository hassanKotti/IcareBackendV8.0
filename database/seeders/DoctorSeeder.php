<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Specialization;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        // And now, let's create a few Doctors in our database:
        for ($i = 0; $i < 50; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            Doctor::create(
                [
                    'name' => $faker->name,
                    'phone_number' => $faker->phoneNumber,
                    'Specialization_id' => Specialization::all()->random()->id,
                    'clinic_address' => $faker->address,
                    'avatar' => $this->random_pic('public/storage/uploads/assets/img/doctors'),
                    'gender' => $gender,
                ]
            );
        }
    }
    public function random_pic($dir)
    {
        $files = glob($dir . '/*.*');
        $file = array_rand($files);
        return  str_replace('public/', '', $files[$file]);
    }
}
