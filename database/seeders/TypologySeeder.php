<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typologies = [
            ["name" => "Asiatico"],
            ["name" => "Dolci"],
            ["name" => "Gelato"],
            ["name" => "Hamburger"],
            ["name" => "Healthy"],
            ["name" => "Italiano"],
            ["name" => "Kebab"],
            ["name" => "Messicano"],
            ["name" => "Pizza"],
            ["name" => "Poke"],
            ["name" => "Sushi"],
            ["name" => "Vegetariano"],
        ];

        foreach ($typologies as $typology) {
            $newtypology = new Typology();

            $newtypology->name = $typology['name'];

            $newtypology->save();
        }
    }
}
