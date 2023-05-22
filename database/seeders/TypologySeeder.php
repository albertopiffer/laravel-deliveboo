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
            ["name" => "Africano"],
            ["name" => "Alcol"],
            ["name" => "Americano"],
            ["name" => "Argentino"],
            ["name" => "Asiatico"],
            ["name" => "Bakery"],
            ["name" => "Brasiliano"],
            ["name" => "Bubble tea"],
            ["name" => "Burrito"],
            ["name" => "Cinese"],
            ["name" => "Colazione"],
            ["name" => "Coreano"],
            ["name" => "Dessert"],
            ["name" => "Frutti di mare"],
            ["name" => "Gelato"],
            ["name" => "Giapponese"],
            ["name" => "Greco"],
            ["name" => "Hamburger"],
            ["name" => "Healthy"],
            ["name" => "Indiano"],
            ["name" => "Insalate"],
            ["name" => "Italiano"],
            ["name" => "Kebab"],
            ["name" => "Libanese"],
            ["name" => "Messicano"],
            ["name" => "Pasta"],
            ["name" => "Peruviano"],
            ["name" => "Piadina"],
            ["name" => "Pizza"],
            ["name" => "Poke"],
            ["name" => "Pollo"],
            ["name" => "Sandwich"],
            ["name" => "Spagnolo"],
            ["name" => "Succhi"],
            ["name" => "Sushi"],
            ["name" => "Tacos"],
            ["name" => "Thailandese"],
            ["name" => "Turco"],
            ["name" => "Vino"],
        ];

        foreach ($typologies as $typology) {
            $newtypology = new Typology();

            $newtypology->name = $typology['name'];

            $newtypology->save();
        }
    }
}
