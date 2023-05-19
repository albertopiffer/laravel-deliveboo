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
                "typologies_ids" => [1, 2, 3, 4, 5, 6, 7, 8, 9],
            ],
            // [
            //     "name" => "La Trattoria",
            //     "address" => "Via Verdi 10, 20100 Milano (MI)",
            //     "description" => "Ristorante italiano tradizionale, specializzato in pasta fatta in casa e pizze cotte nel forno a legna.",
            //     "thumbnail" => "https://www.latrattoria.it/wp-content/uploads/2022/01/la-trattoria-logo.png",
            // ],
            // [
            //     "name" => "Sushi Express",
            //     "address" => "Corso Garibaldi 5, 20121 Milano (MI)",
            //     "description" => "Ristorante giapponese che offre una vasta selezione di sushi fresco e specialità fusion.",
            //     "thumbnail" => "https://www.sushiexpress.it/wp-content/uploads/2022/03/sushi-express-logo.png",
            // ],
            // [
            //     "name" => "Le Bistro Français",
            //     "address" => "Via Dante 20, 20123 Milano (MI)",
            //     "description" => "Ristorante francese con un'atmosfera romantica e menu che spazia dalla classica cucina parigina ai piatti regionali.",
            //     "thumbnail" => "https://www.lebistrofrancais.it/wp-content/uploads/2021/09/le-bistro-francais-logo.png",
            // ],
            // [
            //     "name" => "The Steakhouse",
            //     "address" => "Via Manzoni 15, 20145 Milano (MI)",
            //     "description" => "Ristorante specializzato in bistecche alla griglia, offrendo una varietà di tagli di carne di alta qualità.",
            //     "thumbnail" => "https://www.thesteakhouse.it/wp-content/uploads/2020/07/the-steakhouse-logo.png",
            // ],
            // [
            //     "name" => "Mamma Mia Pizzeria",
            //     "address" => "Piazza Duomo 1, 20121 Milano (MI)",
            //     "description" => "Pizzeria tradizionale con forno a legna, che propone una vasta selezione di pizze classiche e creative.",
            //     "thumbnail" => "https://www.mammamiapizzeria.it/wp-content/uploads/2019/08/mamma-mia-pizzeria-logo.png",
            // ],
            // [
            //     "name" => "Taste of India",
            //     "address" => "Via Solferino 7, 20123 Milano (MI)",
            //     "description" => "Ristorante indiano con piatti autentici, speziati e aromatici, preparati con ingredienti freschi e di qualità.",
            //     "thumbnail" => "https://www.tasteofindia.it/wp-content/uploads/2021/06/taste-of-india-logo.png",
            // ],
            // [
            //     "name" => "Osteria del Mare",
            //     "address" => "Viale Vittorio Veneto 25, 20133 Milano (MI)",
            //     "description" => "Osteria di pesce che serve specialità marinare fresche, come crudi, antipasti di mare e zuppe di pesce.",
            //     "thumbnail" => "https://www.osteriadelmare.it/wp-content/uploads/2022/05/osteria-del-mare-logo.png",
            // ],
            // [
            //     "name" => "Gusto Italiano",
            //     "address" => "Via Montenore 12, 20129 Milano (MI)",
            //     "description" => "Ristorante italiano moderno con un menù che celebra i sapori autentici della cucina italiana rivisitati in chiave contemporanea.",
            //     "thumbnail" => "https://www.gustoitaliano.it/wp-content/uploads/2022/09/gusto-italiano-logo.png",
            // ],
            // [
            //     "name" => "Café Parisien",
            //     "address" => "Via della Moscova 12, 20121 Milano (MI)",
            //     "description" => "Café storico che offre un'atmosfera tipicamente parigina e una selezione di caffè pregiati, croissant e dolci francesi.",
            //     "thumbnail" => "https://www.cafeparisien.it/wp-content/uploads/2021/04/cafe-parisien-logo.png",
            // ],
            // [
            //     "name" => "Thai Palace",
            //     "address" => "Via Tortona 8, 20144 Milano (MI)",
            //     "description" => "Ristorante thailandese che propone piatti autentici della cucina thai, con una varietà di sapori e spezie.",
            //     "thumbnail" => "https://www.thaipalace.it/wp-content/uploads/2020/09/thai-palace-logo.png",
            // ],
            // [
            //     "name" => "La Piazzetta",
            //     "address" => "Piazza XXV Aprile 3, 20154 Milano (MI)",
            //     "description" => "Ristorante pizzeria con ampia scelta di pizze classiche e gourmet, preparate con ingredienti freschi e di qualità.",
            //     "thumbnail" => "https://www.lapiazzetta.it/wp-content/uploads/2018/05/la-piazzetta-logo.png",
            // ],
            // [
            //     "name" => "Burger Joint",
            //     "address" => "Via Torino 25, 20123 Milano (MI)",
            //     "description" => "Burgeria gourmet con hamburger succulenti e gustosi, preparati con carne di alta qualità e ingredienti freschi.",
            //     "thumbnail" => "https://www.burgerjoint.it/wp-content/uploads/2022/07/burger-joint-logo.png",
            // ],
            // [
            //     "name" => "La Cucina del Nonno",
            //     "address" => "Via Solari 15, 20144 Milano (MI)",
            //     "description" => "Ristorante tradizionale con cucina casalinga e piatti che richiamano i sapori delle ricette di famiglia.",
            //     "thumbnail" => "https://www.lacucinadelnonno.it/wp-content/uploads/2019/11/la-cucina-del-nonno-logo.png",
            // ],
            // [
            //     "name" => "Mediterranean Delights",
            //     "address" => "Corso Buenos Aires 80, 20124 Milano (MI)",
            //     "description" => "Ristorante che offre piatti mediterranei creativi e salutari, realizzati con ingredienti freschi e di stagione.",
            //     "thumbnail" => "https://www.mediterraneandelights.it/wp-content/uploads/2021/08/mediterranean-delights-logo.png",
            // ],
            // [
            //     "name" => "The Green Bowl",
            //     "address" => "Via della Moscova 20, 20121 Milano (MI)",
            //     "description" => "Ristorante vegetariano e vegano con un menù che proponepiatti salutari e nutrienti a base di verdure fresche, cereali integrali e proteine vegetali.",
            //     "thumbnail" => "https://www.thegreenbowl.it/wp-content/uploads/2022/03/the-green-bowl-logo.png",
            // ],
            // [
            //     "name" => "Fusion Grill",
            //     "address" => "Via Savona 15, 20144 Milano (MI)",
            //     "description" => "Ristorante fusion che unisce sapori e tecniche di cucina di diverse tradizioni culinarie, offrendo piatti unici e creativi.",
            //     "thumbnail" => "https://www.fusiongrill.it/wp-content/uploads/2021/09/fusion-grill-logo.png",
            // ],
            // [
            //     "name" => "La Dolce Vita",
            //     "address" => "Viale Monte Nero 10, 20135 Milano (MI)",
            //     "description" => "Ristorante italiano con un'atmosfera elegante e romantica, dove poter gustare piatti tradizionali e prelibatezze dolciarie.",
            //     "thumbnail" => "https://www.ladolcevita.it/wp-content/uploads/2020/12/la-dolce-vita-logo.png",
            // ],
            // [
            //     "name" => "Sabor Latino",
            //     "address" => "Via Larga 8, 20122 Milano (MI)",
            //     "description" => "Ristorante sudamericano con specialità di diversi paesi latinoamericani, offrendo una combinazione di sapori autentici.",
            //     "thumbnail" => "https://www.saborlatino.it/wp-content/uploads/2021/07/sabor-latino-logo.png",
            // ],
            // [
            //     "name" => "The Cozy Café",
            //     "address" => "Via San Marco 5, 20121 Milano (MI)",
            //     "description" => "Café accogliente che offre una varietà di caffè, tè, dolci e spuntini leggeri in un'atmosfera calda e rilassante.",
            //     "thumbnail" => "https://www.thecozycafe.it/wp-content/uploads/2022/05/the-cozy-cafe-logo.png",
            // ],
            // [
            //     "name" => "Gourmet Bistro",
            //     "address" => "Corso Magenta 15, 20123 Milano (MI)",
            //     "description" => "Bistrò gastronomico che propone piatti gourmet creativi, realizzati con ingredienti di alta qualità e presentazione raffinata.",
            //     "thumbnail" => "https://www.gourmetbistro.it/wp-content/uploads/2021/03/gourmet-bistro-logo.png",
            // ],
            // [
            //     "name" => "Casa del Gelato",
            //     "address" => "Via della Moscova 30, 20121 Milano (MI)",
            //     "description" => "Gelateria artigianale con una vasta selezione di gusti classici e innovativi di gelato fatto in casa.",
            //     "thumbnail" => "https://www.casadelgelato.it/wp-content/uploads/2020/08/casa-del-gelato-logo.png",
            // ],
        ];

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new Restaurant();

            $newrestaurant->name = $restaurant['name'];
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->description = $restaurant['description'];
            $newrestaurant->thumbnail = $restaurant['thumbnail'];

            $newrestaurant->save();

            foreach ($restaurant['typologies_ids'] as $typology_id) {
                $newrestaurant->typologies()->attach($typology_id);
            }
        }
    }
}
