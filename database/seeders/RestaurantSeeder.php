<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = User::all()->pluck('id')->all();
        $restaurants = [
            [
                "restaurant_name" => "El Pipito",
                "address" => "Via Roma 1, 20121 Milano (MI)",
                "description" => "El Pipito ti trasporterà in una terra lontana, dove sapori e tradizioni si mescolano. Gusta prelibatezze ispirate alla cucina messicana, con piatti ricchi di sabor y pasión. Scopri piatti picantes e una vasta scelta di tequila y mezcal, un vero paraiso per i buongustai.",
                "thumbnail" => "https://www.elpipito.it/wp-content/uploads/2019/11/El-Pipito-Logo-1.png",
                "typologies_ids" => [8],
                "user_id" => 1,

                "cover_image" => "uploads/pepito.jpg"
            ],
            [
                "restaurant_name" => "Sushi Fusion",
                "address" => "Via Garibaldi 10, 20123 Milano (MI)",
                "description" => "Sushi Fusion è il luogo ideale per gli amanti della cucina giapponese. Offriamo un mix unico di sapori e tradizioni giapponesi e asiatiche, con una vasta selezione di sushi fresco e creativo. Sperimenta la fusione di gusti e lasciati trasportare in un viaggio culinario emozionante.",
                "thumbnail" => "https://www.sushifusion.it/wp-content/uploads/2021/05/sushi-fusion.jpg",
                "typologies_ids" => [1, 11],
                "user_id" => 2,

                "cover_image" => "uploads/sushi.jpg"
            ],
            // [
            //     "restaurant_name" => "Verde Vita",
            //     "address" => "Via Monti Verdi 5, 20100 Milano (MI)",
            //     "description" => "Verde Vita è il posto ideale per gli amanti di una dieta sana e bilanciata. Offriamo un'ampia selezione di piatti vegetariani e vegani preparati con ingredienti freschi e di qualità. Gusta il benessere attraverso il cibo e scopri il piacere di una cucina sana e gustosa.",
            //     "thumbnail" => "https://www.verdevita.it/wp-content/uploads/2022/04/verde-vita-restaurant.jpg",
            //     "typologies_ids" => [5, 12],
            //     "user_id" => 3,
            // ],
            [
                "restaurant_name" => "Il Casteller",
                "address" => "Via Libertà 10, 20100 Milano (MI)",
                "description" => "Il Casteller di Trento è un luogo immaginario che evoca l'immagine di una prigione per orsi ingiustamente carcerati. Questo ristorante vuole diffondere un messaggio di libertà per gli orsi che sono stati privati della loro autonomia. Sperimenta un'esperienza culinaria unica, mentre ti immergi nell'atmosfera carceraria e rifletti sul valore della libertà per tutte le creature. Il nostro obiettivo è sensibilizzare e promuovere il rispetto degli animali. Unisciti a noi nella lotta per la libertà degli orsi incarcerati!",
                "thumbnail" => "https://www.castellerditrento.com/wp-content/uploads/2023/06/Casteller-di-Trento-Logo.png",
                "typologies_ids" => [4, 12],
                "user_id" => 3,

                "cover_image" => "uploads/orso.jpg"
            ],
            [
                "restaurant_name" => "Street Bites",
                "address" => "Via del Mercato 20, 20100 Milano (MI)",
                "description" => "Street Bites è un luogo che porta l'anima dello street food direttamente al tuo palato. Offriamo una varietà di gustosi cibi da strada provenienti da diverse tradizioni culinarie. Assapora saporite panini gourmet, tacos croccanti e prelibatezze fritte, tutto con un tocco di autenticità e vivacità.",
                "thumbnail" => "https://www.streetbites.it/wp-content/uploads/2023/05/street-bites.jpg",
                "typologies_ids" => [4, 7, 8],
                "user_id" => 4,

                "cover_image" => "uploads/street.jpg"
            ],
            // [
            //     "restaurant_name" => "Bowl Street",
            //     "address" => "Via degli Orti 10, 20100 Milano (MI)",
            //     "description" => "Bowl Street è il posto perfetto per gli amanti dei piatti sani e nutrienti. Scegli tra una varietà di bowl colorati e gustosi, ricchi di ingredienti freschi e saporiti. Personalizza il tuo bowl con una selezione di proteine, verdure croccanti e salse deliziose. Un'esperienza culinaria che unisce gusto e benessere.",
            //     "thumbnail" => "https://www.bowlstreet.it/wp-content/uploads/2023/05/bowl-street.jpg",
            //     "typologies_ids" => [5, 10],
            //     "user_id" => 5,
            // ],
            [
                "restaurant_name" => "Il Castello delle Cerimonie",
                "address" => "Via Reale 5, 20100 Città Barocca (MI)",
                "description" => "Il Castello delle Cerimonie ti immergerà in un mondo estremamente pacchiano e barocco, dove l'opulenza e il lusso regnano sovrani. Sperimenta un'esperienza culinaria decadente e sontuosa, con piatti che esaltano i sensi e abbagliano gli occhi. Ogni dettaglio, dai lampadari scintillanti ai divani in velluto, riflette l'eccentricità e la pomposità di un'epoca passata. I sapori opulenti e le presentazioni stravaganti dei piatti ti faranno sentire come un nobile decadente in questo castello culinario. Benvenuto nel regno del pacchianesimo e del barocco sfrenato!",
                "thumbnail" => "https://www.castellodellecerimonie.com/wp-content/uploads/2022/05/Castello-delle-Cerimonie-Logo.png",
                "typologies_ids" => [2, 5, 6],
                "user_id" => 5,

                "cover_image" => "uploads/castello.jpg"
            ],
            [
                "restaurant_name" => "Wrap 'n Roll",
                "address" => "Via Viale 30, 20100 Milano (MI)",
                "description" => "Wrap 'n Roll ti porta in un viaggio culinario di sapori avvolgenti. Scegli tra una selezione di wrap gourmet riempiti con ingredienti freschi e gustosi. Dalla cucina mediterranea all'orientale, ogni wrap è un'esplosione di sapore. Vieni da noi per un pasto veloce, sano e pieno di bontà.",
                "thumbnail" => "https://www.wrapnroll.it/wp-content/uploads/2023/05/wrap-n-roll.jpg",
                "typologies_ids" => [1, 10],
                "user_id" => 6,

                "cover_image" => "uploads/wrap.jpg"
            ],
            [
                "restaurant_name" => "Istanbul Delights",
                "address" => "Via Turca 12, 20100 Milano (MI)",
                "description" => "Istanbul Delights ti porta in un viaggio culinario in Turchia. Goditi una combinazione unica di autentiche pizze italiane e deliziosi kebab turchi. Le nostre pizze sono cotte nel forno a legna e offrono una croccantezza ineguagliabile. I nostri kebab sono preparati con carne marinata e spezie aromatiche. Vieni a gustare il meglio di entrambi i mondi.",
                "thumbnail" => "https://www.istanbuldelights.it/wp-content/uploads/2023/05/istanbul-delights.jpg",
                "typologies_ids" => [7, 9],
                "user_id" => 7,

                "cover_image" => "uploads/istanbul.jpg"
            ],
            [
                "restaurant_name" => "Green Garden",
                "address" => "Via Verde 5, 20100 Milano (MI)",
                "description" => "Green Garden è un ristorante specializzato in cucina vegetariana. Offriamo piatti deliziosi e nutrienti preparati con ingredienti freschi e di stagione. I nostri menu sono pensati per soddisfare sia i palati degli amanti della cucina vegetariana che di coloro che desiderano esplorare un'alimentazione più sana. Scopri il gusto e la vitalità della nostra cucina verde!",
                "thumbnail" => "https://www.greengarden.it/wp-content/uploads/2023/05/green-garden.jpg",
                "typologies_ids" => [12],
                "user_id" => 8,

                "cover_image" => "uploads/green.jpg"
            ],

        ];

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new Restaurant();

            $newrestaurant->restaurant_name = $restaurant['restaurant_name'];
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->description = $restaurant['description'];
            $newrestaurant->thumbnail = $restaurant['thumbnail'];

            if (isset($restaurant['cover_image'])) {
                $newrestaurant->cover_image = $restaurant['cover_image'];
            }


            if (isset($restaurant['user_id'])) {
                $newrestaurant->user_id = $restaurant['user_id'];
            }

            $newrestaurant->save();

            foreach ($restaurant['typologies_ids'] as $typology_id) {
                $newrestaurant->typologies()->attach($typology_id);
            }
        }
    }
}
