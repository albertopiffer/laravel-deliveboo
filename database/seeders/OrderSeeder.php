<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Models\dish;
use App\Models\order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        // Genera dati casuali per la tabella "orders"
        for ($i = 0; $i < 25; $i++) {
            $name = $faker->name;

            $address = 'Via ' . $faker->word . ' ' . $faker->randomNumber(2);

            $phone_number = $faker->numerify('##########');

            // Recupera ID casuali dalla tabella "dishes"
            $dishCount = $faker->numberBetween(1, 5);
            $dishIds = DB::table('dishes')
                ->where('id', '<=', 6)
                ->inRandomOrder()
                ->limit($dishCount)
                ->pluck('id');

            // Calcola la somma dei prezzi dei piatti
            $total = DB::table('dishes')->whereIn('id', $dishIds)->sum('price');

            // Genera una data casuale negli ultimi 3 anni
            $created_at = $faker->dateTimeBetween('-3 years');

            // Salva i dati nella tabella "orders" e ottieni l'ID dell'ordine corrente
            $orderId = DB::table('orders')->insertGetId([
                'name' => $name,
                'address' => $address,
                'phone_number' => $phone_number,
                'total' => $total,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);

            // Collega gli ordini alle pietanze nella tabella di collegamento "dish_order"
            foreach ($dishIds as $dishId) {
                $quantity = $faker->numberBetween(1, 4);

                DB::table('dish_order')->insert([
                    'order_id' => $orderId,
                    'dish_id' => $dishId,
                    'quantity' => $quantity,
                ]);
            }
        }
    }
}
