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
                "price" => 10.99,
                "thumbnail" => "https://www.example.com/images/enchiladas-verdes.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Tacos al Pastor",
                "description" => "Tacos gustosi preparati con carne di maiale marinata, cipolle, coriandolo e salsa al lime. Un classico della cucina messicana che ti farà innamorare!",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 9.99,
                "thumbnail" => "https://www.example.com/images/tacos-al-pastor.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Tres Leches Cake",
                "description" => "Un dolce tradizionale messicano composto da un soffice pan di spagna imbevuto in una miscela di tre tipi di latte: latte condensato, latte evaporato e panna. Decorato con panna montata e frutta fresca, è una delizia che scioglierà il tuo palato.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/tres-leches-cake.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Fajitas di Manzo",
                "description" => "Strisce di tenera carne di manzo marinata e grigliata, servite con peperoni, cipolle e tortillas calde. Accompagnate da guacamole, panna acida e salsa piccante, le fajitas di manzo sono un'esplosione di sapori messicani.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/fajitas-di-manzo.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Churros con Cioccolato",
                "description" => "Deliziosi bastoncini di pasta dolce fritti, serviti con una cremosa salsa al cioccolato calda. Croccanti all'esterno e morbidi all'interno, i churros sono il dessert perfetto per concludere il tuo pasto messicano.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 4.99,
                "thumbnail" => "https://www.example.com/images/churros-con-cioccolato.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Tacos di Pesce",
                "description" => "Tortillas di mais ripiene di pesce fresco marinato, guarnite con salsa allo yogurt, cavolo croccante e lime. I tacos di pesce sono un'esplosione di sapori marini con un tocco messicano.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 11.99,
                "thumbnail" => "https://www.example.com/images/tacos-di-pesce.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Margarita",
                "description" => "Un cocktail classico a base di tequila, succo di lime e triple sec, servito con ghiaccio e decorato con una fetta di lime. Il Margarita è una bevanda rinfrescante e dal sapore leggermente acidulo, perfetta per accompagnare i piatti messicani.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 7.99,
                "thumbnail" => "https://www.example.com/images/margarita.jpg",
                "restaurant_id" => 1,
            ],
            [
                "name" => "Coca Cola",
                "description" => "La bevanda gassata più famosa al mondo, la Coca Cola è una scelta classica per dissetarsi. Dal sapore unico e rinfrescante, la Coca Cola è perfetta per accompagnare qualsiasi tipo di piatto.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 2.99,
                "thumbnail" => "https://www.example.com/images/coca-cola.jpg",
                "restaurant_id" => 1,
            ],



            [
                "name" => "Lasagne al Forno",
                "description" => "Un classico della cucina italiana, le lasagne al forno sono uno strato di pasta fresca intercalata con ragù di carne, besciamella e formaggio. Preparato con amore e cotto lentamente, questo piatto ti farà sentire a casa.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/lasagne-al-forno.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Tagliata di Manzo con Rucola",
                "description" => "Una succulenta tagliata di manzo grigliata al punto giusto, servita su un letto di rucola fresca e scaglie di parmigiano. Condita con olio extravergine d'oliva e aceto balsamico, questa specialità italiana conquisterà i tuoi sensi.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 18.99,
                "thumbnail" => "https://www.example.com/images/tagliata-di-manzo.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Risotto ai Funghi Porcini",
                "description" => "Un delizioso risotto cremoso preparato con funghi porcini freschi e riso Carnaroli. Il sapore terroso dei funghi si fonde con la cremosità del risotto, creando un piatto avvolgente e ricco di sapori autentici.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 14.99,
                "thumbnail" => "https://www.example.com/images/risotto-ai-funghi-porcini.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Tiramisù",
                "description" => "Il dolce italiano per eccellenza, il Tiramisù è composto da strati di biscotti savoiardi inzuppati nel caffè, alternati con una crema al mascarpone e cacao in polvere. Un dessert irresistibile che conquisterà il tuo palato.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 7.99,
                "thumbnail" => "https://www.example.com/images/tiramisu.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Gnocchi al Pesto",
                "description" => "Gnocchi di patate freschi e soffici conditi con una salsa al basilico, pinoli, aglio, olio extravergine d'oliva e formaggio grattugiato. Il pesto conferisce ai gnocchi un sapore fresco e aromatico, creando un piatto semplice ma irresistibile.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 10.99,
                "thumbnail" => "https://www.example.com/images/gnocchi-al-pesto.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Saltimbocca alla Romana",
                "description" => "Fettine di vitello avvolte in prosciutto crudo e salvia, saltate in padella con burro e vino bianco. Questa specialità romana è un connubio di sapori delicati e armoniosi, che si fondono per creare un secondo piatto gustoso e raffinato.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 16.99,
                "thumbnail" => "https://www.example.com/images/saltimbocca-alla-romana.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Limonata",
                "description" => "Una bevanda rinfrescante preparata con succo di limone fresco, acqua, zucchero e ghiaccio. La limonata è una scelta ideale per dissetarsi durante i pasti, grazie al suo sapore vivace e dissetante.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 3.99,
                "thumbnail" => "https://www.example.com/images/limonata.jpg",
                "restaurant_id" => 2,
            ],
            [
                "name" => "Aperol Spritz",
                "description" => "Un cocktail aperitivo molto popolare, preparato con Aperol, prosecco e una spruzzata di soda. L'Aperol Spritz è caratterizzato dal suo colore arancione brillante e dal sapore leggermente amaro e frizzante. Perfetto per iniziare una cena in stile italiano.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 8.99,
                "thumbnail" => "https://www.example.com/images/aperol-spritz.jpg",
                "restaurant_id" => 2,
            ],



            [
                "name" => "Sashimi Misto",
                "description" => "Una selezione fresca e variegata di sashimi, includendo salmone, tonno e pesce bianco. I pesci sono tagliati a fette sottili e serviti crudi, permettendo di gustare appieno la freschezza e la delicatezza dei sapori marini.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 16.99,
                "thumbnail" => "https://www.example.com/images/sashimi-misto.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Ramen di Tonkotsu",
                "description" => "Un'esplosione di sapori nel classico piatto giapponese. Il ramen di tonkotsu presenta una zuppa di maiale ricca e cremosa, accompagnata da noodle fatti in casa, fettine di maiale, uova sode, alga nori e cipollotto. Un'esperienza autentica e appagante.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/ramen-di-tonkotsu.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Tempura Misto",
                "description" => "Una deliziosa combinazione di tempura mista, includendo gamberi, verdure e pesce. Gli ingredienti vengono immersi in una leggera pastella e fritti fino a ottenere una croccantezza dorata. Un piatto croccante e gustoso, perfetto come antipasto o accompagnamento.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 10.99,
                "thumbnail" => "https://www.example.com/images/tempura-misto.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Dragon Roll",
                "description" => "Un roll di sushi unico e creativo, composto da gamberi tempura, avocado e tonno. Il tutto è avvolto da un foglio di alga nori e riso, e decorato con una salsa speciale. Un piatto che unisce sapori contrastanti e offre una presentazione accattivante.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 14.99,
                "thumbnail" => "https://www.example.com/images/dragon-roll.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Gyoza di Verdure",
                "description" => "Deliziosi ravioli giapponesi ripieni di verdure fresche, come cavolo cinese, carota e funghi. Sono cotti al vapore e successivamente saltati in padella per ottenere una consistenza croccante. Serviti con una salsa di soia speciale per una combinazione di sapori irresistibile.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/gyoza-di-verdure.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Tiramisù al Matcha",
                "description" => "Una deliziosa variante giapponese del classico tiramisù italiano. Preparato con biscotti savoiardi imbevuti nel tè matcha, crema al mascarpone e una spolverata di polvere di matcha. Un dolce indulgente e aromatico che combina le tradizioni italiane e giapponesi.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 7.99,
                "thumbnail" => "https://www.example.com/images/tiramisu-al-matcha.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Sakè Giapponese",
                "description" => "Il sakè giapponese è una bevanda tradizionale a base di riso fermentato. Offriamo una selezione di sakè di alta qualità, che variano in termini di gusto e aroma. Perfetto da gustare come accompagnamento ai piatti giapponesi per arricchire l'esperienza culinaria.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 9.99,
                "thumbnail" => "https://www.example.com/images/sake-giapponese.jpg",
                "restaurant_id" => 3,
            ],
            [
                "name" => "Tè Verde Freddo",
                "description" => "Una rinfrescante bevanda a base di tè verde giapponese, servito freddo con ghiaccio. Il tè verde è noto per le sue proprietà benefiche per la salute e il suo sapore leggermente erbaceo. Ideale per dissetarsi durante una visita al nostro ristorante.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 3.99,
                "thumbnail" => "https://www.example.com/images/te-verde-freddo.jpg",
                "restaurant_id" => 3,
            ],



            [
                "name" => "Croissant al Cioccolato",
                "description" => "Un croissant appena sfornato, leggero e fragrante, farcito con una generosa quantità di cioccolato fondente. Perfetto da gustare al mattino o durante una pausa dolce. Accompagna il tuo caffè con questa prelibatezza per un vero piacere goloso.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 2.99,
                "thumbnail" => "https://www.example.com/images/croissant-al-cioccolato.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Tiramisù Tradizionale",
                "description" => "Il classico tiramisù italiano preparato con amore e ingredienti di alta qualità. Uno strato di savoiardi inzuppati nel caffè, alternati a una crema al mascarpone leggera e cacao in polvere. Un dolce iconico che incanta i palati di tutti gli amanti del caffè e del dolce.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 4.99,
                "thumbnail" => "https://www.example.com/images/tiramisu-tradizionale.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Torta alla Frutta",
                "description" => "Una torta leggera e soffice, arricchita con una varietà di frutta fresca di stagione. La base morbida si sposa armoniosamente con la dolcezza e la freschezza della frutta, creando una combinazione di sapori deliziosa. Perfetta per una pausa dolce o per celebrare un'occasione speciale.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 5.99,
                "thumbnail" => "https://www.example.com/images/torta-alla-frutta.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Biscotti alla Nocciola",
                "description" => "Deliziosi biscotti fragranti e croccanti, preparati con una generosa quantità di nocciole tostate. Ogni morso offre un'esplosione di sapore e una consistenza irresistibile. Accompagna il tuo caffè con questi biscotti per un'esperienza di puro piacere.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 3.99,
                "thumbnail" => "https://www.example.com/images/biscotti-alla-nocciola.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Pancakes con Sciroppo d'Acero",
                "description" => "Un classico americano reinterpretato con dolcezza. Pancakes soffici e leggeri, serviti con una generosa dose di sciroppo d'acero che si fonde dolcemente sui pancake caldi. Un piatto perfetto per una colazione indulgente o un brunch rilassante.",
                "typology" => "Colazione",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/pancakes-sciroppo-acero.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Crostata alle Mele",
                "description" => "Una crostata rustica e profumata, con un ripieno di mele fresche e una golosa copertura croccante. Il contrasto tra la dolcezza delle mele e la friabilità della pasta rende questa crostata una delizia da gustare in ogni stagione. Accompagnala con un caffè per un momento di piacere autentico.",
                "typology" => "Dolce",
                "visible" => true,
                "price" => 4.99,
                "thumbnail" => "https://www.example.com/images/crostata-alle-mele.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Caffè Freddo",
                "description" => "Una bevanda rinfrescante e stimolante che unisce la bontà del caffè all'effetto rinfrescante del ghiaccio. Preparato con cura utilizzando chicchi di caffè di alta qualità e servito con ghiaccio per una piacevole freschezza. Ideale per affrontare le giornate calde o come alternativa al caffè caldo.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 3.49,
                "thumbnail" => "https://www.example.com/images/caffe-freddo.jpg",
                "restaurant_id" => 4,
            ],
            [
                "name" => "Frullato alla Fragola",
                "description" => "Un frullato cremoso e deliziosamente fresco, preparato con fragole mature e latte. La dolcezza naturale delle fragole si fonde con la cremosità del latte per creare una bevanda irresistibile. Perfetto per rinfrescarsi durante le giornate estive o come goloso spuntino.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 4.99,
                "thumbnail" => "https://www.example.com/images/frullato-fragola.jpg",
                "restaurant_id" => 4,
            ],



            [
                "name" => "Pizza Margherita",
                "description" => "La classica pizza napoletana che conquista tutti i palati. Preparata con mozzarella di bufala DOP, pomodoro San Marzano, basilico fresco e olio extravergine di oliva. L'impasto soffice e saporito combinato con gli ingredienti di alta qualità rende questa pizza un'autentica delizia.",
                "typology" => "Pizza",
                "visible" => true,
                "price" => 9.99,
                "thumbnail" => "https://www.example.com/images/pizza-margherita.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Pizza Capricciosa",
                "description" => "Una pizza ricca di sapori e ingredienti gustosi. Preparata con mozzarella, prosciutto cotto, funghi, carciofi, olive e pomodoro. La combinazione di questi ingredienti crea un mix equilibrato di sapore e consistenze, rendendo questa pizza un'autentica delizia per il palato.",
                "typology" => "Pizza",
                "visible" => true,
                "price" => 11.99,
                "thumbnail" => "https://www.example.com/images/pizza-capricciosa.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Bruschetta al Pomodoro",
                "description" => "Una deliziosa bruschetta con pane croccante, pomodori freschi, aglio, basilico e olio extravergine di oliva. Un antipasto leggero e gustoso che ti farà iniziare il pasto con il sapore della tradizione italiana.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/bruschetta-pomodoro.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Lasagna alla Bolognese",
                "description" => "Un primo piatto ricco e saporito preparato con strati di pasta fresca, ragù di carne alla Bolognese, besciamella e formaggio. Un classico della cucina italiana che ti delizierà con la sua combinazione di sapori e consistenze.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/lasagna-bolognese.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Tiramisù",
                "description" => "Un dolce tradizionale italiano amato in tutto il mondo. Preparato con biscotti Savoiardi inzuppati nel caffè, crema al mascarpone e una spolverata di cacao in polvere. Ogni strato di questo dolce è una combinazione perfetta di morbidezza e sapore, che ti farà venire l'acquolina in bocca.",
                "typology" => "Dessert",
                "visible" => true,
                "price" => 7.99,
                "thumbnail" => "https://www.example.com/images/tiramisu.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Limonata al Basilico",
                "description" => "Una bibita rinfrescante e aromaticamente deliziosa. La limonata al basilico è preparata con succo di limone fresco, zucchero, acqua frizzante e foglie di basilico. Una combinazione unica di dolcezza, acidità e aromi erbacei che si fondono perfettamente.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 3.99,
                "thumbnail" => "https://www.example.com/images/limonata-basilico.jpg",
                "restaurant_id" => 5,
            ],
            [
                "name" => "Spritz Veneziano",
                "description" => "Un cocktail classico originario di Venezia. Lo Spritz Veneziano è preparato con prosecco, Aperol, una spruzzata di soda e una fetta d'arancia come guarnizione. Una bevanda frizzante e leggermente amara, perfetta per aperitivi e momenti di convivialità.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/spritz-veneziano.jpg",
                "restaurant_id" => 5,
            ],



            [
                "name" => "Caprese",
                "description" => "Un classico antipasto italiano che celebra i sapori mediterranei. La Caprese è preparata con fette di mozzarella di bufala, pomodori freschi, foglie di basilico e condita con olio extravergine di oliva. Un'esplosione di freschezza e gusto che delizia il palato.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 7.99,
                "thumbnail" => "https://www.example.com/images/caprese.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Ravioli di Zucca al Burro e Salvia",
                "description" => "Un piatto di pasta fresca ripiena di zucca delicatamente cotta, servita con una deliziosa salsa al burro e salvia. I ravioli sono fatti in casa e ogni boccone racchiude il perfetto equilibrio di dolcezza e sapori autunnali. Un'esplosione di comfort food per il palato.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/ravioli-zucca.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Filetto di Manzo alla Griglia",
                "description" => "Un succulento filetto di manzo alla griglia servito con contorno di patate arrosto e verdure di stagione. La carne è selezionata con cura e preparata alla perfezione per offrire un piatto saporito e succoso. Un'esplosione di gusto per gli amanti della carne.",
                "typology" => "Secondo",
                "visible" => true,
                "price" => 24.99,
                "thumbnail" => "https://www.example.com/images/filetto-di-manzo.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Tiramisù Tradizionale",
                "description" => "Il classico dolce italiano che conquista tutti i palati. Il tiramisù è preparato con savoiardi inzuppati nel caffè, crema al mascarpone e cacao in polvere. Ogni strato di questo dessert è un'armonia di sapori e consistenze che si fondono in un capolavoro di dolcezza.",
                "typology" => "Dessert",
                "visible" => true,
                "price" => 8.99,
                "thumbnail" => "https://www.example.com/images/tiramisu.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Gnocchi al Gorgonzola e Noci",
                "description" => "Gnocchi di patate fatti in casa serviti con una deliziosa salsa al gorgonzola e noci croccanti. I gnocchi sono morbidi e leggeri, e si fondono perfettamente con la cremosità del formaggio e il croccante delle noci. Un piatto ricco di sapore e comfort.",
                "typology" => "Primo",
                "visible" => true,
                "price" => 12.99,
                "thumbnail" => "https://www.example.com/images/gnocchi-al-gorgonzola.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Bruschetta Miste",
                "description" => "Una selezione di bruschette miste con vari condimenti. Gusta la tradizionale bruschetta al pomodoro, la bruschetta con crema di funghi e tartufo, e la bruschetta con prosciutto crudo e formaggio. Un antipasto sfizioso e gustoso che offre una varietà di sapori.",
                "typology" => "Antipasto",
                "visible" => true,
                "price" => 9.99,
                "thumbnail" => "https://www.example.com/images/bruschetta-miste.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Spritz",
                "description" => "Un classico cocktail italiano composto da prosecco, Aperol e una spruzzata di soda. L'aperitivo perfetto per iniziare il pasto con una nota frizzante e rinfrescante. Ideale per accompagnare i piatti della Trattoria del Borgo.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 6.99,
                "thumbnail" => "https://www.example.com/images/spritz.jpg",
                "restaurant_id" => 6,
            ],
            [
                "name" => "Limonata Fresca",
                "description" => "Una deliziosa limonata fatta in casa con succo di limone fresco, acqua frizzante e un tocco di dolcezza. Una bibita dissetante e rinfrescante, perfetta per contrastare il caldo estivo e accompagnare i piatti della Trattoria del Borgo.",
                "typology" => "Bibita",
                "visible" => true,
                "price" => 3.99,
                "thumbnail" => "https://www.example.com/images/limonata-fresca.jpg",
                "restaurant_id" => 6,
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

            $newdish->save();
        }
    }
}
