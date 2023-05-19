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
            ["name" => "Pizzeria"],
            ["name" => "Messicano"],
            ["name" => "Cinese"],
            ["name" => "Giapponese"],
            ["name" => "Fast food"],
            ["name" => "Steakhouse"],
            ["name" => "Ristorante italiano"],
            ["name" => "Vegetariano"],
            ["name" => "Ristorante di pesce"],
            ["name" => "Ristorante etnico"],
        ];

        foreach ($typologies as $typology) {
            $newtypology = new Typology();

            $newtypology->name = $typology['name'];

            $newtypology->save();
        }
    }
}
