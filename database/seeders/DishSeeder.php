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
        $restaurant_id = Restaurant::all()->pluck('id')->all();
        $dishes = [
            [
                "name" => "Enchiladas Verdes",
                "description" => "Deliziose enchiladas farcite con pollo, ricoperte da una salsa verde aromatica e guarnite con formaggio fresco. Un piatto tradizionale messicano che conquisterà il tuo palato.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 10.00,
                "thumbnail" => "https://www.example.com/images/enchiladas-verdes.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/ulufnxcqScGGwajV9qM3wLFs2bOgCUVTt4yPzmEr.jpg"
            ],
            [
                "name" => "Tacos al Pastor",
                "description" => "Deliziosi tacos ripieni di carne di maiale marinata con spezie tradizionali, serviti con cipolle, coriandolo fresco e una salsa piccante. Un classico street food messicano che ti farà innamorare dei sapori autentici.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 13.00,
                "thumbnail" => "https://www.example.com/images/tacos-al-pastor.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/ICwkmz4vsuFFk9hwkzJXmV0WdNaSFtiZTGgLd5tb.jpg"
            ],
            [
                "name" => "Chiles Rellenos",
                "description" => "Peperoni poblanos ripieni di formaggio fresco, impanati e fritti fino a ottenere una croccantezza irresistibile. Serviti con salsa di pomodoro e guarniti con coriandolo fresco. Un piatto tradizionale messicano che ti farà innamorare dei contrasti di sapore.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 8.00,
                "thumbnail" => "https://www.example.com/images/chiles-rellenos.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/XAAKFZDV6ANyvc1OMKIkPcB3bhf6lCHiffEo4obc.jpg"
            ],
            [
                "name" => "Guacamole Fresco",
                "description" => "Un'irresistibile salsa di guacamole preparata con avocado maturo, cipolla rossa, pomodoro, coriandolo e succo di lime fresco. Accompagnato da croccanti nachos fatti in casa. Un classico immancabile per iniziare un autentico pasto messicano.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 6.00,
                "thumbnail" => "https://www.example.com/images/guacamole-fresco.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/SVkzkz6ui3kEcXuKdnV1BnAd3IGjpvXsYdgjGGYK.jpg"
            ],
            [
                "name" => "Tamales de Pollo",
                "description" => "Deliziosi tamales di mais ripieni di succulento pollo condito con spezie tradizionali. Avvolti in foglie di mais e cotti a vapore per ottenere una consistenza morbida e avvolgente. Serviti con una salsa piccante e guarniti con fette di avocado. Un piatto tradizionale messicano che ti farà sentire come a casa.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 11.00,
                "thumbnail" => "https://www.example.com/images/tamales-de-pollo.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/zXlJEHHV2J5YE2HyFkW90MxIBgigHEnmzIPE2X9I.jpg"
            ],
            [
                "name" => "Coca Cola",
                "description" => "Bevi la coca cola che ti fa bene Bevi la coca cola che ti fa digerire Con tutte quelle, tutte quelle bollicine Coca cola sì coca cola, a me mi fa morire Coca cola sì coca cola, a me mi fa impazzire",
                "typology" => "Bevanda",
                "visible" => true,
                "price" => 2.50,
                "thumbnail" => "https://www.example.com/images/coca-cola-classica.jpg",
                "restaurant_id" => 1,

                "cover_image" => "uploads/LXRgxW2hzUX22BH5CN6wnIbQ4Dc78N9m8XHYIs0E.jpg"
            ],

            [
                "name" => "Dragon Roll Fusion",
                "description" => "Un roll di sushi creativo e avvolgente che combina ingredienti freschi e sapori sorprendenti. Preparato con gamberi tempura, avocado cremoso e salsa teriyaki, avvolto in un nori croccante e ricoperto da fette di avocado e salsa piccante. L'equilibrio perfetto tra dolcezza, croccantezza e sapore umami.",
                "typology" => "Sushi",
                "visible" => true,
                "price" => 12.00,
                "thumbnail" => "https://www.example.com/images/dragon-roll-fusion.jpg",
                "restaurant_id" => 2,

                "cover_image" => "uploads/Qh4sjVjvO5YwyVjPx09d8kXsdUI6zmxDoyudKCZq.jpg"
            ],

            // [
            //     "name" => "Insalata Mediterranea",
            //     "description" => "Un'insalata fresca e colorata che unisce sapori mediterranei e ingredienti nutrienti. Preparata con pomodori succosi, cetrioli croccanti, olive nere, cipolle rosse, feta cremosa e condita con olio extravergine d'oliva e succo di limone fresco. Un'esplosione di freschezza e gusto per una deliziosa esperienza vegetale.",
            //     "typology" => "Insalata",
            //     "visible" => true,
            //     "price" => 9.00,
            //     "thumbnail" => "https://www.example.com/images/insalata-mediterranea.jpg",
            //     "restaurant_id" => 3,
            // ],

            [
                "name" => "Bistecca della Libertà",
                "description" => "La Bistecca della Libertà è un piatto unico che incarna l'essenza dei sapori trentini. Preparata con maestria, questa bistecca ti offre un'esperienza culinaria straordinaria. Tuttavia, vorremmo sottolineare che la carne di orso utilizzata nella bistecca non proviene in alcun modo dagli orsi detenuti. No davvero ragazzi lo giuro ASSOLUTAMENTE non viene da li non abbiamo niente da nascondere.",
                "typology" => "Piatto principale",
                "visible" => true,
                "price" => 49.00,
                "thumbnail" => "https://www.example.com/images/bistecca-della-liberta.jpg",
                "restaurant_id" => 3,

                "cover_image" => "uploads/ICJ9KrQGBR6rlzLU5D9ICZ9BKky7ZWm5MINhh7DF.jpg"
            ],

            [
                "name" => "Slider Fusion",
                "description" => "Una deliziosa selezione di mini burger gourmet che unisce sapori internazionali in un unico morso. Ogni slider è preparato con carne succulenta, formaggio fuso, salse speciali e condimenti freschi. Serviti su morbidi panini artigianali, sono perfetti da gustare mentre ti immergi nell'atmosfera vivace dello street food.",
                "typology" => "Panino",
                "visible" => true,
                "price" => 8.00,
                "thumbnail" => "https://www.example.com/images/slider-fusion.jpg",
                "restaurant_id" => 4,

                "cover_image" => "uploads/gCn65vkvtvupesrPmLN9SmschkhCTCK1w1QR8m0r.jpg"
            ],

            // [
            //     "name" => "Bowl Mediterraneo",
            //     "description" => "Un bowl ricco di sapori mediterranei e ingredienti salutari. Contiene una base di quinoa, accompagnata da pomodori ciliegini, cetrioli a fette, olive nere, peperoni arrostiti e feta sbriciolata. Il tutto condito con un mix di olio extravergine d'oliva, succo di limone e una spruzzata di erbe aromatiche. Un'esplosione di freschezza e nutrienti per un pasto bilanciato e delizioso.",
            //     "typology" => "Bowl",
            //     "visible" => true,
            //     "price" => 11.00,
            //     "thumbnail" => "https://www.example.com/images/bowl-mediterraneo.jpg",
            //     "restaurant_id" => 5,
            // ],

            [
                "name" => "Regale Piatto d'Oro",
                "description" => "Un piatto straordinariamente pomposo e costoso che incarna l'essenza del lusso e dell'eccesso. Gusta l'eleganza culinaria con un filetto di manzo di Kobe delicatamente cotto, ricoperto di foglie d'oro 24 carati. Accompagnato da una purea di tartufo bianco pregiato, caviale Beluga e asparagi viola. Ogni morso è un'esperienza regale che ti trasporterà nel mondo sfarzoso del Castello delle Cerimonie.",
                "typology" => "Piatto principale",
                "visible" => true,
                "price" => 250.00,
                "thumbnail" => "https://www.example.com/images/regale-piatto-doro.jpg",
                "restaurant_id" => 5,

                "cover_image" => "uploads/2YyF4YEMOtXXdaXPUlYnj2DoCDWkH3pc2NLMbc2d.jpg"
            ],

            [
                "name" => "Pizza Scintillante",
                "description" => "Una pizza che incanta gli occhi e il palato! La base croccante è coperta con salsa di pomodoro brillante e una generosa quantità di formaggio filante. Poi viene guarnita con peperoni multicolori, olive scintillanti e una cascata di paillettes commestibili. Questa pizza pacchiana è una vera e propria festa per i sensi!",
                "typology" => "Pizza",
                "visible" => true,
                "price" => 81.50,
                "thumbnail" => "https://www.example.com/images/pizza-scintillante.jpg",
                "restaurant_id" => 5,

                "cover_image" => "uploads/pizza-oro.jpg"
            ],

            [
                "name" => "Risotto Dorato",
                "description" => "Un risotto cremoso e ricco preparato con riso Carnaroli di alta qualità, che viene cotto lentamente con brodo di carne e vino bianco. Durante la fase di mantecatura, vengono aggiunte foglie d'oro 24 carati per dare al piatto un aspetto sfarzoso. Il risotto è arricchito con tartufo bianco pregiato e servito con scaglie di parmigiano Reggiano. Un piatto che unisce gusto e opulenza.",
                "typology" => "Primo piatto",
                "visible" => true,
                "price" => 150.00,
                "thumbnail" => "https://www.example.com/images/risotto-dorato.jpg",
                "restaurant_id" => 5,

                "cover_image" => "uploads/risotto-oro.jpg"
            ],

            [
                "name" => "Gelato Pacchiano al Cioccolato",
                "description" => "Un dessert decadente e divertente che combina la dolcezza della fragola con l'eccentricità pacchiana. Il gelato alla fragola artigianale viene servito in una coppa con una cascata di panna montata colorata, ciuffi di zucchero filato rosa e guarnito con confetti colorati. Un'esplosione di gusto e divertimento che delizierà sia i bambini che gli adulti.",
                "typology" => "Dessert",
                "visible" => true,
                "price" => 29.01,
                "thumbnail" => "https://www.example.com/images/gelato-pacchiano-fragola.jpg",
                "restaurant_id" => 5,

                "cover_image" => "uploads/gelato-oro.jpg"
            ],

            [
                "name" => "Wrap Fusion",
                "description" => "Un wrap avvolgente che fonde sapori provenienti da diverse tradizioni culinarie. Riempito con pollo marinato, hummus cremoso, verdure croccanti e una salsa speziata, offre un equilibrio perfetto tra sapore e freschezza. Avvolto in una morbida tortilla, è il pasto ideale per un pranzo veloce e gustoso.",
                "typology" => "Wrap",
                "visible" => true,
                "price" => 9.00,
                "thumbnail" => "https://www.example.com/images/wrap-fusion.jpg",
                "restaurant_id" => 6,

                "cover_image" => "uploads/4ey7b8Zs26skpC4SKqGSMNtebvAAHXyxhKX2nYT1.jpg"
            ],

            [
                "name" => "Pizza Kebab",
                "description" => "Una pizza unica che unisce il meglio di due mondi culinari. La base croccante della pizza è ricoperta da un delizioso mix di carne kebab marinata, cipolle, peperoni e formaggio fuso. Ogni morso ti trasporterà direttamente in Turchia con la combinazione di sapori autentici e irresistibili. Un'esperienza culinaria che non vorrai perdere.",
                "typology" => "Pizza",
                "visible" => true,
                "price" => 12.00,
                "thumbnail" => "https://www.example.com/images/pizza-kebab.jpg",
                "restaurant_id" => 7,

                "cover_image" => "uploads/6E801wBqGnbtiPYHtMechWbG9QrSxylusc1mOFDz.jpg"
            ],

            [
                "name" => "Buddha Bowl",
                "description" => "Un bowl ricco di colori e sapori, perfetto per una dieta vegetariana equilibrata. Questo Buddha Bowl è composto da una base di quinoa, arricchita con una varietà di verdure croccanti come spinaci freschi, pomodori ciliegini, carote julienne e cetrioli a fette. Il tutto è condito con una deliziosa salsa allo yogurt greco e guarnito con semi di sesamo e germogli freschi. Un piatto nutriente e gustoso che ti farà sentire pieno di vita.",
                "typology" => "Bowl",
                "visible" => true,
                "price" => 10.00,
                "thumbnail" => "https://www.example.com/images/buddha-bowl.jpg",
                "restaurant_id" => 8,

                "cover_image" => "uploads/JbeApX0xXxXVkQsouWBLh0xOqXHj6FkKfxLwtnC0.jpg"
            ],
        ];

        foreach ($dishes as $dish) {
            $newdish = new dish();

            $newdish->name = $dish['name'];
            $newdish->description = $dish['description'];
            $newdish->typology = $dish['typology'];
            $newdish->visible = $dish['visible'];
            $newdish->price = $dish['price'];
            $newdish->thumbnail = $dish['thumbnail'];

            $newdish->restaurant_id = $dish['restaurant_id'];

            $newdish->cover_image = $dish['cover_image'];

            $newdish->save();
        }
    }
}
