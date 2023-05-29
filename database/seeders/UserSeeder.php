<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $user = User::create([
            'name' => 'testuser',
            'email' => 'testuser@example.com',
            'password' => Hash::make('tuEhVgq6a85AW'),

            'p_iva' => '12345678900'
        ]);

        for ($i = 0; $i < 29; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = strtolower($firstName) . '.' . strtolower($lastName) . '@example.com';
            $password = Hash::make('testpassword');
            $partitaIVA = $faker->unique()->numerify('###########');

            User::create([
                'name' => $firstName . ' ' . $lastName,
                'email' => $email,
                'password' => $password,

                'p_iva' => $partitaIVA,
            ]);
        }
    }
}
