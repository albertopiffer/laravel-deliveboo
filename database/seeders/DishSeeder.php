<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\dish;
use App\Models\order;
use App\Models\Restaurant;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dishes = [
            [
                "name" => "Taco al pastor",
                "description" => "Un gustoso taco preparato con carne di maiale marinata, cipolle, coriandolo e salsa al lime. Un classico della cucina messicana che ti farà innamorare!",
                "tipology" => "Mexican",
                "visible" => true,
                "price" => 8.99,
                "thumbnail" => "https://www.example.com/images/taco-al-pastor.jpg",
                "restaurant_id" => 1,
            ],
        ];

        foreach ($dishes as $dish) {
            $newdish = new dish();

            $newdish->name = $dish['name'];
            $newdish->description = $dish['description'];
            $newdish->tipology = $dish['tipology'];
            $newdish->visible = $dish['visible'];
            $newdish->price = $dish['price'];
            $newdish->thumbnail = $dish['thumbnail'];

            $newdish->restaurant_id = $dish['restaurant_id'];

            $newdish->save();
        }
    }
}
