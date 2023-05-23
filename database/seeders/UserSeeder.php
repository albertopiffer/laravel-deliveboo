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
        ]);

        for ($i = 0; $i < 100; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $email = strtolower($firstName) . '.' . strtolower($lastName) . '@example.com';
            $password = Hash::make('testpassword');

            User::create([
                'name' => $firstName . ' ' . $lastName,
                'email' => $email,
                'password' => $password,
            ]);
        }
    }
}
