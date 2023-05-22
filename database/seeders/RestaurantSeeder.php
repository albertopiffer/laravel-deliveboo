<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                "name" => "El Pipito",
                "address" => "Via Roma 1, 20121 Milano (MI)",
                "description" => "El Pipito ti trasporterà in una terra lontana, dove sapori e tradizioni si mescolano. Gusta prelibatezze ispirate alla cucina messicana, con piatti ricchi di sabor y pasión. Scopri piatti picantes e una vasta scelta di tequila y mezcal, un vero paraiso per i buongustai.",
                "thumbnail" => "https://www.elpipito.it/wp-content/uploads/2019/11/El-Pipito-Logo-1.png",
                "typologies_ids" => [2, 25, 33],

                "user_id" => 1,
            ],
            [
                "name" => "La Trattoria Bella",
                "address" => "Via Verdi 10, 20100 Milano (MI)",
                "description" => "La Trattoria Bella ti offre un'autentica esperienza culinaria italiana. Siamo famosi per i nostri piatti tradizionali preparati con ingredienti freschi e genuini. Vieni a gustare le nostre deliziose paste fatte in casa, le pizze fragranti e i gustosi antipasti. Il nostro ambiente accogliente e il personale cordiale renderanno la tua visita indimenticabile.",
                "thumbnail" => "https://www.latrattoriabella.it/wp-content/uploads/2022/03/Trattoria-Bella-Logo.png",
                "typologies_ids" => [6, 22, 29],

                "user_id" => 2,
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new Restaurant();

            $newrestaurant->name = $restaurant['name'];
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->description = $restaurant['description'];
            $newrestaurant->thumbnail = $restaurant['thumbnail'];

            //$newrestaurant->user_id = $restaurant['user_id'];

            $newrestaurant->save();

            foreach ($restaurant['typologies_ids'] as $typology_id) {
                $newrestaurant->typologies()->attach($typology_id);
            }
        }
    }
}
