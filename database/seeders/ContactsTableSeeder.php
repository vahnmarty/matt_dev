<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker  = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Contact::create([
                'name' => $faker->name,
                'address' => $faker->streetName,
                'email' => $faker->email,
                'profile_image' => $faker->imageUrl(360, 360)
            ]);
        }
    }
}
