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
                "restaurant_name" => "El Pipito",
                "address" => "Via Roma 1, 20121 Milano (MI)",
                "description" => "El Pipito ti trasporterà in una terra lontana, dove sapori e tradizioni si mescolano. Gusta prelibatezze ispirate alla cucina messicana, con piatti ricchi di sabor y pasión. Scopri piatti picantes e una vasta scelta di tequila y mezcal, un vero paraiso per i buongustai.",
                "thumbnail" => "https://www.elpipito.it/wp-content/uploads/2019/11/El-Pipito-Logo-1.png",
                "typologies_ids" => [2, 25, 33],
                "user_id" => 1,
            ],
            [
                "restaurant_name" => "Trattoria da Mario",
                "address" => "Via Garibaldi 10, 20100 Milano (MI)",
                "description" => "La Trattoria da Mario è un luogo accogliente dove puoi gustare autentici piatti italiani. Siamo specializzati in cucina tradizionale e utilizziamo ingredienti freschi e di stagione per offrire i sapori genuini della nostra terra. Vieni a provare le nostre paste fatte in casa, i deliziosi secondi di carne e i dolci artigianali. Ti aspettiamo per un'esperienza culinaria indimenticabile.",
                "thumbnail" => "https://www.trattoriadamario.it/wp-content/uploads/2023/05/Trattoria-da-Mario-Logo.png",
                "typologies_ids" => [6, 21],
                "user_id" => 2,
            ],
            [
                "restaurant_name" => "Sushi Express",
                "address" => "Via Sakura 5, 20100 Milano (MI)",
                "description" => "Sushi Express ti offre un'esperienza gustosa della cucina giapponese. Siamo specializzati in sushi fresco e sashimi di alta qualità. Oltre ai classici piatti giapponesi, proponiamo anche specialità fusion e piatti caldi come ramen e tempura. Vieni a goderti una selezione di sapori tradizionali e creativi nel nostro ristorante accogliente e moderno.",
                "thumbnail" => "https://www.sushiexpress.it/wp-content/uploads/2023/05/Sushi-Express-Logo.png",
                "typologies_ids" => [4, 31],
                "user_id" => 3,
            ],
            [
                "restaurant_name" => "Caffetteria Dolce Sapore",
                "address" => "Via Espresso 8, 20100 Milano (MI)",
                "description" => "La Caffetteria Dolce Sapore ti delizierà con una vasta selezione di caffè pregiati e dolci artigianali. Siamo appassionati di caffè e utilizziamo solo i migliori chicchi per offrire un'esperienza aromatica unica. Accompagna il tuo caffè con i nostri deliziosi biscotti, croissant e torte fatte in casa. Vieni a gustare il vero gusto dell'Italia nel nostro accogliente caffè.",
                "thumbnail" => "https://www.caffetteriadolcesapore.it/wp-content/uploads/2023/05/Caffetteria-Dolce-Sapore-Logo.png",
                "typologies_ids" => [1, 11],
                "user_id" => 4,
            ],
            [
                "restaurant_name" => "Pizzeria Napoli Mia",
                "address" => "Via Vesuvio 12, 20100 Milano (MI)",
                "description" => "Pizzeria Napoli Mia ti offre il sapore autentico della pizza napoletana. Le nostre pizze sono preparate seguendo la tradizione e utilizzando ingredienti di alta qualità. Vieni a gustare una selezione di pizze fragranti, dalle classiche alle specialità gourmet. Il nostro ambiente informale e conviviale ti farà sentire come se fossi a Napoli.",
                "thumbnail" => "https://www.pizzerianapolimia.it/wp-content/uploads/2023/05/Pizzeria-Napoli-Mia-Logo.png",
                "typologies_ids" => [1, 29, 30],
                "user_id" => 5,
            ],
            [
                "restaurant_name" => "Trattoria del Borgo",
                "address" => "Via Castello 15, 20100 Milano (MI)",
                "description" => "La Trattoria del Borgo è il posto ideale per gustare piatti tradizionali italiani preparati con passione. Da noi troverai le specialità della cucina casalinga, dagli antipasti alle paste fatte in casa, fino ai secondi di carne e pesce. Vieni a scoprire un vero paradiso di sapori in un'atmosfera accogliente e familiare.",
                "thumbnail" => "https://www.trattoriadelborgo.it/wp-content/uploads/2023/05/Trattoria-del-Borgo-Logo.png",
                "typologies_ids" => [6, 21],
                "user_id" => 6,
            ],
            [
                "restaurant_name" => "Sushi Fusion",
                "address" => "Via Orientale 7, 20100 Milano (MI)",
                "description" => "Sushi Fusion ti propone una fusione unica tra la cucina giapponese e altre influenze culinarie. Dai un tocco di creatività ai classici piatti giapponesi con le nostre specialità fusion, che combinano sapori e ingredienti diversi. Vieni a scoprire un mondo di gusti sorprendenti nel nostro ristorante moderno e accogliente.",
                "thumbnail" => "https://www.sushifusion.it/wp-content/uploads/2023/05/Sushi-Fusion-Logo.png",
                "typologies_ids" => [4, 31],
                "user_id" => 7,
            ],
            [
                "restaurant_name" => "Burger Mania",
                "address" => "Via Hamburger 9, 20100 Milano (MI)",
                "description" => "Burger Mania è il paradiso per gli amanti dei burger. Offriamo una vasta selezione di hamburger succulenti e gustosi, realizzati con carne di alta qualità e accompagnati da ingredienti freschi e saporiti. Vieni a gustare i nostri burger gourmet e le specialità della casa. Soddisferemo ogni tua voglia di hamburger!",
                "thumbnail" => "https://www.burgermania.it/wp-content/uploads/2023/05/Burger-Mania-Logo.png",
                "typologies_ids" => [5, 18],
                "user_id" => 8,
            ],
            [
                "restaurant_name" => "La Trattoria del Mare",
                "address" => "Via Marittima 14, 20100 Milano (MI)",
                "description" => "La Trattoria del Mare ti porta i sapori del mare direttamente sulla tua tavola. Siamo specializzati in piatti a base di pesce fresco, che selezioniamo con cura ogni giorno. Dai primi di mare alle grigliate miste, ogni piatto è preparato con passione e dedizione. Vieni a gustare le delizie del mare in un'atmosfera accogliente e conviviale.",
                "thumbnail" => "https://www.trattoriadelmare.it/wp-content/uploads/2023/05/Trattoria-del-Mare-Logo.png",
                "typologies_ids" => [9, 24],
                "user_id" => 9,
            ],
            [
                "restaurant_name" => "Gusto Italiano",
                "address" => "Via Italia 3, 20100 Milano (MI)",
                "description" => "Gusto Italiano ti offre un'autentica esperienza culinaria italiana. Siamo famosi per i nostri piatti tradizionali preparati con ingredienti freschi e genuini. Vieni a gustare le nostre deliziose paste fatte in casa, le pizze fragranti e i gustosi antipasti. Il nostro ambiente accogliente e il personale cordiale renderanno la tua visita indimenticabile.",
                "thumbnail" => "https://www.gustoitaliano.it/wp-content/uploads/2023/05/Gusto-Italiano-Logo.png",
                "typologies_ids" => [6, 21, 22],
                "user_id" => 10,
            ],
            [
                "restaurant_name" => "Thai Spice",
                "address" => "Via Siam 8, 20100 Milano (MI)",
                "description" => "Thai Spice ti porta alla scoperta dei sapori piccanti e profumati della cucina thailandese. Dai curry speziati alle zuppe aromatiche, dai noodles alle insalate esotiche, ogni piatto è preparato con ingredienti autentici e sapientemente combinati. Vieni a vivere un'esperienza culinaria unica nel nostro ristorante accogliente e dal fascino orientale.",
                "thumbnail" => "https://www.thaispice.it/wp-content/uploads/2023/05/Thai-Spice-Logo.png",
                "typologies_ids" => [4, 11, 30],
                "user_id" => 11,
            ],
            [
                "restaurant_name" => "La Dolce Vita",
                "address" => "Via Roma 10, 20100 Milano (MI)",
                "description" => "La Dolce Vita ti invita a vivere una dolce esperienza culinaria. Siamo specializzati in dessert e dolci prelibati, dalla classica tiramisù alle torte artigianali. Ogni dolce è realizzato con cura e passione, utilizzando ingredienti di alta qualità. Vieni a gustare il dolce lato della vita nel nostro accogliente ristorante.",
                "thumbnail" => "https://www.ladolcevita.it/wp-content/uploads/2023/05/La-Dolce-Vita-Logo.png",
                "typologies_ids" => [12, 25],
                "user_id" => 12,
            ],
            [
                "restaurant_name" => "Le Terre del Sud",
                "address" => "Via Meridionale 5, 20100 Milano (MI)",
                "description" => "Le Terre del Sud ti portano i sapori autentici della cucina del Sud Italia. Dai primi piatti ricchi di sapore alle carni succulente, ogni piatto è preparato con ingredienti selezionati e con passione. Vieni a gustare le specialità della nostra terra, immergendoti in un'atmosfera calda e accogliente.",
                "thumbnail" => "https://www.leterredelsud.it/wp-content/uploads/2023/05/Le-Terre-del-Sud-Logo.png",
                "typologies_ids" => [1, 17, 26],
                "user_id" => 13,
            ],
            [
                "restaurant_name" => "La Casa del Té",
                "address" => "Via degli Aromi 7, 20100 Milano (MI)",
                "description" => "La Casa del Té è un luogo magico dedicato agli amanti del tè. Offriamo una vasta selezione di tè pregiati provenienti da tutto il mondo. Vieni a gustare i nostri infusi aromatici, dalle note dolci alle note speziate. Inoltre, proponiamo anche deliziosi dolci e pasticcini che si abbinano perfettamente al tè. Scopri l'arte del tè nel nostro incantevole ambiente.",
                "thumbnail" => "https://www.lacasadelte.it/wp-content/uploads/2023/05/La-Casa-del-Te-Logo.png",
                "typologies_ids" => [7, 18, 33],
                "user_id" => 14,
            ],
            [
                "restaurant_name" => "Sapore Mediterraneo",
                "address" => "Via del Mare 15, 20100 Milano (MI)",
                "description" => "Sapore Mediterraneo ti trasporta in un viaggio culinario lungo le coste del Mediterraneo. Dai piatti di pesce fresco ai gustosi antipasti, ogni portata è ispirata alla ricca tradizione culinaria mediterranea. Vieni a gustare sapori intensi e autentici, accompagnati dai migliori vini della regione. Lasciati catturare dalla magia del Mediterraneo nel nostro ristorante accogliente.",
                "thumbnail" => "https://www.saporemediterraneo.it/wp-content/uploads/2023/05/Sapore-Mediterraneo-Logo.png",
                "typologies_ids" => [5, 13, 23, 24, 30],
                "user_id" => 15,
            ],
            [
                "restaurant_name" => "Burger Heaven",
                "address" => "Via Hamburger 5, 20100 Milano (MI)",
                "description" => "Burger Heaven è un paradiso per gli amanti degli hamburger. Da noi troverai una vasta selezione di hamburger gourmet, realizzati con carni di alta qualità e ingredienti freschi. Ogni hamburger è un'esplosione di sapori, con una combinazione di gusti unici e salse speciali. Vieni a provare i nostri deliziosi panini e accompagnali con patatine croccanti e milkshake golosi.",
                "thumbnail" => "https://www.burgerheaven.it/wp-content/uploads/2023/05/Burger-Heaven-Logo.png",
                "typologies_ids" => [16, 21],
                "user_id" => 16,
            ],
            [
                "restaurant_name" => "Il Gusto Segreto",
                "address" => "Via dei Sapori 8, 20100 Milano (MI)",
                "description" => "Il Gusto Segreto è un luogo magico dove scoprire i segreti della cucina gourmet. Siamo specializzati in piatti raffinati e creativi, preparati con ingredienti di alta qualità. Ogni portata è una sorpresa per il palato, con abbinamenti audaci e presentazioni artistiche. Vieni a svelare i nostri gusti segreti e lasciati incantare dall'esperienza culinaria unica che ti offriamo.",
                "thumbnail" => "https://www.ilgustosegreto.it/wp-content/uploads/2023/05/Il-Gusto-Segreto-Logo.png",
                "typologies_ids" => [10, 17, 26],
                "user_id" => 17,
            ],
            [
                "restaurant_name" => "Café Parisien",
                "address" => "Via de la Rue 3, 20100 Milano (MI)",
                "description" => "Café Parisien ti porta nel cuore di Parigi, con il suo autentico charme francese. Offriamo deliziosi croissant, baguette croccanti, caffè aromatici e altre prelibatezze francesi. Il nostro ambiente accogliente e romantico ti farà sentire come se fossi seduto a un tavolino di un café parigino. Vieni a gustare un pezzo di Parigi nel cuore di Milano.",
                "thumbnail" => "https://www.cafeparisien.it/wp-content/uploads/2023/05/Cafe-Parisien-Logo.png",
                "typologies_ids" => [22, 28, 31],
                "user_id" => 18,
            ],
            [
                "restaurant_name" => "Fusion Bistro",
                "address" => "Via dei Sapori 10, 20100 Milano (MI)",
                "description" => "Fusion Bistro ti offre un'esperienza culinaria unica, con una fusione di sapori e culture. Siamo specializzati in piatti che combinano tradizioni culinarie di diverse parti del mondo. Dai nostri sushi fusion alle tapas gourmet, troverai una varietà di gusti sorprendenti. Vieni a scoprire un nuovo concetto di gastronomia che ti porterà in un viaggio sensoriale.",
                "thumbnail" => "https://www.fusionbistro.it/wp-content/uploads/2023/05/Fusion-Bistro-Logo.png",
                "typologies_ids" => [4, 12, 25],
                "user_id" => 19,
            ],
            [
                "restaurant_name" => "Gusto Mediterraneo",
                "address" => "Via del Mare 15, 20100 Milano (MI)",
                "description" => "Gusto Mediterraneo ti porta i sapori autentici del Mediterraneo. Siamo specializzati in piatti tradizionali provenienti dalle diverse regioni costiere del Mediterraneo. Dai nostri antipasti di pesce fresco alle paste fatte in casa e ai deliziosi dolci, ogni boccone ti farà sentire come se fossi in vacanza. Vieni a gustare il sole e il sapore del Mediterraneo nel cuore di Milano.",
                "thumbnail" => "https://www.gustomediterraneo.it/wp-content/uploads/2023/05/Gusto-Mediterraneo-Logo.png",
                "typologies_ids" => [9, 15, 24],
                "user_id" => 20,
            ],
            [
                "restaurant_name" => "Veggie Delight",
                "address" => "Via delle Verdure 6, 20100 Milano (MI)",
                "description" => "Veggie Delight è un'oasi per gli amanti della cucina vegetariana e vegana. Da noi troverai una vasta selezione di piatti creativi e gustosi, preparati con ingredienti freschi e di origine vegetale. Dai nostri burger di verdure alle insalate colorate e ai piatti di pasta, ogni boccone ti farà scoprire nuovi sapori e aromi. Vieni a sperimentare un mondo di delizie vegane.",
                "thumbnail" => "https://www.veggiedelight.it/wp-content/uploads/2023/05/Veggie-Delight-Logo.png",
                "typologies_ids" => [8, 19, 27],
                "user_id" => 21,
            ],
            [
                "restaurant_name" => "Cocina del Sol",
                "address" => "Via del Sole 8, 20100 Milano (MI)",
                "description" => "Cocina del Sol è un ristorante che porta il sole e i sapori della cucina spagnola nella città di Milano. Siamo specializzati in tapas autentiche, paella e altre prelibatezze ispirate alla tradizione spagnola. Vieni a gustare la gioia e la vivacità della Spagna attraverso i nostri piatti e l'atmosfera calorosa del locale.",
                "thumbnail" => "https://www.cocinadelsol.it/wp-content/uploads/2023/05/Cocina-del-Sol-Logo.png",
                "typologies_ids" => [31, 36],
                "user_id" => 22,
            ],
            [
                "restaurant_name" => "Gourmet Haven",
                "address" => "Via dei Sapori 15, 20100 Milano (MI)",
                "description" => "Gourmet Haven è un rifugio per gli amanti della cucina gourmet. Siamo dedicati a offrire un'esperienza culinaria sofisticata, con piatti raffinati e presentazioni artistiche. Dai nostri piatti fusion creativi alle prelibatezze degustazione, ti guideremo in un viaggio gastronomico indimenticabile. Vieni a scoprire l'eccellenza culinaria nel nostro paradiso gourmet.",
                "thumbnail" => "https://www.gourmethaven.it/wp-content/uploads/2023/05/Gourmet-Haven-Logo.png",
                "typologies_ids" => [7, 17, 23],
                "user_id" => 23,
            ],
            [
                "restaurant_name" => "Sakura Sushi",
                "address" => "Via Sakura 10, 20100 Milano (MI)",
                "description" => "Sakura Sushi è un ristorante giapponese che ti offre autentici sapori del Sol Levante. Con una vasta selezione di sushi fresco e sashimi prelibato, ti porteremo in un viaggio culinario attraverso la cucina giapponese tradizionale. Vieni a goderti la delicatezza e l'arte culinaria del Giappone nel nostro accogliente ristorante.",
                "thumbnail" => "https://www.sakurasushi.it/wp-content/uploads/2023/05/Sakura-Sushi-Logo.png",
                "typologies_ids" => [15, 33],
                "user_id" => 24,
            ],
            [
                "restaurant_name" => "La Cucina di Nonna",
                "address" => "Via della Famiglia 12, 20100 Milano (MI)",
                "description" => "La Cucina di Nonna è un ristorante che porta i sapori tradizionali delle ricette della nonna sulla tua tavola. I nostri piatti sono preparati con amore e ingredienti genuini, che ti faranno sentire come a casa. Vieni a gustare i nostri piatti tipici regionali e lasciati coccolare dai nostri piatti fatti in casa e dall'atmosfera familiare.",
                "thumbnail" => "https://www.lacucinadinonna.it/wp-content/uploads/2023/05/La-Cucina-di-Nonna-Logo.png",
                "typologies_ids" => [6, 21, 24],
                "user_id" => 25,
            ],
            [
                "restaurant_name" => "Thai Spice",
                "address" => "Via Bangkok 8, 20100 Milano (MI)",
                "description" => "Thai Spice è un ristorante che ti offre una deliziosa esperienza culinaria thailandese. I nostri piatti sono preparati con autentici ingredienti thailandesi e sapientemente bilanciati per offrirti una combinazione perfetta di sapori piccanti, agrodolci e aromatici. Vieni a provare le nostre zuppe, curry e piatti di noodles per un viaggio gastronomico nella Terra del Sorriso.",
                "thumbnail" => "https://www.thaispice.it/wp-content/uploads/2023/05/Thai-Spice-Logo.png",
                "typologies_ids" => [4, 34],
                "user_id" => 26,
            ],
            [
                "restaurant_name" => "La Terrazza",
                "address" => "Via Panoramica 20, 20100 Milano (MI)",
                "description" => "La Terrazza è un ristorante con una vista mozzafiato sulla città. Goditi la nostra cucina raffinata e innovativa, mentre ammiri il panorama suggestivo di Milano. Sperimenta i sapori unici dei nostri piatti creativi, preparati con ingredienti di alta qualità e presentati con eleganza. Rilassati e lasciati coccolare dalla combinazione di buon cibo e vista panoramica indimenticabile.",
                "thumbnail" => "https://www.laterrazza.it/wp-content/uploads/2023/05/La-Terrazza-Logo.png",
                "typologies_ids" => [7, 35],
                "user_id" => 27,
            ],
            [
                "restaurant_name" => "Gusto Italiano",
                "address" => "Via Vesuvio 15, 20100 Milano (MI)",
                "description" => "Gusto Italiano è un ristorante che celebra l'autentica cucina italiana. Da noi troverai i piatti tradizionali italiani preparati con passione e amore per il cibo. Dai primi piatti di pasta fatta in casa alle prelibatezze a base di carne e pesce, ogni boccone ti farà sentire come se fossi nel cuore dell'Italia. Vieni a scoprire i sapori e i profumi della nostra amata patria.",
                "thumbnail" => "https://www.gustoitaliano.it/wp-content/uploads/2023/05/Gusto-Italiano-Logo.png",
                "typologies_ids" => [6, 21],
                "user_id" => 28,
            ],
            [
                "restaurant_name" => "Zen Garden",
                "address" => "Via Zen 8, 20100 Milano (MI)",
                "description" => "Zen Garden è un ristorante che ti offre un'oasi di tranquillità e raffinatezza. La nostra cucina fusion ti stupirà con una combinazione di sapori orientali e occidentali, creando piatti unici ed equilibrati. Dai sushi agli involtini primavera, dai noodles alle insalate esotiche, ogni piatto è preparato con cura e presentato con eleganza. Vieni a gustare un'esperienza culinaria che unisce gusto e armonia.",
                "thumbnail" => "https://www.zengarden.it/wp-content/uploads/2023/05/Zen-Garden-Logo.png",
                "typologies_ids" => [2, 12, 31],
                "user_id" => 29,
            ],
            [
                "restaurant_name" => "Mamma Rosa",
                "address" => "Via Toscana 12, 20100 Milano (MI)",
                "description" => "Mamma Rosa è un ristorante che ti avvolgerà con il calore e i sapori della cucina casalinga italiana. I nostri piatti tradizionali sono preparati con amore, seguendo le ricette tramandate di generazione in generazione. Vieni a gustare le nostre lasagne, gli arrosti e i dolci fatti in casa, tutto accompagnato dall'atmosfera accogliente e familiare che solo Mamma Rosa può offrire.",
                "thumbnail" => "https://www.mammarosa.it/wp-content/uploads/2023/05/Mamma-Rosa-Logo.png",
                "typologies_ids" => [6, 22, 30],
                "user_id" => 30,
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $newrestaurant = new Restaurant();

            $newrestaurant->restaurant_name = $restaurant['restaurant_name'];
            $newrestaurant->address = $restaurant['address'];
            $newrestaurant->description = $restaurant['description'];
            $newrestaurant->thumbnail = $restaurant['thumbnail'];

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
